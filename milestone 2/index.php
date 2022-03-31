<?php 



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.18/vue.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>
<body>
    <div id="app">
        
        <header class="header">
            <figure class="logo">
                <img src="img/logo.png" alt="">
            </figure>
        </header>
        

        <main>
            <section class="main-content">
                <!-- <AlbumSelect 
                @cercaGenere="setGenreToFIlter" 
                @cercaArtista="setArtistToFilter"
                :genreList="genreList" :artistList="artistList"/> -->

                <div class="container album-wrapper">

                        <div v-for="disc in discs" class="album-card card">
                            <figure class="album__cover">
                                <img :src="disc.poster" alt="" />
                            </figure>

                            <div class="album__info">
                                <h4 class="album__title">{{disc.title}}</h4>
                                <p class="album__author">{{disc.author}}</p>
                                <p class="album__year">{{disc.year}}</p>
                            </div>
                        </div> 
                    
                </div>
            </section>
        </main>
    </div>

    <script src="app.js"></script>
</body>
</html>