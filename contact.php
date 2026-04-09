<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contactpagina</title>

    <link rel="stylesheet" href="css/contactstyle.css">

    <style>
        @import url('https://db.onlinewebfonts.com/c/457055c70a9c98aa64002f05d6652edc?family=ITC+Eras+Demi');
    </style>
</head>

<body>

<nav>
    <?php require_once "pre-set/nav.php"; ?>
</nav>

<main>
    <section class="contact-section">

        <div class="contact-container">

            <h1>Contact</h1>
            <p class="contact-intro">
                Heb je een vraag over het product? Neem gerust contact met ons op.
                We reageren zo snel mogelijk.
            </p>

            <form class="contact-form">

                <div class="form-row">
                    <input type="text" placeholder="Naam" required>
                    <input type="email" placeholder="E-mail" required>
                </div>

                <input type="text" placeholder="Onderwerp">

                <textarea placeholder="Bericht" rows="5" required></textarea>

                <button type="submit" class="btn btn-primary">
                    Versturen
                </button>

            </form>

        </div>

    </section>
</main>
<footer>
    <?php require_once "pre-set/footer.php"; ?>
</footer>

</body>
</html>