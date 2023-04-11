<?php

namespace App\Http\Controllers;

use App\Models\Aluger;
use App\Models\Aparelho;
use App\Models\EstadoDeAluger;
use App\Models\Evento;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        $user = auth()->user();

        if (\Gate::allows('admin')) {
            $eventos = Evento::all();
            return response(view('livewire.admin.admin-show-eventos', [
                'eventos' => $eventos,
            ]));
        } else {
            $eventos = Evento::where('user_id', $user->id)->get();
            return response(view('livewire.show-eventos', [
                'eventos' => $eventos,
            ]));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        $pacotes = Aparelho::all();
        return response(view('livewire.create-evento', [
            'pacotes' => $pacotes,
        ]));

    }

    public function get_evento_with_maior_data_evento_e_maior_data_termino()
    {
        $evento = Evento::orderBy('data_evento', 'desc')->orderBy('data_termino', 'desc')->first();
        return $evento;
    }

    public function somar_mais_um_dia_na_data($date)
    {
        $data = Carbon::parse($date);
        $data->addDays(1);
        return $data->format('Y-m-d');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'data_evento' => ['date', 'required'],
            'data_termino' => ['date', 'required'],
            'descricao' => ['string'],
            'localizacao' => ['string', 'required'],
            'pacote_id' => ['integer', 'required'],
        ]);

        // validar os campos de data
        if ($request->data_evento < now()->format('Y-m-d')) {
            return redirect()->back()->withErrors(['data_evento' => 'A data de início deve ser maior ou igual que a data atual']);
        }

        if ($request->data_termino < now()->format('Y-m-d')) {
            return redirect()->back()->withErrors(['data_termino' => 'A data de término deve ser maior que a data atual']);
        }

        if ($request->data_evento > $request->data_termino) {
            return redirect()->back()->withErrors(['data_termino' => 'A data de término deve ser maior que a data de início']);
        }


        // verificar se existe um evento com a mesma data de inicio e fim
        // se existir, retorne uma mensagem de erro e redireccione para a pagina de criar evento
        // sugerindo a data vinda de get_evento_with_maior_data_evento_e_maior_data_termino()
        // somando mais 1 dia com somar_mais_um_dia_na_datasomar_mais_um_dia_na_data

        $evento = $this->get_evento_with_maior_data_evento_e_maior_data_termino();
        if ($evento != null) {
            $data_evento = $this->somar_mais_um_dia_na_data($evento->data_evento);
            $data_termino = $this->somar_mais_um_dia_na_data($evento->data_termino);
            if ($request->data_evento < $evento->data_evento) {
                return redirect()->back()->withErrors(['data_evento' => 'Já existe um evento com a mesma data de inicio e fim. Sugerimos a data de inicio: ' . $data_evento . ' e a data de fim: ' . $data_termino]);
            }

            if ($request->data_termino < $evento->data_termino) {
                return redirect()->back()->withErrors(['data_evento' => 'Já existe um evento com a mesma data de inicio e fim. Sugerimos a data de inicio: ' . $data_evento . ' e a data de fim: ' . $data_termino]);
            }
        }

        // verifica se a request nao tem erro algums

        Evento::create([
            'data_evento' => $request->data_evento,
            'data_termino' => $request->data_termino,
            'descricao' => $request->descricao,
            'localizacao' => $request->localizacao,
            'pacote_id' => $request->pacote_id,
            'estado_evento_id' => EstadoDeAluger::AGUARDANDO,
            'user_id' => auth()->user()->id,
        ]);

        return redirect()->route('evento.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Evento $evento): Response
    {
        $pacotes = Aparelho::all();
        $estados = EstadoDeAluger::all();

        if (\Gate::allows('admin')) {
            return response(view('livewire.admin.admin-show-evento', [
                'evento' => $evento,
                'pacotes' => $pacotes,
                'estados' => $estados,
            ]));
        } else {
            return response(view('livewire.show-evento', [
                'evento' => $evento,
                'pacotes' => $pacotes,
                'estados' => $estados,
            ]));
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Evento $evento): Response
    {
        $pacotes = Aparelho::all();
        $estados = EstadoDeAluger::all();
        if (\Gate::allows('admin')) {
            return response(view('livewire.admin.admin-edit-evento', [
                'evento' => $evento,
                'pacotes' => $pacotes,
                'estados' => $estados,
            ]));
        } else {
            return response(view('livewire.edit-evento', [
                'evento' => $evento,
                'pacotes' => $pacotes,
                'estados' => $estados,

            ]));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Evento $evento)
    {
        if (\Gate::allows('admin')) {
            $this->admin_update_info($request, $evento);
            return redirect()->route('eventos.show', [$evento->id])->with('success', 'Estado do evento atualizado com sucesso');
        } else {
            $this->user_update_info($request, $evento);
            return redirect()->route('eventos.show', [$evento->id])->with('success', 'O estado do evento é o mesmo');
        }
    }

    function admin_update_info($request, $evento)
    {
        // validar os campos e retornar erros
        $request->validate([
            'estado_evento_id' => ['integer', 'required'],
        ]);

        // verificar se o estado_evento_id existe
        if (!EstadoDeAluger::find($request->estado_evento_id)) {
            return redirect()->back()->withErrors(['estado_evento_id' => 'O estado indicado não existe']);
        }

        // gravar somente o estado do evento caso o mesmo for diferente do estado actual e retornar a pagina de mostrar evento
        if ($evento->estado_evento_id != $request->estado_evento_id) {
            $evento->update([
                'estado_evento_id' => $request->estado_evento_id,
            ]);
        }
    }


    function user_update_info($request, $evento)
    {
        // verificar se o estado do evento é diferente de aguardando e retornar erro
        if ($evento->estado_evento_id != EstadoDeAluger::AGUARDANDO) {
            return redirect()->back()->withErrors(['evento' => 'Não é possível editar um evento que não está aguardando']);
        }

        // validar os campos e retornar erros
        $request->validate([
            'data_evento' => ['date', 'required'],
            'data_termino' => ['date', 'required'],
            'descricao' => ['string'],
            'localizacao' => ['string', 'required'],
            'pacote_id' => ['integer', 'required'],
        ]);

        // validar os campos de data
        if ($request->data_evento < now()->format('Y-m-d')) {
            return redirect()->back()->withErrors(['data_evento' => 'A data de início deve ser maior ou igual que a data atual']);
        }

        if ($request->data_termino < now()->format('Y-m-d')) {
            return redirect()->back()->withErrors(['data_termino' => 'A data de término deve ser maior que a data atual']);
        }

        if ($request->data_evento > $request->data_termino) {
            return redirect()->back()->withErrors(['data_termino' => 'A data de término deve ser maior que a data de início']);
        }

        $evento->update($request->all());

        return redirect()->route('evento.index')->with('success', 'Evento atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Evento $evento): RedirectResponse
    {
        $evento->delete();

        return redirect()->route('evento.index')->with('success', 'Evento eliminado com sucesso');
    }
}
