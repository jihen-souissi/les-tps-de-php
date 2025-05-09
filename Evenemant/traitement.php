<?php
header('content-type:text/html;charset=utf-8');
require_once("listeEvenement.php");
session_start();
if(!isset($_SESSION['liste'])){
    $_SESSION['liste']=new ListeEvenement();
}
if(isset($_POST['titre'])&& isset($_POST['date'])&& isset($_POST['lieu'])){
    $titre=$_POST['titre'];
    $date=$_POST['date'];
    $lieu=$_POST['lieu'];

    $evenement= new Evenement($titre,$date,$lieu);
    $_SESSION['liste']->ajouterEvenement($evenement);
}
echo"<h3>Liste des evenements</h3>";
$_SESSION['liste']->afficherTous();
?>

