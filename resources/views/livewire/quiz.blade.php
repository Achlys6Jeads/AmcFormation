<div>
    <div class="quizz">
        <div class="top">
            <div class="line-up">
                <p class="quizz-avancement">{{@$etapeCurrent}}/{{@$etapeEnd}} ({{ @$Rep }}) ({{ @$score }})</p>
            </div>
            <img class="formation-img" src="{{url('img/')}}{{ @$quiz['image']}}" alt="">
        </div>
        <p class="ask">{{ $quiz['ennonce'] }}</p>
        <div class="bottom" id="answers-list">
            <div class="answer awme" style="flex:1;">
                <label class="main" for="A" wire:click="Choix(1)">
                    <input type="checkbox" name="answer" value="A" id="A">
                    <p>{{ @$quiz['Question1']}}</p>
                    <span class="ckb"></span>
                </label>
            </div>
            <div class="answer awme"  style="flex:1;">
                <label class="main" for="B" wire:click="Choix(2)">
                    <input type="checkbox" name="answer" value="B" id="B">
                    <p>{{ @$quiz['Question2']}}</p>
                    <span class="ckb"></span>
                </label>
            </div>
            <div class="answer awme"  style="flex:1;">
                <label class="main" for="C" wire:click="Choix(3)">
                    <input type="checkbox" name="answer" value="C" id="C">
                    <p>{{ @$quiz['Question3']}}</p>
                    <span class="ckb"></span>
                </label>
            </div>
            <div class="answer awme"  style="flex:1;">
                <label class="main" for="D" wire:click="Choix(4)">
                    <input type="checkbox" name="answer" value="D" id="D" >
                    <p>{{ @$quiz['Question4']}}</p>
                    <span class="ckb"></span>
                </label>
            </div>
            <p wire:click="Valider()">valider</p>

        </div>
    </div>
    <script type="text/javascript">
        window.onload = function() {
            var container = document.getElementById("answers-list");
            var chks = container.getElementsByTagName("INPUT");
            for (var i = 0; i < chks.length; i++) {
                chks[i].onclick = function() {
                    for (var i = 0; i < chks.length; i++) {
                        if (chks[i] != this && this.checked) {
                            chks[i].checked = false;
                        }
                    }
                };
            }
        };
    </script>
</div>
