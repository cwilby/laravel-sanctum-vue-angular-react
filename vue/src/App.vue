<template>
  <div id="app">
    <button @click="login()">Perform automated login</button>

    <pre>{{ user }}</pre>
  </div>
</template>

<script>
export default {
  name: "App",

  data: () => ({
    user: {},
  }),

  methods: {
    async login() {
      await this.$http.get("http://api.sanctum.test/sanctum/csrf-cookie");

      await this.$http.post("http://api.sanctum.test/login", {
        email: "test@example.com",
        password: "secret",
      });

      const { data } = await this.$http.get("http://api.sanctum.test/api/user");

      this.user = data;
    },
  },
};
</script>

<style></style>
