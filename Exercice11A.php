<?php
echo"Ce programme est un algorithme qui un programme qui permet de connaître ses chances de gagner au tiercé, quarté, quinté et autres impôts volontaires. On demande à l’utilisateur le nombre de chevaux partants, et le nombre de chevaux joués.\n";
echo"__________________________________________________________________________________________________________________\n";

$n=(int) readline("Donnez le nombre de chevaux partant: \n");
$p=(int) readline("Donnez le nombre de chevaux joués: \n");

$num=1;
for($i=2;$i<=$n;$i++)
{
    $num = $num * $i;
}
$i++;
$deno1=1;
for($i=2;$i<=($n-$p);$i++)
{
    $deno1= $deno1 * $i;
}
$i++;
$deno2=1;
for($i=2;$i<=$p;$i++)
{
    $deno2 = $deno2 * $i;
}
$i++;

echo"Dans l'ordre, une chance sur ".$num/$deno1;
echo"\nDans le désordre, une chance sur ".$num/($deno1*$deno2);
?>