<?php
    echo"Choissisez un nombre entre 0 et 20, que nous allons comparer au nombre aléatoire généré par le système.\n";
    echo"A chaque tentative nous vous dirons si votre nombre est supérieur, inférieur ou égal au nombre aléatoire.\n";
    echo"Vous avez trois (3) chances pour trouver le nombre aléatoire.\n";
    echo"__________________________________________________________________________________________________________________\n";
    $a = rand  (0,10); 
        $x=3;
        do
        {
            echo"\nIl vous reste $x chance(s)\n";
            $i=(int) readline("Donnez un nombre: ");
            if($i==$a)
            {
                echo"Félicitations vous avez trouvé le nombre.";
                break;
            }
            if($i<$a)
            {
                echo"Le nombre que vous avez saisi est inférieur au nombre aléatoire.";
            }
            if($i>$a)
            {
                echo"Le nombre que vous avez saisi est supérieur au nombre aléatoire.";
            }
            $x--;
            if($x==0)
            {
                echo"\nDésolé, vous n'avez pas trouvé le nombre aléatoire.\n";
                echo"Le nombre aléatoire est: $a.";
            }
        }
        while($x!=0)
?>