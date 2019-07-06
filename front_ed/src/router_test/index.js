import Vue from 'vue'
import Router from 'vue-router'
import hello from '@/components/hello'

var i = {template: '<h3>index</h3>'}
var l = {template: '<h3>list</h3>'}

Vue.use(Router)

export default new Router({
  routes: [
    {path: '/index', component: i},
    {path: '/hello', component: hello},
    {path: '/list', component: l}
  ]
})
