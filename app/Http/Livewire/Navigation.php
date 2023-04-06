<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Navigation extends Component
{
    public function render()
    {
        $user = auth()->user();
        return view('livewire.navigation', [
            'usuario' => $user,
        ]
    );
    }
}
