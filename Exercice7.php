<?php
echo"Ce progamme vous demande de saisir un nombre de départ, et calcule la factorielle de ce nombre.\n";
echo"__________________________________________________________________________________________________________________\n";

$nb=(int) readline("Donnez un nombre: \n");
$f=1;
for((int)$i=2; $i<=$nb; $i++)
$f=$f*$i;
echo"La factorielle vaut: ".$f;
?>