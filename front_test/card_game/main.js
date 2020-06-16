
var app = new Vue({
  name: 'game',
  el: '#app',
  data: state,
  beforeCreate() {
  },
  created() {
    this.initCards()
  },
  computed: {
    testDef() {
      return this.left[this.testKeyInd].def
    },
    testDefs() {
      return this.handCards[0]
    },
    dealCards() {

    }
  },
  methods: {
    playMethodInMain(c, n) {
      this.testKeyInd = (this.testKeyInd + 5) % this.left.length
      console.log("in main vue: " + c + ", " + n + ", " + this.testKeyInd)
    },
    randomSelectOneCard() {
      return this.left.splice(Math.floor(Math.random() * this.left.length), 1)[0]
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

      this.handCards = []
      for (let k=0; k<2;k++) {
        var curSet = []
        for (let j=0; j< handN; j++) {
          curSet.push(this.randomSelectOneCard())
        }
        this.handCards.push(curSet)
      }
    }
  },
  template: `
    <div id="#app">
      <top-bar :turn="turn" :cur-player-index="curPlayerIndex" :players="players"/>
      <transition name="fa">
        <hand :cards="handCards[curPlayerIndex]" v-if="!activeOverlay" />
      </transition>
    </div>
  `
})

//      <!-- <card :def="testDef" @playEvent="playMethodInMain"/> -->
window.addEventListener('resize', () => {state.worldRatio = getWorldRatio()})
