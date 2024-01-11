const { createApp } = Vue;

createApp({
  data() {
    return {
      textLogo: "Boolean",
      booleanClass: "Classe #110",
      albumText: "I 6 migliori album del 2023",
      footerText: "Made by classe #110",
      dischi: [],
      numAlbumAttivo: 0,
      albumAttivo: [],
      visualizzazioneAlbumAttivo: false,
    };
  },
  methods: {
    getElencoAlbum() {
      axios.get("server.php").then((response) => {
        this.dischi = response.data;
      });
    },
    // visualizzazione album selezionato
    albumSelezionato(index) {
      this.numAlbumAttivo = index;
      this.visualizzazioneAlbumAttivo = true;

      //chiamata api per ottenere le info dell'album selezionato
      axios.get("server.php").then((response) => {
        this.albumAttivo = response.data[index];
      });
    },
    chiusuraCard() {
      this.visualizzazioneAlbumAttivo = false;
    },
  },
  created() {
    this.getElencoAlbum();
  },
}).mount("#app");
