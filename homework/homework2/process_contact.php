<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css?family=Cuprum&display=swap" rel="stylesheet">
        <title>Homework 2: Political Campaign Supporter Form - Process_contact</title>
        <style>
            header { 
                text-align: center;
                background-color: black;
                color: white;
                margin-bottom: -3%;
                padding: 1%;
                }
                
            fieldset {
                border-color: darkred;
                border-radius: 0 10px 30px 10px;
                margin-top: 4%;
                }
                
            legend {
                font-size: 1.5em;
                font-style: normal;
                padding: 10px;
                color: white;
                background-color: darkred;
                }

            body { 
                font-family: 'Cuprum', sans-serif;
                margin: 0;
                }
                
            main {
                margin: 5% 20%;
                }
                
            #contribution_highlight {
                background-color: gold;
                padding: 3px;
                }
                
            #comments_and_interests {
                padding: 10px;
                }
                
            #comments_strong {
                letter-spacing: 0.05em;
                }
                
            #interests_span {
                text-decoration: underline;
                }
                
            #contribution_p {
                padding-right: -20%;
                }

              
            footer {
                clear: both;
                background-color: lightgray;
                position: absolute;
                padding: 0.03%;
                text-align: center;
                opacity: 0.6;
                bottom: 0;
                width: 99.99%;
                }
            
        </style>
    </head>
    
    <header>
        <h1>CONTACT INFO RECEIVED</h1>
    </header>

    <body>
        <main>
<?php

//The data that can be captured from the form. First/last name, email, gender and age are REQUIRED
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $interests = $_POST['interests'];
    $contribution = $_POST['contribution'];
    $mailing_list = $_POST['mailing_list'];
    $comments = $_POST['comments'];
    $submit = $_POST['submit'];

//This checks if required data is submitted. First/last name, email, gender, and age are REQUIRED
    if(!empty($first_name) && !empty($last_name) && !empty($email) && !empty($gender) && !empty($age)) {
        // Submit this message if all required fields are met.
        
            echo "<h3><center>Welcome aboard, <em>$first_name</em> <em>$last_name</em>! We'll reach out to you at <em>$email</em> soon.</center></h3><br>";
            echo "You have selected your gender as <strong>$gender</strong> and your age range as <strong>$age</strong>.";

     //Submit this message if all required fields are NOT met. HTML validation will probably stop this message from appearing.
        } else {
            echo 'Sorry! Please fill out all required fields.';
        }
        
// Printing out the optional input of: mailing_list
    if(!empty($mailing_list)) {
        echo "<p>We'll add you to our mailing list: keep an eye out for exciting updates and volunteer opportunities. If you no longer wish to be on the mailing list, no problem! Fire us an email and we'll remove your email promptly.</p>";
    }
    
// Printing out the optional input of: contributions
    if(!empty($contribution)) {
        echo "<p id=\"contribution_p\">Thank you for contributing <span id=\"contribution_highlight\">$$contribution!</span></p>";
    }
    
// Printing out the optional input of: comments and interests
    if(!empty($comments) or !empty ($interests)) {
    echo "<fieldset><legend>Optional info submitted</legend><p id=\"comments_and_interests\">";
    }
    
    if (!empty($comments)) {
        echo "<strong id=\"comments_strong\">COMMENTS</strong> <br><em>$comments</em><br><br>";
        
        }
    //This will print out the interests
    if (!empty($interests)) {
        $N = count($interests);
        echo("<span id=\"interests_span\">$N interest(s) selected</span>: <br>");
            for($i=0; $i < $N; $i++) {
            echo($interests[$i] . "<br> ");
            }    
    echo "</p></fieldset>";
    }
?>
        </main>
        
        <footer>
            <p>COSW30 2019 - Ona - Homework2</p>
        </footer>
    </body>
</html>