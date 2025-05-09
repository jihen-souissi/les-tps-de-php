<?php
header('content-type:text/html;charset=utf-8');
require_once("evenement.php");
require_once("listeEvenement.php");
$e1=new Evenement("concert de Jazz","2025-05-10","theatre de Bizerte");
$e2=new Evenement("Atelier de peinture","2025-06-01","centre culturel");
$e3=new Evenement("conférence PHP","2025-06-15","université de Bizerte");
$liste=new ListeEvenement();
$liste->ajouterEvenement($e1);
$liste->ajouterEvenement($e2);
$liste->ajouterEvenement($e3);
echo "---Liste des evenements---";
$liste->afficherTous();
?>