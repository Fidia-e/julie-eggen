<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/images/favicon.ico"/>
    <script src="../assets/js/main.js"></script>
    <title>Julie Eggen</title>
    <?php wp_head(); ?>
</head>
<body>
    <header class="header header-dark">
        <div class="header__logo">
            <a class="header__logo--logo" href="javascript:void(0)">
                <img src="../assets/images/logo-light.png" alt="logo__text"/>
                <h1 class="title-dark-header">Julie Eggen</h1>
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
                <li><a class="link active link-dark-nav" href="javascript:void(0)">Accueil</a></li>
                <li><a class="link link-dark-nav" href="javascript:void(0)">Analyse Transactionnelle</a></li>
                <li><a class="link link-dark-nav" href="javascript:void(0)">Séances</a></li>
                <li><a class="link link-dark-nav" href="javascript:void(0)">Prendre RDV</a></li>
                <li><a class="link link-dark-nav" href="javascript:void(0)">Parcours</a></li>
                <li><a class="link link-dark-nav" href="javascript:void(0)">Blog</a></li>
                <li><a class="link link-dark-nav" href="javascript:void(0)">FAQ</a></li>
            </ul>
        </nav>
    </header>
    <main class="main-consultations">
        <div class="main-consultations__text main-consultations__text--contact">
            <h3>Premier contact</h3>
            <hr class="bottom-line">
            <p>Pour établir un premier contact, vous pouvez me joindre par téléphone au :</p>
            <p><span>06 98 32 23 02</span></p>
            <br>
            <p>Vous pouvez également choisir de m'écrire par email à cette adresse :</p>
            <p><span>julie.eggen@gmail.com</span></p>
            <br>
            <p>Je me ferai un plaisir de répondre à vos questions.</p>
            <img src="../assets/images/contact.png" alt="plan-rdv">
        </div>
        <div class="main-consultations__text main-consultations__text--agenda">
            <h3>Fixer un rendez-vous</h3>
            <hr class="bottom-line">
            <p>Si vous décidez d'entreprendre une thérapie, nous établissons ensemble la liste de vos besoins et de vos attentes.</p>
            <p>Puis nous convenons d'un rendez-vous, en fonction.</p>
            <img class="img-agenda" src="../assets/images/agenda.png" alt="plan-rdv">
        </div>
        <div class="main-consultations__text main-consultations__text--consult">
            <h3>Consultation</h3>
            <hr class="bottom-line">
            <p>Puis arrive le jour de la consultation, et nous nous rencontrons via Zoom :</p>
            <p>(---adresse zoom---)</p>
            <br>
            <p>ou bien, si nos conditions le permettent, à l'adresse suivante :</p>
            <p><span class="address-span">111, rue du Grand Cerf 57000 Metz</span></p>
            <img class="img-map" src="../assets/images/map.png" alt="plan-rdv">
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