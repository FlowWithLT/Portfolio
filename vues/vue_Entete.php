<?php
require_once("../routeurs/routeur.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titrePage; ?></title>
</head>
<body>
<?php
    require_once '../ressources/ressource_Styles.php';
?>

<form class="entete_Formulaire" method="GET" action="../routeurs/routeur.php">
    <header class="entete">
        <button class="entete_Selection" type="submit" name="onglet" value="accueil">Accueil</button>
        <button class="entete_Selection" type="submit" name="onglet" value="projets">Projets</button>
    </header>
</form>




