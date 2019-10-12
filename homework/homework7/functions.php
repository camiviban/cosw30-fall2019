
<?php
/*
    $names = ['MARIO'];
    
    function greeting($nametest) { // this is what a function looks like. it states its a function and the white part is the variable name for the function the user creates
        echo '<p>Hi, my name is ' .$nametest. '.</p>';
        }
    

    foreach($names as $name) { // the first bit $names is the array name and $name is what is being set as the individual variable inside the array
        greeting($name); // This uses the function to print out a greeting for each name inside the array
    }
*/
?>

<html>
    <head>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://fonts.googleapis.com/css?family=PT+Mono|VT323&display=swap" rel="stylesheet">
    <title>Homework 7 - Functions</title>
    </head>
     
     <body>
         <main>
             <form action="process_functions.php" method="post">
                 
                <input type="text" name="name" value="" placeholder="Type your name here" required><br><br>
                <input type="number" name="value1" value="" placeholder="[Insert value]" required/>
                
                <select name="dropdown_operators" required><br>
                     <option value=""> [Pick operator]</option>
                     <option value="add"> + </option>
                     <option value="subtract"> - </option>
                     <option value="multiply"> x </option>
                     <option value="divide"> / </option>
                 </select>
                 
                 <input type="number" name="value2" value="" placeholder="[Insert value]" required/><br><br>
    
                 <input type="submit" value="CALCULATE..."/>
             </form>
             
        <br><br><br>
        <p><a id="back_button" href="functions.php">(reset) calculate</a></p>
        </main>
 </body>
</html>