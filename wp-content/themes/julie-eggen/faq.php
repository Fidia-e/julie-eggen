<?php
/*
Template Name: FAQ
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../wp-content/themes/julie-eggen/assets/images/favicon.ico"/>
    <script src="../wp-content/themes/julie-eggen/assets/js/main.js"></script>
    <title>Julie Eggenspieler</title>
    <?php wp_head(); ?>
</head>
<body>
    <header class="header header-dark">
        <div class="header__logo">
            <a class="header__logo--logo" href="<?= home_url( '/accueil' ); ?>">
                <img src="../wp-content/themes/julie-eggen/assets/images/logo-light.png" alt="logo__text"/>
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
            <a class="link link-facebook link-dark-header" href="https://www.facebook.com/juliepsy11">
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
    <main class="main-faq">
        <div class="main-faq__title">
            <h2>Foire aux questions</h2>
            <p class="subtitle">Les questions que l'on me pose le plus souvent</p>
        </div>
        <ul class="main-faq__questions">
            <li class="main-faq__questions--single question">
                <h3>Vous pouvez répéter la question ?</h3>
                <i class="fas fa-chevron-down faq__icon"></i>
            </li>
            <li class="main-faq__questions--single response">
                <p>Mâ t'en faire moé des patentes de même, tu vas m'entendre baptinse. Gârd le, y dort sua job le ptit esti, toute évaché comme un crisse, il me gosse câlisse. Heille les ti-culs, vous er'virez de bord drette là si vous pensez que vous vous écartez dans le bois talheure. Des patates pilées, du steak haché, du maïs en crème, pis kin toé, du pâté chinois. Osti qui fa frette. Les crottes de fromage, bien sqouick sqouick dans yeule, c'est ça le bonheur.</p>
            </li>
            <li class="main-faq__questions--single question">
                <h3>Vous pouvez répéter la question ?</h3>
                <i class="fas fa-chevron-down faq__icon"></i>
            </li>
            <li class="main-faq__questions--single response">
                <p>Mâ t'en faire moé des patentes de même, tu vas m'entendre baptinse. Gârd le, y dort sua job le ptit esti, toute évaché comme un crisse, il me gosse câlisse. Heille les ti-culs, vous er'virez de bord drette là si vous pensez que vous vous écartez dans le bois talheure. Des patates pilées, du steak haché, du maïs en crème, pis kin toé, du pâté chinois. Osti qui fa frette. Les crottes de fromage, bien sqouick sqouick dans yeule, c'est ça le bonheur.</p>
            </li>
            <li class="main-faq__questions--single question">
                <h3>Vous pouvez répéter la question ?</h3>
                <i class="fas fa-chevron-down faq__icon"></i>
            </li>
            <li class="main-faq__questions--single response">
                <p>Mâ t'en faire moé des patentes de même, tu vas m'entendre baptinse. Gârd le, y dort sua job le ptit esti, toute évaché comme un crisse, il me gosse câlisse. Heille les ti-culs, vous er'virez de bord drette là si vous pensez que vous vous écartez dans le bois talheure. Des patates pilées, du steak haché, du maïs en crème, pis kin toé, du pâté chinois. Osti qui fa frette. Les crottes de fromage, bien sqouick sqouick dans yeule, c'est ça le bonheur.</p>
            </li>
            <li class="main-faq__questions--single question">
                <h3>Vous pouvez répéter la question ?</h3>
                <i class="fas fa-chevron-down faq__icon"></i>
            </li>
            <li class="main-faq__questions--single response">
                <p>Mâ t'en faire moé des patentes de même, tu vas m'entendre baptinse. Gârd le, y dort sua job le ptit esti, toute évaché comme un crisse, il me gosse câlisse. Heille les ti-culs, vous er'virez de bord drette là si vous pensez que vous vous écartez dans le bois talheure. Des patates pilées, du steak haché, du maïs en crème, pis kin toé, du pâté chinois. Osti qui fa frette. Les crottes de fromage, bien sqouick sqouick dans yeule, c'est ça le bonheur.</p>
            </li>
            <li class="main-faq__questions--single question">
                <h3>Vous pouvez répéter la question ?</h3>
                <i class="fas fa-chevron-down faq__icon"></i>
            </li>
            <li class="main-faq__questions--single response">
                <p>Mâ t'en faire moé des patentes de même, tu vas m'entendre baptinse. Gârd le, y dort sua job le ptit esti, toute évaché comme un crisse, il me gosse câlisse. Heille les ti-culs, vous er'virez de bord drette là si vous pensez que vous vous écartez dans le bois talheure. Des patates pilées, du steak haché, du maïs en crème, pis kin toé, du pâté chinois. Osti qui fa frette. Les crottes de fromage, bien sqouick sqouick dans yeule, c'est ça le bonheur.</p>
            </li>
            <li class="main-faq__questions--single question">
                <h3>Vous pouvez répéter la question ?</h3>
                <i class="fas fa-chevron-down faq__icon"></i>
            </li>
            <li class="main-faq__questions--single response">
                <p>Mâ t'en faire moé des patentes de même, tu vas m'entendre baptinse. Gârd le, y dort sua job le ptit esti, toute évaché comme un crisse, il me gosse câlisse. Heille les ti-culs, vous er'virez de bord drette là si vous pensez que vous vous écartez dans le bois talheure. Des patates pilées, du steak haché, du maïs en crème, pis kin toé, du pâté chinois. Osti qui fa frette. Les crottes de fromage, bien sqouick sqouick dans yeule, c'est ça le bonheur.</p>
            </li>
            <li class="main-faq__questions--single question">
                <h3>Vous pouvez répéter la question ?</h3>
                <i class="fas fa-chevron-down faq__icon"></i>
            </li>
            <li class="main-faq__questions--single response">
                <p>Mâ t'en faire moé des patentes de même, tu vas m'entendre baptinse. Gârd le, y dort sua job le ptit esti, toute évaché comme un crisse, il me gosse câlisse. Heille les ti-culs, vous er'virez de bord drette là si vous pensez que vous vous écartez dans le bois talheure. Des patates pilées, du steak haché, du maïs en crème, pis kin toé, du pâté chinois. Osti qui fa frette. Les crottes de fromage, bien sqouick sqouick dans yeule, c'est ça le bonheur.</p>
            </li>
            <li class="main-faq__questions--single question">
                <h3>Vous pouvez répéter la question ?</h3>
                <i class="fas fa-chevron-down faq__icon"></i>
            </li>
            <li class="main-faq__questions--single response">
                <p>Mâ t'en faire moé des patentes de même, tu vas m'entendre baptinse. Gârd le, y dort sua job le ptit esti, toute évaché comme un crisse, il me gosse câlisse. Heille les ti-culs, vous er'virez de bord drette là si vous pensez que vous vous écartez dans le bois talheure. Des patates pilées, du steak haché, du maïs en crème, pis kin toé, du pâté chinois. Osti qui fa frette. Les crottes de fromage, bien sqouick sqouick dans yeule, c'est ça le bonheur.</p>
            </li>
            <li class="main-faq__questions--single question">
                <h3>Vous pouvez répéter la question ?</h3>
                <i class="fas fa-chevron-down faq__icon"></i>
            </li>
            <li class="main-faq__questions--single response">
                <p>Mâ t'en faire moé des patentes de même, tu vas m'entendre baptinse. Gârd le, y dort sua job le ptit esti, toute évaché comme un crisse, il me gosse câlisse. Heille les ti-culs, vous er'virez de bord drette là si vous pensez que vous vous écartez dans le bois talheure. Des patates pilées, du steak haché, du maïs en crème, pis kin toé, du pâté chinois. Osti qui fa frette. Les crottes de fromage, bien sqouick sqouick dans yeule, c'est ça le bonheur.</p>
            </li>
            <li class="main-faq__questions--single question">
                <h3>Vous pouvez répéter la question ?</h3>
                <i class="fas fa-chevron-down faq__icon"></i>
            </li>
            <li class="main-faq__questions--single response">
                <p>Mâ t'en faire moé des patentes de même, tu vas m'entendre baptinse. Gârd le, y dort sua job le ptit esti, toute évaché comme un crisse, il me gosse câlisse. Heille les ti-culs, vous er'virez de bord drette là si vous pensez que vous vous écartez dans le bois talheure. Des patates pilées, du steak haché, du maïs en crème, pis kin toé, du pâté chinois. Osti qui fa frette. Les crottes de fromage, bien sqouick sqouick dans yeule, c'est ça le bonheur.</p>
            </li>
        </ul>
    </main>
    <footer class="footer footer-dark">
        <a class="legal legal-dark-footer" href="javascript:void(0)">Mentions légales</a>
        <div class="footer__social">
            <h4 class="title title-dark-footer">Retrouvez-moi</h4>
            <i class="fas fa-arrow-right dark-footer-fafa"></i>
            <a class="link link-dark-footer link-phone" href="javascript:void(0)"><i class="fas fa-phone-alt"></i></a>
            <a class="link link-dark-footer link-email" href="javascript:void(0)"><i class="far fa-envelope"></i></a>
            <a class="link link-dark-footer link-instagram" href="javascript:void(0)"><i class="fab fa-instagram"></i></a>
            <a class="link link-dark-footer link-facebook" href="https://www.facebook.com/juliepsy11"><i class="fab fa-facebook-f"></i></a>
        </div>
        <p class="copyright copyright-dark-footer">&copy;&nbsp;2021&nbsp;Julie&nbsp;Eggen</p>
    </footer>
<?php wp_footer(); ?>
</body>
</html>