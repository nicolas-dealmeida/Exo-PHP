<!-- Déclaration des Variables PHP -->

<?php
$EXO = 'Exo7';

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
        <form class="" action="" method="GET">
                Texte : <input type="text" name="Texte">
                <input type="submit" name="Envoyer">
            </form>
            <?php
                session_start();
                if (isset($_SESSION['Texte'])) {
                    $Texte = $_SESSION['Texte'];
                    echo '</div><div class="Div1"><p>Le texte écrit est : '.$Texte.'</p>';
                }
                else{
                    if(isset($_GET['Texte'])){
                        $_SESSION['Texte'] = $_GET['Texte'];
                    }
                }
            ?>
        </div>
        <div class="Div1">
            <button id="refresh" onclick="document.location.reload(false)">Cliquez ici pour Rafraichir la page.</button>
            <button id="refresh" action="<?php session_destroy('Text') ?>">Cliquez ici pour Supprimer les valeurs de la session.</button>

    <!-- Code à revérifier et faire fonctionner

            if (isset($_POST['EFFACER'])) {
unset ($_SESSION['Texte']);
}
<form method="post" action="">
    <input type="submit" value="Effacer" name="EFFACER">
</form>

    -->

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