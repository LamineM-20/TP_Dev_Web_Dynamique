<?php
echo"Choissisez un chiffre entre 1 et 3.\n";
echo"A chaque tentative erronée nous vous dirons que votre réponse est inexacte.\n";
echo"__________________________________________________________________________________________________________________\n";

$a=(int) readline("Donnez un nombre compris entre 1 et 3: \n");

while($a<1||$a>3)

{
    $a=(int) readline("Saisie incorrecte, veuillez recommencer: \n");

}
echo"Vous avez saisi un bon chiffre.";
?>