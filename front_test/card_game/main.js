
var app = new Vue({
  name: 'game',
  el: '#app',
  data: state,
  template: `
    <div id="#app">
      <top-bar :turn="turn" :cur-player-index="curPlayerIndex" :players="players"/>
      {{worldRatio}}
    </div>
  `
})

window.addEventListener('resize', () => {state.worldRatio = getWorldRatio()})
