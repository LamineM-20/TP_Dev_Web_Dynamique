<?php
echo"Ce programme est un algorithme qui demande successivement 20 nombres à l’utilisateur, et qui lui dit ensuite quel était le plus grand parmi ces 20 nombres.\n";
echo"__________________________________________________________________________________________________________________\n";
$pg=0;
$ipg=0;
for((int)$i=1; $i<=20; $i++)
{
    $nb=(int) readline("Donnez le nombre numero $i:  \n");
    if($nb>$pg)
    {
    $pg=$nb;
    $ipg=$i;
    }
}
echo"Le plus grand nombre est: ".$pg;
echo"\nIl est à la position: ".$ipg;
?>
