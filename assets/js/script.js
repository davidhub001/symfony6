$(document).ready(function() {
    $("button.navbar-toggler").on("click", function() {
        $("#navbarToggler").slideToggle("slow", function() {
            console.log("Toggle completed");
        });
    });
});