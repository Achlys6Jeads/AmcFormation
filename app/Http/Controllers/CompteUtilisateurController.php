<?php

namespace App\Http\Controllers;

use App\Models\CompteUtilisateur;
use App\Models\UneVideo;
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
        $me = CompteUtilisateur::Select()->where('id','=','1')->first();
        return $me;
    }

    public function ShowVideo($c){
        if($this->getInfo()->FormationEtape >= $c){
            $data = UneVideo::find($c)->get();
            return view('ShowVideo', ['data' => $data]);
        } else {
            return view('Sommaire');
        }
        
    }
    

}
