
        <?php
        foreach ($tab_v as $v)
            echo '<p> Voiture d\'immatriculation <a href="https://webinfo.iutmontp.univ-montp2.fr/~marinl/PHP/TD-PHP/TD5/index.php?action=read&immatriculation=' . rawurlencode($v->getImmatriculation()) . '">'. htmlspecialchars($v->getImmatriculation()) .'</a> .</p>';
        ?>
        /*chemin relatif mais qui marche pas*/
