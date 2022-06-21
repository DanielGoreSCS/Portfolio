$(".twitter").html('<i class="fa-brands fa-twitter"></i>');
$(".github").html('<i class="fa-brands fa-github"></i>');

//Animate nav menu to slide down
//If hamburger is pressed
$toggler = $(".toggler");
$nav = $(".nav-fixed");
$(".hamburger").on("click", () => {
    if ($toggler[0].checked === false) {
        $nav.find(".social-media").hide();
        $nav.find(".nav-flex-container").hide();
        $nav.children().show(400);
        $nav.addClass("show");
    }
    else {
        $nav.removeClass("show");
        $nav.children().removeAttr("style");
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
        $nav.children().removeAttr("style");
    }
});
