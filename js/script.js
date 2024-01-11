const { createApp } = Vue;

createApp({
  data() {
    return {
      dischi: [],
    };
  },
  methods: {
    getElencoAlbum() {
      axios.get("server.php").then((response) => {
        this.dischi = response.data;
      });
    },
  },
  created() {
    this.getElencoAlbum();
  },
}).mount("#app");
