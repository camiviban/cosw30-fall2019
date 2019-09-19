<?php
    $numParagraphs = $_POST['paragraphs'];
    $text = $_POST['text'];
    $textExplode = explode(' ', $text); //converts string to array
    
    shuffle($textExplode); //randomizes the array
    
    /*foreach($textExplode as $key => $value) { //This gives a key, like a number 1 etc next to each part of the array
        echo "<p>$key Value: $value</p>";
    }
    */
    
    $textImplode = implode(' ',  $textExplode); //Turns the array back to a sstring
        echo "<p>$textImplode</p>";
        
    for($i = 0; $i < $numParagraphs; $i++) {
        echo "<p>\"$textImplode\"</p>";
    }


?>


