@extends('welcome')
@section('content')
<div class="results" style="margin:10rem 0">
    <div class="container">
        <div class="top">
            <p class="title">Résultats</p>

        </div>
        <div class="bottom">
            <div class="left">
                <p class="avis">Félicitation, {{ app('App\Http\Controllers\CompteUtilisateurController')->getInfo()->Prenom;  }}  {{ app('App\Http\Controllers\CompteUtilisateurController')->getInfo()->Nom;  }}. <br> Vous êtes prêt pour passer votre test.</p>
            </div>
            <div class="right">
                <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.stokestiles.co.uk%2Fimages%2Fww%2Fmerlin%2F150x150_Plain_Grey_SWT6.jpg&amp;f=1&amp;nofb=1" alt="" class="illustration">
            </div>

        </div>
        <div class="line">
            <a href="{{ url('logout') }}" class="btn">Fermer</a>
        </div>

    </div>
</div>
@stop