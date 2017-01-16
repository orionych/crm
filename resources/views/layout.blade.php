 <!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" id="csrf_token" content="{{ csrf_token() }}" >
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>CRM система. ООО "Лидер"</title>

        <!-- Fonts -->
        <link href="/css/app.css" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
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
    <body >
    <div id='app'>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif 

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
<input type='button' value='Check' onclick=send() />
                </div>
            </div>
        </div>
</div>
        <script src="/js/app.js"></script>
        <script type="text/javascript"> 
        function send(){
              Vue.http.get('/someUrl').then((response) => {
                alert(response.data+' '+document.getElementById('csrf_token').getAttribute('content'));
    // success callback
  }, (response) => {alert('error');
    // error callback
  });}
        </script>

    </body>
</html>
