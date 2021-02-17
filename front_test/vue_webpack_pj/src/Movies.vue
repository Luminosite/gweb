<template>
  <div class="movies">
    <Movie v-for="movie of movies" :key="movie.id" :mo="movie" />
  </div>
</template>

<script>
import Movie from './Movie.vue'

export default {
  components: {
    Movie: Movie
  },
  data(){
    return {
      movies: [
        {id: '0', title: 'Star Wars'},
        {id: '1', title: 'The King of Rings'},
      ],
      }
  },
};
</script>
