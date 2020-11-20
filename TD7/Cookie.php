<?php
$tab = [0,1,2];
$tab_txt = serialize($tab);
setcookie("Cookie", "OK", time() + 3600);  /* expire dans 1 heure = 3600 secondes */
setcookie("TestCookieTab", $tab_txt, time() + 3600);  /* expire dans 1 heure = 3600 secondes */
$tab_recup = unserialize($tab_txt);

echo $_COOKIE["Cookie"];

foreach ($tab_recup as $nb)
    echo $nb;
//setcookie ("TestCookie", "", time() - 1);

?>