<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./dist/css/app.css">
    <title>VUE DISKS FROM PHP</title>
</head>
<body>
<div id="app">
    <?php
        include './templates/header.php';
    ?>
    <main id="site_main">
        <div class="albums" v-for="album in albums">        
            <img :src="album.poster" width="180" alt="">
            <h2 class="album_title">{{ album.title }}</h2>
            <div class="album_artist">{{ album.author }}</div>
            <div class="album_year">{{ album.year }}</div>
        </div>
    </main>

</div>
    <!-- Vue JS -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <!-- AXIOS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Script my app.js -->
    <script src="./dist/js/app.js"></script>
</body>
</html>