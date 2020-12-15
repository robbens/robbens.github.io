<template>
  <div id="app">
<!--    <CalculatorIskTax></CalculatorIskTax>-->
    <Calculator></Calculator>
  </div>
</template>

<script>
import Calculator from "./components/Calculator";

export default {
  name: 'App',
  components: {
    Calculator,
  }
}
</script>

<style>
@import "./assets/tailwind.min.css";
@import url('https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;700&display=swap');

#app {
  font-family: 'Work Sans', Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
</style>
