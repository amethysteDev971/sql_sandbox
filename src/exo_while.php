<?php

// * Écrivez un script PHP qui calcule et affiche la somme de tous les 
// *nombres pairs compris entre 1 et 50 en utilisant une boucle while.
// * pour verifier si nombre est pair : $nombre % 2 == 0

// $i = 1;
// $somme = 0;
// while ($i <= 50) {
//     if ($i % 2 == 0) {
//         $somme += $i;
//         echo $somme."<br>";
//     }
//     $i++;
// }

// echo "Resultat Final = ".$somme;


// * Écrivez un script PHP qui parcourt les nombres de 1 à 50 
// * en utilisant une boucle while. À chaque itération, 
// * affichez le nombre actuel. Cependant, si le nombre est divisible par 7, 
// * augmentez le compteur de 3 au lieu de 1. Cela permettra de sauter 
// * les deux nombres suivants après chaque multiple de 7.


$i = 0;
while ($i <= 50) {
    echo $i."<br>";

    if ($i % 7 == 0) {
        $i+=3;
        echo "<br>".$i." est divisible par 7<br><br>";
    } else {
        $i++;
    }
    
}