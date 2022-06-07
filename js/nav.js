$(".twitter").html('<i class="fa-brands fa-twitter"></i>');
$(".github").html('<i class="fa-brands fa-github"></i>');

//Animate nav menu to slide down
//If hamburger is pressed
$toggler = $(".toggler");
$nav = $(".nav-fixed");
$(".hamburger").on("click", () => {
    if ($toggler[0].checked === false) {
        $nav.slideDown("slow").delay(1000).removeAttr("style");
    }
    else {
        $nav.slideUp("slow");
    }
});
//Close navigation menu on link click
//If nav-link is pressed
$(".nav-link").on("click", () => {
    $toggler[0].checked = false;
    $nav.removeAttr("style");
});
//Media Query
$(window).resize( () => {
    if (window.matchMedia("(min-width: 992px)").matches) {
        $nav.removeAttr("style");
    }
});
