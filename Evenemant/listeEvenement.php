<?php
require_once("evenement.php");
class ListeEvenement {
    private $evenements=array();
    public function ajouterEvenement(Evenement $e){
        $this->evenements[]=$e;
    }
    public function afficherTous(){
        if(empty($this->evenements)){
            echo "Aucun evenement à afficher.<br>";
        }
        else {
            echo '<ul style="List-style-type:none;padding-left:20px;">';
            foreach ($this->evenements as $e){
                $e->afficher();
            }
            echo "</ul>";
        }
        
    }
}
?>