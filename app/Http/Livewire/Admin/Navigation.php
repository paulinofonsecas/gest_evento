<?php

namespace App\Http\Livewire\Admin;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Navigation extends Component
{
    public function render()
    {
        $user = Auth::user();
        return view('livewire.admin.navigation', [
            'usuario' => $user,
        ]);
    }
}
