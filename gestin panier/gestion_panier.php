<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Produits</title>
    <link rel="stylesheet" href="style.css">
   
</head>
<body>
    <h1>Gestion des Produits</h1>

    <form  action="gestion_panier.php" method="post">
        <div>
            <label for="nom">Nom du produit :</label>
            <select id="produits" name="nom">
                <option value="0">Choisir un produit</option>
                <option value="10">Souris</option>
                <option  value="35">Clavier</option>
                <option   value="250">Ecran</option>
            </select>
        </div>
        <div>
            <label for="prod_supp">nom produit à supprimer: </label>
            <select id="produits" name="prod_supp">
                <option value="0">Choisir un produit</option>
                <option value="10">Souris</option>
                <option  value="35">Clavier</option>
                <option   value="250">Ecran</option>
            </select>
        </div>
        <div>
            <label for="quantite">Quantité commandée :</label>
            <input type="number" id="quantite" name="quantite">
        </div>
        <div>
            <input type="submit" value="Commander 🛍️" name="commander">
            <input type="submit" value="Affciher 🛒"  name="afficher">
            <input type="submit" value="Supprimer" name="supprimer">
        </div>
        
    </form>

</body>
</html>
<?php
    session_start();
    function init_panier(){
        if(empty($_SESSION["panier"]))
        $_SESSION["panier"]=array();

    }
    function ajout_panier($nom,$qte){
         array_push($_SESSION["panier"],array("nom"=>$nom , "quantite"=>$qte));
        return "Ajout avec succès ! <br>";}
    
   function supp_prod($prod_supp){
    $tab=array();
    foreach ($_SESSION["panier"] as $produit) {
        if ($produit["nom"] != $prod_supp) {
         $tab[] = $produit;}}
    $_SESSION["panier"] = $tab;
    echo"suppression effectuée ! <br>";
   }
    function aff(){
        foreach($_SESSION["panier"]as $produit){
            echo"le prix unitaire du produit: ".$produit["nom"]."dt <br>"."la quantité du produit: ".$produit["quantite"]."<br>";
        }
    }
        
       
       
      
      
    init_panier();
    if(!empty($_POST["commander"])){

        if (isset($_POST["nom"]) && isset($_POST["quantite"] )){
            $nom=$_POST["nom"];
            $qte=$_POST["quantite"];
            ajout_panier($nom,$qte);}}
     if(!empty($_POST["supprimer"])){
        if(!empty($_POST["prod_supp"])){
            $prod_supp=$_POST["prod_supp"];
            supp_prod($prod_supp);}
        else
            echo"veuillez selectionner le produit à supprimer <br>";  } 
    if(!empty($_POST["afficher"])){
        aff();
            } 
    echo "le contenu des produits:  <br>"  ;
    foreach($_SESSION["panier"] as $produit){
        echo"prix total: ".$produit["nom"]*$produit["quantite"]."<br> qte: ".$produit["quantite"]."<br>";
          } 
    ?>
