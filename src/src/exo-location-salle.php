<?php

// ### Exercice Progressif : Gestion d'Accès à une Salle de Location

// Vous allez créer un système de contrôle d’accès pour une salle de location, en utilisant les conditions en PHP. Chaque étape de l'exercice ajoute une nouvelle condition pour gérer les règles d'accès.

// ---

// #### Étape 1 : Vérification de la Capacité

// 1. Créez une fonction `verifierAccesEtape1` qui prend un paramètre `$nombrePersonnes`.
// 2. La fonction doit vérifier si le nombre de personnes dépasse la capacité maximale de la salle :
//    - Si le nombre de personnes est supérieur à 50, affichez : `"Accès refusé : Le nombre de personnes dépasse la capacité de la salle."`
//    - Sinon, affichez : `"Accès autorisé."`

// ---

// #### Étape 2 : Ajout du Statut des Utilisateurs

// 1. Créez une fonction `verifierAccesEtape2` qui prend en paramètres `$nombrePersonnes` et `$statut`.
// 2. La fonction doit maintenant vérifier l’accès en fonction de la capacité et du statut des utilisateurs :
//    - Si le nombre de personnes est supérieur à 50, l’accès est refusé.
//    - Si le statut est `"utilisateur normal"` et que le nombre de personnes est supérieur à 30, l’accès est également refusé.
//    - Dans tous les autres cas, affichez : `"Accès autorisé."`

// ---

// #### Étape 3 : Ajout de la Durée de Réservation

// 1. Créez une fonction `verifierAccesEtape3` qui prend en paramètres `$nombrePersonnes`, `$statut`, et `$dureeReservation`.
// 2. La fonction doit maintenant vérifier l’accès en appliquant toutes les règles précédentes et en ajoutant une vérification de durée :
//    - Si le nombre de personnes est supérieur à 50, l’accès est refusé.
//    - Si le statut est `"utilisateur normal"` et que le nombre de personnes est supérieur à 30, l’accès est également refusé.
//    - Si le statut est `"membre"` et que la durée de réservation dépasse 6 heures, l’accès est refusé.
//    - Si le statut est `"utilisateur normal"` et que la durée de réservation dépasse 3 heures, l’accès est refusé.
//    - Dans tous les autres cas, affichez : `"Accès autorisé."`


//Capacité salle
function verifierAccesEtape1 ($nombrePersonnes) {
    //    - Si le nombre de personnes est supérieur à 50, affichez : `"Accès refusé : Le nombre de personnes dépasse la capacité de la salle."`
    //    - Sinon, affichez : `"Accès autorisé."`
    $nbMax = 50;
    if ($nombrePersonnes > $nbMax){
        echo "<span style='color:red'><strong>Accès refusé : </strong></span>".$nombrePersonnes." personnes - Le nombre de personnes dépasse la capacité de la salle.<br>";
    } else {
        echo "<span style='color:green'><strong>Accès autorisé : </strong></span>".$nombrePersonnes." personnes <br>";
    }

    echo "- - - - - - - - - - - - - - - -<br>";
}


//Ajout du Statut des Utilisateurs
function verifierAccesEtape2 ($nombrePersonnes, $statut) {
    //Inclure la verification de verifierAccesEtape1(nbPersonne,statut)
    //    - Si le nombre de personnes est supérieur à 50, l’accès est refusé.
    //    - Si le statut est `"utilisateur normal"` et que le nombre de personnes est supérieur à 30, l’accès est également refusé.
    //    - Dans tous les autres cas, affichez : `"Accès autorisé."`
    $nbMax = 50;
    if (($nombrePersonnes > $nbMax) || ($statut === "utilisateur normal" || $nombrePersonnes > 30)) {
       echo "<span style='color:red'><strong>Accès refusé : </strong></span>".$nombrePersonnes." personnes - status ".$statut." <br>";
    } else {
        echo "<span style='color:green'><strong>Accès autorisé : </strong></span>".$nombrePersonnes." personnes - status ".$statut." <br>";
    }

    echo "- - - - - - - - - - - - - - - -<br>";

}


function verifierAccesEtape3 ($nombrePersonnes, $statut, $dureeReservation){
    echo "statut = ".$statut."<br>";

    $nbMax = 50;
    if (($nombrePersonnes > $nbMax) || ($statut === "utilisateur normal" && $nombrePersonnes > 30)) {
       echo "<span style='color:red'><strong>Accès refusé 1: </strong></span>".$nombrePersonnes." personnes - statut : ".$statut." - Durée de réservation : ".$dureeReservation." heure(s) <br>";
       
       if (($nombrePersonnes > $nbMax)) {
        echo "<i style='color:red'>- Le nombre de personne dépasse la capacité autorisée</i><br>";
       }
       if($statut === "utilisateur normal" && $nombrePersonnes > 30){
        echo "<i style='color:red'>- Le statut <strong>'utilisateur normal'</strong> n'est pas autorisé pour cette salle avec ".$nombrePersonnes." personnes.</i><br>";
       }
    } else if (($statut === "membre" && $dureeReservation > 6) || ($statut === "utilisateur normal" && $dureeReservation > 3) || $nombrePersonnes > $nbMax) {
        echo  "<span style='color:red'><strong>Accès refusé 2 : </strong></span><br>";
        if ($statut === "membre" && $dureeReservation > 6) {
            echo  "statut : ".$statut." et la durée de réservation : ".$dureeReservation." heure(s) ne permettent pas d'acceder aux mode d'attribution de la salle<br>";
        } else {
            echo  "Les ".$statut." ne sont pas autorisés à reserver plus de : ".$dureeReservation." heure(s)<br>";
        }
        
    } else {
        echo "<span style='color:green'><strong>Accès autorisé : </strong></span><br>";
    }


    echo "- - - - - - - - - - - - - - - -<br>";
}


verifierAccesEtape1(30);
verifierAccesEtape1(51);

verifierAccesEtape2(31,'utilisateur normal');
verifierAccesEtape2(70,'membre');

verifierAccesEtape3(70,'utilisateur normal',3);
verifierAccesEtape3(40,'membre',7);

// verifierAccesEtape3(70, 'utilisateur normal', 1);
//     verifierAccesEtape3(40, 'utilisateur normal', 1);
//     verifierAccesEtape3(10, 'membre', 7);
//     verifierAccesEtape3(800, 'utilisateur normal', 4);

//     verifierAccesEtape3(10, 'membre', 2);
//     verifierAccesEtape3(30, 'utilisateur normal', 2);

function verifierAccesMatch($nombrePersonnes, $statut, $dureeReservation) {
    $message = match (true) {
        ($nombrePersonnes > 50) => "Accès refusé : Le nombre de personnes dépasse la capacité de la salle.",
        ($statut == "utilisateur normal" && $nombrePersonnes > 30) => "Accès refusé : Le nombre de personnes dépasse la capacité de la salle.",
        ($statut == "membre" && $dureeReservation > 6) => "Accès refusé : La durée de réservation est trop longue.",
        ($statut == "utilisateur normal" && $dureeReservation > 3) => "Accès refusé : La durée de réservation est trop longue.",
        default => "Accès autorisé."
    };

    echo $message;

    echo "<br/>";
}

function statusSwitch($status) {

    switch ($status) {
        case "utilisateur normal":
            $message = "Accès autorisé pour un utilisateur normal.";
            break;
        case "membre":
            $message = "Accès autorisé pour un membre.";
            break;
        case "administrateur":
            $message = "Accès autorisé pour un administrateur.";
            break;
        default:
            $message = "Accès refusé : Statut inconnu.";
    }

    echo $message;

    echo "<br/>";
}

$tab =[
    'Marc',
    'Drucila',
    'Marie-Hélène',
    'Gary',
    'Agnès',
];

echo "<br><br>Membres de l'équipe : Avec boucle for() <br><br>";
for ($i=0; $i < count($tab); $i++) { 
    
    echo $tab[$i]."<br>";
}
echo "<br>- - - - - - - - - - - - - - -<br>";

echo "Membres de l'équipe : Avec foreach() <br><br>";
foreach($tab as $value){

    echo $value."<br>";
}