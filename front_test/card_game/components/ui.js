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
    }
  },
  template:`
    <div class="hand">
      <div class="wrapper">
        <transition-group name="card" tag="div" class="cards">
            <card v-for="card in cards" :key="card.uid" :def="card.def" @playEvent="play(card)"/>
        </transition-group>
      </div>
    </div>
  `
})
