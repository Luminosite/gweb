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
      content: '',
      storedKey: 'note_content',
      notes: [],
      selectedId: null,
    }
  },
  created() {
    this.initContent()
    this.initNotes()
  },
  computed: {
    selectedNote() {
      return this.notes.find(n => n.id === this.selectedId)
//      return this.notes[0]
    },
    notePreview() {
      return this.selectedNote ? mock_marked(this.selectedNote.content) : ''
    },
    addTitle() {
      const n = this.notes
      t = 'no note yet'
      if (n.length == 1) {
        t = '1 note already'
      } else {
        t = this.notes.length + ' notes already'
      }
      return t
    }
  },
  watch: {
    content: 'checkpoint',
    notes: {
      handler: 'updateNotes',
      deep: true,
    }
  },
  methods: {
    setSelectedId(node){
      this.selectedId = node.id
    },
    initContent(){
      this.content = localStorage.getItem('note_content') || 'here to edit'
    },
    initNotes(){
      this.notes = JSON.parse(localStorage.getItem('notes')) || []
    },
    updateNotes(){
      localStorage.setItem('notes', JSON.stringify(this.notes))
    },
    checkpoint(n, o){
//      this.log(n, o)
      localStorage.setItem(this.storedKey, n)
    },
    log(n, o) {
      console.log("change: new: '", n, "', old: '", o, "';")
    },
    addNote() {
      const time = Date.now()
      const note = {
        id: String(time),
        title: 'new note',
        content: 'This is a new note!',
        create_time: String(time),
        last_modify_time: String(time),
        favorite: false,
      }
      this.notes.push(note)
    },
  }
})