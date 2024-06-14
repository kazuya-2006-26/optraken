<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once 'head.html'; ?>
    <title>Texel</title>
    <style>
    .foto-container{
        display: flex;
        flex-direction: row;
        align-items: center;
    }
    p{
        font-style: italic;
    }
    section{
        margin: 2rem 0;
    }
    .texel_title{
        text-align: center;
    }
    .desc{
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
    }
    .desc p{
        max-width: 40%;
    }
    </style>
</head>
<body>
    <?php include_once 'header.html'; ?>

    <section>
        <div class="container-lg">
            <div class="texel_title">
                <h1>Bungaloo Namasé</h1>
            </div>
            <div class="row justify-content-center align-items-center">
                <div class="col-md-7 justify-content-center">
                    <div id="texel" class="carousel slide" data-bs-interval="false">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="/img/texel/bungalo1.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="/img/texel/bungalo2.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="/img/texel/bungalo3.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="/img/texel/bungalo4.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="/img/texel/bungalo5.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="/img/texel/bungalo6.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="/img/texel/bungalo7.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="/img/texel/bungalo8.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="/img/texel/bungalo9.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="/img/texel/bungalo10.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="/img/texel/bungalo11.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="/img/texel/bungalo12.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="/img/texel/bungalo13.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="/img/texel/bungalo14.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="/img/texel/bungalo15.png" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#texel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#texel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="desc">
            <h5>Vakantiehuis op Texel</h5>
            <p>
                Op een rustig park midden in de “Gouden Driehoek” staat de bungalow Namasté
                in een grote tuin met veel privacy. De “Gouden Driehoek” is het mooiste stukje van Texel:
                vlakbij het strand en Ecomare, aan de rand van het bos, een paar kilometer onder de Koog
                en op fietsafstand van Den Burg en de boot.
            </p>
            <a class="btn btn-secondary" href="https://www.totexel.nl/bungalow/californieweg-40-de-koog" target="_blank">vakantiehuis huren</a>
        </div>
    </section>
    
    <footer>
        <?php include_once 'footer.html'; ?>
    </footer>
</body>
</html>
