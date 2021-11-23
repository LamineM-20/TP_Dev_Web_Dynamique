<?php
echo"Ce progamme vous demande de saisir un nombre de départ, et calcule la somme des entiers jusqu’à ce nombre.\n";
echo"__________________________________________________________________________________________________________________\n";

$nb=(int) readline("Donnez un nombre: \n");
$som=0;
for((int)$i=1; $i<=$nb; $i++)
$som=$som+$i;
echo"La somme vaut: ".$som;
?>