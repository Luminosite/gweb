// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import MyApp from './App'
import VueRouter from 'vue-router'
// import router from './router'
import router from './router_test'

Vue.config.productionTip = false
Vue.use(VueRouter)

/* eslint-disable no-new */
/*
new Vue({
  el: '#app',
  router,
  components: { App },
  template: '<App/>'
})
*/
new Vue({
  el: '#app',
  router,
  components: { MyApp },
  template: '<MyApp/>'
})
