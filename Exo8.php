<!-- Déclaration des Variables PHP -->

<?php
$EXO = 'Exo8';

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
        <div>
            <h1 class="TC"><?php echo "$EXO" ?></h1>
        </div>
        <div class="Div1">
            <p><form class="" action="" method="POST">
                Texte : <input type="text" name="Texte1">
                <input type="submit" name="Envoyer">
            </p></form>
            <?php
                session_start();
                if (isset($_POST['Delet'])){
                    unset($_SESSION['Texte1']);
                    echo '</div><div class="Div1"><p>DESTROY</p>';
                }
                else{
                    if(isset($_POST['Texte1'])){
                        $_SESSION['Texte1'] = $_POST['Texte1'];
                        $Texte1 = $_SESSION['Texte1'];
                        echo '</div><div class="Div1"><p>Le texte écrit est : '.$Texte1.'</p>';
                    }
                    else{
                        if (isset($_SESSION['Texte1'])){
                            $Texte1 = $_SESSION['Texte1'];
                            echo '</div><div class="Div1"><p>Le texte écrit est : '.$Texte1.'</p>';
                        }
                        else{
                            echo '</div><div class="Div1"><p>Il n\'y a pas encore de texte.</p>';
                        }
                    }
                }
            ?>
        </div>
        <div class="Div1">
            <form class="" action="" method="POST">
                <button id="Refresh" onclick="window.location.reload(false)">Cliquez ici pour Rafraichir la page.</button>
                <button type="submit" name="Delet" onclick="window.location.reload(false)">Supprimer le texte.</button>
            </form>
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