
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
          def: cards[ids[parseInt(i/n)]]
        })
      }

      console.log(cards[ids[9]])
      this.handCards = []
      for (let k=0; k<2;k++) {
        var curSet = []
        for (let j=0; j< handN; j++) {
          curSet.push(this.left.splice(Math.floor(Math.random() * this.left.length), 1)[0])
        }
        this.handCards.push(curSet)
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
