<div>




    <div class="quizz" style="margin-top:4rem">
        <div class="top">
            <div class="line-up">
                <p class="quizz-avancement">Question {{@$etapeCurrent}} sur {{@$etapeEnd}}</p>
            </div>
            <img class="formation-img" src="{{ @$quiz['image']}}" alt="">
        </div>
        <p class="ask">{{ $quiz['ennonce'] }}</p>
        <div class="bottom" id="answers-list">
            <div class="answer awme" style="flex:1;">
                <label class="main" for="A" wire:click="Choix(1)">
                    <input type="checkbox" name="answer" value="A" id="A">
                    <p  class="noselect">{{ @$quiz['Question1']}}</p>
                    <span class="ckb"></span>
                </label>
            </div>
            <div class="answer awme"  style="flex:1;">
                <label class="main" for="B" wire:click="Choix(2)">
                    <input type="checkbox" name="answer" value="B" id="B">
                    <p  class="noselect">{{ @$quiz['Question2']}}</p>
                    <span class="ckb"></span>
                </label>
            </div>
            <div class="answer awme"  style="flex:1;">
                <label class="main" for="C" wire:click="Choix(3)">
                    <input type="checkbox" name="answer" value="C" id="C">
                    <p  class="noselect">{{ @$quiz['Question3']}}</p>
                    <span class="ckb"></span>
                </label>
            </div>
            <div class="answer awme"  style="flex:1;">
                <label class="main" for="D" wire:click="Choix(4)">
                    <input type="checkbox" name="answer" value="D" id="D" >
                    <p class="noselect">{{ @$quiz['Question4']}}</p>
                    <span class="ckb"></span>
                </label>
            </div>

    

        </div>
        <div style="width:100%;display:flex;align-items:flex-end;justify-content:flex-end;margin-top:2rem;min-height:50px">

            <div wire:loading.remove>
                @if($this->userReponse !== null)
                <a wire:click="Valider()" onclick="Valider()" class="next-btn" style="width:200px;height:50px;display:flex;align-items:center;justify-content:center;" onclick="Uncheck()" >valider</a>
                @endif
             </div>

   

             <div wire:loading >
                <div class="next-btn" > <img src="{{ url('index.svg') }}" alt="Chargement"></div>
               
             </div>
            
        </div>
    </div>
    <script type="text/javascript">
        window.onload = function() {
            var container = document.getElementById("answers-list");
            var chks = container.getElementsByTagName("INPUT");
            for (var i = 0; i < chks.length; i++) {
                chks[i].onchange = function() {
                    for (var i = 0; i < chks.length; i++) {
                        if (chks[i] != this && this.checked) {
                            chks[i].checked = false;
                        }
                    }
                };
            }
        };

        function Uncheck(){
            var container = document.getElementById("answers-list");
            var chks = container.getElementsByTagName("INPUT");
            for (var i = 0; i < chks.length; i++) {
              
                    for (var i = 0; i < chks.length; i++) {
                        
                            chks[i].checked = false;
                        
                    }
              
            }
        }

        window.addEventListener('Valider', event => {
            Uncheck();
            setTimeout(function() {
            hideLoader();
        }, 2000 );
        })


function Valider(){
    showLoader();
          
}
        
    </script>
    <style>
    .formation-part .container .quizz .bottom .answer label.main{
        height:100%;
 
    }
    .ckb{
        height:100% !important;
    }
        .noselect {
  -webkit-touch-callout: none; /* iOS Safari */
    -webkit-user-select: none; /* Safari */
     -khtml-user-select: none; /* Konqueror HTML */
       -moz-user-select: none; /* Old versions of Firefox */
        -ms-user-select: none; /* Internet Explorer/Edge */
            user-select: none; /* Non-prefixed version, currently
                                  supported by Chrome, Edge, Opera and Firefox */
                                  text-align:center;
                                  font-weight: bold;
                                  background: -webkit-linear-gradient(rgb(49, 46, 46), rgb(29, 21, 21));
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
                         
}
    </style>
</div>
