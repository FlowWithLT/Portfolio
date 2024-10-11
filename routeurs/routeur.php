<?php
// Définition des actions disponibles pour chaque onglet avec des chemins absolus
$actionsParOnglet = [
    'accueil' => '../controleurs/controleur_Accueil.php',
    'erreur' => '../controleurs/controleur_erreur.php',
];

// Vérifier si l'onglet est passé en tant que paramètre dans l'URL
if (isset($_GET['onglet'])) {
    $onglet = $_GET['onglet'];
    routeur($onglet);
}
function routeur($onglet) {
    global $actionsParOnglet;
    
    if (isset($actionsParOnglet[$onglet])) {
        if ($onglet === 'parametresUtilisateur') {
            // Ajouter le jeton CSRF à l'URL de l'action
            $actionsParOnglet[$onglet];
        }

        // Si l'onglet est défini, inclure son contrôleur correspondant
        include $actionsParOnglet[$onglet];
    } else {
        // Si l'onglet n'est pas défini, inclure le contrôleur d'erreur
        include $actionsParOnglet['erreur'];
    }
}


