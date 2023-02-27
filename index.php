<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="I am a web developer from Suffolk who has joined the Scion Coalition Scheme.">
        <script src="https://kit.fontawesome.com/3c7305378e.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/style.css">
        <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
        <link rel="manifest" href="favicon/site.webmanifest">
        <title>Daniel Gore Portfolio</title>
    </head>
    <body>
        <div class="wrapper">
            <?php include "php/nav.php"; ?>
            <main>
                <div class="header hero-img hero-img-home">
                    <div class="hero-text hero-text-home">
                        <h1>My Name is Daniel Gore</h1>
                        <p><span class="auto-type"></span></p>
                    </div>
                    <a class="hero-scroll" href="#content">
                        <span>Scroll Down</span>
                        <i class="fa-solid fa-angle-down"></i>
                    </a>
                </div>
                <div class="container">
                    <div class="content wrapper-split row" id="content">
                        <a class="col col-md-6 col-xl-4" href="//netmatters.daniel-gore.netmatters-scs.co.uk" target="_blank">
                            <div class="card">
                                <img src="img/cards/Screenshot%202022-05-12%20154835.png" alt="Netmatters Website">
                                <div class="card-body">
                                    <h2>Netmatters Homepage</h2>
                                    <span class="languages">PHP CSS SCSS JavaScript</span>
                                    <p>
                                        My recreation of the Netmatters homepage.
                                    </p>
                                </div>
                            </div>
                        </a>
                        <a class="col col-md-6 col-xl-4" href="https://daniel-gore.netmatters-scs.co.uk/array-reflection" target="_blank">
                            <div class="card">
                                <img src="img/cards/JavaScript-Array-Reflection.png" alt="javaScript Array Reflection">
                                <div class="card-body">
                                    <h2>Javascript Array Reflection</h2>
                                    <span class="languages">HTML SCSS JavaScript</span>
                                    <p>
                                        A random image is generated so that the user can save it against an email address. This is then stored so that you can view all of the images saved to each email address.
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="contact wrapper-split row" id="contact">
                        <div class="col-md-6 col-xl-4">
                            <h2>Get In Touch</h2>
                            <p>You can contact me via the <span class="jSRequired"></span>phone number or email address.</p>
                            <p>
                                <strong>
                                    <a href="tel:07597802734">07597 802734</a><br>
                                    <a href="mailto:Daniel.Gore@netmatters-scs.com" target="_blank">Daniel.Gore@netmatters-scs.com</a>
                                </strong>
                            </p>
                            <p>I'll do my best to respond to you within 2-3 working days.</p>
                        </div>
                    </div>
                    <div class="scroll">
                        <a class="contact-scroll" href="#">
                            <i class="fa-solid fa-angle-up"></i>
                            <span>Back To Top</span>
                        </a>
                    </div>
                </div>
            </main>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
        <script src="js/main.js"></script>
        <script src="js/nav.js"></script>
    </body>
</html>