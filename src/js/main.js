import Vue from "vue"
import Vuex from "vuex"
import App from "./App.vue"

var mainCSS = require('../scss/main.scss');

new Vue({
  el: "#app",
  template: "<app></app>",
  components: {
    App
  }
})