 <!DOCTYPE html>
 <html lang="ru">
 <head>
    <meta charset="utf-8">
    <meta name="csrf-token" id="csrf_token" content="{{ csrf_token() }}" >

    <title>CRM система. ООО "Лидер"</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://code.cdn.mozilla.net/fonts/fira.css">
   <link href="/css/app.css" rel="stylesheet" type="text/css">
   <link href="/css/dashio.css" rel="stylesheet" type="text/css">
   <link href="/css/dashio-responsive.css" rel="stylesheet">
   <link href="/css/font-awesome.css" rel="stylesheet">
    <script type='text/javascript' src='/js/app.js'></script>
</head>
    <body>
        <div style='width:100%;min-height:100%;background-color:#aaa'>
            Main screen
            <button>Change screen</button>
        </div>
        <div style='width:100%;min-height:100%;background-color:#333'>
            Hello world
        </div>
        <div style='width:100%;min-height:100%;display:block;background-color:#ababab'>
            Hello world2
        </div>
    </body>
</html>