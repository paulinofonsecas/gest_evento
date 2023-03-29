<?php

namespace App\Http\Controllers;

use App\Models\Aparelho;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class AparelhoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aparelhos = Aparelho::all();
        return response(view('catalogo', [
            '$aparelhos' => $aparelhos,
        ]));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (!$this->authorize('admin')) {
            abort(403);
        }
        return response(view('admin.admin_create_aparelho'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (!$this->authorize('admin')) {
            abort(403);
        }
        $request->validate([
            'nome' => ['string', 'max:255', 'required'],
            'descricao' => ['string', 'max:500'],
            'precoAluger' => ['numeric', 'required'],
            'imageFiles' => ['file'],
        ]);

        $aparelho = Aparelho::create([
            'nome' => $request->nome,
            'descricao' => $request->descricao,
            'preco_de_aluguer' => $request->precoAluger,
            'disponibilidade_id' => 1,
        ]);

        if ($request->hasFile('imageFile')) {
            $file = $request->file('imageFile');
            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();

            $filenameToStore = $filename . '_' . time() . '.' . $extension;
            $file->storeAs('public/aparelhos', $filenameToStore);

            $aparelho->image_url = $filenameToStore;
        }
        $aparelho->save();

        return redirect()->route('admin_catalogo');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $aparelho = Aparelho::find($id);
        if (Gate::allows('admin')) {
            return response(
                view(
                    'livewire.admin.show-aparelho',
                    ['aparelho' => $aparelho]
                )
            );
        } else if (Gate::allows('normal')) {
            return response(
                view('livewire.client-show-aparelho', ['aparelho' => $aparelho])
            );
        } else {
            abort(403);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        if (!$this->authorize('admin')) {
            abort(403);
        }
        $aparelho = Aparelho::find($id);

        return view('livewire.admin.edit-aparelho-form', [
            'aparelho' => $aparelho,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $request->validate([
                'nome' => ['string', 'max:255', 'required'],
                'descricao' => ['string', 'max:500'],
                'preco_de_aluguer' => ['numeric', 'required'],
            ]);

            $aparelho = Aparelho::find($id);

            $aparelho->nome = $request->nome;
            $aparelho->descricao = $request->descricao;
            $aparelho->preco_de_aluguer = $request->preco_de_aluguer;
            $aparelho->disponibilidade_id = 1;

            if ($request->hasFile('imageFile')) {
                $file = $request->file('imageFiles');
                $filenameWithExt = $file->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $file->getClientOriginalExtension();

                $filenameToStore = $filename . '_' . time() . '.' . $extension;
                $file->storeAs('public/aparelhos', $filenameToStore);

                $aparelho->image_url = $filenameToStore;
            }

            $aparelho->update();
            return redirect()->route('admin_catalogo');
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Aparelho::destroy($id);

        return redirect()->route('admin_catalogo');
    }
}
