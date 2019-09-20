<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Homework 4: Favorite Quote</title>
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display|Kodchasan&display=swap" rel="stylesheet">
        <style>
            body {
            font-family: 'Kodchasan', sans-serif;
            background-color: lightgray;
            }
            
            h1 {
            font-family: 'Playfair Display', serif;
            letter-spacing: .05em;
            font-size: 3.5em;
            text-align: center;
            }
            
            hr {
                color: lavender;
                width: 25%;
            }
            
            #full_page {
                background-color: whitesmoke;
                width: 60%;
                padding: 1%;
                text-align: left;
                border-left: 20px solid purple;
                border-right: 20px solid purple;
                border-radius: 50px;
                margin: 2% 17%;
                box-shadow: 10px 10px 25px lightgray;
            }
            
            #outputs {
            padding: 1% 10% 5%;10%;
            }
            
            .word_count {
                background-image: linear-gradient(gold, yellow);
                width: 15%;
                padding: 1%;
                text-align: center;
                font-weight: 700;
                border-radius: 25px;
                font-size: 1em;
                box-shadow: 3px 3px 25px lightgray;
            }
            

         </style>   
    </head>

    <body>
        <section id="full_page">
            <header>
                <h1>Favorite Quote</h1>
            </header>
            
            <hr>

            <main>
                <section id="outputs">
                    <h2>01. Original Output</h2>
                        <?php
                            $quoteText = $_POST['text'];
                            $textExplode = explode(' ', $quoteText); 
                            
                                foreach($textExplode as $key => $value) { 
                                 echo "$value<br>"; // This prints out the words in a list format that they appeared in the user filled textbox
                                }
                                
                                // Writes out the word count from what's written in the text box
                                echo "<br><div class=\"word_count\">Word Count - ";
                                echo count($textExplode);            
                                echo "</div>";                       
                                
                        ?>
                    

                    <h2>02. Alphabetized Output</h2>
                        <?php
                            sort($textExplode, SORT_NATURAL | SORT_FLAG_CASE); // The sort_natural area makes it so the uppercase words are sorted as well!!!
                            foreach($textExplode as $key => $value) {
                                echo "$value<br>";
                                }

                        ?>
                        
                    <h2>03. Reverse Alphabetized Output</h2>
                    
                        <?php
                            rsort($textExplode, SORT_NATURAL | SORT_FLAG_CASE); 
                            array_push($textExplode, "<em>A</em>", "<em>NEW</em>", "<em>SENTENCE</em>"); // array_push adds these words to the end of the previous array that came from the user text area
                            foreach($textExplode as $key => $value) {
                                echo "$value<br>";
                            }   
                        ?>
                    
                    
                    <h2>04. Output new array list from 03. with a current word count (after +3 words to list end).</h2>
                         <?php
                         
                         //This is printing the same array from 03
                            foreach($textExplode as $key => $value) {
                                echo "$value<br>";
                                }


                         // Writes out the word count from what's written in the text box + the 3 new words of A NEW SENTENCE
                                echo "<br><div class=\"word_count\">Word Count - ";
                                echo count($textExplode);            
                                echo "</div>";
                        ?>
                    
                   <h2>05. Output the new array list from 04. with a current word count (after -3 words from list start.</h2>
                        <?php
                        $removeWords = array($textExplode); //This starts the ability to remove lines of keys from text inputted words. 'textExplode' is the variable I created to force the user text into a list
                        $removed1 = array_shift($textExplode); // This removed the word in first rank
                        $removed2 = array_shift($textExplode); // This removed the word in second rank
                        $removed3 = array_shift($textExplode); // This removed the word in third ranks
                        foreach($textExplode as $key => $value) {
                                echo "$value<br>"; 
                                }
                        
                         //This does word count, make sure it is correct
                                echo "<br><div class=\"word_count\">Word Count - ";
                                echo count($textExplode);            
                                echo "</div>";    
                                
                        ?>
                    
                </section>

            </main>
        </section>
    </body>
</html>