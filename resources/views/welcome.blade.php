<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>S_VHS</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'VT323', monospace;
                font-weight: 200;
                height: 100vh;
                margin: 0;
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
                position: fixed;
                bottom: 0;
                width: 100%;
                margin-bottom: 300px;
                color: white;
                opacity: 70%;
              }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: white;
                opacity: 70%;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .links > a:hover {
              color: red;
              opacity: 100%;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .m-b-md:hover {
              color: red;
            }
            #vid {
                position: fixed;
                right: 0;
                bottom: 0;
                min-width: 100%;
                min-height: 100%;
            }


        </style>





    </head>
    <body>


        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth

                    @else


                        @if (Route::has('register'))

                        @endif
                    @endauth
                </div>
            @endif
            <video autoplay muted loop id="vid">
              <source src="img/vhs.mp4" type="video/mp4">
            </video>
            <div class="content">
                <div class="title m-b-md">
                    S_VHS
                </div>

                <div class="links">
                    <a style="font-size: 200%;" href="http://127.0.0.1:8000/home">-Enter-</a>

                </div>
            </div>
        </div>
    </body>
</html>
