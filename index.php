<!DOCTYPE html>
<html lang="fr"> <!-- Langue FR -->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel='stylesheet' type='text/css' media='screen' href='global.css'> <!-- Assignement du CSS -->
        <meta name="description" content="Site concernant le PHP."> <!-- Description pour SEO -->
        <link rel="shortcut icon" href="img/Avatar.png"> <!-- Icone de page -->
        <title>Nicolas - PHP - Accueil</title> <!-- Titre Page -->
    </head>
    <!-- Début Header / Menu -->
    <header>
        <div class="Menu-Nav">
            <nav>
                <ul class="Menu">
                    <li class="Logo"><img src="img/Avatar.png" alt="Logo"></li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- Fin Header / Menu -->

    <!-- body -->
    <body>
        <div>
            <h1 class="TC">Accueil</h1>
        </div>
        <div class="Div1">
            <?php
                for($n=1;$n<9;$n++){
                    echo "<p>Exo $n : <a href='Exo$n.php'>Lien</a></p>";
                }
            ?>
        </div>
    </body>

    <footer>
        <div class="Div1">
            <?php 
            echo "Code Source du site :";

            highlight_file(__FILE__)
            ?>
        </div>
    </footer>
</html>