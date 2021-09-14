<?php
/*
Template Name: Seances
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../wp-content/themes/julie-eggen/assets/images/favicon.ico"/>
    <script src="../../wp-content/themes/julie-eggen/assets/js/main.js"></script>
    <title>Julie Eggenspieler</title>
    <?php wp_head(); ?>
</head>
<body>
    <header class="header header-dark">
        <div class="header__logo">
            <a class="header__logo--logo" href="<?= home_url( '/accueil' ); ?>">
                <img src="../../wp-content/themes/julie-eggen/assets/images/logo-light.png" alt="logo__text"/>
                <h1 class="title-dark-header">Julie Eggenspieler</h1>
            </a>
        </div>
        <a class="menu-burger-button burger-light" href="javascript:void(0)"><i class="fas fa-bars burger"></i></a>
        <div class="header__social social">
            <a class="link link-phone link-dark-header" href="javascript:void(0)">
                <i class="fas fa-phone-alt"></i>
                <span class="span span-phone" >06 98 32 23 02</span>
                <i class="fas fa-comment-alt phone-comment comment"></i>
            </a>
            <a class="link link-email link-dark-header" href="javascript:void(0)">
                <i class="far fa-envelope"></i>
                <span class="span span-email" >julie.eggen@gmail.com</span>
                <i class="fas fa-comment-alt email-comment comment"></i>
            </a>
            <a class="link link-instagram link-dark-header" href="javascript:void(0)">
                <i class="fab fa-instagram"></i>
            </a>
            <a class="link link-facebook link-dark-header" href="javascript:void(0)">
                <i class="fab fa-facebook-f"></i>
            </a>
        </div>
        <nav class="header__nav navigation">
            <div class="close-menu-button"><i class="fas fa-times"></i></div>
            <ul class="header__nav--links">
                <li><a class="link link-dark-nav" href="<?= esc_url(home_url('/accueil/')); ?>">Accueil</a></li>
                <li><a class="link link-dark-nav" href="<?= esc_url(home_url('/analyse-transactionnelle/')); ?>">Analyse Transactionnelle</a></li>
                <li><a class="link link-dark-nav" href="<?= esc_url(home_url('/seances/')); ?>">Séances</a></li>
                <li><a class="link link-dark-nav" href="<?= esc_url(home_url('/prendre-rdv/')); ?>">Prendre RDV</a></li>
                <li><a class="link link-dark-nav" href="<?= esc_url(home_url('/parcours/')); ?>">Parcours</a></li>
                <li><a class="link link-dark-nav" href="<?= esc_url(home_url('/blog/')); ?>">Blog</a></li>
                <li><a class="link link-dark-nav" href="<?= esc_url(home_url('/faq/')); ?>">FAQ</a></li>
            </ul>
        </nav>
    </header>
    <main class="main-seances">
        <div class="main-seances__elements">
            <h2>Comment se déroulent les séances ?</h2>
            <p>
            Je crisse mon camp d'icite anyway, je déguedine au plus sacrant, ça sent la cibole de marde. Arrête de faire la baboune tabaslack, a va fondre la slutch. J'ai ben d'la misère avec les colons en bedaine. Je m'en crisse, mais câlicement. Les crottes de fromage, bien sqouick sqouick dans yeule, c'est ça le bonheur. Des patates pilées, du steak haché, du maïs en crème, pis kin toé, du pâté chinois.
            </p>
            <p>
            Mâ t'en faire moé des patentes de même, tu vas m'entendre baptinse. Gârd le, y dort sua job le ptit esti, toute évaché comme un crisse, il me gosse câlisse. Heille les ti-culs, vous er'virez de bord drette là si vous pensez que vous vous écartez dans le bois talheure. Des patates pilées, du steak haché, du maïs en crème, pis kin toé, du pâté chinois. Osti qui fa frette. Les crottes de fromage, bien sqouick sqouick dans yeule, c'est ça le bonheur.
            </p>
            <p>
            Calvenusse de tabarnouche de mausus de cârosse de patente à gosse. Il va manger un esti de char de marde tu vas vouère. Lâche pas la patate, enwoye, tu rentres la gogosse dans la slot pis ça va le faire. Baptême de crisse de cibole de viande à chien, j'en ai plein mon casse d'être toute décalissé de la vie, avec le windshier de mon char toute déviargé par l'autre esti de cave. Toryeu que c'est cheap cette esti de cochonnerie-là. J'ai ben d'la misère avec les colons en bedaine.
            </p>
            <img src="../../wp-content/themes/julie-eggen/assets/images/seances.png" alt="at-img">
        </div>
    </main>
    <footer class="footer footer-dark">
        <a class="legal legal-dark-footer" href="javascript:void(0)">Mentions légales</a>
        <div class="footer__social">
            <h4 class="title title-dark-footer">Retrouvez-moi</h4>
            <i class="fas fa-arrow-right dark-footer-fafa"></i>
            <a class="link link-dark-footer link-phone" href="javascript:void(0)"><i class="fas fa-phone-alt"></i></a>
            <a class="link link-dark-footer link-email" href="javascript:void(0)"><i class="far fa-envelope"></i></a>
            <a class="link link-dark-footer link-instagram" href="javascript:void(0)"><i class="fab fa-instagram"></i></a>
            <a class="link link-dark-footer link-facebook" href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a>
        </div>
        <p class="copyright copyright-dark-footer">&copy;&nbsp;2021&nbsp;Julie&nbsp;Eggen</p>
    </footer>
<?php wp_footer(); ?>
</body>
</html>