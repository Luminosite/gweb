function mock_marked(input){
  var c = input.replace(/\r\n/g, '<br>')
  c = c.replace(/\r/g, '<br>')
  c = c.replace(/\n/g, '<br>')
  return '<h2 style="color:blue">' + c + "</h2>"
}

function log(n) {
  console.log("here", n)
}

var app = new Vue({
  el: '#notebook_root',
  data() {
    return {
      content: 'here'
    }
  },
  computed: {
    notePreview() {
        return mock_marked(this.content)
    },
  },
  watch: {
    content: 'checkpoint'
  },
  methods: {
    checkpoint(n, o){
//      this.log(n, o)
      localStorage.setItem('note_content', n)
    },
    log(n, o) {
      console.log("change: new: '", n, "', old: '", o, "';")
    }
  }
})