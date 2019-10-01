<html>
    <head>
        <meta charset="utf-8">
        <title>Homework 5 Practice - index</title>
        <link rel="stylesheet" type="text/css" href="includes/styles.css">
        <link href="https://fonts.googleapis.com/css?family=Poppins|Prata&display=swap" rel="stylesheet">
    </head>
    
    <?php //This includes the HEADER and the header navigation
        include ("includes/header.php");
    ?>
    
    <main>

        <h2>Registration Form</h2>
        <p>Sign up with us today and get the all the gorgeously gloriously sushi updates!</p>
        
        <?php
        //These are the empty variables that would repre
        $firstname = '';
        $lastname = '';
        $email = '';
        $password = '';
        $password_confirm = '';
    
    
        /* This check if the form values have been entered or not.
        Insert code in this IF statement if you want
        anything to run AFTER the form's been submitted
        */
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            
            if (!empty($_REQUEST['firstname'])) { //This checks if FIRST NAME is filled and stickies it. If not, it gives error message 
             $firstname = $_REQUEST['firstname']; 
                } else {
                    $firstname = NULL;
                    echo "<p class=\"error_message\">Please enter your first name</p>";
                }
            
            if (!empty($_REQUEST['lastname'])) { //This checks if LAST NAME is filled and stickies it. If not, it gives error message
                $lastname = $_REQUEST['lastname'];
                } else {
                    $lastname = NULL;
                    echo "<p class=\"error_message\">Please enter your last name</p>";
                }
                
            if (!empty($_REQUEST['email'])) { //This checks if LAST NAME is filled and stickies it. If not, it gives error message
                $email = $_REQUEST['email']; 
                } else {
                    $email = NULL;
                    echo "<p class=\"error_message\">Please enter your email</p>";
                    }
                    
            if (!empty($_REQUEST['password'])) { // This checks if PASSWORD is filled and stickies it. If not, it gives error message
                $password = $_REQUEST['password'];
                } else {
                    $password = NULL;
                    echo "<p class=\"error_message\">Please enter your password</p>";
                    }
                    
            if (!empty($_REQUEST['password_confirm'])) { // This is checking if password confirm is filled. If it isn't filled, it gives an error message
                $password_confirm = $_REQUEST['password_confirm'];
                } else {
                    $password_confirm = NULL;
                    echo "<p class=\"error_message\">Please CONFIRM the password you created</p>";
                    }
                    
            if ($password !== $password_confirm and !empty($password_confirm)) { // This checks if password/password confirmation match. If they don't, an error message is submitted. if they do match, a success message is submitted
                    echo "<p class=\"error_message\">Password and password confirmation must match</p>";
                    }
                    
            if ($firstname && $lastname && $email && $password == $password_confirm and !empty($password_confirm) ) { // This submits a success message if all fields are filled
                echo "<p class=\"success_message\">Thank you, $firstname $lastname! We'll reach you at $email soon</p>.";
                }
    
        }
    
    ?>
    
        <section id="text_section">
            <form action="" method="POST">
                        <label>First Name </label><br>
                        <input type="text" name="firstname" id="firstname" value="<?php echo $firstname; ?>"><br><br>
                        
                        <label>Last Name</label><br>
                        <input type="text" name="lastname" id="lastname" value="<?php echo $lastname; ?>"><br><br>
                        
                        <label>Email Address</label><br>
                        <input type="email" name="email" id="email" value="<?php echo $email; ?>"><br><br>
                        
                        <label>Password</label><br>
                        <input type="password" name="password" id="password" value="<?php echo $password; ?>"><br><br>
                        
                        <label>Confirm Password</label><br>
                        <input type="password" name="password_confirm" id="password_confirm" value="<?php echo $password_confirm; ?>"><br><br>
                        
                        <input type="submit" name="submit" value="Register">
            </form>
        </section>

    </main>

    <?php  //This includes the FOOTER
        include ("includes/footer.php");
    ?>