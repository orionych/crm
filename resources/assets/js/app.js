
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
var VueResource=require('vue-resource');
var VueRouter = require('vue-router');
var Vuex = require('vuex');
Vue.use(VueResource);
Vue.use(VueRouter);
// Vue.use(Vuex);
//... some vue component imports ...

Vue.component('basket',require('./components/Basket.vue'));
Vue.component('firm',require('./components/Firm.vue'));
Vue.component('my-input',require('./components/My-input.vue'));
Vue.component('price-list',require('./components/Price-list.vue'));
var profile=Vue.component('profile',require('./components/Profile.vue'));
var clock=Vue.component('clock',require('./components/Clock.vue'));


const Basket = { template: `<div class="row"><div class='col-lg-6'><basket></basket></div><div class='col-lg-6'><price-list></price-list></div></div>` }
const Bar = { template: '<div>bar</div>' }
const store = new Vuex.Store({
  state: {
    count: 0
  },
  mutations: {
    increment (state) {
      state.count++
    }
  }
})
// 2. Определение путей
// Каждый путь должен указывать на компонент
// "Компонентом" может быть как созданный через Vue.extend()
// полноценный конструктор, так и просто объект с настройками компонента
// Вложенные пути будут рассмотрены далее.
const routes = [
  { path: '/basket', component: Basket },
  { path: '/profile', component: profile },
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
  clocktimer:15	
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
              app.clocktimer=response.body.status;
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


 