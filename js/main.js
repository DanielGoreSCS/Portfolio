const typed = new Typed(".auto-type", {
    strings: ["I am a Web Developer", "I Enjoy Learning", "I Enjoy Problem Solving", "I am a Web Developer"],
    startDelay: 1000,
    typeSpeed: 150,
    backSpeed: 100,
    backDelay: 1000,
    smartBack: true
})

//Add error border and error message
function setError (i, errorMessage) {
    $($form[i]).css({"border": "solid 2px red"});
    $($form[i]).prev().text(`${errorMessage}`);
}

//Check if form field is valid
function validateForm(event) {
    $form = $(".form-control");
    console.log($form.length);
    for (let i = 0; i < $form.length; i++) {        
        //If form field empty
        if ($form[i].value === "") {
            //Call setError
            setError(i, "Missing Required Content");
        }
        else if ($form[i].value === false) {
            //Call setError
            setError(i, "Placeholder Error");
        }
        else {
            $($form[i]).removeAttr("style");
            $($form[i]).prev().text("");
        }
    //Else If form field contains invalid characters
        //return false
    }
}