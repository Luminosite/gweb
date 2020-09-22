import Vue from 'vue'
import 'babel-polyfill'
import test from './test.vue'

new Vue({
  el: "#app",
  ... test,
//
//  render:h => h("ul", {'class': 'movies'}, [
//    h('li', {'class': 'movie'}, 'Star Wars'),
//    h('li', {'class': 'movie'}, 'Home Alone'),
//  ])
})
