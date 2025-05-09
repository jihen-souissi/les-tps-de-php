<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="gestion_stock.php" method="post">
        <label>Nom Produit: </label>
        <input type="text" name="nom" ><br>
        <label>Prix Unitaire: </label>
        <input type="text" name="prix" ><br>
        <label>Quantité: </label>
        <input type="text" name="quantite" ><br>
        <input type="submit" value="ajouter"><br>
        <label>Produit Recherché:</label>
        <input type="text" name="prod_recherche"><br>
        <input type="submit" value="rechercher"><br>
    </form>
</body>
</html>
<?php
    session_start();
    if (!isset($_SESSION["produits"])) {
        $_SESSION["produits"]=array();}
    if(!empty($_POST["nom"])&& !empty($_POST["prix"])&& !empty($_POST["quantite"])){
        $p=array("prix" => $_POST["prix"],"quantite" => $_POST["quantite"]);
        $produit =array($_POST["nom"]=>$p);
        array_push($_SESSION["produits"],$produit);
        echo  "Ajout avec succès! <br>";
    }
     foreach($_SESSION["produits"]as $cle => $details){
            foreach($details as $nom=>$valeur){
                echo "nom du produit: ".$nom . "<br>"."prix du produit: ".$valeur["prix"] ."<br>"."qte du produit: ".$valeur["quantite"]."<br>";
            }}
    if (!empty($_POST["prod_recherche"])){
        $prod_recherche=$_POST["prod_recherche"];
        $trouve=FALSE;
       foreach($_SESSION["produits"] as $details){
         if (isset($details[$prod_recherche])){
            $val=$details[$prod_recherche];
            echo "les données du produits recherché : <br> prix:".$val["prix"]."<br> quantité: ".$val["quantite"];
            $trouve=TRUE;
            break;
         }}
         if($trouve==FALSE){
            echo "Le produit n'est pas trouvé";}
       }
        
                
       
                
?>