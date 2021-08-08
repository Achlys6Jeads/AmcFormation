<?php

namespace App\Http\Livewire;
use Livewire\Component;
use App\Models\UneFormation;

class Sommaire extends Component
{
    public function Sommaire(){

    
        return UneFormation::find(1)->get();
        
    }
    public function render()
    {
        return view('livewire.sommaire');
    }
}
