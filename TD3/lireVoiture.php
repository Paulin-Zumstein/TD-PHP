<?php
require_once 'Model.php';
require_once 'Voiture.php';


Model::Init();

/*
$rep = (Model::$pdo)->query("Select * From Voiture");


$tab_obj = $rep->fetchAll(PDO::FETCH_OBJ);
foreach($tab_obj as $value){
    print_r($value);
    echo "</br>";
}



$rep->setFetchMode(PDO::FETCH_CLASS, 'Voiture');
$tab_voit = $rep->fetchAll();

foreach ($tab_voit as $value) {
	echo $value->afficher();
	echo "</br>";
}
*/
/*
foreach (Voiture::getAllVoitures() as $value) {
	/*echo ($value->afficher());*/
        /*echo (Voiture::getVoitureByImmat($value->getImma()));
	echo "<br>"; 
}*/

 $v = new Voiture("64445423","POLO","Vert");
 $v->save();
/*voitueee'*/

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
