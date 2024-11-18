<?php

    /**
     * Calcule la surface d'un rectangle
     *
     * @param float $longueur
     * @param float $largeur
     *
     * @return string
     */
    function surface(float $longueur, float $largeur) : float {
        return $longueur * $largeur;
    }

    /*
     * Tailles
     * moins de 100 -> petit
     * entre 100 et 500 -> moyen
     * plus de 500 -> grand
     */
    
    /**
     * indique si une surface donnée est :
     * petit, moyen ou grand
     *
     * @param [float] $surface
     * @return string
     */ 
    function surfaceStatut ($surface) : string {
        $statut = "";
        echo $surface." ? ";
        switch ($surface) {
            case $surface < 100:
                $statut = "petit";
                break;
            case $surface >= 100 && $surface < 500:
                $statut = "moyen";
                break;
            case $surface >= 500:
                echo "je passe dans le >=500 ";
                $statut = "grand";
            break; 
            default:
                $statut= "sait pas";
                // echo "default ?";
                break;
        }

        echo " le return est ".$statut;
        return $statut;
    }

    echo "La taille de la surface d'un terrain de <strong>".surface(10,10)."</strong> m2 est : <strong>".surfaceStatut(surface(10,10))."</strong><br>";
    echo "La taille de la surface d'un terrain de <strong>".surface(8,30)."</strong> m2 est : <strong>".surfaceStatut(surface(8,30))."</strong><br>";
    echo "La taille de la surface d'un terrain de <strong>".surface(20,50)."</strong> m2 est : <strong>".surfaceStatut(surface(20,50))."</strong><br>";
    echo "La taille de la surface d'un terrain de <strong>".surface(70,40)."</strong> m2 est : <strong>".surfaceStatut(surface(70,40))."</strong><br>";
    echo "La taille de la surface d'un terrain de <strong>".surface(7.8,6.35)."</strong> m2 est : <strong>".surfaceStatut(surface(7.8,6.35))."</strong><br>";
    echo "La taille de la surface d'un terrain de <strong>".surface(10,50)."</strong> m2 est : <strong>".surfaceStatut(surface(10,50))."</strong><br>";
    echo "La taille de la surface d'un terrain de <strong>".surface(10,10)."</strong> m2 est : <strong>".surfaceStatut("BlaBla")."</strong> Bla bla ? <br>";


    /**
     * Calcule la surface d'un rectangle
     *
     * @param float $longueur
     * @param float $largeur
     *
     * @return float
     */
    function surfaceCorrection(float $longueur, float $largeur) : float {
        return $longueur * $largeur;
    }

    /**
     * Détermine la taille d'un rectangle en fonction de sa surface 
     * 
     * @param float $surface
     *
     * @return string
     */
    function taille(float $surface) : string {
        return match (true) {
           $surface < 100 => "petit",
           $surface <= 500 => "moyen",
           default => "grand"
       };
    }

    echo taille(surface(100, 10));