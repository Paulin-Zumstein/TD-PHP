<?php
require_once 'Utilisateur.php';
require_once 'Voiture.php';
require_once 'Trajet.php';

Model::Init();

foreach(Trajet::findPassagers($_GET['trajet_id']) as $value) {
	echo $value->afficher();
    echo "<br>";
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

