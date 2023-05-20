<?php

namespace App\Http\Controllers;

use App\Models\EstadoDeAluger;
use App\Models\Evento;
use App\Models\User;
use App\Models\Usertype;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index()
    {
        $eventosAguardandoNoAno = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
        $eventosConfirmadosNoAno = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
        $eventosFinalizadosNoAno = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];

        // transforme a eventosAguardandoNoAno em um array contendo apenas numeros
        $eventosPorMes = $this->getEventosPorMes();
        foreach ($eventosPorMes as $evento) {
            $eventosAguardandoNoAno[$evento->mes - 1] = $evento->total;
        }

        $eventosConfirmados = $this->getEventosConfirmadosPorMes();
        foreach ($eventosConfirmados as $evento) {
            $eventosConfirmadosNoAno[$evento->mes - 1] = $evento->total;
        }

        $eventosFinalizados = $this->getEventosFinalizadosPorMes();
        foreach ($eventosFinalizados as $evento) {
            $eventosFinalizadosNoAno[$evento->mes - 1] = $evento->total;
        }

        // trasforma $eventosAguardandoNoAno em string sem []
        $eventosAguardandoNoAno = implode(',', $eventosAguardandoNoAno);
        $eventosConfirmadosNoAno = implode(',', $eventosConfirmadosNoAno);
        $eventosFinalizadosNoAno = implode(',', $eventosFinalizadosNoAno);


        return view('admin.dashboard', [
            'title' => 'Dashboard',
            'active' => 'dashboard',
            'eventos' => Evento::orderBy('data_evento', 'desc',)->where('estado_evento_id', EstadoDeAluger::AGUARDANDO)->paginate(5),
            'numeroDeEventosMarcadosParaHoje' => Evento::whereDate('data_evento', date('Y-m-d'))->count(),
            'totalDeEventos' => Evento::count(),

            'totalAgendados' => Evento::where('estado_evento_id', EstadoDeAluger::AGUARDANDO)->count(),
            'totalAceites' => Evento::where('estado_evento_id', EstadoDeAluger::ACEITE)->count(),
            'totalFinalizados' => Evento::where('estado_evento_id', EstadoDeAluger::FINALIZADO)->count(),

            'totalDeUsuarios' => User::where('type_id', '<>', Usertype::ADMIN)->count(),
            'eventosComEstadoAgendadoDoAno' => $eventosAguardandoNoAno,
            'eventosComEstadoAceitesDoAno' => $eventosConfirmadosNoAno,
            'eventosComEstadoFinalizadosDoAno' => $eventosFinalizadosNoAno,
        ]);
    }

    public function getEventosPorMes()
    {
        return Evento::selectRaw('MONTH(data_evento) as mes, COUNT(*) as total')
            ->whereYear('data_evento', date('Y'))
            ->where('estado_evento_id', EstadoDeAluger::AGUARDANDO)
            ->groupBy('mes')
            ->get();
    }

    public function getEventosConfirmadosPorMes()
    {
        return Evento::selectRaw('MONTH(data_evento) as mes, COUNT(*) as total')
            ->whereYear('data_evento', date('Y'))
            ->where('estado_evento_id', EstadoDeAluger::ACEITE)
            ->groupBy('mes')
            ->get();
    }

    public function getEventosFinalizadosPorMes()
    {
        return Evento::selectRaw('MONTH(data_evento) as mes, COUNT(*) as total')
            ->whereYear('data_evento', date('Y'))
            ->where('estado_evento_id', EstadoDeAluger::FINALIZADO)
            ->groupBy('mes')
            ->get();
    }

}
