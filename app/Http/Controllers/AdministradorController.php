<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Usertype;

class AdministradorController extends Controller
{

    // listar os usuarios com type_id = 3
    public function index()
    {
        $admins = User::where('type_id', '<>', 2)->get();

        return view('livewire.show-administradores', [
            'admins' => $admins,
        ]);
    }

    public function adicionarAdmin()
    {
        $tipos = Usertype::all();

        return view('auth.register', [
            'is_admin' => 'true',
            'tipos' => $tipos,
        ]);
    }

    public function eliminarAdmin($id)
    {
        $admin = User::find($id);
        $admin->delete();

        return redirect()->route('administradores.index');
    }

    public function promover($id)
    {
    }

    public function despromover($id)
    {
    }

    public function pesquisarUsuariosAdmin($search)
    {
    }

}
