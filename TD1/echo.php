<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> Mon premier php </title>
    </head>
   
    <body>
        Voici le résultat du script PHP : 
        <?php
          // Ceci est un commentaire PHP sur une ligne
          /* Ceci est le 2ème type de commentaire PHP
          sur plusieurs lignes */
           
          // On met la chaine de caractères "hello" dans la variable 'texte'
          // Les noms de variable commencent par $ en PHP
          //$texte = "hello world !";

          // On écrit le contenu de la variable 'texte' dans la page Web
          //echo $texte;
          /*$marque = "zoulou";
          $couleur = "noir";
          $immatriculation = "Tourquoin";
          echo "<p> Voiture $immatriculation de marque $marque (couleur $couleur) </p>";*/

          $Voiture = array ('marque' => 'zoulou','couleur' => 'noir', 'immatriculation' => 'Fr5322'  );
          //$Voiture = array ();

          /*foreach ($Voiture as $cle => $valeur){
            echo "$cle : $valeur\n";
          }*/

          /*echo "<p> Voiture {$Voiture['immatriculation']} de marque {$Voiture['marque']} (couleur {$Voiture['couleur']}) </p>";*/ 
          echo "<h1>Liste des voitures</h1>";
          echo "<ol>";
          if (empty($Voiture)) {
            echo "pas voitures";
          }
          foreach ($Voiture as $key => $value) {
            echo "<li>$key : $value </li>";
          }
          echo "</ol>"
        ?>
    </body>
</html> 