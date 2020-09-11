<?php
class Voiture {
   
  private $marque;
  private $couleur;
  private $immatriculation;
      
  // un getter      
  public function getMarque() {
       return $this->marque;  
  }

  public function getCouleur() {
     return $this->couleur;  
  }
 
  public function getImmatriculation() {
     return $this->immatriculation;  
  }

  // un setter 
  public function setMarque($marque2) {
       $this->marque = $marque2;
  }

  public function setCouleur($couleur2) {
       $this->couleur = $couleur2;
  }

  public function setImmatriculation($immatriculation2) {
       if (strlen($immatriculation2)==8){
          $this->immatriculation = $immatriculation2;     
        }
        else { echo "L'immatriculation n'a pas le bon nombre de chiffres"}
  }
      
  // un constructeur
  public function __construct($m, $c, $i)  {
   $this->marque = $m;
   $this->couleur = $c;
   $this->immatriculation = $i;
  } 
           
  // une methode d'affichage.
  public function afficher() {
    echo "<h1>Liste des voitures</h1>";
          echo "<ol>";
          if (empty($Voiture)) {
            echo "pas voitures";
          }
          foreach ($Voiture as $key => $value) {
            echo "<li>$key : $value </li>";
          }
          echo "</ol>"
  }
}
?>

