<?php
    // $lenght = 6;
    // $width = 8;
    // // $surface = $length * $width;

    // $min = 100;
    // $max = 1000;

    // function surface ($lenght,$width){
    //     echo "A l'écran : la longueur est ".$lenght." pour une largeur de ".$width.", la surface est de : <strong>".$lenght * $width." m2</strong><br>";
    // }

    // function evaluation ($surface){
    //     echo "<p>";
    //     if ($surface > 1000) {
    //         echo "L'évaluation de votre surface est <strong>BIG";
    //     }else if ($surface < 100){
    //         echo "L'évaluation de votre surface est <strong>PETITE";
    //     }else if ($surface > 100 && $surface <= 1000){
    //         echo "L'évaluation de votre surface est <strong>GRANDE";
    //     }
    //     echo "</p>";
    // }

    // // echo "A l'écran : la longueur est ".$length." pour une largeur de ".$width.", la surface est de : <strong>".$length * $width." m2</strong>"
    // surface($lenght,$width);
    // evaluation($lenght * $width);

    $montantAchat = 200;
    echo "<h3>Exercice : Calcul de réduction sur un achat <br></h3>";

    // - Si le montant est **supérieur ou égal à 500**, appliquer une réduction de **20%**.
    // - Si le montant est **supérieur ou égal à 200 mais inféri àeur 500**, appliquer une réduction de **10%**.
    // - Si le montant est **supérieur ou égal à 100 mais inférieur à 200**, appliquer une réduction de **5%**.
    // - Si le montant est **inférieur à 100**, **aucune réduction** n'est appliquée.

    function reduc ($montant){

        $reduction = 0;

        echo "- - - - - - - - - - - - - <p>Montant = <strong style='font-size : 2em;'>".$montant." €</strong></p>";
        if ($montant < 100) {
            echo "- - - - - - - - - - - - - <br>";
            echo "<span style='color:red'>Nous ne pouvons appliquer aucunes réductions.</span><br>";
        }else{
            if ($montant < 200) {
                $reduction = 5;
                // $montant = $montant - ((5 * $montant)/100);
                echo "<p>après 5% de réduction<br>";
            }elseif($montant < 500){
                $reduction = 10;
                echo "<p>après 10% de réduction<br>";
            }else{
                $reduction = 20;
                echo "<p>après 20% de réduction<br>";
            }
        }

        if($reduction != 0){
            echo "<span>".$montant."-".(($reduction * $montant)/100)." </span></p>";
            echo "<strong style='font-size: 3em; background-color: rgb(102, 195, 235); padding-block: 20px; padding-inline: 20px; display: inline-block;border-radius: 10px;color:rgb(25, 47, 71);'>Total = ".$montant - (($reduction * $montant)/100)."</strong> € <br>";
        }
    }

    reduc($montantAchat);
    reduc(80);
    reduc(178);
    reduc(290);
    reduc(600);
    reduc(1000);


    //Corrogé Marc
    // $montantAchat = 500;

    // if ($montantAchat >= 500) {
    //     $pourcentageReduction = 20;
    // } elseif ($montantAchat >= 200) {
    //     $pourcentageReduction = 10;
    // } elseif ($montantAchat >= 100) {
    //     $pourcentageReduction = 5;
    // } else {
    //     $pourcentageReduction = 0;
    // }

    // $montantReduction = $montantAchat * ($pourcentageReduction / 100);
    // $montantFinal = $montantAchat - $montantReduction;

    // echo "Montant initial de l'achat : " . $montantAchat . "€<br/>";
    // echo "Pourcentage de réduction appliqué : " . $pourcentageReduction . "%<br/>";
    // echo "Montant de la réduction : " . $montantReduction . "€<br/>";
    // echo "Montant final après réduction : " . $montantFinal . "€<br/>";

?>