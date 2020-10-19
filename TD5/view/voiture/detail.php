<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Liste des voitures</title>
    </head>
    <body>
        <?php
        echo "<li> Marque : " . htmlspecialchars($v->getMarque()) . "</li>" .
        "<li> Couleur : " . htmlspecialchars($v->getCouleur()) . "</li>" .
        "<li> Immatriculation : " . htmlspecialchars($v->getImmatriculation()) . "</li>";
        ?>
    </body>
</html>




