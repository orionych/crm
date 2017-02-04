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
</head>
    <body>
        <div id='dashboard' v-show='show' style='width:100%;min-height:100%;position:absolute;top:0px;left:0px;background-color:#aaa'>
            Main screen
            <button @click='show=!show'>Change screen</button>
        </div>
        <div id='basket' v-show='show' style='display:none;width:100vw;min-height:100vh;position:absolute;top:0px;left:0px;background-color:#333'>
            Hello world
            <button @click='show=!show'>Change screen</button>
        </div>
        <div style='display:none;width:100vw;min-height:100vh;position:absolute;top:0px;left:0px;background-color:#ababab'>
            Hello world2
        </div>
    
    <script type='text/javascript' src='/js/app.js'></script>
    </body>
</html>