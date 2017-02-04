
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
require('vue-resource');
var VueRouter = require('vue-router');
Vue.use(VueRouter);
//... some vue component imports ...

// var Vue=require('vue');
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */ 
 Vue.component('firm',require('./components/Firm.vue'));
Vue.component('basket',require('./components/Basket.vue'));


const Foo = { template: '<div>foo<basket>1</basket></div>' }
const Bar = { template: '<div>bar</div>' }

// 2. Определение путей
// Каждый путь должен указывать на компонент
// "Компонентом" может быть как созданный через Vue.extend()
// полноценный конструктор, так и просто объект с настройками компонента
// Вложенные пути будут рассмотрены далее.
const routes = [
  { path: '/foo', component: Foo },
  { path: '/basket', component: basket },
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
  router
}).$mount('#app')


Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#csrf_token').getAttribute('content');
Vue.component('firm', require('./components/Firm.vue'));



 