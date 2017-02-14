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
       <div id="app">
          <h1>Hello App!</h1>
          <p>
            <!-- используйте компонент router-link для создания ссылок -->
            <!-- входной параметр `to` определяет путь для перехода -->
            <!-- <router-link> по умолчанию преобразуется в тег `<a>` -->
            <router-link to="/foo">Go to Foo</router-link>
            <router-link to="/basket">Go to Basket</router-link>
            <router-link to="/bar">Go to Bar</router-link>
        </p>
        <!-- отображение компонента, для которого совпал путь -->
        <router-view></router-view>
    </div>
</div>
    
    <script type='text/javascript' src='/js/app.js'></script>
    <script type="text/javascript">
      var useronlines_id=0;
      function userOnlineRegister(){
        Vue.http.get('/user_online/start').then(response => {
              useronlines_id=response.body.id;
            }, response => {
              alert('error');
            });
      }
      // window.onload=userOnlineRegister();
      window.onfocus=userOnlineRegister();
      
      window.onblur=function(){
        Vue.http.post('/user_online/end',{id: useronlines_id}).then(response => {
              console.log(response.body);
            }, response => {
              alert('error');
            });
      }
      window.onbeforeunload=function(){
        alert('closed');
      }
      </script>
    </body>
</html>