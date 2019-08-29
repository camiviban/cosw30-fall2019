<!DOCTYPE html>

<html>
    <head>
        <title>Labwork 1: Hello World</title>
        <link href="https://fonts.googleapis.com/css?family=Manjari&display=swap" rel="stylesheet">
        <style>
            h1 {
                background-image: url("https://cosw30-fall2019.000webhostapp.com/cosw30-fall2019/labwork/lab1/blue_bg.jpg");
                font-family: 'Manjari', sans-serif;
                font-weight: 700;
                font-size: 2.75em;
                margin: 0;
                padding: 4%;
                background-size: cover;
                }
            
            h2 {
                font-size: 1.05em;
                text-decoration: underline;
                text-decoration-color: deeppink;
                }
                
            body {
                background-color: darkgray;
                font-family: 'Manjari', sans-serif;
                margin: 0;
                }
                
            main {
                background-color: whitesmoke;
                }
            
            #whole_page {
                color: black;
                font-size: 1.3em;
                margin: 0 15% 0 15%;
                text-align: justify;
                text-justify: inter-word;
                }
            
            #sections_except_github_section {
                padding: 3%;
                }
            
            
            #hi_word {
                border: 15px solid royalblue;
                border-radius: 50%;
                font-weight: 700;
                font-size: 4em;
                text-align: center;
                padding-bottom: -15px;
                width: 180px;
                line-height: 180px;
                margin-right: auto;
                margin-left: auto;
                margin-bottom: 5%;
                text-decoration: underline;
                text-decoration-color: deeppink;
                }
            
            #introduction_section {
                padding-top: 2%;
                }
            
            #introduction_paragraph {
                text-indent: 40px;
                }
            
            #cat_paragraph {
                text-align: center;
                padding-bottom: 4%;
                }
            
            .assignment_thoughts_sections {
                float: left;
                margin: 2%;
                max-width: 44%;
                }
            
            #php_links_section {
                clear: both;
                color: red;
                margin: 0;
                margin-bottom: 5%;
                padding-top: 2%;
                padding-bottom: 2%;
                }
            
            #github_profile_section {
                background-color: royalblue;
                color: white;
                border-radius: 10px 10px 0px 0px;
                text-align: center;
                margin-right: auto;
                margin-left: auto;
                padding: 1% 0 0.05% 0;
                max-width: 15%;
                letter-spacing: 0.04em;
                line-height: 0.4em;
                }
            
            #github_profile_link {
                text-decoration: none;
                }
            
            #github_profile_section:hover {
                background-color: black;
                color: hotpink;
                transition-duration: 1s;
                }
            
            #github_profile_section:active {
                background-color: hotpink;
                font-weight: 700;
                color: black;
                transition-duration: 0.75s;
                }
            
            footer {
                color: gray;
                text-align: center;
                }
        </style>
    </head>

    <body>
        <header>
            <h1 id="header_section"></h1>
        </header>
        
        <main>
            <section id="whole_page">
                <section id="sections_except_github_section">
                    <section id="introduction_section">
                        <div id="hi_word">Hi</div>
                        <p id="introduction_paragraph">Nice to meet you all! My name's Ona and this is my second COSW class! The first one I took was in the spring (COSW 10), which focused on HTML and CSS. Looking forward to giving this class a whirl. To cover a little bit about myself: I enjoy lap swimming, Marvel movies, reading (soft spot for sci-fantasy, post-apocalypse, and zombies), creative writing, and I game on a PS4 and also play a few MMORPGs. I'm also looking into getting more involved in volunteer work and would like to volunteer with cats at the animal shelter.</p>
                        <p id="cat_paragraph">Speaking of cats, I have two bossy, furry little monsters. Cats are perfection. :)</p>
                    </section>

                    <section class="assignment_thoughts_sections">
                        <h2>Thoughts on the assignment</h2>
                        <p>I enjoyed fiddling around with the HTML and CSS, testing out colors and changing the em font-sizes. It was good practice as some of the code got broken and required trying to clean it up, or trying to add more "section" id and classes. I liked how we have immediately jumped into creating pages!</p>
                    </section>

                    <section class="assignment_thoughts_sections">
                        <h2>Challenges?</h2>
                        <p>Margins and padding doing weird things! Sometimes I'll find that margins or applied to certain sections of the code are creating undesirablely large spaces on areas I didn't want them to. So there's a good chunk of time troubleshooting where the issue is to remove that rogue margin/padding effect. </p>
                    </section>

                    <section id="php_links_section">
                        <?php
                            echo "Hello World!";
                        ?>
                    </section>
                </section>

                    <a id="github_profile_link" href="https://github.com/camiviban" target="_blank">
                        <section id="github_profile_section">
                            <p>Github Profile</p>
                        </section>
                    </a>
            </section>
        </main>
    
        <footer>
            <p>COSW 30 Fall 2019 - Lab 1 - Ona</p>
        </footer>
    </body>
</html>