<?php

include("init/data.php");    

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title><?php echo $title?> | Minecraft Version Installer</title>
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
                    <h1>Minecraft Version Installer</h1>
                </header>
                <footer>
                    <p>There will be some content here soon!</p>
                </footer>
            </section>

            <footer id="footer">
                <?php include("init/footer.php"); ?>
            </footer>

        </div>
        
    </body>
</html>
