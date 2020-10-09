<?php
require_once ('../model/ModelVoiture.php'); // chargement du modèle
class ControllerVoiture {
    public static function readAll() {
        $tab_v = ModelVoiture::getAllVoitures();     //appel au modèle pour gerer la BD
        require ('../view/voiture/list.php');  //"redirige" vers la vue
    }
    
    public static function read(){
        $immat=$_GET['immatriculation'];
        $v = ModelVoiture::getVoitureByImmat($immat);
        require ('../view/voiture/detail.php');
    }
}
?>
