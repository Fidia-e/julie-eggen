<?php
/*
Template Name: Blog
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
    <header class="header header-light">
        <div class="header__logo">
            <a class="header__logo--logo" href="<?= home_url( '/accueil' ); ?>">
                <img src="../wp-content/themes/julie-eggen/assets/images/logo-dark.png" alt="logo__text"/>
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
            <a class="link link-instagram link-light-header" target="_blank" href="javascript:void(0)">
                <i class="fab fa-instagram"></i>
            </a>
            <a class="link link-facebook link-light-header" target="_blank" href="https://www.facebook.com/juliepsy11">
                <i class="fab fa-facebook-f"></i>
            </a>
        </div>
        <?php
            get_template_part('template-parts/header-menu');
        ?>
    </header>
    
    <main class="main-blog">
        <section class="excerpt-list">
            <article class="single-excerpt">
                <a class="single-excerpt__link" href="javascript:void(0)">
                    <div class="single-excerpt__link--elements" style="background-image: url('https://images.unsplash.com/photo-1523304108042-8ac30850c748?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NTN8fGJveSUyMGxhdWdoaW5nfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60')">
                        <h3 class="single-excerpt__link--elements--title">Vivons enfants et faisons des heureux</h3>
                        <p class="single-excerpt__link--elements--text">Ferme-toé un peu le mâche-patate là, va prendre une marche ou quelque chose. Mon char est resté pogné dans crisse de slotche toute la nuite. Toryeu que c'est cheap cette esti de cochonnerie-là !</p>
                        <a class="single-excerpt__link--elements--more" href="javascript:void(0)">Lire l'article &nbsp;<i class="fas fa-angle-double-right"></i></a>
                    </div>
                </a>
            </article>
            <article class="single-excerpt">
                <a class="single-excerpt__link" href="javascript:void(0)">
                <div class="single-excerpt__link--elements" style="background-image: url('https://images.unsplash.com/photo-1530595467537-0b5996c41f2d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8aHVtb3VyfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=800&q=60')">
                        <h3 class="single-excerpt__link--elements--title">Faire comme Baloo</h3>
                        <p class="single-excerpt__link--elements--text">Ferme-toé un peu le mâche-patate là, va prendre une marche ou quelque chose. Mon char est resté pogné dans crisse de slotche toute la nuite. Toryeu que c'est cheap cette esti de cochonnerie-là !</p>
                        <a class="single-excerpt__link--elements--more" href="javascript:void(0)">Lire l'article &nbsp;<i class="fas fa-angle-double-right"></i></a>
                    </div>
                </a>
            </article>
            <article class="single-excerpt">
                <a class="single-excerpt__link" href="javascript:void(0)">
                <div class="single-excerpt__link--elements" style="background-image: url('https://images.unsplash.com/photo-1610755587422-c9d43da327b5?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8YmFyYmllJTIwcGllfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60')">
                        <h3 class="single-excerpt__link--elements--title">Les envies</h3>
                        <p class="single-excerpt__link--elements--text">Ferme-toé un peu le mâche-patate là, va prendre une marche ou quelque chose. Mon char est resté pogné dans crisse de slotche toute la nuite. Toryeu que c'est cheap cette esti de cochonnerie-là !</p>
                        <a class="single-excerpt__link--elements--more" href="javascript:void(0)">Lire l'article &nbsp;<i class="fas fa-angle-double-right"></i></a>
                    </div>
                </a>
            </article>
            <article class="single-excerpt">
                <a class="single-excerpt__link" href="javascript:void(0)">
                    <div class="single-excerpt__link--elements" style="background-image: url('https://images.unsplash.com/photo-1631495634750-0f14320bc0a7?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjV8fGJyb3RoZXJob29kfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60')">
                        <h3 class="single-excerpt__link--elements--title">Brother hood</h3>
                        <p class="single-excerpt__link--elements--text">Ferme-toé un peu le mâche-patate là, va prendre une marche ou quelque chose. Mon char est resté pogné dans crisse de slotche toute la nuite. Toryeu que c'est cheap cette esti de cochonnerie-là !</p>
                        <a class="single-excerpt__link--elements--more" href="javascript:void(0)">Lire l'article &nbsp;<i class="fas fa-angle-double-right"></i></a>
                    </div>
                </a>
            </article>
            <article class="single-excerpt">
                <a class="single-excerpt__link" href="javascript:void(0)">
                    <div class="single-excerpt__link--elements" style="background-image: url('https://images.unsplash.com/photo-1583439071200-6287d4521633?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8YnVybmluZyUyMG1hc2t8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60')">
                        <h3 class="single-excerpt__link--elements--title">Démasquer les pervers narcissiques</h3>
                        <p class="single-excerpt__link--elements--text">Ferme-toé un peu le mâche-patate là, va prendre une marche ou quelque chose. Mon char est resté pogné dans crisse de slotche toute la nuite. Toryeu que c'est cheap cette esti de cochonnerie-là !</p>
                        <a class="single-excerpt__link--elements--more" href="javascript:void(0)">Lire l'article &nbsp;<i class="fas fa-angle-double-right"></i></a>
                    </div>
                </a>
            </article>
            <article class="single-excerpt">
                <a class="single-excerpt__link" href="javascript:void(0)">
                    <div class="single-excerpt__link--elements" style="background-image: url('https://images.unsplash.com/photo-1593947662207-e91024487d05?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8Y2FjdHVzJTIwaGVhZHxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60')">
                        <h3 class="single-excerpt__link--elements--title">Trop de choses en tête ?</h3>
                        <p class="single-excerpt__link--elements--text">Ferme-toé un peu le mâche-patate là, va prendre une marche ou quelque chose. Mon char est resté pogné dans crisse de slotche toute la nuite. Toryeu que c'est cheap cette esti de cochonnerie-là !</p>
                        <a class="single-excerpt__link--elements--more" href="javascript:void(0)">Lire l'article &nbsp;<i class="fas fa-angle-double-right"></i></a>
                    </div>
                </a>
            </article>
            <article class="single-excerpt">
                <a class="single-excerpt__link" href="javascript:void(0)">
                    <div class="single-excerpt__link--elements" style="background-image: url('https://images.unsplash.com/photo-1611673982501-93cabee16c77?ixid=MnwxMjA3fDB8MHxzZWFyY2h8N3x8c2lsZW5jZXxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60')">
                        <h3 class="single-excerpt__link--elements--title">Les taboo: quand on nous oblige à nous taire</h3>
                        <p class="single-excerpt__link--elements--text">Ferme-toé un peu le mâche-patate là, va prendre une marche ou quelque chose. Mon char est resté pogné dans crisse de slotche toute la nuite. Toryeu que c'est cheap cette esti de cochonnerie-là !</p>
                        <a class="single-excerpt__link--elements--more" href="javascript:void(0)">Lire l'article &nbsp;<i class="fas fa-angle-double-right"></i></a>
                    </div>
                </a>
            </article>
            <article class="single-excerpt">
                <a class="single-excerpt__link" href="javascript:void(0)">
                    <div class="single-excerpt__link--elements" style="background-image: url('https://images.unsplash.com/photo-1618322964887-f625fbaa971b?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8Y292aWQlMjBtYXNrJTIwbWV0cm98ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60')">
                        <h3 class="single-excerpt__link--elements--title">Se remettre de 2020</h3>
                        <p class="single-excerpt__link--elements--text">Ferme-toé un peu le mâche-patate là, va prendre une marche ou quelque chose. Mon char est resté pogné dans crisse de slotche toute la nuite. Toryeu que c'est cheap cette esti de cochonnerie-là !</p>
                        <a class="single-excerpt__link--elements--more" href="javascript:void(0)">Lire l'article &nbsp;<i class="fas fa-angle-double-right"></i></a>
                    </div>
                </a>
            </article>
            <article class="single-excerpt">
                <a class="single-excerpt__link" href="javascript:void(0)">
                    <div class="single-excerpt__link--elements" style="background-image: url('https://images.unsplash.com/photo-1532054241088-402b4150db33?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTB8fGRpZXR8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60')">
                        <h3 class="single-excerpt__link--elements--title">C'est moi qui ai mangé ça ?</h3>
                        <p class="single-excerpt__link--elements--text">Ferme-toé un peu le mâche-patate là, va prendre une marche ou quelque chose. Mon char est resté pogné dans crisse de slotche toute la nuite. Toryeu que c'est cheap cette esti de cochonnerie-là !</p>
                        <a class="single-excerpt__link--elements--more" href="javascript:void(0)">Lire l'article &nbsp;<i class="fas fa-angle-double-right"></i></a>
                    </div>
                </a>
            </article>
            <article class="single-excerpt">
                <a class="single-excerpt__link" href="javascript:void(0)">
                    <div class="single-excerpt__link--elements" style="background-image: url('https://images.unsplash.com/photo-1611991687319-5dabaabde43a?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTB8fGR1Y2slMjB0b3l8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60')">
                        <h3 class="single-excerpt__link--elements--title">L'intimité dans le couple</h3>
                        <p class="single-excerpt__link--elements--text">Ferme-toé un peu le mâche-patate là, va prendre une marche ou quelque chose. Mon char est resté pogné dans crisse de slotche toute la nuite. Toryeu que c'est cheap cette esti de cochonnerie-là !</p>
                        <a class="single-excerpt__link--elements--more" href="javascript:void(0)">Lire l'article &nbsp;<i class="fas fa-angle-double-right"></i></a>
                    </div>
                </a>
            </article>
            <article class="single-excerpt">
                <a class="single-excerpt__link" href="javascript:void(0)">
                    <div class="single-excerpt__link--elements" style="background-image: url('https://images.unsplash.com/photo-1612878010854-1250dfc5000a?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTB8fGVtb3Rpb25zJTIwZWdnc3xlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60')">
                        <h3 class="single-excerpt__link--elements--title">Quand les humeurs sont contagieuses</h3>
                        <p class="single-excerpt__link--elements--text">Ferme-toé un peu le mâche-patate là, va prendre une marche ou quelque chose. Mon char est resté pogné dans crisse de slotche toute la nuite. Toryeu que c'est cheap cette esti de cochonnerie-là !</p>
                        <a class="single-excerpt__link--elements--more" href="javascript:void(0)">Lire l'article &nbsp;<i class="fas fa-angle-double-right"></i></a>
                    </div>
                </a>
            </article>
            <article class="single-excerpt">
                <a class="single-excerpt__link" href="javascript:void(0)">
                    <div class="single-excerpt__link--elements" style="background-image: url('https://images.unsplash.com/photo-1586349781438-39d0350a0c93?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mzd8fHNjYXJlY3Jvd3xlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60')">
                        <h3 class="single-excerpt__link--elements--title">Comment ne pas être spectateur de sa vie ?</h3>
                        <p class="single-excerpt__link--elements--text">Ferme-toé un peu le mâche-patate là, va prendre une marche ou quelque chose. Mon char est resté pogné dans crisse de slotche toute la nuite. Toryeu que c'est cheap cette esti de cochonnerie-là !</p>
                        <a class="single-excerpt__link--elements--more" href="javascript:void(0)">Lire l'article &nbsp;<i class="fas fa-angle-double-right"></i></a>
                    </div>
                </a>
            </article>
            <article class="single-excerpt">
                <a class="single-excerpt__link" href="javascript:void(0)">
                    <div class="single-excerpt__link--elements" style="background-image: url('https://images.unsplash.com/photo-1483193722442-5422d99849bc?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8c2FkJTIweW91bmclMjBnaXJsfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60')">
                        <h3 class="single-excerpt__link--elements--title">Les concéquences sur nos enfants</h3>
                        <p class="single-excerpt__link--elements--text">Ferme-toé un peu le mâche-patate là, va prendre une marche ou quelque chose. Mon char est resté pogné dans crisse de slotche toute la nuite. Toryeu que c'est cheap cette esti de cochonnerie-là !</p>
                        <a class="single-excerpt__link--elements--more" href="javascript:void(0)">Lire l'article &nbsp;<i class="fas fa-angle-double-right"></i></a>
                    </div>
                </a>
            </article>
            <article class="single-excerpt">
                <a class="single-excerpt__link" href="javascript:void(0)">
                    <div class="single-excerpt__link--elements" style="background-image: url('https://images.unsplash.com/photo-1614069565320-172174347232?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1yZWxhdGVkfDR8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=800&q=60')">
                        <h3 class="single-excerpt__link--elements--title">Intuition: quand nos intestions nous parlent</h3>
                        <p class="single-excerpt__link--elements--text">Ferme-toé un peu le mâche-patate là, va prendre une marche ou quelque chose. Mon char est resté pogné dans crisse de slotche toute la nuite. Toryeu que c'est cheap cette esti de cochonnerie-là !</p>
                        <a class="single-excerpt__link--elements--more" href="javascript:void(0)">Lire l'article &nbsp;<i class="fas fa-angle-double-right"></i></a>
                    </div>
                </a>
            </article>
            <article class="single-excerpt">
                <a class="single-excerpt__link" href="javascript:void(0)">
                    <div class="single-excerpt__link--elements" style="background-image: url('https://images.unsplash.com/photo-1542596594-649edbc13630?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjV8fGZ1bnxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60')">
                        <h3 class="single-excerpt__link--elements--title">Souriez, vous êtes filmés !</h3>
                        <p class="single-excerpt__link--elements--text">Ferme-toé un peu le mâche-patate là, va prendre une marche ou quelque chose. Mon char est resté pogné dans crisse de slotche toute la nuite. Toryeu que c'est cheap cette esti de cochonnerie-là !</p>
                        <a class="single-excerpt__link--elements--more" href="javascript:void(0)">Lire l'article &nbsp;<i class="fas fa-angle-double-right"></i></a>
                    </div>
                </a>
            </article>
            <article class="single-excerpt">
                <a class="single-excerpt__link" href="javascript:void(0)">
                    <div class="single-excerpt__link--elements" style="background-image: url('https://images.unsplash.com/photo-1472457847783-3d10540b03d7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTI0fHx0b2lsZXR0ZSUyMGZ1bm55fGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=800&q=60')">
                        <h3 class="single-excerpt__link--elements--title">Étre parents</h3>
                        <p class="single-excerpt__link--elements--text">Ferme-toé un peu le mâche-patate là, va prendre une marche ou quelque chose. Mon char est resté pogné dans crisse de slotche toute la nuite. Toryeu que c'est cheap cette esti de cochonnerie-là !</p>
                        <a class="single-excerpt__link--elements--more" href="javascript:void(0)">Lire l'article &nbsp;<i class="fas fa-angle-double-right"></i></a>
                    </div>
                </a>
            </article>
            <article class="single-excerpt">
                <a class="single-excerpt__link" href="javascript:void(0)">
                    <div class="single-excerpt__link--elements" style="background-image: url('https://images.unsplash.com/photo-1533083972252-feeb6e38bc77?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTIxfHxodW1vdXIlMjBwYW5jYWtlc3xlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60')">
                        <h3 class="single-excerpt__link--elements--title">Mon câlin du dimanche, ou l'art de se faire plaisir</h3>
                        <p class="single-excerpt__link--elements--text">Ferme-toé un peu le mâche-patate là, va prendre une marche ou quelque chose. Mon char est resté pogné dans crisse de slotche toute la nuite. Toryeu que c'est cheap cette esti de cochonnerie-là !</p>
                        <a class="single-excerpt__link--elements--more" href="javascript:void(0)">Lire l'article &nbsp;<i class="fas fa-angle-double-right"></i></a>
                    </div>
                </a>
            </article>
            <article class="single-excerpt">
                <a class="single-excerpt__link" href="javascript:void(0)">
                    <div class="single-excerpt__link--elements" style="background-image: url('https://images.unsplash.com/photo-1602183471846-624da6a1dc1c?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8cGluayUyMGdsYXNzZXN8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60')">
                        <h3 class="single-excerpt__link--elements--title">Voir la vie en rose</h3>
                        <p class="single-excerpt__link--elements--text">Ferme-toé un peu le mâche-patate là, va prendre une marche ou quelque chose. Mon char est resté pogné dans crisse de slotche toute la nuite. Toryeu que c'est cheap cette esti de cochonnerie-là !</p>
                        <a class="single-excerpt__link--elements--more" href="javascript:void(0)">Lire l'article &nbsp;<i class="fas fa-angle-double-right"></i></a>
                    </div>
                </a>
            </article>
            <article class="single-excerpt">
                <a class="single-excerpt__link" href="javascript:void(0)">
                    <div class="single-excerpt__link--elements" style="background-image: url('https://images.unsplash.com/photo-1507808973436-a4ed7b5e87c9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTN8fGZ1bm55JTIwb3Vwc3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=800&q=60')">
                        <h3 class="single-excerpt__link--elements--title">Les masques en société</h3>
                        <p class="single-excerpt__link--elements--text">Ferme-toé un peu le mâche-patate là, va prendre une marche ou quelque chose. Mon char est resté pogné dans crisse de slotche toute la nuite. Toryeu que c'est cheap cette esti de cochonnerie-là !</p>
                        <a class="single-excerpt__link--elements--more" href="javascript:void(0)">Lire l'article &nbsp;<i class="fas fa-angle-double-right"></i></a>
                    </div>
                </a>
            </article>
            <article class="single-excerpt">
                <a class="single-excerpt__link" href="javascript:void(0)">
                    <div class="single-excerpt__link--elements" style="background-image: url('https://images.unsplash.com/photo-1547809890-1bef935add63?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1yZWxhdGVkfDE0fHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=800&q=60')">
                        <h3 class="single-excerpt__link--elements--title">Oser s'envoler</h3>
                        <p class="single-excerpt__link--elements--text">Ferme-toé un peu le mâche-patate là, va prendre une marche ou quelque chose. Mon char est resté pogné dans crisse de slotche toute la nuite. Toryeu que c'est cheap cette esti de cochonnerie-là !</p>
                        <a class="single-excerpt__link--elements--more" href="javascript:void(0)">Lire l'article &nbsp;<i class="fas fa-angle-double-right"></i></a>
                    </div>
                </a>
            </article>
            <article class="single-excerpt">
                <a class="single-excerpt__link" href="javascript:void(0)">
                    <div class="single-excerpt__link--elements" style="background-image: url('https://images.unsplash.com/photo-1515536765-9b2a70c4b333?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTV8fGZ1bm55JTIwZ29vc2V8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60')">
                        <h3 class="single-excerpt__link--elements--title">Comment se faire entendre</h3>
                        <p class="single-excerpt__link--elements--text">Ferme-toé un peu le mâche-patate là, va prendre une marche ou quelque chose. Mon char est resté pogné dans crisse de slotche toute la nuite. Toryeu que c'est cheap cette esti de cochonnerie-là !</p>
                        <a class="single-excerpt__link--elements--more" href="javascript:void(0)">Lire l'article &nbsp;<i class="fas fa-angle-double-right"></i></a>
                    </div>
                </a>
            </article>
            <article class="single-excerpt">
                <a class="single-excerpt__link" href="javascript:void(0)">
                    <div class="single-excerpt__link--elements" style="background-image: url('https://images.unsplash.com/photo-1494253109108-2e30c049369b?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjF8fGZ1bnxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60')">
                        <h3 class="single-excerpt__link--elements--title">Les apparences</h3>
                        <p class="single-excerpt__link--elements--text">Ferme-toé un peu le mâche-patate là, va prendre une marche ou quelque chose. Mon char est resté pogné dans crisse de slotche toute la nuite. Toryeu que c'est cheap cette esti de cochonnerie-là !</p>
                        <a class="single-excerpt__link--elements--more" href="javascript:void(0)">Lire l'article &nbsp;<i class="fas fa-angle-double-right"></i></a>
                    </div>
                </a>
            </article>
            <article class="single-excerpt">
                <a class="single-excerpt__link" href="javascript:void(0)">
                    <div class="single-excerpt__link--elements" style="background-image: url('https://images.unsplash.com/photo-1533374206871-33b8f07c216c?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8b29wc3xlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60')">
                        <h3 class="single-excerpt__link--elements--title">Oups !</h3>
                        <p class="single-excerpt__link--elements--text">Ferme-toé un peu le mâche-patate là, va prendre une marche ou quelque chose. Mon char est resté pogné dans crisse de slotche toute la nuite. Toryeu que c'est cheap cette esti de cochonnerie-là !</p>
                        <a class="single-excerpt__link--elements--more" href="javascript:void(0)">Lire l'article &nbsp;<i class="fas fa-angle-double-right"></i></a>
                    </div>
                </a>
            </article>
            <article class="single-excerpt">
                <a class="single-excerpt__link" href="javascript:void(0)">
                    <div class="single-excerpt__link--elements" style="background-image: url('https://images.unsplash.com/photo-1540331547168-8b63109225b7?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nzl8fGZ1bm55JTIwZ29vc2V8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60')">
                        <h3 class="single-excerpt__link--elements--title">Manger des aliments qui nous le rendent bien</h3>
                        <p class="single-excerpt__link--elements--text">Ferme-toé un peu le mâche-patate là, va prendre une marche ou quelque chose. Mon char est resté pogné dans crisse de slotche toute la nuite. Toryeu que c'est cheap cette esti de cochonnerie-là !</p>
                        <a class="single-excerpt__link--elements--more" href="javascript:void(0)">Lire l'article &nbsp;<i class="fas fa-angle-double-right"></i></a>
                    </div>
                </a>
            </article>
            <article class="single-excerpt">
                <a class="single-excerpt__link" href="javascript:void(0)">
                    <div class="single-excerpt__link--elements" style="background-image: url('https://images.unsplash.com/photo-1597176116047-876a32798fcc?ixid=MnwxMjA3fDB8MHxzZWFyY2h8N3x8c2FkfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60')">
                        <h3 class="single-excerpt__link--elements--title">Pardon ?</h3>
                        <p class="single-excerpt__link--elements--text">Ferme-toé un peu le mâche-patate là, va prendre une marche ou quelque chose. Mon char est resté pogné dans crisse de slotche toute la nuite. Toryeu que c'est cheap cette esti de cochonnerie-là !</p>
                        <a class="single-excerpt__link--elements--more" href="javascript:void(0)">Lire l'article &nbsp;<i class="fas fa-angle-double-right"></i></a>
                    </div>
                </a>
            </article>
            <article class="single-excerpt">
                <a class="single-excerpt__link" href="javascript:void(0)">
                    <div class="single-excerpt__link--elements" style="background-image: url('https://images.unsplash.com/photo-1614633836648-68ddff9f7553?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8ZG9nJTIwZnJpZXN8ZW58MHx8MHx8&auto=format&fit=crop&w=800&q=60')">
                        <h3 class="single-excerpt__link--elements--title">Over gras !</h3>
                        <p class="single-excerpt__link--elements--text">Ferme-toé un peu le mâche-patate là, va prendre une marche ou quelque chose. Mon char est resté pogné dans crisse de slotche toute la nuite. Toryeu que c'est cheap cette esti de cochonnerie-là !</p>
                        <a class="single-excerpt__link--elements--more" href="javascript:void(0)">Lire l'article &nbsp;<i class="fas fa-angle-double-right"></i></a>
                    </div>
                </a>
            </article>
        </section>
    </main>
<?php get_footer(); ?>