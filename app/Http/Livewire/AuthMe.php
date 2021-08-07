<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\CompteUtilisateur;
use Illuminate\Support\Facades\Session;



class AuthMe extends Component
{
    public $Inscription = "display: none";
    public $code;

    public $form;



    public function Next(){
        $c = CompteUtilisateur::where('Password', '=', $this->code)->first();
        if( $c !== null ){
            if(!empty($c->Nom)){
                     session(['login' => $c->id]);
                     

                return redirect('/');
            } else {
                $this->Inscription = "display: flex";
            }
            
        } else {
            $this->Inscription = "display: none";
        }
        
    }

    public function saveContact(){
        $flight = CompteUtilisateur::where('Password', $this->code)
        ->update(
            ['nom' => $this->form['nom'],
            'prenom' => $this->form['prenom'],
            'email' => $this->form['email'],
            'agence' => $this->form['agence'],
            'societe' => $this->form['society'],
            
            ]
        );
     
        return redirect('/formation');
    }
 
    public function render()
    {
        return view('livewire.auth-me');
    }
}
