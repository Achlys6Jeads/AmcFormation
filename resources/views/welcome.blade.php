
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Ramery avec ACMC Formation</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;900&display=swap" rel="stylesheet">
    @livewireStyles
</head>

<body style="display:flex;flex-direction:column">

<div class="navbar">
    <div class="container">
        <div class="side">
            <a href="{{url('')}}">Accueil</a>
        </div>
    </div>
</div>


    <div style="min-height:100vh">
        @yield('content' )
    </div>

    
<div class="footer">
    <img src="files/wave-footer.svg" alt="" class="wave">
    <div class="container">
        <div class="row">
            <div class="side">
                <p class="title">ACMC Formation</p>
              
            </div>
        </div>
    </div>
</div>
</body>
@livewireScripts
</html>