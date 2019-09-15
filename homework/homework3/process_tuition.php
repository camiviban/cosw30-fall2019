<!DOCTYPE html>
<html lang="eng">
    <head>
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css?family=Comfortaa|Gothic+A1|Noto+Serif+TC&display=swap" rel="stylesheet">
        <title>Tuition Calculator</title>
        <style>
            
            body {
                margin: 0;
                padding: 0;
                font-family: 'Gothic A1', sans-serif;
                }
            
            header {
                margin: 0;
                top: 0;
                }
            
            h1 { 
                text-align: center;
                font-size: 4.3em;
                color: darkred;
                font-family: 'Noto Serif TC', serif;
                margin-bottom: 2%;
                margin-top: 0.5%;
                padding: 0.5%;
                margin-right: auto;
                margin-left: auto;
                width: 40%;
                }
            
            h2 {
                text-align: center;
                font-size: 2em;
                margin-bottom: 5%;
                letter-spacing: 0.04em;
                }
            
            h3 { 
                border-left: 10px solid darkred;
                padding-left: 10px;
                }
            
            main {
                margin-right: auto;
                margin-left: auto;
                width: 45%;
                }
            
            
            section {
                margin-bottom: 5%;
                }
                        
            #required_section {
                padding-bottom: 3%;
                border: 3px dashed gainsboro;
                padding: 2%;
                border-radius: 0 0 10px 10px;
                }
                
            .span_label {
                font-weight: bold;
                }
                
            .p_scholarship {
                text-align: center;
                font-weight: bold;
                color: green;
                }
                
            .p_total {
                text-align: center;
                font-size: 2em;
                }
            
            #optional_section {
                border: 3px dashed gainsboro;
                padding: 2%;
                border-radius: 0 0 10px 10px;
                background-color: gainsboro;
                }
            
            footer {
                text-align: center;
                opacity: 0.6;
                bottom: 0;
                width: 99.9%;
                }
                    
        </style>
    </head>
    
    <body>
        <header>
            <h1><span id="longbeach">long beach</span>
                <span id="city_college">city college</span></h1>
        </header>
        
        
        <main>
            <h2>LBCC Tuition Calculator</h2>
            
                <!--This is the REQUIRED section TUTION breakdown -->
                <h3>Total Registration Costs</h3>
                
                 <section id="required_section">
                     <?php
                     $resident = $_POST['resident_determination'];
                     $unit_numbers = $_POST['unit_numbers'];
                     $resident_rate = 46;
                     $nonresident_rate= 265;
                     $studenthealth_fee = 20;
                     $service_card = $_POST['service_card'];
                     $parking_permit = $_POST['parking_permit'];
                     $resident_rate_total = $resident_rate * $unit_numbers;
                     $nonresident_rate_total = $nonresident_rate * $unit_numbers;
                     $total_reg_resident = $resident_rate_total + $studenthealth_fee + $service_card + $parking_permit;
                     $total_reg_nonresident = $nonresident_rate_total + $studenthealth_fee + $service_card + $parking_permit;
                     $scholarship_resident = (rand(0,$total_reg_resident));
                     $scholarship_nonresident = (rand(0,$total_reg_nonresident));

                     if($resident == 46) {
                     //Print resident rate x units
                    echo "<p><span class=\"span_label\">Resident tuition</span>: $$resident_rate x $unit_numbers units = $$resident_rate_total</p>";
                        } else {
                        //Print nonresident rate x units
                        echo "<p><span class=\"span_label\">Non-resident tuition</span>: $$nonresident_rate x $unit_numbers units = $$nonresident_rate_total</p>";
                        }
                     
                    //Print mandatory health fee
                    echo "<p><span class=\"span_label\">Student health fee</span>: $$studenthealth_fee</p>";
                     
                    //Print optional college service card
                    echo "<p><span class=\"span_label\">College service card</span>: $$service_card</p>";
                    
                    //Print optional parking permit cost
                    echo "<p><span class=\"span_label\">Parking Permit</span>: $$parking_permit</p>";
                    
                    if($resident == 46) {
                    //Print total registration costs before scholarship subtracted
                    echo "<p><strong><center>RESIDENT REGISTRATION COST</strong>: $$total_reg_resident</center> </p>";
                        } else {
                            //Print non-resident totaly registration before scholarship subtracted
                             echo "<p><strong><center>NON-RESIDENT REGISTRATION COST</strong>: $$total_reg_nonresident</center> </p>";
                        }
                
                    if($resident == 46) {
                    //Print randomized scholarship for resident
                    echo "<p class=\"p_scholarship\">Scholarship awarded (resident): $$scholarship_resident</p>";
                        } else {
                            //Print randomized scholarship for non-resident
                            echo "<p class=\"p_scholarship\">Scholarship awarded (non-resident): $$scholarship_nonresident</p>";
                            }
                     
                     
                      ?>
                </section>
                
            <!--This is the TOTAL COST section -->
                <h3>Total balance due</h3>
                <section id="optional_section">
                    
                    <?php
                    $total_balance_due = $resident_rate_total - $scholarship_resident + $studenthealth_fee + $service_card + $parking_permit;
                    $total_balance_due2 = $nonresident_rate_total - $scholarship_nonresident + $studenthealth_fee + $service_card + $parking_permit;


                    if($resident == 46) {
                    echo "<p class=\"p_total\">Total resident balance due: $$total_balance_due</p>";
                    } else {
                    echo "<p class=\"p_total\">Total non-resident balance due: $$total_balance_due2</p>";
                    }
                    ?>
                    
                </section>
                
            </form>
        </main>
        
        <footer>
            <p>COSW 30 Fall 2019 - Homework 3 - Ona</p>
        </footer>
    </body>

</html>