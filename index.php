<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dischi JSON</title>
    <!-- google font - roboto -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- /google font - roboto -->
    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- /css -->
</head>

<body>
    <div id="app">
        <!-- header -->
        <header>
            <!-- logo -->
            <a href="#">{{ textLogo }}</a>
            <!-- /logo -->

            <!-- classe -->
            <h3>{{ booleanClass }}</h3>
            <!-- /classe -->
        </header>
        <!-- /header -->

        <!-- main -->
        <main>
            <h1>{{ albumText }}</h1>
            <!-- lista album -->
            <ul>
                <li v-for="(disco, index) in dischi" @click="albumSelezionato(index)">
                    <div class="card">
                        <div class="img">
                            <img :src="disco.img" :alt="disco.nome">
                        </div>
                        <h4>{{disco.nome}}</h4>
                        <p>{{disco.artista}}</p>
                        <p>{{disco.anno}}</p>
                    </div>
                </li>
            </ul>
            <!-- /lista album -->

            <!-- album selezionato -->
            <div class="card-esplosa" :class="visualizzazioneAlbumAttivo === true ? 'd-block' : 'd-none'">
                <div class="cont">
                    <div class="card">
                        <div class="img">
                            <img :src="albumAttivo.img" :alt="albumAttivo.nome">
                        </div>
                        <h4>{{albumAttivo.nome}}</h4>
                        <p>{{albumAttivo.artista}}</p>
                        <p>{{albumAttivo.anno}}</p>
                        <p>{{albumAttivo.durata}}</p>
                        <div class="artista">
                            <div class="img-artista">
                                <img :src="albumAttivo.imgartista" :alt="albumAttivo.artista">
                            </div>
                            <p>{{albumAttivo.artista}}</p>
                        </div>
                        <div class="brani">
                            <div class="preferito" v-if="albumAttivo.brano !== ''">
                                <p>Brano preferito: <span>{{ albumAttivo.brano }}</span></p>
                            </div>
                            <form v-if="albumAttivo.brano === ''" @submit.prevent="aggiuntaBranoPreferito(numAlbumAttivo)">
                                <div class="inserimento">
                                    <label for="brano">Inserisci il tuo brano preferito</label>
                                    <input type="text" name="brano" id="brano" placeholder="canzone preferita" v-model="branoPreferito">
                                </div>
                                <button>+</button>
                            </form>
                        </div>
                        <button @click="chiusuraCard()">Chiudi Album</button>
                    </div>
                </div>
            </div>
            <!-- /album selezionato -->
        </main>
        <!-- /main -->

        <!-- footer -->
        <footer>
            <h4>{{ footerText }}</h4>
        </footer>
        <!-- /footer -->
    </div>
    <!-- vue -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- /vue -->
    <!-- axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- /axios -->
    <!-- js -->
    <script src="js/script.js"></script>
    <!-- js -->
</body>

</html>