
    
<main>
    <section id="main_section">
        <h2>Log In Form</h2>
<?php
    $email ='';
    $password ='';
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        if(!empty($_REQUEST['email'])) { // This checks if email field is empty. If empty, it submits error message. If it has email, it will stick it
            $email = $_REQUEST['email'];
            } else {
                $email = NULL;
                echo "<p class=\"error_message\"><center>Please fill out your email</center></p>";
                }
        
        if(!empty($_REQUEST['password'])) { // This checks if password field is empty. if empty, it submits error message. If it has password, it will sticky it (you cannot see the password characters)
            $password = $_REQUEST['password'];
            } else {
                $password = NULL;
                echo "<p class=\"error_message\"><center>Please fill out your password</center></p>";
                }
                
        if (!empty($email && $password)) { //This echos a message if BOTH email/password are filled.
            echo "<p class=\"success_message\"><center>Thank you for logging in!</center></p>";
            }

    }

?>
        <section="login_section">
            <section id="text_login">
                <form action="" method="POST">
                    <label>Email</label><br>
                    <input type="email" name="email" id="email" value="<?php echo $email;?>"><br><br>
                    
                    <label>Password</label><br>
                    <input type="password" name="password" id="password" value="<?php echo $password;?>"><br><br>
                    
                    <center><input type="submit" name="submit" value="Sign In"></center>

            </form>
            </section>
        </section>
    </section>
</main>

