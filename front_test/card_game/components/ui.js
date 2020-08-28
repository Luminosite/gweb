Vue.component('top-bar', {
  props: ['players', 'curPlayerIndex', 'turn'],
  template:`
    <div class="top-bar" :class="'player-'+curPlayerIndex">
      <div class="player p0">{{players[0].name}}</div>
      <div class="turn-counter">
        <img class="arrow" src="svg/turn.svg" />
        <div class="turn">Turn {{turn}}</div>
      </div>
      <div class="player p1">{{players[1].name}}</div>
    </div>
  `
})

Vue.component('card', {
  props: ['def'],
  beforeCreate() {
//    this.$on('playEvent', (c, n) => {
//      console.log("catch in card component: " + c + ", " + n)
//    })
  },
  methods: {
    playMethodInCard(){
      this.$emit('playEvent')
    }

  },
  template: `
    <div class="card" :class="'type-' + def.type" @click="playMethodInCard">
      <div class="title">{{def.title}}</div>
      <img class="separator" src="svg/card-separator.svg" />
      <div class="description"><div v-html="def.description"></div></div>
      <div class="note" v-if="def.note"><div v-html="def.note"></div></div>
    </div>
  `
})

Vue.component('hand', {
  props: ['cards'],
  mounted(){
//    console.log(this.cards)
  },
  methods: {
    play(c) {
      this.$emit('handPlay', c)
    },
    handleLeaveEnd() {
      this.$emit('cardPlayed')
    }
  },
  template:`
    <div class="hand">
      <div class="wrapper">
        <transition-group name="card" tag="div" class="cards" @after-leave="handleLeaveEnd">
            <card v-for="card in cards" :key="card.uid" :def="card.def" @playEvent="play(card)"/>
        </transition-group>
      </div>
    </div>
  `
})

Vue.component('overlay', {
    methods: {
        handleClick() {
            this.$emit('close')
        }
    },
    template: `
        <div class="overlay" @click="handleClick">
            <div class="content">
                <slot/>
            </div>
        </div>
    `
})

Vue.component('overlay-content-player-turn', {
    props: ['player'],
    template: `<div>
        <div class="big" v-if="player.skipTurn">
            {{player.name}}
            <br>your turn is skipped
        </div>
        <div class="big" v-else>
            {{player.name}}
            <br>your turn has come!
        </div>
        <div>Tap to continue</div>
      </div>`
})

Vue.component('overlay-content-last-play', {
    props: ['opponent'],
    computed: {
        lastPlayedCard() {
            return getLastPlayedCard (this.opponent)
        }
    },
    template: `<div>
        <div v-if="opponent.skippedLastTurn">
            {{opponent.name}} turn was skipped
        </div>
        <template v-else>
            <div> {{opponent.name}} just played: </div>
            <card :def="lastPlayedCard" />
        </template>
        <div>Tap to continue</div>
      </div>`
})

Vue.component('player-result', {
    props: ['player'],
    computed: {
        getResult() {
            return this.player.defeated ? 'defeated' : 'victorious'
        }
    },
    template:`<div class="player-result" :class='getResult'>
        <span class="name">{{player.name}}</span>
        <span class="result">{{getResult}}</span>
    </div>`
})

Vue.component('overlay-content-game-over', {
    props: ['players'],
    computed: {
    },
    template:`<div>
        <div class="big">Game Over</div>
        <player-result v-for="player in players" :player="player"/>
    </div>`
})
