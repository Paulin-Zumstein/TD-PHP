<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> Mon premier php </title>
    </head>
   
    <body>
        <?php
         require_once('Voiture.php');

         $voiture1 = new Voiture("m","c","i");
         $voiture1->afficher();
        ?>
    </body>
</html> 