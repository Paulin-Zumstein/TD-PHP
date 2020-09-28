<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>cree voiture </title>
    </head>
   
    <body>
        
        <?php
        require_once('Voiture.php'); 
	    $voiture1 = new Voiture($_POST['Marque'],$_POST['Couleur'],$_POST['immatriculation']);
	    echo($voiture1->afficher());
            $voiture1->save();
        ?>
    </body>
</html> 