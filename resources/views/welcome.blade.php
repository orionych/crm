<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" id="csrf_token" content="{{ csrf_token() }}" >
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="/css/app.css" rel="stylesheet" type="text/css">

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
