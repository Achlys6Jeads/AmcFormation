@extends('welcome')
@section('content')
<div class="formation-part">
    <div class="container">
       @livewire('quiz', ['data' => $quizg])

        <div class="line">
            <a href="{{ url('')}}" class="next-btn">Retour</a>
        </div>
    </div>
</div>


@stop