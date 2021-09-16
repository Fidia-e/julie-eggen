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
    <header class="header header-light">
        <div class="header__logo">
            <a class="header__logo--logo" href="<?= home_url( '/accueil' ); ?>">
                <img src="../../wp-content/themes/julie-eggen/assets/images/logo-dark.png" alt="logo__text"/>
                <h1 class="title-light-header">Julie Eggenspieler</h1>
            </a>
        </div>
        <a class="menu-burger-button" href="javascript:void(0)"><i class="fas fa-bars burger"></i></a>
        <div class="header__social social">
            <a class="link link-phone link-light-header" href="javascript:void(0)">
                <i class="fas fa-phone-alt"></i>
                <span class="span span-phone" >06 98 32 23 02</span>
                <i class="fas fa-comment-alt phone-comment comment"></i>
            </a>
            <a class="link link-email link-light-header" href="javascript:void(0)">
                <i class="far fa-envelope"></i>
                <span class="span span-email" >julie.eggen@gmail.com</span>
                <i class="fas fa-comment-alt email-comment comment"></i>
            </a>
            <a class="link link-instagram link-light-header" href="javascript:void(0)">
                <i class="fab fa-instagram"></i>
            </a>
            <a class="link link-facebook link-light-header" href="https://www.facebook.com/juliepsy11">
                <i class="fab fa-facebook-f"></i>
            </a>
        </div>
        <?php
            get_template_part('template-parts/header-menu');
        ?>
    </header>