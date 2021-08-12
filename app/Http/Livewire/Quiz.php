<?php

namespace App\Http\Livewire;


use App\Models\UnQuiz;
use Livewire\Component;
use App\Models\CompteUtilisateur;
use Illuminate\Support\Facades\Session;

class Quiz extends Component
{
    public $quiz;
    public $data;
    public $reponse = 1;
    public $etapeCurrent = 1;
    public $userReponse = null;
    public $etapeEnd = null;
    public $Rep;
    public $score =0;
    public $end = false;

    public function Load($c){
        if($c == 0){
            $this->load($this->etapeCurrent);
        } else {
            $q = UnQuiz::Select('*')->Where('id','=',$c)->first();
            $this->quiz['Question1'] = $q->Question1;
            $this->quiz['Question2'] = $q->Question2;
            $this->quiz['Question3'] = $q->Question3;
            $this->quiz['Question4'] = $q->Question4;
            $this->quiz['ennonce'] = $q->ennonce;
            $this->reponse = $q->Reponse;
            $this->quiz['image'] = $q->image;
        }
    }
    public function Valider(){
        if(!$this->end){
        if($this->etapeCurrent >= $this->etapeEnd){
            $myId = session::get('login');
            if($this->score >= $this->etapeEnd-2){
               
    
                $me = CompteUtilisateur::Select()->where('id','=',$myId)->increment('FormationEtape');
         
                return redirect('');
            } else {
                $this->end = true;
                $me = CompteUtilisateur::Select()->where('id','=',$myId)->decrement('FormationEtape');

                return redirect('');
            }
        } else {
            $this->etapeCurrent++;
            $this->Load($this->etapeCurrent);
    
        }
        
        if($this->userReponse == $this->reponse){
            $this->score++;
            $this->Rep = "Bonne reponse";
        } else {
            if($this->userReponse == 4){
               
                $this->Rep = "Pas de malus";
            } else {
                $this->score = $this->score-1;
                $this->Rep = "Mauvaise reponse";
            }
            
            
        }
    }
    }
    public function Choix($num){
        $this->userReponse = $num;
    }
    public function render()
    {

        if($this->etapeEnd == null){
            $this->etapeEnd = $this->data->endAtId;
            $this->etapeCurrent = $this->data->startAtId;
            $this->score = $this->data->startAtId;
        }
        $this->Load($this->etapeCurrent);
        return view('livewire.quiz');
    }
}
