<?php


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
    ],
    4 => [
        "name"   => "Marie hélène2",
        "age"    => 40,
        "rate"   => 6,
        "status" => "membre"
    ]
];

foreach ($team as $user) {
    var_dump($user);
    echo "<br>";
}

// for ($i = 0; $i <= count($team); $i++) {
        
//     $user = $team[$i];
    
//     echo $user['name'] . ": ( ";

//     for ($j = 0; $j <= $user['rate'] ; $j++) {
//         echo " * ";
//     }

//     echo " )<br/>";

//     if ($user['rate'] >= 3 && $user['status'] != "utilisateur normal" && $user['age'] > 25) {
//         echo "Accès autorisé.<br/>";
//     } else {
//         if ($user['rate'] < 3) {
//             echo "Accès refusé : Note insuffisante.<br/>";
//         }
//         if ($user['status'] == "utilisateur normal") {
//             echo "Accès refusé : Statut utilisateur normal.<br/>";
//         }
//         if ($user['age'] <= 25) {
//             echo "Accès refusé : Age insuffisant.<br/>";
//         }
//     }

//     echo "--- <br/>";
// }
