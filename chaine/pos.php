<?php
    $ch="Les sanglots longs des violons de l'automne bercent mon coeur d'une langueur monotone";
    $pos=strpos($ch,"coeur");
    echo "la position du mot coeur dans la phrase est : ". $pos ."</br>";
     $ch[$pos]="^";
    echo "la phrase modifiée: " . $ch;
    
?>    