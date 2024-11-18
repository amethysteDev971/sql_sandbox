<?php

use App\Exo_interface\Interface\CallableInterface;
use App\Exo_interface\Interface\ContactInterface;
use App\Exo_interface\Interface\EmailInterface;

require __DIR__. '/../vendor/autoload.php';



// Exercice : Utilisation des Interfaces en PHP
// Dans cet exercice, vous allez approfondir votre compréhension des interfaces en PHP en créant plusieurs interfaces et en les appliquant à trois classes (User, Contact, et Company). 
// Vous allez également implémenter des méthodes pour manipuler les données des objets en respectant les contrats définis par les interfaces.

// Objectifs de l'exercice
// Définir et utiliser des interfaces : Créez plusieurs interfaces avec des méthodes précises que les classes doivent implémenter.
// Appliquer le polymorphisme : Implémentez des fonctions qui prennent en paramètre ces interfaces pour démontrer le polymorphisme en PHP.
// Organiser les données et les comportements : Écrivez des classes capables de manipuler les informations en respectant les contrats imposés par les interfaces.


function call(CallableInterface $obj){
    echo '########## call ##########<br>';
    echo 'Appel du numéro '. $obj->getTelephone() .' en cours...<br>'; 
}

function showUser(ContactInterface $obj){
    echo '########## showUser ##########<br>';
    echo 'Nom : '. $obj->getNom() .' en cours...<br>'; 
    echo 'Prenom : '. $obj->getPrenom() .' en cours...<br>'; 
}

function sendEmail(EmailInterface $obj, string $message){
    echo '########## sendEmail ##########<br>';
    echo 'send to : '. $obj->getEmail() .' en cours...<br>'; 
    echo 'message : '. $message .'<br>'; 
}
