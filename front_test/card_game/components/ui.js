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
    this.$on('playEvent', (c, n) => {
      console.log("catch in card component: " + c + ", " + n)
    })
  },
  methods: {
    playMethodInCard(){
      this.$emit('playEvent', 'color:orange', 24)
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
    playMethodInHand(c, n) {
      console.log("caught play event in hand: " + c + ", "+n)
    }
  },
  template:`
    <div class="hand">
      <div class="wrapper">
        <card v-for="card in cards" :key="card.uid" :def="card.def" @playEvent="playMethodInHand"/>
      </div>
    </div>
  `
})
