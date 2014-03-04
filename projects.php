<?php
    
include("init/data.php");

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title><?php echo $title?> | Projects</title>
        <link rel="stylesheet" type="text/css" href="/style/main.css">
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

                <article>
                    <header>
                        <h2>Minecraft Version Installer</h2>
                    </header>
                    <footer>
                        Available on <a href="https://github.com/lexware/Minecraft-Version-Installer" title="Github">Github</a>
                    </footer>
                </article>

                <article>
                    <header>
                        <h2>FreeOS live development</h2>
                    </header>
                    <footer>
                        Available on <a href="http://scratch.mit.edu/projects/18028834" title="Scratch">Scratch</a>
                    </footer>
                </article>

                <article>
                    <header>
                        <h2>lexOS Beta 1.1</h2>
                    </header>
                    <footer>
                        Available on <a href="http://scratch.mit.edu/projects/17937756" title="Scratch">Scratch</a>
                    </footer>
                </article>

            </section>

            <footer id="footer">
                <?php include("init/footer.php"); ?>
            </footer>

        </div>
        
    </body>
</html>
