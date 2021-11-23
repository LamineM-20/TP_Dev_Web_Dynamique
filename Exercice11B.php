<?php
echo"Ce programme est un algorithme qui un programme qui permet de connaître ses chances de gagner au tiercé, quarté, quinté et autres impôts volontaires. On demande à l’utilisateur le nombre de chevaux partants, et le nombre de chevaux joués.\n";
echo"__________________________________________________________________________________________________________________\n";

$n=(int) readline("Donnez le nombre de chevaux partant: \n");
$p=(int) readline("Donnez le nombre de chevaux joués: \n");

$a=1;
$b=1;

for($i=1;$i<=$p;$i++)
{
    $a=$a*($i+$n-$p);
    $b=$b*$i;
}
$i++;

echo"Dans l'ordre, une chance sur ".$a;
echo"\nDans le désordre, une chance sur ".$a/$b;

?>