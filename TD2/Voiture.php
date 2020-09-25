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
        else { echo "L'immatriculation n'a pas le bon nombre de chiffres"; }
  }
      
  // un constructeur
  public function __construct($m = NULL, $c = NULL, $i = NULL) {
  if (!is_null($m) && !is_null($c) && !is_null($i)) {
    // Si aucun de $m, $c et $i sont nuls,
    // c'est forcement qu'on les a fournis
    // donc on retombe sur le constructeur à 3 arguments
    $this->marque = $m;
    $this->couleur = $c;
    $this->immatriculation = $i;
  }
}
           
  // une methode d'affichage.
  public function afficher() {
    echo "<h1>Liste des voitures</h1>";
          echo "<ol>";
          if (empty($this)) {
            echo "pas voitures";
          }
          foreach ($this as $key => $value) {
            echo "<li>$key : $value </li>";
          }
          echo "</ol>";
  }

  static public function getAllVoitures(){
    $rep = (Model::$pdo)->query("SELECT * FROM `voiture` WHERE 1");
    $rep->setFetchMode(PDO::FETCH_CLASS, 'Voiture');
    $tab_voit = $rep->fetchAll(PDO::FETCH_CLASS);
    return $tab_voit;
  }
}
?>

