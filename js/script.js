const { createApp } = Vue;

createApp({
  data() {
    return {
      textLogo: "Boolean",
      booleanClass: "Classe #110",
      albumText: "I 6 migliori album del 2023",
      footerText: "Made by Luigi | classe #110",
      dischi: [],
      numAlbumAttivo: 0,
      albumAttivo: {},
      branoPreferito: "",
      visualizzazioneAlbumAttivo: false,
    };
  },
  methods: {
    // chiamata api per ottenre le info di tutti gli album
    getElencoAlbum() {
      axios.get("server.php").then((response) => {
        this.dischi = response.data;
      });
    },
    // visualizzazione album selezionato
    albumSelezionato(index) {
      this.numAlbumAttivo = index; //settare numAlbumAttivo = indice della card cliccata
      // variabile true si attiva la modale
      this.visualizzazioneAlbumAttivo = true;

      //chiamata api per ottenere le info dell'album selezionato
      axios.get("server.php", { params: { index } }).then((response) => {
        this.albumAttivo = response.data;
      });
    },
    chiusuraCard() {
      // variabile false si disattiva la modale
      this.visualizzazioneAlbumAttivo = false;
    },
    aggiuntaBranoPreferito(index) {
      const data = {
        create: 1,
        branoInPost: this.branoPreferito,
      };

      axios
        .post(`server.php?index=${index}`, data, {
          headers: { "Content-type": "multipart/form-data" },
        })
        .then((response) => {
          this.albumAttivo = response.data;
        });
    },
  },
  created() {
    this.getElencoAlbum();
  },
}).mount("#app");
