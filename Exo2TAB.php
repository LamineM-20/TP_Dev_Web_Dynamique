<?php
for($a=11; $a<=36; $a++)
{
    $tab[$a]=chr(54+$a);
}
echo"________Avec for_________\n";
for($a=11;$a<=36; $a++)
{
    echo "Element d'indice " . $a." : ". $tab[$a] ."\n ";
}
echo"________Avec foreach_________\n";
foreach($tab as $c=>$n)
{
    echo "Elément d'indice $c : $n \n";
}
?>