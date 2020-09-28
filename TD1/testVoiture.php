<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> test de voiture </title>
    </head>
   
    <body>
        
        <?php
        require_once('Voiture.php'); 
        $voiture1  = new Voiture('ferrari','rouge','78DZBG');
        $voiture1->afficher();







        ?>
    </body>
</html> 