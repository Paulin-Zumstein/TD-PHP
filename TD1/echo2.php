<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> Mon premier php </title>
    </head>
   
    <body>       
        <?php
        $voitures = array (
          'marque' => 'McLaren',
          'couleur'    => 'noire'  ,
          'immatriculation'    => '5489DZ34'  );
        //$voitures = array();
          //var_dump($voitures);          
          //echo "Voiture {$voitures['immatriculation']} de marque {$voitures['marque']} (couleur {$voitures['couleur']})";
          echo "<p><h1>Liste des voitures</h1>";
          if (empty($voitures)) {
            echo "il n'y a pas de voiture";
          }
          echo "<ul>";
          foreach ($voitures as $key => $value){


            echo "<li>$key : $value</li>";
          }
        //Necho "<p>Voiture $immatriculation de marque $marque (couleur $couleur)</p>";    
        ?>
    </body>
</html> 