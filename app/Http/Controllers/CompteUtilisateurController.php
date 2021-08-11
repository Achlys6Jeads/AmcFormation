<?php

namespace App\Http\Controllers;

use App\Models\CompteUtilisateur;
use App\Models\UneFormation;
use App\Models\UneVideo;
use App\Models\UnQuiz;
use App\Models\UnQuizGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CompteUtilisateurController extends Controller
{
    //
    public function Home(){

        if(!session::has('login')){
            return view('Authentification');
        } else {
            return view('Sommaire');
        }
    }

    public function getInfo(){
        if(session::has('login')){
            $myId = session::get('login');
            $me = CompteUtilisateur::Select()->where('id','=',$myId)->first();
            return $me;
        } else {
            return view('Authentification');
        }

    }

    public function ShowVideo($c){
        if($this->getInfo()){
        $formation = UneFormation::Select('*')->where('showType','=','1')->where('showId','=',$c)->first();
        if($this->getInfo()->FormationEtape == $formation->id-1){
            $data = UneVideo::find($c);
           
            $myId = session::get('login');
            session(['IdFormation' => $formation->id]);
            $me = CompteUtilisateur::Select()->where('id','=',$myId)->update(array('FormationEtape' =>  $formation->id));
            return view('Video', ['data' => $data,'formation'=>$formation]);
        } else {
            return view('Sommaire');
        }
    } else {
        dd('Hs');
    }
        
    }

    public function ShowQuiz($c){
        if($this->getInfo()){
        $formation = UneFormation::Select('*')->where('showType','=','2')->where('showId','=',$c)->first();
        if($this->getInfo()->FormationEtape == $formation->id-1){
            $data = UnQuizGroup::find($c);
            session(['IdFormation' => $formation->id]);
            return view('UnQuiz', ['quizg' => $data,'formation'=>$formation]);
        } else {
            return view('Sommaire');
        }
    } else {
        dd('Hs');
    }
        
    }
    

}
