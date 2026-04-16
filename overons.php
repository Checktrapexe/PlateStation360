<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>PlateStation360 - Over Ons</title>
    <link rel="stylesheet" href="css/styleoverons.css"/>
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
    <section class="hero-section">
        <div class="container hero-grid">

            <div class="hero-content">
                <h1>Over Ons</h1>
                <h2><span>Team 13</span></h2>
                <p>
                    Wij zijn Eren, Chris, Efe en Joey. Voor een schoolopdracht hebben wij
                    de PlateStation360 ontwikkeld. Ons doel is om eten toegankelijker,
                    comfortabeler en zelfstandiger te maken.
                </p>

                <div class="hero-buttons">
                    <a href="info.php" class="btn btn-primary">Over PlateStation</a>
                    <a href="contact.php" class="btn btn-secondary">Contact</a>
                </div>
            </div>

            <div class="hero-visual">
                <div class="product-image">
                    <img src="media/images/platestationfood2.png" alt="">
                </div>
            </div>

        </div>
    </section>
    <section class="feature-section feature-light">
        <div class="container feature-grid">

            <div class="feature-image">
                <img src="media/images/platestationfood.png" alt="">
            </div>

            <div class="light-text">
                <h2>De Opdracht</h2>
                <p>
                    Voor deze opdracht hebben wij een oplossing bedacht voor mensen met een
                    motorische beperking.
                </p>

                <div class="info-card">
                    <h3>PlateStation360</h3>
                    <p>
                        Een slimme oplossing die zelfstandig eten makkelijker maakt.
                    </p>
                </div>
            </div>

        </div>
    </section>

    <!-- STORY / CONTEXT -->
    <section class="story-section">
        <div class="container story-grid">

            <div class="story-content">
                <h2>Doelgroep & Context</h2>
                <p>
                    Onze doelgroep bestaat uit mensen met een motorische beperking die
                    moeite hebben met zelfstandig eten.
                </p>
                <p>
                    De PlateStation360 is ontworpen voor situaties zoals uit eten gaan,
                    waar comfort en zelfstandigheid belangrijk zijn.
                </p>

                <div class="team-buttons">
                    <a href="contact.php" class="btn btn-outline-light">Contact</a>
                </div>
            </div>

            <div class="story-image">
                <img src="media/images/platestationinuise.png" alt="">
            </div>

        </div>
    </section>

    <!-- TEAM -->
    <section class="team-section ">
        <div class="container">

            <div class="section-heading">
                <h2>Ons Team</h2>
                <p>Maak kennis met de mensen achter PlateStation360</p>
            </div>

            <div class="team-grid">

                <div class="team-card">
                    <div class="avatar">
                        <img src="media/images/ErenAboutus.png" alt="" class="avatar">
                    </div>

                    <h3>Eren</h3>
                    <p>Developer</p>
                </div>

                <div class="team-card">
                    <div class="avatar">
                        <img src="media/images/chrisAboutus.png" alt="" class="avatar">
                    </div>
                    <h3>Chris</h3>
                    <p>Designer</p>
                </div>

                <div class="team-card">
                    <div class="avatar">
                        <img src="media/images/Efefotoo.JPG" alt="" class="avatar">
                    </div>
                    <h3>Efe</h3>
                    <p>Research</p>
                </div>

                <div class="team-card">
                    <div class="avatar">
                        <img src="media/images/fotojoey.png" alt="" class="avatar">
                    </div>
                    <h3>Joey</h3>
                    <p>Concept</p>
                </div>

            </div>

        </div>
    </section>

</main>

<footer class="footer">
    <?php require_once "pre-set/footer.php"; ?>
</footer>

</body>
</html>