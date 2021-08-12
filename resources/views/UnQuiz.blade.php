@extends('welcome')
@section('content')
<div class="formation-part" style="height:90vh;display:flex;align-items:center;justify-content:center">
    <div class="container">
       @livewire('quiz', ['data' => $quizg])

        <div class="line">
     
        </div>
    </div>
</div>


@stop