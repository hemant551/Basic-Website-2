<?php

include("init/data.php");    

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title><?php echo $title?> | People</title>
        <?php include("init/head.php"); ?>
    </head>
    <body>

        <div id="big_wrapper">

            <header id="hp_logo">
                <?php include("init/header.php"); ?>
            </header>

            <nav id="main_menu">
		        <?php include("init/navigation.php"); ?>
	        </nav>

            <section id="main_section">
                <header>
                    <h1>People:</h1>
                </header>
                <footer>
                    <?php include("init/people.php"); ?>
                </footer>
            </section>

            <footer id="footer">
                <?php include("init/footer.php"); ?>
            </footer>

        </div>
        
    </body>
</html>
