<?php

namespace App\Http\Controllers;

use App\Models\EstadoDeAluger;
use App\Models\Evento;
use App\Models\Notification;
use App\Models\User;
use App\Models\Usertype;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index()
    {
        $this->buildUserDashboard();
    }

    public function buildUserDashboard()
    {
        $user = Auth()->user();
        if ($user->type_id == Usertype::ADMIN || $user->type_id == Usertype::GERENTE) {
            return redirect()->route('admin_dashboard');
        } else {
            $eventos = Evento::orderBy('data_evento', 'desc')->take(10)->get();
            $notificacoes = Notification::where('recipient_id', $user->id)->where('read', false)->orderBy('created_at', 'desc')->get();
            return view('livewire.my-dashboard', [
                'eventos' => $eventos,
                'notificacoes' => $notificacoes
            ]);
        }
    }

    public function buildAdminDashboard()
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

        $user = auth()->user();
        $notificacoes = Notification::where('recipient_id', $user->id)->where('read', false)->orderBy('created_at', 'desc')->get();
        $eventos = Evento::orderBy('data_evento', 'desc', )->where('estado_evento_id', EstadoDeAluger::AGUARDANDO)->paginate(5);

        return view('admin.dashboard', [
            'title' => 'Dashboard',
            'active' => 'dashboard',
            'eventos' => $eventos,
            'numeroDeEventosMarcadosParaHoje' => Evento::whereDate('data_evento', date('Y-m-d'))->count(),
            'totalDeEventos' => Evento::count(),

            'totalAgendados' => Evento::where('estado_evento_id', EstadoDeAluger::AGUARDANDO)->count(),
            'totalAceites' => Evento::where('estado_evento_id', EstadoDeAluger::ACEITE)->count(),
            'totalFinalizados' => Evento::where('estado_evento_id', EstadoDeAluger::FINALIZADO)->count(),

            'totalDeUsuarios' => User::where('type_id', '<>', Usertype::ADMIN)->count(),
            'eventosComEstadoAgendadoDoAno' => $eventosAguardandoNoAno,
            'eventosComEstadoAceitesDoAno' => $eventosConfirmadosNoAno,
            'eventosComEstadoFinalizadosDoAno' => $eventosFinalizadosNoAno,

            'notificacoes' => $notificacoes,
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
