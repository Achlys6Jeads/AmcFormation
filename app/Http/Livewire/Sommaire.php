<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Sommaire extends Component
{
    public function Sommaire(){
        $hope = UneFormation::find(1);
        return $hope;
    }
    public function render()
    {
        return view('livewire.sommaire');
    }
}
