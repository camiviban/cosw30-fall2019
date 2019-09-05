<?php
    //capture form data
    
    $email = $_POST['email'];
    $password = $_POST['password'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $confirm_password = $_POST['confirm_password'];
    //verify variables
    if(!empty($email) && !empty($password) && !empty($first_name) && !empty($last_name) && !empty($confirm_password)) {
        if ($password == $confirm_password){
            echo "Thank you for registering! We will contact you at $email as soon as possible!";
        }
        
    } else {
        echo "Error";
    }
    
    
  /*  //check if data is good
    if ($correct_email == $email && $password == $correct_password){
       
    echo "<h1>You have successfully logged in</h1>";
    echo "$email " . "$password";
    }
    else {
        echo "Sorry. Try again!";
    };*/
?>