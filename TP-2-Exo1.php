<!-- Déclaration des Variables PHP -->

<?php
$EXO = 'Exo4';

?>

<!DOCTYPE html>
<html lang="fr"> <!-- Langue FR -->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel='stylesheet' type='text/css' media='screen' href='global.css'> <!-- Assignement du CSS -->
        <meta name="description" content="Site concernant <?php echo $EXO?> "> <!-- Description pour SEO -->
        <link rel="shortcut icon" href="img/Avatar.png"> <!-- Icone de page -->
        <title>Nicolas - PHP - <?php echo $EXO?></title> <!-- Titre Page -->
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
        <div class="Div1">
            <table border="1">
                    <?php
                    for($i=1;$i<7;$i++){
                    echo "<tr><td>".$Tab[$i]["Nom"]. "|" .$Tab[$i]["Prenom"]. "|" .$Tab[$i]["MDP"]."</td></tr>";}
                    ?>
            </table>
        </div>
    </body>

    <footer>
        <div class="Div1">
            <?php 
            echo "Code Source du site : <p></p>";

            highlight_file(__FILE__)?>
        </div>
    </footer>
</html>