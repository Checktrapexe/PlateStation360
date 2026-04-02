<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>PlateStation360 - Over Ons</title>
    <link rel="stylesheet" href="css/styleoverons.css"/>
    <style>
        @import url(https://db.onlinewebfonts.com/c/457055c70a9c98aa64002f05d6652edc?family=ITC+Eras+Demi);
        @import url(https://www.dropbox.com/scl/fi/ctijlfue8498st43rt2sq/Alphazet-SemiBold.ttf?rlkey=b8kbprn901h9ezlhh02zlwdr7&st=n1sr65w7&dl=1);
    </style>
</head>
<body>

<nav>
    <?php require_once "pre-set/nav.php"; ?>
</nav>


<main>
    <section class="hero container">
        <div class="hero-text">
            <h1>Over Ons</h1>
            <p>
                Wij zijn Eren, Chris, Efe en Joey. Voor een schoolopdracht hebben wij
                de PlateStation360 ontwikkeld. Met dit project richten wij ons op mensen
                met een motorische beperking in de context van uit eten gaan. Ons doel
                is om eten toegankelijker, comfortabeler en zelfstandiger te maken.
            </p>
        </div>

        <div class="hero-image">
            <div class="image-placeholder">
                <span>Productfoto</span>
            </div>
        </div>
    </section>

    <section class="info-sections container">
        <div class="info-block">
            <div class="section-title">
                <span class="icon purple">📝</span>
                <h2>De Opdracht</h2>
            </div>
            <div class="line blue"></div>
            <p>
                Voor deze opdracht hebben wij een oplossing bedacht voor mensen met een
                motorische beperking in de context van uit eten gaan. Hieruit is de
                PlateStation360 ontstaan.
            </p>
        </div>

        <div class="info-block">
            <div class="section-title">
                <span class="icon blue-icon">♿</span>
                <h2>Doelgroep &amp; Context</h2>
            </div>
            <div class="line blue"></div>
            <p>
                Mensen met een motorische beperking die moeite kunnen ervaren met
                zelfstandig eten.
            </p>

            <div class="context-card">
                <h3>Uit Eten Gaan</h3>
                <p>
                    De PlateStation360 is ontworpen voor de situatie van uit eten gaan,
                    waar zelfstandig eten soms lastig kan zijn.
                </p>
            </div>
        </div>
    </section>

    <section class="team-section">
        <div class="container">
            <div class="team-header">
                <div class="section-title">
                    <span class="icon team">👥</span>
                    <h2>Ons Team</h2>
                </div>
                <p>Maak kennis met de gezichten achter PlateStation360.</p>
                <div class="line white"></div>
            </div>

            <div class="team-grid">
                <div class="team-card">
                    <div class="avatar"></div>
                    <h3>Eren</h3>
                </div>

                <div class="team-card">
                    <div class="avatar"></div>
                    <h3>Chris</h3>
                </div>

                <div class="team-card">
                    <div class="avatar"></div>
                    <h3>Efe</h3>
                </div>

                <div class="team-card">
                    <div class="avatar"></div>
                    <h3>Joey</h3>
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