<?php

include("init/data.php");    

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title><?php echo $title?></title>
        <link rel="stylesheet" type="text/css" href="/style/main.css">
    </head>
    <body>

        <div id="big_wrapper">

            <header id="hp_logo">
                <?php include("init/header.php"); ?>
            </header>

            <nav id="main_menu">		        <ul>			        <li><a href="/" title="Homepage">Home</a></li>			        <li>Projects</li>		        </ul>	        </nav>

            <section id="main_section">
                <header>
                    <h1>Latest project:</h1>
                </header>
                <footer>
                    <?php include("init/latestproject.php"); ?>
                </footer>
            </section>

            <footer id="footer">
                <h3>Copyright Lexware 2014</h3>
            </footer>

        </div>
        
    </body>
</html>
