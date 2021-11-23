<?php
echo"Ce programme vous permez d'afficher les 10 itérations d'un nombre que vous aurez saisi au préalable.\n";
echo"__________________________________________________________________________________________________________________\n";

$nb=(int) readline("Donnez un nombre: \n");
for((int)$i=$nb+1; $i<=$nb+10; $i++)
echo $i." ";
?>