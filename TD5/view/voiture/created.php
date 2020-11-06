
<!DOCTYPE html>
<html>
    <body>
        <?php
        echo "<p>La voiture a bien été créée !</p>";
        require (File::build_path(array("view", "voiture", "list.php")));
        ?>
    </body>
</html>