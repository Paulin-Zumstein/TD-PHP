<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> Mon premier php </title>
    </head>
   
    <body>
        <?php
 		 // On inclut les fichiers de classe PHP avec require_once
		 // pour éviter qu'ils soient inclus plusieurs fois
  		require_once 'Conf.php';

 		 // On affiche le login de la base de donnees
  		echo Conf::getLogin();
  		echo "\n";
  		echo Conf::gethostname();
  		echo "\n";
  		echo Conf::getDatabase();
  		echo "\n";
  		echo Conf::getPassword();

		?>
    </body>
</html> 