<?php
require_once File::build_path(array("model","ModelVoiture.php"));

class ControllerVoiture {
    public static function readAll() {
        $controller='voiture';
        $view='list';
        $pagetitle='Liste des voitures';
        $tab_v = ModelVoiture::getAllVoitures();     //appel au modèle pour gerer la BD
        require (File::build_path(array("view", "view.php")));//"redirige" vers la vue
    }
    
    public static function read(){
        $immat=$_GET['immatriculation'];
        $v = ModelVoiture::getVoitureByImmat($immat);
        if($v==null){
            $controller='voiture';
            $view='error';
            $pagetitle='Error';
            require (File::build_path(array("view", "view.php")));
        } 
        else {
            $controller='voiture';
            $view='detail';
            $pagetitle='Detail voiture';
            require (File::build_path(array("view", "view.php")));
            //require File::build_path(array("view","voiture","detail.php"));
        }
    }
    
    public static function create(){
        $controller='voiture';
        $view='create';
        $pagetitle='Creer voiture';
        require (File::build_path(array("view", "view.php")));
        //require File::build_path(array("view","voiture","create.php"));
    }
    
    public static function created(){
        $immat=$_GET['immatriculation'];
        $marq=$_GET['marque'];
        $coul=$_GET['couleur'];
        
        $mVoiture = new ModelVoiture($marq,$coul,$immat);
        $mVoiture->save();
        ControllerVoiture::readAll();
    }
}
?>
