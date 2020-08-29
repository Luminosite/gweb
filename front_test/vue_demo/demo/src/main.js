import Vue from 'vue'
import 'babel-polyfill'

new Vue({
  el: "#app",

  render:h => h("ul", {'class': 'movies'}, [
    h('li', {'class': 'movie'}, 'Star Wars'),
    h('li', {'class': 'movie'}, 'Home Alone'),
  ])
})
