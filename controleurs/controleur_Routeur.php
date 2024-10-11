<?php
require_once "../routeurs/routeur.php";

// Redirection avec l'onglet "accueil" et le token CSRF si disponible
$url = '../routeurs/routeur.php?onglet=accueil';
header("Location: $url");
exit; // Assurez-vous que le script se termine après la redirection