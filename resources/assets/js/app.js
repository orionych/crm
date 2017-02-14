
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
var VueResource=require('vue-resource');
var VueRouter = require('vue-router');
Vue.use(VueResource);
Vue.use(VueRouter);
//... some vue component imports ...

// var Vue=require('vue');
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */ 
Basket=Vue.component('basket',require('./components/Basket.vue'));
Vue.component('firm',require('./components/Firm.vue'));
Vue.component('my-input',require('./components/My-input.vue'));
var clock=Vue.component('clock',require('./components/Clock.vue'));


const Foo = { template: '<div>foo<basket>1</basket></div>' }
const Bar = { template: '<div>bar</div>' }

// 2. Определение путей
// Каждый путь должен указывать на компонент
// "Компонентом" может быть как созданный через Vue.extend()
// полноценный конструктор, так и просто объект с настройками компонента
// Вложенные пути будут рассмотрены далее.
const routes = [
  { path: '/foo', component: Foo },
  { path: '/basket', component: Basket },
  { path: '/bar', component: Bar }
]

// 3. Создаём инстанс роутера с опцией `routes`
// Можно передать и другие опции, но пока не будем усложнять
const router = new VueRouter({
  routes // сокращение от routes: routes
})

// 4. Создаём и монтируем корневой инстанс Vue нашего приложения.
// Удостоверьтесь, что передали инстанс роутера в опции `router`,
// что позволит приложению знать о его наличии
const app = new Vue({
  router,data:{
  clocktime:10	
  }
}).$mount('#app')


Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#csrf_token').getAttribute('content');

      var useronlines_id=0;
      var clocktime=10;
      var useronlinestarted=false;
      function userOnlineRegister(){
        if (!useronlinestarted) Vue.http.get('/user_online/start').then(response => {
              useronlinestarted=true;
              useronlines_id=response.body.online.id;
              clocktime=response.body.status;
              console.log(response.body.status);
            }, response => {
              console.log('error');
            });
      }
      function userOfflineRegister(){
            if (useronlinestarted) Vue.http.post('/user_online/end',{id: useronlines_id}).then(response => {
              useronlinestarted=false;
              console.log(response.body);
            }, response => {
              console.log('error');
            });
        }
      window.onload=userOnlineRegister;
      window.onfocus=userOnlineRegister;
      window.onblur=userOfflineRegister;
      window.onbeforeunload=userOfflineRegister;


 