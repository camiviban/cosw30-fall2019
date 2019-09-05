<?php
    //capture form data
    
    $email = $_POST['email'];
    $password = $_POST['password'];
    //create variables to match data inputs 
    $correct_email = 'test@test.com';
    $correct_password = 'supersecure123';
    //verify variables
    if(!empty($_POST['email'] && !empty($_POST['password']))) {
        
    }
    //check if data is good
    if ($correct_email == $email && $password == $correct_password){
       
    echo "<h1>You have successfully logged in</h1>";
    echo "$email " . "$password";
    }
    else {
        echo "Sorry. Try again!";
    };
?>