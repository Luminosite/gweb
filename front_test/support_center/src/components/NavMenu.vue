<template>
  <nav>
    <router-link :to="{name: 'home'}" exact>Home</router-link>
    <span class="nav_split">|</span>
    <router-link :to="{name: 'faq'}" exact>FAQ</router-link>
  </nav>
</template>

<style lang="stylus">
@import '../style/imports';

.router-link-active {
  border-bottom-color: $primary-color;
}
</style>
