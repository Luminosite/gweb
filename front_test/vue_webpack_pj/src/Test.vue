<template>
  <div>
    <h3>{{message}}</h3>
    <input v-model="message" />
  </div>
</template>

<script>
export default {
  data: {message: "hello world"}
};
</script>
