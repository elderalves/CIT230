import Vue from "vue"
import Vuex from "vuex"
import getters from "./getters"

Vue.use(Vuex);

const state = {
  adventures: [
    {
      name: "Water Rafting",
      thumb: "adventure-thumb-1.jpg",
      description: "Looking for that roller coaster rush on the water? Then our white-water rafting package is your ticket. Rapids are a mix of beginner to intermediate runs, and great for all groups, young and old."
    },
    {
      name: "Camping",
      thumb: "adventure-thumb-2.jpg",
      description: "Looking for that roller coaster rush on the water? Then our white-water rafting package is your ticket. Rapids are a mix of beginner to intermediate runs, and great for all groups, young and old."
    },
    {
      name: "Fishing",
      thumb: "adventure-thumb-3.jpg",
      description: "Fishing is one of the best and favorite past-times of the great outdoors. The Salmon River provides some of the best fishing in the country if not this hemi-shpere."
    }
  ]
}

export default new Vuex.Store({
  state,
  getters
})