<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="prem_diff.php" method="post">
        <label>Mot 1 : </label>
        <input type="text" name="mot1">
        <label>Mot 2 : </label>
        <input type="text" name="mot2">
        <input type="submit" value="vérifier">
        </form>
</body>
</html>
<?php
    if (isset($_POST["mot1"])&&isset($_POST["mot2"])){
        $m1=$_POST["mot1"];
        $m2=$_POST["mot2"];
        if (strlen($m1)!=0 && strlen($m2)!=0){
            $i=0;
            $len=min(strlen($m1),strlen($m2));
            while ($i<$len && $m1[$i]==$m2[$i]){
                $i++;
            }
            if ($i==$len)
                echo "les 2 chaines sont identiques ";
            else
                echo "la position du premier caractère différent est: ". $i ;
        }
        else 
        echo"veuillez donner 2 chaines !";
       
    }
    
?>