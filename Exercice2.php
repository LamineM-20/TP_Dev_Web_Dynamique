<?php
echo"Choissisez un nombre entre 10 et 20.\n";
echo"A chaque tentative erronée nous vous dirons que votre réponse est inexacte.\n";
echo"Si vous choisissez un nombre inférieur à 10 ou supérieur à 20, nous vous le signalerons. \n";
echo"__________________________________________________________________________________________________________________\n";

$a=(int) readline("Donnez un nombre compris entre 10 et 20: \n");
 while ($a < 10 || $a >20)
 {
    if($a<10)
    {
        echo"Veuillez saisir un nombre plus grand ou égal à 10.\n";
    }
    if($a>20)
    {
        echo"Veuillez saisir un nombre plus petit ou égal à 20.\n";
    }
    $a=(int) readline("Donnez un nombre compris entre 10 et 20: \n");
 }
 echo"Vous avez saisi un bon nombre.";

?>