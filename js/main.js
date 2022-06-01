const typed = new Typed(".auto-type", {
    strings: ["I am a Web Developer", "I Enjoy Learning", "I Enjoy Problem Solving", "I am a Web Developer"],
    startDelay: 1000,
    typeSpeed: 150,
    backSpeed: 100,
    backDelay: 1000,
    smartBack: true
})

$("#contact").append(`
    <div class="col-8">
    <form id="contact-form" action="" method="post">
        <div class="row">
            <div class="col col-12 col-md-6">
                <label class="required" for="first-name"></label>
                <input class="form-control" type="text" id="first-name" placeholder="First Name*" required>
            </div>
            <div class="col col-12 col-md-6">
                <label class="required" for="last-name"></label>
                <input class="form-control" type="text" id="last-name" placeholder="Last Name*" required>
            </div>
            <div class="col col-12">
                <label class="required" for="email"></label>
                <input class="form-control" type="email" id="email" placeholder="Email Address*" required>
            </div>
            <div class="col col-12">
                <label class="required" for="subject"></label>
                <input class="form-control" type="text" id="subject" placeholder="Subject">
            </div>
            <div class="col col-12">
                <label class="required" for="message"></label>
                <textarea class="form-control textarea" id="message" placeholder="Message"></textarea>
            </div>
            <div class="col col-12">
                <button class="btn btn-form" type="button" onclick="validateForm()">Submit</button>
            </div>
        </div>
    </form>
</div>
`);
$(".jSRequired").text("following contact form, ");

$(".twitter").html('<i class="fa-brands fa-twitter"></i>');
$(".github").html('<i class="fa-brands fa-github"></i>');

//Add error border and error message
function setError (i, errorMessage) {
    $($form[i]).css({"border": "solid 2px red"});
    $($form[i]).prev().text(`${errorMessage}`);
}
//Remove error border and error message
function removeError (i) {
    $($form[i]).removeAttr("style");
    $($form[i]).prev().text("");
}

//Check if form field is valid
function validateForm(event) {
    $form = $(".form-control");
    console.log($form.length);
    for (let i = 0; i < $form.length; i++) {
        if ($form[i].required) {
            //If form field empty
            if ($form[i].value === "") {
                //Call setError
                setError(i, "Missing Required Content");
            }
            else if ($($form[i]).attr("id") === "email") {
                if ($form[i].validity.valid !== true) {
                    //Call setError
                    setError(i, $form[i].validationMessage);
                }
                else {
                    removeError(i);
                }
            }
            else {
                removeError(i);
            }
        //Else If form field contains invalid characters
            //return false
        }
    }
}

//Animate nav menu to slide down
//If hamburger is pressed
$toggler = $(".toggler");
$nav = $(".nav-fixed");
$(".hamburger").on("click", () => {
    if ($toggler[0].checked === false) {
        $nav.slideDown("slow");
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

