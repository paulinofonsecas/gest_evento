<?php

namespace App\Http\Livewire;

use App\Models\Aparelho;
use Livewire\Component;

class CatalogoAparelhos extends Component
{
    public function render()
    {
        $aparelhos = Aparelho::all();
        return view(
            'livewire.catalogo-aparelhos',
            [
                'aparelhos' => $aparelhos,
            ]
        );
    }
}
