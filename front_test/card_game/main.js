
var app = new Vue({
  name: 'game',
  el: '#app',
  data: state,
  computed(): {
  },
  template: `
    <div id="#app">
      <top-bar :turn="turn" :cur-player-index="curPlayerIndex" :players="players"/>
      {{worldRatio}}
      <card :def="testDef" />
    </div>
  `
})

window.addEventListener('resize', () => {state.worldRatio = getWorldRatio()})
