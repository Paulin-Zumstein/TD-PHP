<?php
class Voiture {
   
  private $marque;
  private $couleur;
  private $immatriculation;
      
  // un getter      
  public function getMarque() {
       return $this->marque;  
  }
  public function getImmatriculation() {
       return $this->immatriculation;  
  }
  public function getCouleur() {
       return $this->couleur;  
  }     
  // un setter 
  public function setMarque($marque2) {
       $this->marque = $marque2;
  }
  public function setImmatriculation($immatriculation2) {
    if(strlen($immatriculation2)==8){
      $this->immatriculation = $immatriculation2;
    }
    echo "il n'y pas 8 caractères";
  }  
  public function setCouleur($couleur2) {
       $this->couleur = $couleur2;
  }      
  // un constructeur
  public function __construct($m, $c, $i)  {
   $this->marque = $m;
   $this->couleur = $c;
   $this->immatriculation = $i;
  } 
           
  // une methode d'affichage.
  public function afficher() {
    echo "<p>Voiture $this->immatriculation de marque $this->marque (couleur $this->couleur)</p>";

    // À compléter dans le prochain exercice
  }
}
?>

