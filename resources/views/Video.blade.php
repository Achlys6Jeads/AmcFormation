@extends('welcome')
@section('content')
<div class="formations" >
    <div class="container">
        <div class="formation">
            <img src="{{url('')}}/{{ $formation->image }}" alt="" class="illustration">
            <div class="informations">
                <p class="formation-name">{{ $formation->Titre }}</p>
                <p class="formation-description">{{ $formation->Description }} </p>
            </div>

        </div>
    </div>
</div>
<div class="formation-part">
    <div class="container">
        <div class="formation-video">
            <iframe class="video" width="560" height="315" src="{{ $data->videoUrl }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
        </div>
        <div class="line">
            <a href="{{ url('')}}" class="next-btn">Retour</a>
        </div>
    </div>
</div>
@stop