
var app = new Vue({
  name: 'game',
  el: '#app',
  data: state,
  created() {
    this.initCards()
  },
  computed: {
    testDef() {
      return cards.archers
    },
    testDefs() {
      return [cards.archers]
    },
    dealCards() {

    }
  },
  methods: {
    playCard(c, n) {
      console.log("in main vue: " + c + ", " + n)
    },
    initCards() {
      const ids = Object.keys(cards)
      let cardSet = []
      var n = 3
      var handN = 5
      for (let i=0; i< ids.length * n; i++) {
        this.left.push({
          uid: i,
          def: cards[ids[i/n]]
        })
      }

      for (let k=0; k<2;k++) {
        for (let j=0; j< handN; j++) {
          this.handCards[k].push(this.left.splice(Math.round(Math.random() * this.left.length), 1))
        }
      }
    }
  },
  template: `
    <div id="#app">
      <top-bar :turn="turn" :cur-player-index="curPlayerIndex" :players="players"/>
      <card :def="testDef" @play="playCard"/>
      <hand :cards="testDefs" />
    </div>
  `
})

window.addEventListener('resize', () => {state.worldRatio = getWorldRatio()})
