<?php
echo"Ce programme est un algorithme qui demande le montant à payer à l’utilisateur, et qui lui demande ensuite quel est le montant versé.\n";
echo"Ainsi il simule la remise de la monnaie\n";
echo"__________________________________________________________________________________________________________________\n";

$somdue=0;
$e=(int) readline("Donnez le montant à payer: \n");
$somdue=$somdue+$e;

echo"Vous devez: ".$somdue." euros\n";
$m=(int) readline("Donnez le montant versé: \n");
$reste=$m-$somdue;
$nb10e=0;

do
{
$nb10e=$nb10e+1;
$reste=$reste-10;
}
while($reste>=10);

$nb5e=0;
if($reste>=5)
{
    $nb5e=1;
    $reste=$reste-5;
}
echo"Rendu de la monnaie\n";
echo"Billets de 10 Euros: ".$nb10e;
echo"\nBillets de 5 Euros: ".$nb5e;
echo"\nPieces de 1 Euro: ".$reste;
?>