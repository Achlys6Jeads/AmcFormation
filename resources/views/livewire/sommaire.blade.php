@inject('provider', 'App\Http\Controllers\CompteUtilisateurController')
<div>

        @foreach($this->Sommaire() as $value)

        <div class="formation">
                <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.stokestiles.co.uk%2Fimages%2Fww%2Fmerlin%2F150x150_Plain_Grey_SWT6.jpg&amp;f=1&amp;nofb=1" alt="" class="illustration">
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
                <a href="" class="start-btn" style="filter:grayscale(100%);cursor:default;">Vous avez déjà regarder cette partie.</a>
                @else
                <a href="" class="start-btn" style="filter:grayscale(100%);cursor:default;">En attente</a>
                @endif
        </div>
        @endforeach
        
</div>
