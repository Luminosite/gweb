
function applyCard() {
  applyCardEffect(currentPlayingCard)
  setTimeout(() => {
    state.players.forEach(checkPlayerLost)
    if (isOnePlayerDead()){
      endGame()
    } else {
      nextTurn()
    }
  }, 700)
}

function endGame() {
  state.activeOverlay='game-over'
}

function nextTurn() {
  state.turn += 1
  state.curPlayerIndex = state.currentOpponentIndex
  state.activeOverlay = 'player-turn'
}

function newTurn() {
  state.activeOverlay = null
  if (state.currentPlayer.skipTurn) {
    skipTurn()
  } else {
    startTurn()
  }
}

function skipTurn() {
  state.currentPlayer.skipTurn = false
  state.currentPlayer.skippedTurn = true
  nextTurn()
}

function startTurn() {
  state.currentPlayer.skippedTurn = false
  if (state.turn > 2) {
    setTimeout(() => {
      state.currentPlayer.hand.push(drawCard())
      state.canPlay = true
    })
  } else {
    state.canPlay = true
  }
}

var overlayCloseHandlers = {
  'player-turn' () {
    if (state.turn > 1) {
      state.activeOverlay = 'last-play'
    } else {
      newTurn()
    }
  },
  'last-play' () {
    newTurn()
  },
  'game-over' () {
    document.location.reload()
  },
}
