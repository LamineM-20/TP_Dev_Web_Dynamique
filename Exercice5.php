<?php
echo"Ce programme vous permez de saisir un nombre de départ, et ensuite vous afficher la table de multiplication de ce nombre.\n";
echo"__________________________________________________________________________________________________________________\n";

$nb=(int) readline("Donnez un nombre: \n");
echo"La table de multiplication du nombre choisi est: \n";
for((int)$i=1; $i<=10; $i++)
{
    echo $nb." * ".$i." = ".$nb*$i."\n";
}
?>
