import Vue from "vue";
import Axios from "axios";
import VueAxios from "vue-axios";
import App from "./App.vue";

const axios = Axios.create({
  withCredentials: true,
  headers: {
    "X-Requested-With": "XMLHttpRequest",
  },
});
axios.defaults.withCredentials = true;

Vue.use(VueAxios, axios);

Vue.config.productionTip = false;

new Vue({
  render: (h) => h(App),
}).$mount("#app");
