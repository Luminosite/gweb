
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
    cssClass() {
      return {'can-play': this.canPlay}
    },
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
      for (index in this.players) {
        drawInitialHand(this.players[index])
      }
//      const ids = Object.keys(cards)
//      let cardSet = []
//      var n = 3
//      for (let i=0; i< ids.length * n; i++) {
//        this.left.push({
//          uid: i,
//          def: cards[ids[parseInt(i/n)]]
//        })
//      }
//
//      for (let k=0; k<2;k++) {
//        var curSet = []
//        for (let j=0; j< handSize; j++) {
//          this.handCards[k].push(this.randomSelectOneCard())
//        }
//      }
    },
    cardPlayed() {
      applyCard()
    },
    playACard(c) {
      console.log("here", this.canPlay)
      if (this.canPlay) {
        this.canPlay = false
        currentPlayingCard = c
        let hand = this.currentPlayer.hand
        let index = hand.indexOf(c)
        hand.splice(index, 1)
        let deletedId = c.id

        addCardToPile(this.discardPile, deletedId)
        console.log("remove a card from hand:", deletedId)
      }
    },
    overlayClose() {
      overlayCloseHandlers[this.activeOverlay]()
    }
  },
  template: `
    <div id="#app" :class="cssClass">
      <top-bar :turn="turn" :cur-player-index="curPlayerIndex" :players="players"/>
      <div class="world">
        <castle v-for="(player, index) in players" :player="player" :index="index" />
        <div class="clouds">
          <cloud v-for="index in 10" :type="(index - 1)%5 + 1" />
        </div>
        <div class="land"/>
      </div>
      <transition name="fa">
        <hand :cards="currentPlayer.hand" v-if="!activeOverlay" @handPlay='playACard'
            @cardPlayed='cardPlayed' />
      </transition>
      <transition name="fa">
        <div class="overlay-background" v-if="activeOverlay">
        </div>
      </transition>
      <transition name="zoom">
        <overlay v-if="activeOverlay" :key="activeOverlay" @close="overlayClose">
          <component :is="'overlay-content-' + activeOverlay" :player="currentPlayer"
              :opponent="currentOpponent" :players="players" />
        </overlay>
      </transition>
    </div>
  `
})

//      <!-- <card :def="testDef" @playEvent="playMethodInMain"/> -->
window.addEventListener('resize', () => {state.worldRatio = getWorldRatio()})

// Tween.js
requestAnimationFrame(animate);

function animate(time) {
  requestAnimationFrame(animate);
  TWEEN.update(time);
}
