<!doctype html>
<head>
    <style>
    .error_message {
        color: red;
        }

    .database_error_message {
        color: red;
        }
    </style>
</head>
<html>

<?php
// 1). Add the database connection (this is database.php)
include('database.php');

/*
    CHECK IF THE FORM HAS BEEN SUBMITTED AND INSERT NEW USER INTO THE DATABASE
*/

if($_SERVER['REQUEST_METHOD'] == 'POST') { // This part is grabbing the data the user puts into the form
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password= $_POST['password'];
    // The above is just grabbing data input by user into form)

        // This is for FORM validation and outputting error messages if FORM fields aren't filled out  ---------------
          if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                if (!empty($_REQUEST['first_name'])) { //This checks if FIRST NAME is filled. If not, it gives error message
                 $firstname = $_REQUEST['first_name'];
                    } else {
                        $firstname = NULL;
                        echo "<p class=\"error_message\">Please enter your first name</p>";
                    }

                if (!empty($_REQUEST['last_name'])) { //This checks if LAST NAME is filled. If not, it gives error message
                    $lastname = $_REQUEST['last_name'];
                    } else {
                        $lastname = NULL;
                        echo "<p class=\"error_message\">Please enter your last name</p>";
                    }

                if (!empty($_REQUEST['email'])) { //This checks if EMAIL is filled. If not, it gives error message
                    $email = $_REQUEST['email'];
                    } else {
                        $email = NULL;
                        echo "<p class=\"error_message\">Please enter your email</p>";
                        }

                if (!empty($_REQUEST['password'])) { // This checks if PASSWORD is filled. If not, it gives error message
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
                    echo "<p class=\"success_message\">Thank you, $firstname $lastname @ $email!</p>.";
                    }
                // ------------------- END FORM VALIDATION MESSAGES  -----------------




    // ----------------- This is for inserting the user input into the data base -----------------
    $insert_query = "INSERT INTO USER_FONGSURDENAS (first_name, last_name, email, password)
                    VALUES ('$first_name', '$last_name','$email', '$password')"; // This is inserting into database. Parenthesis will be the column names being inserted into. This is SQL. It grabs the POST data and puts it into the query


    if($result = mysqli_query($connection, $insert_query)) {
        echo 'New user added to the database';
    } else {
            echo "<p class=\"database_error_message\"><strong><center>Error message</strong>: not being able to enter new user</center></p>";
            print_r($result);
        } // If you get the error, check a few things. Check form to make sure name of inputs is matching. Then check the php. try print_r on $result. Check variable and POST spellings
    }

/*
  QUERY THE DATABASE AND STORE ALL USERS INTO A VARIABLE
*/

// 2). Create a variable to store the query. Then create your query. Username was created as a table in mysql phpAdmin
$query = 'SELECT * FROM USER_FONGSURDENAS';

// 3). Run your query. This passes in the connection (from database file) and the query
$result = mysqli_query($connection, $query);

// 4). Check if the database returned anything
if($result) {
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC); // The ASSOC part will spit out the database column names, not made up numbers from php
   // print_r($rows); Commented this out for now so you don't get a huge list

    } else {
        // This will output an error if it doesn't work
        echo "<p class=\"database_error_message\"><strong><center>Error message if database doesn't return anything</strong>: <em>This didn't work! Try again please :(</em></center></p>";
    }
}
?>


<!-- ------------HTML BEGINS HERE--------------- -->

<center>

<head>
    <title>My First CRUD</title>
</head>
<body>
    <h1>Create a New User</h1>

    <h2>TESTING THE FORM FROM GITPOD</h2>
    <form action="crud.php" method="POST">
        <label for="first_name">First Name</label>
        <input type="text" id="first_name" name="first_name"><br>

        <label for="last_name">Last Name</label>
        <input type="text" id="last_name" name="last_name"><br>

        <label for="email">Email</label>
        <input type="email" id="email" name="email"><br>

        <label for="password">Password</label>
        <input type="password" id="password" name="password"><br>

        <label for="password_confirm">Confirm Password</label>
        <input type="password" name="password_confirm" id="password_confirm"><br>

        <button>Register</button>
    </form>

    <h2>Output a List of Users</h2>
    <table>
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Password</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($rows as $row) {
                echo '<tr>
                        <td>'.$row['first_name'].'</td>
                        <td>'.$row['last_name'].'</td>
                        <td>'.$row['email'].'</td>
                        <td>'.$row['password'].'</td>
                    </tr>';
            }
            ?>
        </tbody>
    </table>
</body>

</center>
</html>