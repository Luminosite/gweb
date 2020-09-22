<!-- use template tag or render function to define html template -->
<template>
    <div>
        <p>{{message}}</p>
        <input v-model="message" />
        <T1 :t1="message" />
    </div>
</template>

<script>
    import T1 from './T1/T1.vue'
    export default {
      components: {T1:T1,},
      data() {
        return {
          message: 'Hello Vue Component!'
        }
      },
    };
</script>
<style>
p {
  color: grey;
}
</style>
