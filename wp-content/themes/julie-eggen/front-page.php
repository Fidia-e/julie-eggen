<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/images/favicon.ico"/>
    <script src="../wp-content/themes/julie-eggen/assets/js/main.js"></script>
    <title>Julie Eggenspieler</title>
    <?php wp_head(); ?>
</head>
<body>
    <main class="container">
        <div class="container__title">
            <h1>Julie Eggenspieler</h1>
        </div>
        <div class="container__hero">
            <div class="container__hero--logo">
                <div class="cercle" id="cercle1"></div>
                <div class="cercle" id="cercle2"></div>
                <div class="cercle" id="cercle3"></div>
            </div>
            <div class="container__hero--picture">
                <img src="../wp-content/themes/julie-eggen/assets/images/welcome-pic.jpg" alt="">
            </div>
            <div class="container__hero--subtitle">
                <h2>Psychothérapie <br><br> Analyse transactionnelle </h2>
            </div>
        </div>
        <div class="container__gif">
            <img src="../wp-content/themes/julie-eggen/assets/images/welcome-gif.gif" alt="signature-gif">
        </div>
        <div class="container__button">
            <a class="container__button--button" href="<?= home_url( '/accueil' ); ?>">
                <input type="button">
                <h3>Bienvenue</h3>
                <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </main>
    <?php wp_footer(); ?>
</body>
</html>