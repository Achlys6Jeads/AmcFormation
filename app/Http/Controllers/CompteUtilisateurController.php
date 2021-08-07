<?php

namespace App\Http\Controllers;

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
    

}
