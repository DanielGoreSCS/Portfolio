<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A page dedicated to showing snippets of code from various projects.">
        <script src="https://kit.fontawesome.com/3c7305378e.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png">
        <link rel="manifest" href="../favicon/site.webmanifest">
        <title>Coding Examples</title>
    </head>
    <body>
        <div class="wrapper">
            <?php include "nav.php"; ?>
            <main>
                <div class="content hero-img hero-img-flex hero-img-flex-align-center">
                    <div class="hero-text box-primary">
                        <div class="container">
                            <div class="text-coding-examples">
                                <h1>Coding Examples</h1>
                                <h2>Utilising Plugins</h2>
                                <p>
                                    The plugin <a href="https://mattboldt.com/demos/typed-js/">Typed.js</a> was used to create the typewriter effect. You will find an example of this code below.
                                </p>
                                <div class="code-block">
                                    <code>
<span class="var-type">const</span> <span class="var-name">typed</span> = <span class="var-type">new</span> <span class="var-name">Typed</span>(<span class="var-string">".auto-type"</span>, {
    <span class="var">strings</span>: [<span class="var-string">"I am a Web Developer"</span>, <span class="var-string">"I Enjoy Learning"</span>, <span class="var-string">"I Enjoy Problem Solving"</span>, <span class="var-string">"I am a Web Developer"</span>],
    <span class="var">startDelay</span>: <span class="var-int">1000</span>,
    <span class="var">typeSpeed</span>: <span class="var-int">50</span>,
    <span class="var">backSpeed</span>: <span class="var-int">75</span>,
    <span class="var">backDelay</span>: <span class="var-int">1000</span>,
    <span class="var">smartBack</span>: <span class="var-type">true</span>
});
                                    </code>
                                </div>
                                <h2>Menu visibility</h2>
                                <p>
                                    The JQuery displayed below is used to toggle the hamburger menu's visibility.
                                </p>
                                <div class="code-block">
                                    <code>
<span class="var">$hamburger</span> = <span class="var-name">$</span>(<span class="var-string">".hamburger"</span>);
<span class="var">$hamburger</span>.<span class="var-name">on</span>(<span class="var-string">"click"</span>, () => {
    <span class="var">$hamburger</span>.<span class="var-name">toggleClass</span>(<span class="var-string">"is-active"</span>);
});

<span class="var-name">$</span>(<span class="var-string">".nav-item"</span>).<span class="var-name">hover</span>(<span class="var-type">function</span> () {
    <span class="var-name">$</span>(<span class="var-type">this</span>).<span class="var-name">children</span>().<span class="var-name">addClass</span>(<span class="var-string">'show'</span>);
}, <span class="var-type">function</span> () {
    <span class="var-name">$</span>(<span class="var-type">this</span>).<span class="var-name">children</span>().<span class="var-name">removeClass</span>(<span class="var-string">'show'</span>);
});
                                    </code>
                                </div>
                                <h2>Form Validation</h2>
                                <p>
                                    I have used JQuery for my form validation. If there is an error the form element gets a red outline and has the error message displayed above it.
                                </p>
                                <div class="code-block">
                                    <code>
<span class="var-comment">//Add error border and error message</span>
<span class="var-type">function</span> <span class="var-name">setError</span> (<span class="var">i</span>, <span class="var">errorMessage</span>) {
    <span class="var-name">$</span>(<span class="var">$form</span>[<span class="var">i</span>]).<span class="var-name">css</span>({<span class="var-string">"border"</span>: <span class="var-string">"solid 2px red"</span>, <span class="var-string">"margin-top"</span>: <span class="var-string">"0"</span>});
    <span class="var-name">$</span>(<span class="var">$form</span>[<span class="var">i</span>]).<span class="var-name">prev()</span>.<span class="var-name">text</span>(`<span class="var-type">${</span><span class="var">errorMessage</span><span class="var-type">}</span>`);
}
<span class="var-comment">//Remove error border and error message</span>
<span class="var-type">function</span> <span class="var-name">removeError</span> (<span class="var">i</span>) {
    <span class="var-name">$</span>(<span class="var">$form</span>[<span class="var">i</span>]).<span class="var-name">removeAttr</span>(<span class="var-string">"style"</span>);
    <span class="var-name">$</span>(<span class="var">$form</span>[<span class="var">i</span>]).<span class="var-name">prev</span>().<span class="var-name">text</span>(<span class="var-string">""</span>);
}

<span class="var-comment">//Check if form field is valid</span>
<span class="var-type">function</span> <span class="var-name">validateForm</span>(<span class="var-type">event</span>) {
    <span class="var">$form</span> = <span class="var">$</span>(<span class="var">".form-control"</span>);
    <span class="var-type">const</span> <span class="var">emailRegex</span> = <span class="var-string">/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/</span>;
    <span class="var-type">let</span> <span class="var">errorCount</span> = <span class="var">0</span>;
    <span class="var-loop">for</span> (<span class="var-type">let</span> <span class="var">i</span> = <span class="var-int">0</span>; <span class="var">i</span> < <span class="var">$form.length</span>; <span class="var">i</span>++) {
        <span class="var-loop">if</span> (<span class="var">$form</span>[<span class="var">i</span>].<span class="var">required</span>) {
            <span class="var-comment">//If form field empty</span>
            <span class="var-loop">if</span> (<span class="var">$form</span>[<span class="var">i</span>].<span class="var">value</span> === <span class="var-string">""</span>) {
                <span class="var-comment">//Call setError</span>
                <span class="var">errorCount</span> += <span class="var-int">1</span>;
                <span class="var-loop">if</span> (<span class="var-name">$</span>(<span class="var">$form</span>[<span class="var">i</span>]).<span class="var-name">attr</span>(<span class="var-string">"id"</span>) === <span class="var-string">"first-name"</span>) {
                    <span class="var-name">setError</span>(<span class="var">i</span>, <span class="var-string">"Please enter your first name"</span>);
                }
                <span class="var-loop">else if</span> (<span class="var-name">$</span>(<span class="var">$form</span>[<span class="var">i</span>]).<span class="var-name">attr</span>(<span class="var-string">"id"</span>) === <span class="var-string">"last-name"</span>) {
                    <span class="var-name">setError</span>(<span class="var">i</span>, <span class="var-string">"Please enter your last name"</span>);
                }
                <span class="var-loop">else if</span> (<span class="var-name">$</span>(<span class="var">$form</span>[<span class="var">i</span>]).<span class="var-name">attr</span>(<span class="var-string">"id"</span>) === <span class="var-string">"email"</span>) {
                    <span class="var-name">setError</span>(<span class="var">i</span>, <span class="var-string">"Please enter your email address"</span>);
                }
                <span class="var-loop">else</span> {
                    <span class="var-name">setError</span>(<span class="var">i</span>, <span class="var-string">"Missing Required Content"</span>);
                }
            }
            <span class="var-loop">else if</span> (<span class="var">$</span>(<span class="var">$form</span>[<span class="var">i</span>]).<span class="var-name">attr</span>(<span class="var-string">"id"</span>) === <span class="var-string">"email"</span>) {
                <span class="var-loop">if</span> (<span class="var">emailRegex</span>.<span class="var-name">test</span>(<span class="var">$form</span>[<span class="var">i</span>].<span class="var">value</span>) !== <span class="var-type">true</span>) {
                    <span class="var-comment">//Call setError</span>
                    <span class="var-name">errorCount</span> += <span class="var-int">1</span>;
                    <span class="var-loop">if</span> (<span class="var">$form</span>[<span class="var">i</span>].<span class="var">validationMessage</span> !== <span class="var-string">""</span>) {
                        <span class="var-name">setError</span>(<span class="var">i</span>, <span class="var">$form</span>[<span class="var">i</span>].<span class="var">validationMessage</span>);
                    }
                    <span class="var-loop">else</span> {
                        <span class="var-name">setError</span>(<span class="var">i</span>, <span class="var-string">`Please enter a part following '${<span class="var">$form</span>[<span class="var">i</span>].<span class="var">value</span>}'. E.G. '.com'.`</span>)
                    }
                }
                <span class="var-loop">else</span> {
                    <span class="var-name">removeError</span>(<span class="var">i</span>);
                }
            }
            <span class="var-loop">else</span> {
                <span class="var-name">removeError</span>(<span class="var">i</span>);
            }
        }
    }
    <span class="var-loop">if</span> (<span class="var">errorCount</span> === <span class="var-int">0</span>) {
        <span class="var-loop">for</span> (<span class="var-type">let</span> <span class="var">i</span> = <span class="var-int">0</span>; <span class="var">i</span> < <span class="var">$form.length</span>; <span class="var">i</span>++) {
            <span class="var">$form</span>[<span class="var">i</span>].<span class="var">value</span> = <span class="var-string">""</span>;
        }
        <span class="var-name">$</span>(<span class="var-string">"main"</span>).<span class="var-name">append</span>(<span class="var-string">`
        &lt;div class="fade-wrapper show"&gt;&lt;/div&gt;&lt;div class="validation-message show"&gt;&lt;h2&gt;THANK YOU&lt;/h2&gt;&lt;p&gt;The form was submitted successfully&lt;/p&gt;&lt;div class="circle"&gt;&lt;i class="fa-solid fa-check"&gt;&lt;/i&gt;&lt;/span&gt;&lt;span class="btn-close"&gt;&lt;span class="bar"&gt;&lt;/span&gt;&lt;/div&gt;&lt;/div&gt;
        `</span>);
        <span class="var-name">$</span>(<span class="var-string">".btn-close"</span>).<span class="var-name">on</span>(<span class="var-string">"click"</span>, () => {
            <span class="var-name">$</span>(<span class="var-string">".validation-message"</span>).<span class="var-name">remove</span>();
            <span class="var-name">$</span>(<span class="var-string">".fade-wrapper"</span>).<span class="var-name">remove</span>();
        });
    }
}
                                    </code>
                                </div>
                                <h2>SQL Database Challenge</h2>
                                <p>This is the database used for the example</p>
                                <img src="../img/movie-database.png" alt="Movie Database">
                                <p>The purpose of this query is to get the following information from the database:</p>
                                <ul>
                                    <li>Movie title</li>
                                    <li>Release year</li>
                                    <li>Directors full name</li>
                                    <li>Movie genre</li>
                                    <li>Movie rating</li>
                                </ul>
                                <p>As the data is not all stored in the same table the data must be joined together via the shared IDs.</p>
                                <div class="code-block">
                                    <code>
SELECT m.mov_title AS "Title", m.mov_year AS "Year", d.dir_fname || ' ' || d.dir_lname AS "Director", g.gen_title AS "Genre", r.rev_stars AS "Rating"
FROM movie AS m
JOIN movie_direction AS md
    ON m.mov_id = md.mov_id
JOIN director AS d
    ON d.dir_id = md.dir_id
JOIN movie_genres AS mg
    ON m.mov_id = mg.mov_id
JOIN genres AS g
    ON g.gen_id = mg.gen_id
JOIN rating AS r
    ON m.mov_id = r.mov_id
    WHERE r.rev_stars IS NOT NULL
ORDER BY m.mov_year;
                                    </code>
                                </div>
                                <p>This data is then displayed from the oldest movie to the most recent release so long as the movie has a rating.</p>
                                <img src="../img/movie-database-table.png" alt="Table that displays the outcome of the SQL code">
                                <h2>Adding a new contact to a database</h2>
                                <p>After passing the JavaScript validation, the contact form submits the values via the post method. They are then stored in the connected database.</p>
                                <div class="code-block">
                                    <code>
&lt;?php
include_once 'connection.php';
try
{
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        if(!empty($_POST['contact-name']) && !empty($_POST['contact-email']) && !empty($_POST['contact-phone']) && !empty($_POST['contact-subject']) && !empty($_POST['contact-message'])) {
            $name = $_POST['contact-name'];
            $company = $_POST['contact-company'];
            $email = $_POST['contact-email'];
            $phone = $_POST['contact-phone'];
            $subject = $_POST['contact-subject'];
            $message = $_POST['contact-message'];
            if(!empty($_POST['contact-checkbox'])) {
                $checkbox = true;
            } else {
                $checkbox = false;
            }

            $database = new Connection();
            $db = $database->openConnection();
            
            // inserting data into create table using prepare statement to prevent from sql injections
            $stm = $db->prepare("INSERT INTO contact (name,company,email,phone,subject,message,marketing) VALUES ( :name, :company, :email, :phone, :subject, :message, :marketing)") ;
            // inserting a record
            $stm->execute(array(':name' => $name , ':company' => $company , ':email' => $email, ':phone' => $phone, ':subject' => $subject, ':message' => $message, ':marketing' => $checkbox));
            echo "New record created successfully";
        }
    }
    else {
        echo "There was an issue adding the data to the database";
    }
    
}
catch (PDOException $e)
{
    echo "There is some problem in connection: " . $e->getMessage();
}
?&gt;
                                    </code>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
        <script src="../js/nav.js"></script>
    </body>
</html>