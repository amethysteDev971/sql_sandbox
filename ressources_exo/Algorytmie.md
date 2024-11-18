````<?php

    $team = [
        0 => [
            "name"   => "Marc",
            "age"    => 20,
            "rate"   => 4,
            "status" => "admin"
        ],
        1 => [
            "name"   => "Drucila",
            "age"    => 25,
            "rate"   => 3,
            "status" => "utilisateur normal"
        ],
        2 => [
            "name"   => "Agnes",
            "age"    => 30,
            "rate"   => 2,
            "status" => "admin"
        ],
        3 => [
            "name"   => "Gary",
            "age"    => 35,
            "rate"   => 4,
            "status" => "utilisateur normal"
        ],
        4 => [
            "name"   => "Marie hélène",
            "age"    => 40,
            "rate"   => 6,
            "status" => "membre"
        ]
    ];


    for ($i = 0; $i <= 4; $i++) {
        
        $user = $team[$i];
        
        echo $user['name'] . ": ( ";

        for ($j = 0; $j <= $user['rate'] ; $j++) {
            echo " * ";
        }

        echo " )<br/>";

        if ($user['rate'] >= 3 && $user['status'] != "utilisateur normal" && $user['age'] > 25) {
            echo "Accès autorisé.<br/>";
        } else {
            if ($user['rate'] < 3) {
                echo "Accès refusé : Note insuffisante.<br/>";
            }
            if ($user['status'] == "utilisateur normal") {
                echo "Accès refusé : Statut utilisateur normal.<br/>";
            }
            if ($user['age'] <= 25) {
                echo "Accès refusé : Age insuffisant.<br/>";
            }
        }

        echo "--- <br/>";
    }



Deroulé : 

$i = 0 - - - - - - - Begin for ($i = 0; $i <= 4; $i++)
$i = 0
$user = $team[0] => [
            "name"   => "Marc",
            "age"    => 20,
            "rate"   => 4,
            "status" => "admin"
        ] 

print => Marc: ( 

    - - - - - - - Begin for ($j = 0; $j <= 4 ; $j++)
                    $j = 0
                    $j <= 4 => true
                    print => * 
                    $j++
    - - - - - - - End for ($j = 0; $j <= 4 ; $j++) $j = 1
                    $j = 1
                    $j <= 4 => true
                    print => * 
                    $j++
    - - - - - - - End for ($j = 0; $j <= 4 ; $j++) $j = 2
                    $j = 2
                    $j <= 4 => true
                    print => * 
                    $j++
    - - - - - - - End for ($j = 0; $j <= 4 ; $j++) $j = 3
                    $j = 3
                    $j <= 4 => true
                    print => * 
                    $j++
    - - - - - - - End for ($j = 0; $j <= 4 ; $j++) $j = 4
                    $j = 4
                    $j <= 4 => true
                    print => * 
                    $j++
    - - - - - - - End for ($j = 0; $j <= 4 ; $j++) $j = 5
                    $j = 5
                    $j <= 4 => false
                    SORT DE LA BOUCLE
    - - - - - - - End for ($j = 0; $j <= 4 ; $j++) SORT DE LA BOUCLE =>

print =>  )<br/>

if (4 >= 3 && "admin" != "utilisateur normal" && 20 > 25) { => true
            print => "Accès autorisé.<br/>";
        }

print "--- <br/>";

            $i++
- - - - - - End for ($i = 0; $i <= 4; $i++) $i = 1
$i =1
            $user = $team[1] =>[
                "name"   => "Drucila",
                "age"    => 25,
                "rate"   => 3,
                "status" => "utilisateur normal"
            ]
            print => "Drucila: ( ";

            BOUCLE $j 
            - - - - - - - Begin for ($j = 0; $j <= 3 ; $j++)
            print =>  *  *  *  * 
            print => " )<br/>";

            if (3 >= 3 && "utilisateur normal" != "utilisateur normal" && 25 > 25) { false
            echo "Accès autorisé.<br/>";
            } else {
                if (3 < 3) { false
                    echo "Accès refusé : Note insuffisante.<br/>";
                }
                if ("utilisateur normal" == "utilisateur normal") { true
                    echo "Accès refusé : Statut utilisateur normal.<br/>";
                }
                if (25 <= 25) {
                    echo "Accès refusé : Age insuffisant.<br/>";
                }
            }
            print => "Accès refusé : Statut utilisateur normal.<br/>";
            print "--- <br/>";

            $i++
- - - - - - End for ($i = 0; $i <= 4; $i++) $i = 2
$i = 2
2 <= 4 true

            $user = $team[2] => [
            "name"   => "Agnes",
            "age"    => 30,
            "rate"   => 2,
            "status" => "admin"
        ]
        echo Agnes: ( 
        
        for ($j = 0; $j <= 2 ; $j++) {
            echo " * ";
        }
        - - - - - - - Begin for ($j = 0; $j <= 2 ; $j++)
                    $j = 0
                    $j <= 2 => true
                    print => * 
                    $j++
        - - - - - - - End for ($j = 0; $j <= 2 ; $j++) $j = 1
                        $j = 1
                        $j <= 2 => true
                        print => * 
                        $j++
        - - - - - - - End for ($j = 0; $j <= 2 ; $j++) $j = 2
                        $j = 2
                        $j <= 2 => true
                        print => * 
                        $j++
        - - - - - - - End for ($j = 0; $j <= 2 ; $j++) $j = 3
                        $j = 3
                        $j <= 2 => false
                        SORT DE LA BOUCLE - - - - - - - ->


        print => " )<br/>";

        if (2 >= 3 && "admin" != "utilisateur normal" && 30 > 25) {
            echo "Accès autorisé.<br/>";
        } else {
            if (2 < 3) {
                echo "Accès refusé : Note insuffisante.<br/>";
            }
            if ($user['status'] == "utilisateur normal") {
                echo "Accès refusé : Statut utilisateur normal.<br/>";
            }
            if ($user['age'] <= 25) {
                echo "Accès refusé : Age insuffisant.<br/>";
            }
        }

        echo "--- <br/>";


$i++
- - - - - - End for ($i = 0; $i <= 4; $i++) $i = 3
$i = 3
3 <=4 true
            $user = $team[3] =>[
            "name"   => "Gary",
            "age"    => 35,
            "rate"   => 4,
            "status" => "utilisateur normal"
        ]

        print => Gary: ( ";

        for ($j = 0; $j <= 4 ; $j++) {
            echo " * ";
        }

        echo " )<br/>";

        if (4 >= 3 && utilisateur normal != "utilisateur normal" && 35 > 25) {
            echo "Accès autorisé.<br/>";
        } else {
            if (4 < 3) {
                echo "Accès refusé : Note insuffisante.<br/>";
            }
            if (utilisateur normal == "utilisateur normal") {
                echo "Accès refusé : Statut utilisateur normal.<br/>";
            }
            if ($user['age'] <= 25) {
                echo "Accès refusé : Age insuffisant.<br/>";
            }
        }


$i++
- - - - - - End for ($i = 0; $i <= 4; $i++) $i = 4
$i = 4
4 <=4 true

            $user = $team[4] =>[
            "name"   => "Marie hélène",
            "age"    => 40,
            "rate"   => 6,
            "status" => "membre"
        ]
        print => Marie hélène: ( ";

        for ($j = 0; $j <= 6 ; $j++) {
            echo " * ";
        }

        *  *  *  *  *  
        
        - - - end for $j = 5
        *  
        - - - end for $j = 6
        $j = 6
        *
        - - - end for $j = 7
        sort de la boucle


        echo " )<br/>";

        if (6 >= 3 && "membre" != "utilisateur normal" && 40 > 25) {
            echo "Accès autorisé.<br/>";
        } else {
            if ($user['rate'] < 3) {
                echo "Accès refusé : Note insuffisante.<br/>";
            }
            if ($user['status'] == "utilisateur normal") {
                echo "Accès refusé : Statut utilisateur normal.<br/>";
            }
            if ($user['age'] <= 25) {
                echo "Accès refusé : Age insuffisant.<br/>";
            }
        }

        echo "--- <br/>";




Affichage Ecran : 

```

Marc: (  *  *  *  *  *  )<br/>
Accès autorisé.<br/>
--- <br/>
Drucila: (  *  *  *  *  )<br/>
Accès refusé : Statut utilisateur normal.<br/>
--- <br/>
Agnes: (  *  *  *  )<br/>
Accès refusé : Note insuffisante.<br/>
--- <br/>
Gary: (  *  *  *  *  *  )<br/>
Accès refusé : Statut utilisateur normal.<br/>
--- <br/>
Marie hélène: (  *  *  *  *  *  *  *  )<br/>
Accès autorisé.<br/>
echo "--- <br/>