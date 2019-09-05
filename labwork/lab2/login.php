<!DOCTYPE html>
<html>
    
    <head>
       <title>Login Form</title> 
       <meta charset="utf-8">
    </head>
    <body>
        <header>
            <h1>Login</h1>
        </header>
        
        <form action="process_login.php" method="POST">
            <label>Email Address:</label>
            <input for="email" type="email" name="email"required>
            
            <label>Password:</label>
            <input for="password" type="password" name="password" required>
            
            <button>Log in!</button>
        </form>
        
        <footer>
            <p><center>2019 COSW30 Lab 2 - Shanen and Ona</center></p>
        </footer>
    </body>
    
</html>