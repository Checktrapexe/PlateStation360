<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infopagina</title>

    <link rel="stylesheet" href="css/infostyle.css">
    <script type="text/javascript" src="js/main.js" defer></script>
    <style>
        @import url('https://db.onlinewebfonts.com/c/457055c70a9c98aa64002f05d6652edc?family=ITC+Eras+Demi');
    </style>
</head>

<body>

<nav>
    <?php require_once "pre-set/nav.php"; ?>
</nav>

<main>
    <!--PRODUCT HERO -->
    <section class="product-section">

        <div class="product-info">
            <h1>De Platestation 360</h1>
            <p>
                Informatie over het product. Hier staat een korte beschrijving van wat het product doet
                en waarom het waardevol is voor de gebruiker.
            </p>

            <div class="btn-group">
                <a href="#" class="btn btn-primary">Meer Info</a>
                <a href="#" class="btn btn-primary">Contact</a>
            </div>
        </div>

        <div class="product-image-wrap">
            <img class="product-img" src="media/images/placeholderFoto.png" alt="">
        </div>

    </section>

    <!-- USAGE -->
    <section class="usage-section">

        <h2>Usage</h2>

        <div class="steps-grid">

            <div class="step">
                <div class="step-img">
                    <img src="media/images/placeholderFoto.png" alt="">
                </div>
                <span class="step-label">Stap 1</span>
                <h3 class="step-title">Uitleg stap één</h3>
                <p class="step-text">
                    Word op de knop geklikt. Hier staat een korte toelichting op wat de gebruiker doet in deze stap.
                </p>
            </div>

            <div class="step">
                <div class="step-img">
                    <img src="media/images/placeholderFoto.png" alt="">
                </div>
                <span class="step-label">Stap 2</span>
                <h3 class="step-title">Uitleg stap twee</h3>
                <p class="step-text">
                    Product zelf in werking. Beschrijving van het proces terwijl het product actief gebruikt wordt.
                </p>
            </div>

            <div class="step">
                <div class="step-img">
                    <img src="media/images/placeholderFoto.png" alt="">
                </div>
                <span class="step-label">Stap 3</span>
                <h3 class="step-title">Uitleg stap drie</h3>
                <p class="step-text">
                    Resultaat. Hier zie je het eindresultaat na het doorlopen van alle stappen.
                </p>
            </div>

        </div>

    </section>
</main>

<footer>
    <?php require_once "pre-set/footer.php"; ?>
</footer>

</body>
</html>