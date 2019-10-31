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
    // Must add validation for input coming in, for assignment (doesn't have it yet, the above is just grabbing data input by user into form)


    $insert_query = "INSERT INTO USER_FONGSURDENAS (first_name, last_name, email, password)
                    VALUES ($first_name, $last_name, $email, $password)"; //This is inserting into database. Parenthesis will be the column names being inserted into. This is SQL. It grabs the POST data and puts it into the query


    if($result = mysqli_query($connection, $insert_query)) {
        echo 'New user added to the database';
    } else {
            echo '<strong>Error entering new user</strong>';
        }
    // If you get the error, check a few things. Check form to make sure name of inputs is matching. Then check the php. try print_r on $result. Check variable and POST spellings
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
        echo "This didn't work! Try again please :(";
}
?>


<!-- HTML BEGINS HERE -->

<!doctype html>
<html>
<head>
    <title>My First CRUD</title>
</head>
<body>
    <h1>Create a New User</h1>
    <form action="crud.php" method="POST">
        <label for="first_name">First Name</label>
        <input type="text" id="first_name" name="first_name"><br>

        <label for="last_name">Last Name</label>
        <input type="text" id="last_name" name="last_name"><br>

        <label for="email">Email</label>
        <input type="email" id="email" name="email"><br>

        <label for="password">Password</label>
        <input type="password" id="password" name="password"><br>

        <!--Add a second password input so the user has to retype their password -->

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
</html>