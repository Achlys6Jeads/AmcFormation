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
    <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TweenMax.min.js"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/DrawSVGPlugin.min.js"></script>


    @livewireStyles
</head>

<body style="display:flex;flex-direction:column">
    <div class="page-loader">
        <div class="page-loader--bg-a"></div>
        <div class="page-loader--bg-b">
            <!-- <div class="sspattern-2"></div> -->
        </div>
        <div class="page-loader--and">

            <img src="{{ url('index.svg') }}" alt="Chargement">
        </div>

    </div>

    <div class="navbar bob">
        <div class="container">
            <div class="side">
                @php 

                use App\Http\Controllers\CompteUtilisateurController; 
                $var = CompteUtilisateurController::imOnline();

                @endphp
                <a style="margin-right:10px"><img style="height:100px;object-fit:cover;width:150px" class="character" src="{{url('unnamed.png')}}" alt=""></a>
                @if($var)
               
                <a href="{{ url('') }}" style="margin-right:10px">Accueil</a>
                <a href="{{ url('logout') }}" style="margin-right:10px">Deconnexion</a>
                @endif

            </div>
        </div>
    </div>


    <div style="min-height:100vh;display:flex;align-items:center;justify-content:center;flex-direction:column;" class="bob">
        @yield('content' )
    </div>


    <div class="footer bob">
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
<style>
    .page-loader {
        position: fixed;
        width: 100%;
        height: 100%;
        z-index: 900000;
        top: 0;
        left: 0;
        -webkit-transform: translateX(0);
        transform: translateX(0);
        opacity: 1;
    }

    .page-loader.is-invisible {
        -webkit-transform: translateX(100000000%);
        transform: translateX(100000000%);
        opacity: 0;
    }

    .page-loader--bg-a {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: #58628c;
    }

    .page-loader--bg-b {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: #333;
    }

    .page-loader--and {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        margin: auto;
        width: 100px;
        height: 100px;
    }

    .page-loader--baseline {
        position: absolute;
        top: 50%;
        left: 0;
        right: 0;
        z-index: 50;
        text-align: center;
        color: #fff;
        -webkit-transform: translateY(80px);
        transform: translateY(80px);
        font-size: 10px;
        font-size: .625rem;
        text-transform: uppercase;
        letter-spacing: .5em;
    }

    .page-loader--and path {
        stroke: #fff;
    }

</style>
<script>
    function showLoader() {
        $('.bob').hide();
        $('.page-loader').removeClass('is-invisible');

        // Animation
        var tl = new TimelineLite();

        tl.fromTo(
            $('.page-loader--bg-a'),
            .7, {
                x: '100%',
            }, {
                x: '0%',
                ease: Power3.easeInOut,
            },
            0
        );
        tl.fromTo(
            $('.page-loader--bg-b'),
            .9, {
                x: '100%',
            }, {
                x: '0%',
                ease: Power2.easeInOut,
            },
            0
        );

        tl.fromTo(
            $('.page-loader--and'),
            .9, {
                x: $(window).outerWidth() / 1.8,
            }, {
                x: 0,
                ease: Power3.easeInOut,
            },
            0
        );

        tl.fromTo(
            $('.page-loader path'),
            .9, {
                strokeDashoffset: 286
            }, {
                strokeDashoffset: 0,
                ease: Power1.easeInOut
            },
            0
        );

        tl.staggerFromTo(
            $('.page-loader .splitter-letter'),
            .9, {
                alpha: 0,
                x: $(window).outerWidth() / 10,
            }, {
                alpha: 1,
                x: 0,
                ease: Power3.easeOut,
            },
            .01,
            0.25
        );

        tl.call(function() {
            //loadingFull = true;
        });
    }

    showLoader();



    /**
     * Hide page loader
     */
    function hideLoader() {
        // Animation hide loader
        var tl = new TimelineLite();

        tl.fromTo(
            $('.page-loader--bg-a'),
            .9, {
                x: '0%',
            }, {
                x: '-100%',
                ease: Power2.easeInOut,
            },
            0
        );
        tl.fromTo(
            $('.page-loader--bg-b'),
            .7, {
                x: '0%',
            }, {
                x: '-100%',
                ease: Power3.easeInOut,
            },
            0
        );

        tl.fromTo(
            $('.page-loader--and'),
            .9, {
                x: 0,
            }, {
                x: $(window).outerWidth() / -1.8,
                ease: Power3.easeInOut,
            },
            0
        );

        tl.to(
            $('.page-loader path'),
            .9, {
                strokeDashoffset: -286,
                ease: Power1.easeInOut
            },
            0
        );

        tl.staggerFromTo(
            $('.page-loader .splitter-letter'),
            .6, {
                alpha: 1,
                x: 0,
            }, {
                alpha: 0,
                x: $(window).outerWidth() / -10,
                ease: Power3.easeInOut,
            },
            .01,
            0
        );

        tl.call(function() {
            $('.page-loader').addClass('is-invisible');
            $('.bob').show();
        })
    }


    setTimeout(function() {
        hideLoader();
    }, 2000);
</script>

</html>
