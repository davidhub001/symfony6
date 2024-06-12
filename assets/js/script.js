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