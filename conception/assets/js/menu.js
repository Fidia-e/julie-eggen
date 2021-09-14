const appMenu = {

    init: function() {
        // je récupère le bouton burger
        const menuButton = document.querySelector('.menu-burger-button');

        // je lui pose un écouteur d'évenement 
        menuButton.addEventListener('click', appMenu.handleMenuButtonClick);
    },

    handleMenuButtonClick: function() {

        // je récupère l'élément <body>
        const body = document.querySelector('body');

        // je lui ajoute la classe "menu-visible" au clic
        body.classList.add('menu-visible');

        // je récupère la nav et les icônes des réseaux sociaux
        // je les clone avec leurs enfants (true)
        const navigationClone= document.querySelector('.header .navigation').cloneNode(true);
        const socialClone= document.querySelector('.header .social').cloneNode(true);

        // j'ajoute une classe au clone de la nav
        // (pour cibler le bon bouton de fermeture du menu)
        navigationClone.classList.add('copyNav');

        // j'ajoute les clones en tant qu'enfant du <body>
        body.appendChild(navigationClone);
        body.appendChild(socialClone);

        // je récupère le bouton de fermeture du menu
        const crossButton = document.querySelector('.copyNav .close-menu-button');

        crossButton.addEventListener('click', appMenu.handleCloseButtonClick);
    },

    handleCloseButtonClick: function() {

        // je récupère le <body>
        const body = document.querySelector('body');

        // je lui retire la classe 'menu-visible'
        body.classList.remove('menu-visible');

        // je retire l'élément <nav> et les icônes directement enfant du <body>
        body.querySelector('body > .navigation').remove();
        body.querySelector('body > .social').remove();
    }
}
  
// une fois le DOM chargé, j'initialise le module "app" via sa méthode "init"
document.addEventListener("DOMContentLoaded", appMenu.init);