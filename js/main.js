const typed = new Typed(".auto-type", {
    strings: ["I am a Web Developer", "I Enjoy Learning", "I Enjoy Problem Solving", "I am a Web Developer"],
    startDelay: 1000,
    typeSpeed: 50,
    backSpeed: 75,
    backDelay: 1000,
    smartBack: true
});

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
    const emailRegex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    let errorCount = 0;
    for (let i = 0; i < $form.length; i++) {
        if ($form[i].required) {
            //If form field empty
            if ($form[i].value === "") {
                //Call setError
                errorCount += 1;
                if ($($form[i]).attr("id") === "first-name") {
                    setError(i, "Please enter your first name");
                }
                else if ($($form[i]).attr("id") === "last-name") {
                    setError(i, "Please enter your last name");
                }
                else if ($($form[i]).attr("id") === "email") {
                    setError(i, "Please enter your email address");
                }
                else {
                    setError(i, "Missing Required Content");
                }
            }
            else if ($($form[i]).attr("id") === "email") {
                // if ($form[i].validity.valid !== true) {
                //     //Call setError
                //     errorCount += 1;
                //     setError(i, $form[i].validationMessage);
                // }
                console.log(emailRegex.test($form[i].value));
                console.log($form[i].value);
                if (emailRegex.test($form[i].value) !== true) {
                    //Call setError
                    errorCount += 1;
                    if ($form[i].validationMessage !== "") {
                        setError(i, $form[i].validationMessage);
                    }
                    else {
                        setError(i, `Please enter a part following '${$form[i].value}'. E.G. '.com'.`)
                    }
                }
                else {
                    removeError(i);
                }
            }
            else {
                removeError(i);
            }
        }
    }
    if (errorCount === 0) {
        for (let i = 0; i < $form.length; i++) {
            $form[i].value = "";
        }
        alert("Form submitted successfully");
    }
}