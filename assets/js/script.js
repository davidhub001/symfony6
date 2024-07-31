$(document).ready(function() {
    $("button.navbar-toggler").on("click", function() {
        $("#navbarToggler").slideToggle("slow", function() {
            console.log("Toggle completed");
        });
    });
    $(".animate_opacity").animate({
        opacity:'1'
    },'slow');
    $("input[name='rangeInput']").on('input', function() {
        var idrange = $(this).attr('edit-range');
        $("span[name='compressionValue"+idrange+"']").text(this.value+'%');
    });

});

function scrollGallery(direction) {
    const galleryRow = document.querySelector('.gallery-row');
    const scrollAmount = galleryRow.clientWidth;
    galleryRow.scrollBy({ left: direction * scrollAmount, behavior: 'smooth' });
}

function autoScroll() {
    const galleryRow = document.querySelector('.gallery-row');
    if (galleryRow.scrollLeft + galleryRow.clientWidth >= galleryRow.scrollWidth) {
        galleryRow.scrollTo({ left: 0, behavior: 'smooth' });
    } else {
        galleryRow.scrollBy({ left: galleryRow.clientWidth, behavior: 'smooth' });
    }
}

setInterval(autoScroll, 3000); // Scrolls every 3 seconds

function Ajax_editimage(id, url){
    var titre = $("input[name='titre"+id+"']").val();
    var type = $("select[name='type"+id+"']").val();
    var description = $("textarea[name='description"+id+"']").val();
    var quality = $("input[edit-range="+id+"]").val();
    $.ajax({
        url: url, // URL de l'API ou du serveur
        type: 'POST', // Type de requête (GET, POST, etc.)
        data: JSON.stringify({ titre: titre, 
                                type: type, 
                                description: description,
                                quality: quality}), // Données envoyées au serveur
        contentType: 'application/json', // Type de contenu envoyé au serveur
        dataType: 'json', // Type de données attendu de la réponse
        success: function(response) {
            console.log('Réponse du serveur:', response);
            // Traitez la réponse ici
        },
        error: function(xhr, status, error) {
            console.error('Erreur:', error);
            // Gérez l'erreur ici
        }
    });
}

document.addEventListener('DOMContentLoaded', () => {
    function animate(target_, class_, animationClass_) {
      // Sélectionner les éléments correspondant au sélecteur
      const targetElements = document.querySelectorAll(target_);
  
      // Vérifier s'il y a des éléments à observer
      if (targetElements.length === 0) {
        console.error(`No elements found for selector: ${target_}`);
        return;
      }
  
      // Options de l'observer
      const options = {
        root: null, // par défaut c'est le viewport
        rootMargin: '0px',
        threshold: 0.1 // Seuil de visibilité
      };
  
      // Fonction de callback
      const callback = (entries, observer) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add(class_);
          }
        });
      };
  
      // Créer une instance d'IntersectionObserver avec le callback et les options
      const observer = new IntersectionObserver(callback, options);
  
      // Surveiller chaque élément correspondant au sélecteur
      targetElements.forEach(element => observer.observe(element));
    }
  
    animate('.animate_bh', 'animation_bas_haut');
    animate('.animate_hb', 'animation_haut_bas');
    animate('.animate_gd', 'animation_gauche_droite');
    animate('.animate_dg', 'animation_droite_gauche');
  });
  