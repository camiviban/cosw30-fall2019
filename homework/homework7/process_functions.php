<html>
    <head>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://fonts.googleapis.com/css?family=PT+Mono|VT323&display=swap" rel="stylesheet">
    <title>Homework 7  - Functions</title>
    </head>
        
    <body>
        <header>
            <h1>CYBERDYNE SYSTEMS LOG</h1>
        </header>
        
        <main>
    
    <?php
                            

        // This is the start of variables declared outside of functions. These declared the two numbers defined by the user in the two number fields
            $value1 = $_REQUEST['value1'];
            $value2 = $_REQUEST['value2'];
            
        // This is the start of all functions being declared
            function GREETING() {
                if(isset($_POST['name']))
                $name = $_POST['name'];
                echo "<p id=\"greeting_p\">Hello . . . USER <span id=\"username\"> $name</span>. Here are your results:</p><br>";
                }
            
            function ADDITION($a = 0, $b = 0) { 
                    return ($a + $b); 
                    }
            
            function SUBTRACTION($a = 0, $b = 0) {
                    return ($a - $b);
                    }
                    
            function MULTIPLICATION($a = 1, $b = 1) {
                    return ($a * $b);
                    }
                    
            function DIVISION($a = 1, $b = 1) {
                    return ($a /= $b);
                    }
          
            function FAREWELL() {
                    echo "<br>";
                    echo "<p id=\"farewell_p\">We hope you have a nice day, [INSERT: positive desc \"VALUED\"] organic.</p><br>";
                    }
        
        // This is the end of all functions beings declared
                    
    
        //This is the start of the actual HTML output
            GREETING(); // This function outputs greeting message and defines the name variable based off the form input's name value
            

            
            if ($_REQUEST['dropdown_operators'] == "add") // This outputs the ADD values using the ADDITION function
                {
                 echo "<div class=\"results\">";
                 echo $value1 . " + " . $value2 . " = ";
                 echo ADDITION($value1+$value2); 
                 echo "</div>";
                 }
                else if ($_REQUEST['dropdown_operators'] == "subtract") // This outputs the SUBTRACT values using the SUBTRACTION function
                    { 
                    echo "<div class=\"results\">";
                    echo $value1 . " - " . $value2 . " = ";
                    echo SUBTRACTION($value1-$value2);
                    echo "</div>";
                    }
                
                else if ($_REQUEST['dropdown_operators'] == "multiply") // This outputs the MULTIPLY values - so far not working, shows 0 as result??
                    { 
                    echo "<div class=\"results\">";
                    echo $value1 . " x " . $value2 . " = ";
                    echo MULTIPLICATION($value1*$value2);
                    echo "</div>";
                    }
                    
                else if ($_REQUEST['dropdown_operators'] == "divide") // This outputs the MULTIPLY values - so far not working, shows 0 as result??
                    { 
                    echo "<div class=\"results\">";
                    echo $value1 . " / " . $value2 . " = ";
                    echo DIVISION($value1/=$value2);
                    echo "</div>";
                    }
  


            FAREWELL(); // This function outputs farewell/thanks messages
    ?>
             
    <!-- This is the back button to the form -->     
        <br><br><br>
        <p><a id="back_button" href="functions.php">(reset) calculate</a></p>
        </main>
        
        <footer>
            <p>(c) 1984 - Cyberdyne Systems</p>
        </footer>
    </body>
    
</html>