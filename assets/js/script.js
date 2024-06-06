$(document).ready(function() {
    $("button.navbar-toggler").on("click", function() {
        $("#navbarToggler").slideToggle("slow", function() {
            console.log("Toggle completed");
        });
    });
    $(".animate_opacity").animate({
        opacity:'1'
    },'slow');
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