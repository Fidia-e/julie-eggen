// initialisation
let currentSlideNumber = 0;
let autoScrollTimer = null;

// démarrage du timer
reinitTimer();

// récupération de tous les boutons de compte des slides
const allButtons = document.querySelectorAll('.number');

// je pose un écouteur sur chaque bouton
for (const button of allButtons) {
    button.addEventListener('click', handleSpecificSlide);
}

// afficher une slide spécifique
function handleSpecificSlide(event) {
    console.log('clic sur le bouton');

    // déterminer et cibler le bouton le cliqué
    const clickedButton = event.currentTarget;

    // je cible l'attribut 'data-slide-number' (slideNumber) de l'élément
    // https://developer.mozilla.org/en-US/docs/Web/API/HTMLElement/dataset
    const targetSlideNumber = clickedButton.dataset.slideNumber;

    // je précise que la slide courante est la nouvelle slide
    currentSlideNumber = targetSlideNumber;

    // déclenchement de l'affichage de la slide
    displaySlide(targetSlideNumber);

    // réinitialision du timer de défilement auto à chaque clic
    reinitTimer();
}

// réinitialiser le timer
function reinitTimer() {

    // si on a une valeur dans autoScrollTimer, 
    if (autoScrollTimer) {

        // on supprime ce timer
        clearInterval(autoScrollTimer);
    }

    // on crée un nouveau timer de défilement auto
    autoScrollTimer = setInterval(displayNextSlide, 3000);
}

// afficher la slide suivante
function displayNextSlide() {

    // récupérer le numéro l'élément cible
    const nextSlideNumber = getNextSlideNumber();
    displaySlide(nextSlideNumber);
}

// affcher une slide en fonction de son numéro (en argument)
function displaySlide(targetSlideNumber) {

    const containerElement = document.querySelector('.carousel');

    // récupérer la largeur du conteneur
    const containerWidth = containerElement.offsetWidth;

    // calcul de la distance de scroll à appliquer
    const offsetX = containerWidth * targetSlideNumber;

    // faire le scroll
    containerElement.scrollTo(offsetX, 0);

    // mettre à jour la barre de navigation
    highlightCurrentSlideButton();
}

// récupérer le numéro de la prochaine slide
function getNextSlideNumber() {

    // compter le nombre de slides disponibles (ici 3)
    const slidesCount = document.querySelectorAll('.carousel--item').length;
    
    // calcul du numéro de la slide suivante
    // pour retourner à la première et sinon itérer
    // (-1 car on commence à l'index 0)
    if (currentSlideNumber == slidesCount - 1) {
        currentSlideNumber = 0
    } else {
        currentSlideNumber++;
    }

    return currentSlideNumber;
}

// activation du bouton correspondant à la slide affichée
function highlightCurrentSlideButton() {

    // récupérer et cibler le bouton à mettre en évidence
    // en fontion de la current slide active 
    // qui a l'attribut "data-slide-number" qui vaut 'currentSlideNumber'
    // https://developer.mozilla.org/fr/docs/Learn/CSS/Building_blocks/Selectors/Attribute_selectors 
    const targetButton = document.querySelector('.number[data-slide-number="' + currentSlideNumber + '"]');

    // retirer la classe .active à tous les boutons 'number'
    const allButtons = document.querySelectorAll('.number');
    
    // je boucle sur chaque bouton car je ne peux pas utiliser 'classList'
    //  sur plusieurs éléments -> querySelectorAll
    for (const button of allButtons) {
        button.classList.remove('active');
    }
    
    // appliquer la classe .active au bouton cible
    targetButton.classList.add('active');
}




