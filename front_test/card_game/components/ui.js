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
    console.log("card template created")
    this.$on('play', (c, n) => {
      console.log("catch in card component: " + c + ", " + n)
    })
  },
  methods: {
    play(){
      this.$emit('play', 'color:orange', 24)
    }

  },
  template: `
    <div class="card" :class="'type-' + def.type" @click="play">
      <div class="title">{{def.title}}</div>
      <img class="separator" src="svg/card-separator.svg" />
      <div class="description"><div v-html="def.description"></div></div>
      <div class="note" v-if="def.note"><div v-html="def.note"></div></div>
    </div>
  `
})

Vue.component('hand', {
  props: ['cards'],
  template:`
    <div class="hand">
      <div class="wrapper">
        <div v-for="card in cards">{{card.id}}</div>
      </div>
    </div>
  `
})
