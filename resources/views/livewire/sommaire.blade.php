<div>

        @foreach($this->Sommaire() as $key => $value)
        <div class="formation">
                <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.stokestiles.co.uk%2Fimages%2Fww%2Fmerlin%2F150x150_Plain_Grey_SWT6.jpg&amp;f=1&amp;nofb=1" alt="" class="illustration">
                <div class="informations">
                    <p class="formation-name">{{ $value->titre }}</p>
                    <p class="formation-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis repudiandae porro delectus amet </p>
                </div>
                <a href="" class="start-btn">Commencer</a>
        </div>
        @endforeach
</div>
