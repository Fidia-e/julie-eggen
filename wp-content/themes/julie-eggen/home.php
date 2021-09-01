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
    <header class="header header-light">
        <div class="header__logo">
            <a class="header__logo--logo" href="<?= home_url( '/home' ); ?>">
                <img src="../assets/images/logo-dark.png" alt="logo__text"/>
                <h1 class="title-light-header">Julie Eggen</h1>
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
            <a class="link link-facebook link-light-header" href="javascript:void(0)">
                <i class="fab fa-facebook-f"></i>
            </a>
        </div>
        <?php
            get_template_part('template-parts/header-menu');
        ?>
    </header>
    <main class="main">
        <section class="main__presentation">
            <div class="main__presentation--articles box-shadow">
                <h2>Les derniers articles</h2>
                <article>
                    <h3>Exemple de titre d'article</h3>
                    <p class="date">écrit le 6 mai 2021</p>
                    <p>Aperçu de l'article. Ça a fessé dans le dash en esti hier... Bla-bla-bla-bla-bla...</p>
                    <a class="articles--more" href="javascript:void(0)">Lire l'article &nbsp;<i class="fas fa-angle-double-right"></i></a>
                </article>
                <article>
                    <h3>Encore un exemple de titre d'article</h3>
                    <p class="date">écrit le 6 juin 2021</p>
                    <p>Aperçu de l'article. Ça a fessé dans le dash en esti hier... Bla-bla-bla-bla-bla...</p>
                    <a class="articles--more" href="javascript:void(0)">Lire l'article &nbsp;<i class="fas fa-angle-double-right"></i></a>
                </article>
                <article>
                    <h3>Dernier exemple de titre d'article</h3>
                    <p class="date">écrit le 16 juin 2021</p>
                    <p>Aperçu de l'article. Ça a fessé dans le dash en esti hier... Bla-bla-bla-bla-bla...</p>
                    <a class="articles--more" href="javascript:void(0)">Lire l'article &nbsp;<i class="fas fa-angle-double-right"></i></a>
                </article>
            </div>
            <div class="main__presentation--profil box-shadow">
                <div class="main__presentation--profil--picture">
                    <img src="../assets/images/julie-profil.jpg" alt="photo-de-profil">
                </div>
                <div class="main__presentation--profil--description">
                    <h1>Julie Eggenspieler</h1>
                    <p class="subtitle">Psychopraticienne en analyse transactionnelle</p>
                    <p>
                        Gârd le, y dort sua job le ptit esti, toute évaché comme un crisse, il me gosse câlisse. Mon char est resté pogné dans crisse de slotche toute la nuite. J'ai finalement pogné la twist pour faire la poutine. Lâche pas la patate, enwoye, tu rentres la gogosse dans la slot pis ça va le faire. Baptême de crisse de cibole de viande à chien, j'en ai plein mon casse d'être toute décalissé de la vie, avec le windshier de mon char toute déviargé par l'autre esti de cave. Je crisse mon camp d'icite anyway, je déguedine au plus sacrant, ça 
                        <br><br>
                        Baptême de crisse de cibole de viande à chien, j'en ai plein mon casse d'être toute décalissé de la vie, avec le windshier de mon char toute déviargé par l'autre esti de cave. Mâ t'en faire moé des patentes de même, tu vas m'entendre baptinse. Toryeu que c'est cheap cette esti de cochonnerie-là. Ya 'ien qu'une affaire qui me démange, c'est de le pogner par les dessours de bras pis de le câlicer au travers du châssis. Il va manger un esti de char de marde tu vas vouère. Je crisse mon camp d'icite anyway, je déguedine au plus sacrant, ça sent la cibole de marde.
                    </p>
                </div>
            </div>
        </section>
        <section class="main__services box-shadow">
            <h1>Prises en charges</h1>
            <p class="subtitle">Qu'est-ce que l'analyse transactionnelle ?</p>
            <p>
                Sa blonde m'en a sacré toute une au parcheesi, mais elle a été mardeuse. Mon char est resté pogné dans crisse de slotche toute la nuite. Ça a fessé dans le dash en esti hier, j'étais paqueté en tabarnak, je suis crissement lendemain de veille. J'ai ben d'la misère avec les colons en bedaine. Osti qui fa frette. Ya 'ien qu'une affaire qui me démange, c'est de le pogner par les dessours de bras pis de le câlicer au travers du châssis.
                <br><br>
                Baptême de crisse de cibole de viande à chien, j'en ai plein mon casse d'être toute décalissé de la vie, avec le windshier de mon char toute déviargé par l'autre esti de cave. Mâ t'en faire moé des patentes de même, tu vas m'entendre baptinse. Toryeu que c'est cheap cette esti de cochonnerie-là. Ya 'ien qu'une affaire qui me démange, c'est de le pogner par les dessours de bras pis de le câlicer au travers du châssis. Il va manger un esti de char de marde tu vas vouère. Je crisse mon camp d'icite anyway, je déguedine au plus sacrant, ça sent la cibole de marde.
            </p>
            <p>
                Sa blonde m'en a sacré toute une au parcheesi, mais elle a été mardeuse. Mon char est resté pogné dans crisse de slotche toute la nuite. Ça a fessé dans le dash en esti hier, j'étais paqueté en tabarnak, je suis crissement lendemain de veille. J'ai ben d'la misère avec les colons en bedaine. Osti qui fa frette. Ya 'ien qu'une affaire qui me démange, c'est de le pogner par les dessours de bras pis de le câlicer au travers du châssis.
                <br><br>
                Gârd le, y dort sua job le ptit esti, toute évaché comme un crisse, il me gosse câlisse. Mon char est resté pogné dans crisse de slotche toute la nuite. J'ai finalement pogné la twist pour faire la poutine. Lâche pas la patate, enwoye, tu rentres la gogosse dans la slot pis ça va le faire. Baptême de crisse de cibole de viande à chien, j'en ai plein mon casse d'être toute décalissé de la vie, avec le windshier de mon char toute déviargé par l'autre esti de cave. Je crisse mon camp d'icite anyway, je déguedine au plus sacrant, ça 
                <br><br>
                Baptême de crisse de cibole de viande à chien, j'en ai plein mon casse d'être toute décalissé de la vie, avec le windshier de mon char toute déviargé par l'autre esti de cave. Mâ t'en faire moé des patentes de même, tu vas m'entendre baptinse. Toryeu que c'est cheap cette esti de cochonnerie-là. Ya 'ien qu'une affaire qui me démange, c'est de le pogner par les dessours de bras pis de le câlicer au travers du châssis. Il va manger un esti de char de marde tu vas vouère. Je crisse mon camp d'icite anyway, je déguedine au plus sacrant, ça sent la cibole de marde.
            </p>

            <p class="subtitle">Pour qui ?</p>
            <p>
                Sa blonde m'en a sacré toute une au parcheesi, mais elle a été mardeuse. Mon char est resté pogné dans crisse de slotche toute la nuite. Ça a fessé dans le dash en esti hier, j'étais paqueté en tabarnak, je suis crissement lendemain de veille. J'ai ben d'la misère avec les colons en bedaine. Osti qui fa frette. Ya 'ien qu'une affaire qui me démange, c'est de le pogner par les dessours de bras pis de le câlicer au travers du châssis.
                <br><br>
                Gârd le, y dort sua job le ptit esti, toute évaché comme un crisse, il me gosse câlisse. Mon char est resté pogné dans crisse de slotche toute la nuite. J'ai finalement pogné la twist pour faire la poutine. Lâche pas la patate, enwoye, tu rentres la gogosse dans la slot pis ça va le faire. Baptême de crisse de cibole de viande à chien, j'en ai plein mon casse d'être toute décalissé de la vie, avec le windshier de mon char toute déviargé par l'autre esti de cave. Je crisse mon camp d'icite anyway, je déguedine au plus sacrant, ça 
                <br><br>
                Baptême de crisse de cibole de viande à chien, j'en ai plein mon casse d'être toute décalissé de la vie, avec le windshier de mon char toute déviargé par l'autre esti de cave. Mâ t'en faire moé des patentes de même, tu vas m'entendre baptinse. Toryeu que c'est cheap cette esti de cochonnerie-là. Ya 'ien qu'une affaire qui me démange, c'est de le pogner par les dessours de bras pis de le câlicer au travers du châssis. Il va manger un esti de char de marde tu vas vouère. Je crisse mon camp d'icite anyway, je déguedine au plus sacrant, ça sent la cibole de marde.
            </p>
        </section>
        <section class="main__consultations box-shadow">
            <h1>Consultations</h1>
            <p class="subtitle">Comment ça se passe ?</p>
            <p>
                Sa blonde m'en a sacré toute une au parcheesi, mais elle a été mardeuse. Mon char est resté pogné dans crisse de slotche toute la nuite. Ça a fessé dans le dash en esti hier, j'étais paqueté en tabarnak, je suis crissement lendemain de veille. J'ai ben d'la misère avec les colons en bedaine. Osti qui fa frette. Ya 'ien qu'une affaire qui me démange, c'est de le pogner par les dessours de bras pis de le câlicer au travers du châssis.
                <br><br>
                <br><br>
                Baptême de crisse de cibole de viande à chien, j'en ai plein mon casse d'être toute décalissé de la vie, avec le windshier de mon char toute déviargé par l'autre esti de cave. Mâ t'en faire moé des patentes de même, tu vas m'entendre baptinse. Toryeu que c'est cheap cette esti de cochonnerie-là. Ya 'ien qu'une affaire qui me démange, c'est de le pogner par les dessours de bras pis de le câlicer au travers du châssis. Il va manger un esti de char de marde tu vas vouère. Je crisse mon camp d'icite anyway, je déguedine au plus sacrant, ça sent la cibole de marde.
            </p>
            <p>
                Sa blonde m'en a sacré toute une au parcheesi, mais elle a été mardeuse. Mon char est resté pogné dans crisse de slotche toute la nuite. Ça a fessé dans le dash en esti hier, j'étais paqueté en tabarnak, je suis crissement lendemain de veille. J'ai ben d'la misère avec les colons en bedaine. Osti qui fa frette. Ya 'ien qu'une affaire qui me démange, c'est de le pogner par les dessours de bras pis de le câlicer au travers du châssis.
                <br><br>
                <br><br>
                Baptême de crisse de cibole de viande à chien, j'en ai plein mon casse d'être toute décalissé de la vie, avec le windshier de mon char toute déviargé par l'autre esti de cave. Mâ t'en faire moé des patentes de même, tu vas m'entendre baptinse. Toryeu que c'est cheap cette esti de cochonnerie-là. Ya 'ien qu'une affaire qui me démange, c'est de le pogner par les dessours de bras pis de le câlicer au travers du châssis. Il va manger un esti de char de marde tu vas vouère. Je crisse mon camp d'icite anyway, je déguedine au plus sacrant, ça sent la cibole de marde.
            </p>
            <img src="../assets/images/therapie.png" alt="therapie consult illustration">
        </section>
        <section class="main__testimonials">
            <div class="main__testimonials--title">
                <h1>Témoignages</h1>
                <p class="subtitle">Ils m'ont fait confiance</p>
            </div>
            <div class="main__testimonials--content carousel">
                <div class="main__testimonials--content--testimonial carousel--item box-shadow" data-number="0">
                    <div class="testimonial--author">
                        <h4>Pierre &nbsp; <span>50 ans </span> </h4>
                    </div>
                    <p class="txt">
                        J'ai ben d'la misère avec les colons en bedaine. Osti qui fa frette. Ya 'ien qu'une affaire qui me démange, c'est de le pogner par les dessours de bras pis de le câlicer au travers du châssis.
                        Toryeu que c'est cheap cette esti de cochonnerie-là. Ya 'ien qu'une affaire qui me démange, c'est de le pogner par les dessours de bras pis de le câlicer au travers du châssis. Il va manger un esti de char de marde tu vas vouère. Je crisse mon camp d'icite anyway, je déguedine au plus sacrant, ça sent la cibole de marde.
                    </p>
                </div>
                <div class="main__testimonials--content--testimonial carousel--item box-shadow" data-number="1">
                    <div class="testimonial--author">
                        <h4>Paul &nbsp; <span>26 ans</span> </h4>
                    </div>
                    <p class="txt">
                        J'ai ben d'la misère avec les colons en bedaine. Osti qui fa frette. Ya 'ien qu'une affaire qui me démange, c'est de le pogner par les dessours de bras pis de le câlicer au travers du châssis.
                        Toryeu que c'est cheap cette esti de cochonnerie-là. Ya 'ien qu'une affaire qui me démange, c'est de le pogner par les dessours de bras pis de le câlicer au travers du châssis. Il va manger un esti de char de marde tu vas vouère. Je crisse mon camp d'icite anyway, je déguedine au plus sacrant, ça sent la cibole de marde.
                    </p>
                </div>
                <div class="main__testimonials--content--testimonial carousel--item box-shadow" data-number="2">
                    <div class="testimonial--author">
                        <h4>Jacques &nbsp; <span>non renseigné</span></h4>
                    </div>
                    <p class="txt">
                        J'ai ben d'la misère avec les colons en bedaine. Osti qui fa frette. Ya 'ien qu'une affaire qui me démange, c'est de le pogner par les dessours de bras pis de le câlicer au travers du châssis.
                        Toryeu que c'est cheap cette esti de cochonnerie-là. Ya 'ien qu'une affaire qui me démange, c'est de le pogner par les dessours de bras pis de le câlicer au travers du châssis. Il va manger un esti de char de marde tu vas vouère. Je crisse mon camp d'icite anyway, je déguedine au plus sacrant, ça sent la cibole de marde.
                    </p>
                </div>
            </div>
            <div class="main__testimonials--numbers">
                <div class="number box-shadow" data-slide-number="0"></div>
                <div class="number box-shadow" data-slide-number="1"></div>
                <div class="number box-shadow" data-slide-number="2"></div>
            </div>
        </section>
        <section class="main__email box-shadow">  
            <h1>M'écrire</h1>
            <p class="subtitle">Vous avez une question? Ou vous souhaitez prendre rdv ?</p>
            <form class="main__email--form" action="" method="">
                <h4>Écrivez votre message *</h4>
                <p>Votre nom et prénom :</p>
                <input type="text" placeholder="tapez votre prénom et nom ici">
                <p>Votre adresse mail :</p>
                <input type="text" placeholder="tapez votre adresse email ici">
                <p>Votre message :</p>
                <textarea class="message" type="text" placeholder="tapez votre message ici"></textarea>
                <p class="consigne">* Afin de faciliter l'échange, merci de renseigner tous les champs.</p>
                <button class="form-button" type="submit" value="Envoyer">
                    <h4>Envoyer</h4>
                    <i class="fas fa-arrow-right"></i>
                </button>
            </form>
        </section>
    </main>
<?php get_footer(); ?>