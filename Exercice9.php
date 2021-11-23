<?php
echo"Ce programme est un algorithme qui demande successivement des nombres à l’utilisateur, et qui lui dit ensuite quel était le plus grand parmi ces nombres.\n";
echo"Le programme s'arrête dés qu'on saisi la valeur 0.\n";
echo"__________________________________________________________________________________________________________________\n";
$pg=0;
$i=0;
$ipg=0;
do
{
    $i++;
    $nb=(int) readline("Donnez le nombre numéro $i: \n");
    if($nb>$pg)
    {
    $pg=$nb;
    $ipg=$i;
    }
}
while($nb!=0);
echo"Le plus grand nombre est: ".$pg;
echo"\nIl est à la position: ".$ipg;

?>