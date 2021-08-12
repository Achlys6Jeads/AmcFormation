@component('mail::message')
#  {{$body['prenom']}} {{$body['nom']}} vient de finir la formation AIPR.

Formation réalisé le: {{ date("d/m/Y")  }}
# Code utilisé: {{ $body['code']  }}

Merci,<br>
{{ config('app.name') }}
@endcomponent
