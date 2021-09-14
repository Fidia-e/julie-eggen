const appCarousel = {

    currentSlideNumber: 0,
    autoScrollTimer: null,


    init: function() {
        
        // démarrage du timer
        appCarousel.reinitTimer();
        
        // récupération de tous les boutons de compte des slides
        const allButtons = document.querySelectorAll('.number');
        
        // je pose un écouteur sur chaque bouton
        for (const button of allButtons) {
            button.addEventListener('click', appCarousel.handleSpecificSlide);
        }
    },


    // afficher une slide spécifique
    handleSpecificSlide: function(event) {

        // déterminer et cibler le bouton le cliqué
        const clickedButton = event.currentTarget;

        // je cible l'attribut 'data-slide-number' (slideNumber) de l'élément
        // https://developer.mozilla.org/en-US/docs/Web/API/HTMLElement/dataset
        const targetSlideNumber = clickedButton.dataset.slideNumber;

        // je précise que la slide courante est la nouvelle slide
        appCarousel.currentSlideNumber = targetSlideNumber;

        // déclenchement de l'affichage de la slide
        appCarousel.displaySlide(targetSlideNumber);

        // réinitialision du timer de défilement auto à chaque clic
        appCarousel.reinitTimer();
    },


    // réinitialiser le timer
    reinitTimer:function() {

        // si on a une valeur dans autoScrollTimer, 
        if (appCarousel.autoScrollTimer) {

            // on supprime ce timer
            clearInterval(appCarousel.autoScrollTimer);
        }

        // on crée un nouveau timer de défilement auto
        appCarousel.autoScrollTimer = setInterval(appCarousel.displayNextSlide, 5000);
    },


    // afficher la slide suivante
    displayNextSlide:function() {

        // récupérer le numéro l'élément cible
        appCarousel.getNextSlideNumber();
        const nextSlideNumber = appCarousel.currentSlideNumber;
        appCarousel.displaySlide(nextSlideNumber);
    },


    // affcher une slide en fonction de son numéro (en argument)
    displaySlide:function(targetSlideNumber) {

        const containerElement = document.querySelector('.carousel');

        // récupérer la largeur du conteneur
        const containerWidth = containerElement.offsetWidth;
        
        // calcul de la distance de scroll à appliquer
        const offsetX = containerWidth * targetSlideNumber;

        // faire le scroll
        containerElement.scrollTo(offsetX, 0);

        // mettre à jour la barre de navigation
        appCarousel.highlightCurrentSlideButton();
    },


    // récupérer le numéro de la prochaine slide
    getNextSlideNumber:function() {

        // compter le nombre de slides disponibles (ici 3)
        const slidesCount = document.querySelectorAll('.carousel--item').length;
        
        // calcul du numéro de la slide suivante
        // pour retourner à la première et sinon itérer
        // (-1 car on commence à l'index 0)
        if (appCarousel.currentSlideNumber == slidesCount - 1) {
            appCarousel.currentSlideNumber = 0
        } else {
            appCarousel.currentSlideNumber++;
        }
    },


    // activation du bouton correspondant à la slide affichée
    highlightCurrentSlideButton:function() {

        const allButtons = document.querySelectorAll('.number');

        // récupérer et cibler le bouton à mettre en évidence
        // en fontion de la current slide active 
        // qui a l'attribut "data-slide-number" qui vaut 'currentSlideNumber'
        // https://developer.mozilla.org/fr/docs/Learn/CSS/Building_blocks/Selectors/Attribute_selectors 
        const slideNumber = '.number[data-slide-number="' + appCarousel.currentSlideNumber + '"]';
        const targetButton = document.querySelector(slideNumber);
        
        // je boucle sur chaque bouton car je ne peux pas utiliser 'classList'
        //  sur plusieurs éléments -> querySelectorAll
        for (const button of allButtons) {
            button.classList.remove('active');
        }
        
        // appliquer la classe .active au bouton cible
        targetButton.classList.add('active');
    }
}

document.addEventListener("DOMContentLoaded", appCarousel.init);