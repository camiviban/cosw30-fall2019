<!DOCTYPE html>
<html>
    
    <head>
       <title>Registration Form</title> 
       <meta charset="utf-8">
    </head>
    <body>
        
        <header>
            <h1>Please fill out the registration form</h1>
        </header>
        
        <h2>Registration Form</h2>
        
        <p>Register Today!</p>
        
        <form action="process_registration.php" method="POST">
        
            <p><label>First Name:</label>
            <input for="first_name" type="text" name="first_name" required>
            </p>
            
            <p><label>Last Name:</label>
            <input for="last_name" type="text" name="last_name" required>
            </p>
            
            <p><label>Email Address:</label>
            <input for="email" type="email" name="email" required>
            </p>
            
            <p><label>Password:</label>
            <input for="password" type="password" name="password" required>
            </p>
            
            <p><label>Confirm Password:</label>
            <input for="confirm_password" type="password" name="confirm_password" required>
            </p>
            
            <p><button>Register!</button></p>
            
        </form>
        
        <footer>
            <p><center>2019 COSW30 Lab 2 - Shanen and Ona</center></p>
        </footer>
 
    </body>
    
</html>