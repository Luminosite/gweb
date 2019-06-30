import Vue from 'vue'
import Router from 'vue-router'

var i = {template: '<h3>index</h3>'}
var h = {template: '<h3>hello</h3>'}
var l = {template: '<h3>list</h3>'}

Vue.use(Router)

export default new Router({
  routes: [
    {path: '/index', component: i},
    {path: '/hello', component: h},
    {path: '/list', component: l}
  ]
})
