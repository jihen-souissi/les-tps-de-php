<?php
    $phrase="Le langage PHP n'est pas compilé, le PHP est interprété.";
    echo $phrase . "</br>";
    $occ=substr_count($phrase,"PHP");
    echo "le nombre d'occurance du mot PHP : ". $occ . "</br>";
    $phrase1=str_ireplace("PHP","JavaScript",$phrase);
    echo $phrase1 .  "</br>";
    $occ=substr_count($phrase1,"JavaScript");
    echo "le nombre d'occurance du mot JavaScript : ". $occ ."</br>";