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
            <ul>
                <li v-for="disco in dischi">
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