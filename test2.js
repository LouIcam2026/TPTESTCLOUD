document.addEventListener("DOMContentLoaded", function () {
    const hamburger = document.querySelector('.menu-hamburger');
    const navSlide = document.querySelector('.nav-slide');
    const aboutButton = document.querySelector('#aboutButton'); // Nouveau bouton

    // Fonction pour basculer le nav slide
    function toggleNavSlide() {
        navSlide.classList.toggle('open');
    }

    // Lorsque le hamburger est cliqué
    hamburger.addEventListener('click', toggleNavSlide);

    // Lorsque le bouton À propos est cliqué
    aboutButton.addEventListener('click', toggleNavSlide);

    // Si on clique en dehors du menu et du bouton hamburger
    document.addEventListener("click", function (event) {
        if (!navSlide.contains(event.target) && !hamburger.contains(event.target) && navSlide.classList.contains('open')) {
            navSlide.classList.remove('open');
        }
    });

    // Prévenir le comportement par défaut lors du clic sur le hamburger
    hamburger.addEventListener("click", function (event) {
        event.stopPropagation();
    });
});
document.addEventListener('DOMContentLoaded', (event) => {
    // Fonction pour créer un observer
    function createObserver(selector, animationClass) {
        return new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting && entry.intersectionRatio === 1) {
                    entry.target.classList.add(animationClass);
                    observer.unobserve(entry.target); // Arrêtez l'observation après le début de l'animation
                }
            });
        }, {
            threshold: 1.0 // La totalité de l'élément doit être visible
        });
    }

    // Observer pour .img2
    const imgObserver = createObserver('.img2', 'start-animation');
    const img = document.querySelector('.img2');
    if (img) {
        imgObserver.observe(img);
    }
        // Observer pour .img3
        const imgObserver4 = createObserver('.img3', 'start-animation4');
        const image = document.querySelector('.img3');
        if (image) {
            imgObserver4.observe(image);
        }
        // Observer pour .img-merco
        const imgObserver5 = createObserver('.img_merco', 'start-animation5');
        const image_merco = document.querySelector('.img_merco');
        if (image_merco) {
            imgObserver5.observe(image_merco);
        }
        // Observer pour .img-clemessy
        const imgObserver6 = createObserver('.img_clemessy', 'start-animation6');
        const image_clemessy = document.querySelector('.img_clemessy');
        if (image_clemessy) {
            imgObserver6.observe(image_clemessy);
        }
        // Observer pour .img-pc_declic
        const imgObserver7 = createObserver('.img_pc_declic', 'start-animation7');
        const image_pc_declic = document.querySelector('.img_pc_declic');
        if (image_pc_declic) {
            imgObserver7.observe(image_pc_declic);
        }
         // Observer pour .img-pc_declic
         const imgObserver8 = createObserver('.img_eras', 'start-animation8');
         const image_eras = document.querySelector('.img_eras');
         if (image_eras) {
             imgObserver8.observe(image_eras);
         }      
         // Observer pour .img-pc_icam
         const imgObserver9 = createObserver('.img_icam', 'start-animation9');
         const image_icam = document.querySelector('.img_icam');
         if (image_icam) {
             imgObserver9.observe(image_icam);
         }           
    // Observer pour .containeur-diplome1
    const slideInObserver = createObserver('.containeur-diplome1', 'start-animation2');
    const slideInElements = document.querySelectorAll('.containeur-diplome1');
    slideInElements.forEach(el => slideInObserver.observe(el));
    
    // Observer pour .containeur-diplome2
    const slideInObserver2 = createObserver('.containeur-diplome2', 'start-animation3');
    const slideInElements2 = document.querySelectorAll('.containeur-diplome2');
    slideInElements2.forEach(el => slideInObserver2.observe(el));
    // Observer pour .containeur-diplome3
     const slideInObserver3 = createObserver('.containeur-diplome3', 'start-animation4');
     const slideInElements3 = document.querySelectorAll('.containeur-diplome3');
     slideInElements3.forEach(el => slideInObserver3.observe(el));
;
});
document.addEventListener('scroll', function() {
    var scrollPosition = window.pageYOffset;
    var fadeOutHeight = 500; // La hauteur à laquelle l'image commence à disparaître.
    var background = document.querySelector('.background');
    
    if (scrollPosition < fadeOutHeight) {
        background.style.opacity = 1 - (scrollPosition / fadeOutHeight);
    } else {
        background.style.opacity = 0;
    }
});
<script>
document.addEventListener("DOMContentLoaded", function() {
  const articleLinks = document.querySelectorAll('.article-link');

  articleLinks.forEach(link => {
    link.addEventListener('click', function() {
      const articleUrl = this.getAttribute('data-link');
      window.location.href = articleUrl;
    });
  });
});
</script>
