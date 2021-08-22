<div>
<div>
    <div class="header">
        <div class="container">
            <div class="side">
                <h1 class="title">Formez-Vous !</h1>
                <h2 class="subtitle">Formation AIPR</h2>
                <form action="" style="display:flex;" wire:submit.prevent="Next()">
                    <p>{{ @$Msg }}</p>
                <div class="access-code">
                   
                    <input wire:model="code" placeholder="Entrer mon code d'accès" type="text" class="input-type">

                   
                    <button class="submit" wire:click="Next()" ><svg width="40" height="24" viewBox="0 0 40 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M39.0607 13.0607C39.6464 12.4749 39.6464 11.5251 39.0607 10.9393L29.5147 1.3934C28.9289 0.807614 27.9792 0.807614 27.3934 1.3934C26.8076 1.97919 26.8076 2.92893 27.3934 3.51472L35.8787 12L27.3934 20.4853C26.8076 21.0711 26.8076 22.0208 27.3934 22.6066C27.9792 23.1924 28.9289 23.1924 29.5147 22.6066L39.0607 13.0607ZM-1.31134e-07 13.5L38 13.5L38 10.5L1.31134e-07 10.5L-1.31134e-07 13.5Z"
                                fill="white" fill-opacity="0.75" />
                        </svg>
                    
                    </button>
                 
             
       
                </div>
            </form>
            </div>
            <div class="side">
                <img style="height:200px;object-fit:cover;width:250px" class="character" src="{{url('unnamed.png')}}" alt="">
            </div>
        </div>
        <img src="{{url('wave.svg')}}" class="wave" alt="">
        <div class="line"></div>
    </div>
    
    <div class="identify" style="{{ @$Inscription }}">
        <div class="container">
            <p class="title">Enregistrez-vous !</p>
            <form action="" class="form" wire:submit.prevent="saveContact">
                <div class="input-group">
                    <input wire:model="form.nom"  type="text" placeholder="Nom">
                    <input wire:model="form.prenom"  type="text" placeholder="Prénom">
                </div>
                <input wire:model="form.email"  type="email" name="" placeholder="Adresse email" id="">
  
                <div class="input-group">
                    <input wire:model="form.agence" type="text" placeholder="Agence">
                    <input wire:model="form.society"  type="text" placeholder="Société">
                </div>
                <button class="submit">M'inscrire</button>
            </form>
        </div>
    </div>
</div>

</div>
