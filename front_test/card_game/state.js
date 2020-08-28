// Some usefull variables
var maxHealth = 10
var maxFood = 10
var handSize = 5
var cardUid = 0
var currentPlayingCard = null

function initPlayer(playerName) {
    return {
        name: playerName,
        food: 10,
        health: 10,
        skipTurn: false,
        skippedLastTurn: false,
        hand:[],
        lastPlayedCardId: null,
        defeated: false
    }
}

// The consolidated state of our app
var state = {
  // World
  worldRatio: getWorldRatio(),

  turn: 1,
  players: [
    initPlayer('Anne'),
    initPlayer('William')
  ],
  canPlay: true,
  drawPile: pile,
  discardPile: {},
  curPlayerIndex: Math.round(Math.random()),
  testKeyInd: 0,

  activeOverlay: null,

  handCards:[[], []],
  left:[],
  used:[],

  get currentPlayer() {
    return this.players[this.curPlayerIndex]
  },
  get currentOpponentIndex() {
    return this.curPlayerIndex === 0 ? 1 : 0
  },
  get currentOpponent() {
    var opponentId = this.currentOpponentIndex
    return this.players[opponentId]
  }
}
