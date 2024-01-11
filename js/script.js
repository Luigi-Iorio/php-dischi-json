const { createApp } = Vue;

createApp({
  data() {
    return {
      textLogo: "Boolean",
      booleanClass: "Classe #110",
      albumText: "I 6 migliori album del 2023",
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
