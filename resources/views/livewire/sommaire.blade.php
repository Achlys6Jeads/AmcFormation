@inject('provider', 'App\Http\Controllers\CompteUtilisateurController')
<div>

        @foreach($this->Sommaire() as $key => $value)
 
        <div class="formation">
                <img src="{{ url('') }}/{{ $value->image }}" alt="" class="illustration">
                <div class="informations">
                    <p class="formation-name">{{ $value->Titre }}</p>
                    <p class="formation-description">{{ $value->Description }}</p>
                </div>
                @if($provider->getInfo()->FormationEtape == $value->id-1)
                        @if( $value->showType == 1)
                                <a href="{{ url('video/') }}-{{ $value->showId }}" class="start-btn">Regarder</a>
                        @elseif( $value->showType == 2)
                                <a href="{{ url('quiz/') }}-{{ $value->showId }}" class="start-btn">Me Tester</a>
                        @endif
                       
                @elseif($provider->getInfo()->FormationEtape > $value->id-1)
                <a class="start-btn" style="filter:grayscale(100%);cursor:default;">✔️</a>
                @else
                <a  class="start-btn" style="filter:grayscale(100%);cursor:default;">⌛</a>
                @endif
        </div>
        @php
        $max = count($this->Sommaire());
               if($key+1 == $max){
                        if($provider->getInfo()->FormationEtape == $value->id){ @endphp
                                <div class="formation">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ3X5gLT12aXxSDDFOO9lfNXy6iXdk9iR2y69bJEECwPawpZfr25j9P2zAz4Z1FMoGQcpA&usqp=CAU" alt="" class="illustration">
                                        <div class="informations">
                                        <p class="formation-name">Vous avez finit la formation</p>
                                        <p class="formation-description">Vous pouvez disposser.</p>
                                        </div>
                                <a href="{{ url('resultat') }}" class="start-btn">Voir le resultat.</a>
                        </div>
                        @php
                               
                        }
               }
        @endphp
        @endforeach
        
</div>
