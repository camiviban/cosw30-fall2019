<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Homework 4: Population</title>
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
                
            main {
                margin-top: 3%;
                margin-bottom: 3%;
                padding: 2% 5%;
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
                
            table { 
                float: left;
                margin: 2% 5% 7% 5%;
                }
                
            #quotes_link {
                clear: both;
                text-align: center;
                margin-top: 50%;
                }
                
            th {
                background-color:lightgray;
                padding: 10px;
                border: 1px solid black;
                text-align: center;
                }
                
            td {
                padding: 10px;
                border: 1px solid black;
                text-align: center;
                }
                
            .sorted {
                background-color: lavender;
                }
                
            a {
                padding: 10px 15px;
                text-decoration: none;
                background-color: black;
                color: white;
                font-family: 'Playfair Display', serif;
                letter-spacing: 0.08em;
                font-size: 1.4em;
                margin-right: 2%;
                }
        </style>
            
    <body>
        <section id="full_page">
            <header>
                <h1 id="page_top">Population</h1>
            </header>
            
            <hr>

            <main>
                <center>
                    <table class="table_php">
                        <thead>
                            <tr>
                                <th colspan="2">The 15 Most Populous Cities as of July 1, 2017</th>
                            </tr>
                        </thead>
                        <?php
                        
                        $cities = array( //This is the associated array with the CITY NAMES keys and their matching POPULATIONS values
                            "New York, New York"=>8622698,
                            "Los Angeles, California"=>3999759,
                            "Chicago, Illinois"=>2716450,
                            "Houston, Texas"=>2312717,
                            "Phoenix, Arizona"=>1626078,
                            "Philadelphia, Pennsylvania"=>1580863,
                            "San Antonio, Texas"=>1511946,
                            "San Diego, California"=>1419516,
                            "Dallas, Texas"=>1341075,
                            "San Jose, California"=>1035317,
                            "Austin, Texas"=>950715,
                            "Jacksonville, Florida"=>892062,
                            "San Francisco, California"=>884363,
                            "Columbus, Ohio"=>879170,
                            "Fort Worth, Texas"=>874168
                            );
                            
                        /*arsort($cities); //This sorts the array by the key CITY NAMES. Use 'ksort' to sort by population value
                        //This foreach will print out each instance of City Name + population number on its own line
                        foreach($cities as $city => $population) {
                            echo "$city " . number_format($population) . "<br>"; // Number_format adds the commas back into the population values
                        }
                        */
                        ?>
                    
                        <tr>                                
                            <th>CITY/STATE</th>
                            <th>POPULATION</th>
                        </tr>
                        <?php 
                        arsort($cities);
                        foreach ($cities as $city => $population) : ?>
                        <tr>
                            <td><strong><?php echo ($city); ?></strong></td>
                            <td class="sorted"><?php echo (number_format($population)); ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                    
                   <table class="table_php">
                        <thead>
                            <tr>
                                <th colspan="2">The 15 Most Populous Cities as of July 1, 2017</th>
                            </tr>
                        </thead>
               
                        <tr>                                
                            <th>CITY/STATE</th>
                            <th>POPULATION</th>
                        </tr>
                        <?php 
                        ksort($cities);
                        foreach ($cities as $city => $population) : ?>
                        <tr>
                            <td class="sorted"><strong><?php echo ($city); ?></strong></td>
                            <td><?php echo (number_format($population)); ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </center>
                    

                <p id="quotes_link"><center><a href="https://cosw30-fall2019.herokuapp.com/homework/homework4/quote.html">quotes</a> <a href="#page_top">top of page</a></center></p>

            </main>
        </section>
    </body>
</html>