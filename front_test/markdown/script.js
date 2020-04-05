function mock_marked(input){
  var c = input.replace(/\r\n/g, '<br>')
  c = c.replace(/\r/g, '<br>')
  c = c.replace(/\n/g, '<br>')
  return '<h2 style="color:blue">' + c + "</h2>"
}

function log(n) {
  console.log("here", n)
}

Vue.filter('date', time => String(time))//moment(time).format('YY-MM-DD HH:mm:ss'))

// MyNote: data() then return a map-like object is equal to data: <a map-like object> in vue object
var d = {
      storedKey: 'note_content',
      notes: [],
      selectedId: null,
}

var app = new Vue({
  el: '#notebook_root',
  data() {
    return {
      storedKey: 'note_content',
      notes: [],
      selectedId: null,
    }
  },
  created() {
    this.initNotes()
  },
  computed: {
    selectedNote() {
      return this.notes.find(n => n.id === this.selectedId)
//      return this.notes[0]
    },
    notePreview() {
      return this.selectedNote ? marked(this.selectedNote.content) : ''
    },
    lines() {
      if (this.selectedNote) {
        return this.selectedNote.content.split(/\r\n|\r|\n/).length
      }
    },
    words() {
      if (this.selectedNote) {
        var s = this.selectedNote.content.replace(/\r\n|\r|\n/g, ' ')
        s = s.replace(/(^\s*)|(\s*$)/gi, '')
        s = s.replace(/\s+/gi, ' ')
        return s.split(' ').length
      }
    },
    characters() {
      if (this.selectedNote) {
        return this.selectedNote.content.split('').length
      }
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
    selectedId: 'saveSelectedId',
    content: 'checkpoint',
    notes: {
      handler: 'updateNotes',
      deep: true,
    }
  },
  methods: {
    favoriteNote() {
      this.selectedNote.favorite = !this.selectedNote.favorite
      this.notes.sort(function(a, b) {
        return parseInt(a.create_time) - parseInt(b.create_time)
      })
      this.notes.sort(function(a, b) {
        var aTag = 1
        var bTag = 1
        if (a.favorite) aTag = 0
        if (b.favorite) bTag = 0
        return aTag - bTag
      })
    },
    showFavoriteTitle() {
      if (this.selectedNote.favorite) {
        return 'un-favorite note'
      } else {
        return 'favorite note'
      }
    },
    saveSelectedId(newValue, oldValue){
      localStorage.setItem('sId', newValue)
    },
    setSelectedId(node){
      this.selectedId = node.id
    },
    initContent(){
      this.content = localStorage.getItem('note_content') || 'here to edit'
    },
    initNotes(){
      this.notes = JSON.parse(localStorage.getItem('notes')) || []
      this.selectedId = localStorage.getItem('sId') || null
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
    favoriteStar(note) {
      return note.favorite ? 'star':'star_border'
    },
    rmNote() {
      if(this.selectedId && confirm("delete current note?")){
        const index = this.notes.indexOf(this.selectedNote)
        if (index != -1) {
          this.notes.splice(index, 1)
        }
      }
    },
    addNote() {
      const time = Date.now()
      const note = {
        id: String(time),
        title: 'new note',
        content: '## This is a new note!',
        create_time: time,
        last_modify_time: time,
        favorite: false,
      }
      this.notes.push(note)
      this.selectedId = note.id
    },
  }
})