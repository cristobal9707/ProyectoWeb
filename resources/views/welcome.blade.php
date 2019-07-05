<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-image: url(https://images2.alphacoders.com/102/1026253.jpg);
                background-repeat: no-repeat;
                background-color: #cccccc;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            .card{
                background-color:#fff; 
                padding: 30px;
                border-radius: 50px 50px 50px 50px;
                -moz-border-radius: 50px 50px 50px 50px;
                -webkit-border-radius: 50px 50px 50px 50px;
                border: 0px solid #000000;
            }
            .full-height {
                height: 100vh;
            }
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            .position-ref {
                position: relative;
            }
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .content {
                text-align: center;
            }
            .title {
                font-size: 84px;
            }
            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body background="ruta/archivo.png" width="100%" height="100">
        <div class="flex-center position-ref full-height">
            
            
            <div class="content card">
                <div class="title m-b-md">
                    Salud Temuco
                </div>
                @if (Route::has('login'))
                <div class="links">
                    @auth
                        <a href="{{ url('/clientes') }}">Pagina principal</a>
                    @else
                        <a href="{{ route('login') }}">Iniciar sesion</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Registrarse</a>
                        @endif
                    @endauth
                </div>
            @endif

            </div>
            
        </div>
    </body>
</html>