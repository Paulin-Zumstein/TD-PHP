
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> test conf </title>
    </head>
   
    <body>
        
        <?php
        require "Model.php";
        require_once "Voiture.php";


        $tab_voit = Voiture::getAllVoitures();
        foreach ($tab_voit as $obj){
            $obj->afficher();
        }



        ?>
    </body>
</html>
