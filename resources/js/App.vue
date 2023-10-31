<template>
  <head>
    <link rel="stylesheet" href="css/main.css" />
  </head>
  <div id="app">
    <Header />
    <Body />
  </div>
</template>
<script>
import Header from './components/Header.vue';
import Body from './components/Body.vue';

export default {
  name: 'app',
  components: {Header, Body}
}
</script>
