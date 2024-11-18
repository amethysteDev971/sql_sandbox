<?php


require 'CarAgnes.php';

$distanceCourse = 1000;
$participants;
$isCourseOn = false;
$winner = null;


$bmw = new CarAgnes();
$bmw->nom = 'BMW';
$bmw->vitesse = 20;


$mer = new CarAgnes();
$mer->nom = 'Mercedes';
$mer->vitesse = 20;



function addParticipant(CarAgnes $car, &$participants) : void {
    $participants[] = $car;
}

function showCourse(array &$participants) : void {
    global $distanceCourse;
    global $isCourseOn;
    echo '<pre>';
    var_dump($participants);
    echo '</pre>';
    echo '<pre>';
    echo 'DEBUT showCourse() $isCourseOn = '.$isCourseOn ? "true" : "false";
    echo '</pre>';
    if ($isCourseOn) {
        echo '$isCourseOn est true, non ? '.($isCourseOn ? "true" : "false").' <br>';
        foreach ($participants as $car) {
            echo '<hr><br>';
            echo 'PARSE LA LISTE<br>';
            echo 'IN LE FOREACH => la voiture <strong>'. $car->nom . '</strong> est en position '. $car->position.'<br>';
            // echo '<hr><br>';
            echo 'DEBUT FOREACH => $isCourseOn => '.($isCourseOn ? "true" : "false").' et la position est <strong>'.$car->position.'</strong>';
            echo '<br>';
            echo '<hr><br>';
            if ($car->position >= $distanceCourse && $isCourseOn) {
                // echo '<p style="font-weight:700; font-size:3em;color:green;>ICI C\'est la fin de la course '. $car->nom .'</p>';
                echo 'VERIF CONDITION du IF :';
                echo '$car->position >= $distanceCourse = '.$car->position >= $distanceCourse.'<br>';
                echo ' $isCourseOn => '.($isCourseOn ? "true" : "false").'<br>';
                //La course est finis
                $isCourseOn = false;
                echo 'Là je comprends pas j\'ai passé $isCourseOn à false et il est à '. ($isCourseOn ? "true" : "false");
                // var_dump($isCourseOn);
                echo '<br>Maintenant => isCourseOn = '.($isCourseOn ? "true" : "false").'<br>';
                // echo $car->nom . ' a franchis la ligne d\'arrivée #####################################<br>';
                echo '<span style="font-weight:700; font-size:3em;color:yellow;"><br>La partie est terminée</br></span>';
                    echo '<span style="font-weight:700; font-size:3em;color:green;"><br>Le vainqueur '. $car->nom .' a franchis la ligne d\'arrivée - Il est à la position : '. $car->position .'</br></span>';
                
            }else{
                // echo 'Passe dans le else de ($car->position >= $distanceCourse && $isCourseOn)<br>';
                // echo 'ENCORE DANS LA COURSE';
                // echo ' FIN FOREACH';
                // echo '<hr>';
                // if (!$isCourseOn) {
                //     // Donner le nom du vainqueur
                //     echo '<span style="font-weight:700; font-size:3em;color:yellow;"><br>La partie est terminée</br></span>';
                //     echo '<span style="font-weight:700; font-size:3em;color:green;"><br>Le vainqueur '. $car->nom .' a franchis la ligne d\'arrivée - Il est à la position : '. $car->position .'</br></span>';
                // }
            }
        } 
    }else{
        echo 'PASSE DANS LE ELSE';
        echo '<span style="font-weight:700; font-size:3em;"><br>La partie est terminée</br></span>';
    }
    
 
}

function avancer(CarAgnes $car, $step){
    $car->avancer($step);
    global $participants;
    showCourse($participants);
}

function goCourse(&$isCourseOn){

    echo 'Pan !!!.....Départ de la course <hr><br>';
    $isCourseOn = true;
}

addParticipant($bmw,$participants);
addParticipant($mer,$participants);
goCourse($isCourseOn);
// showCourse($participants);
$mer->avancer(5);
// avancer($mer,5);
$mer->avancer(6);
// avancer($mer,6);
$bmw->avancer(3);
// avancer($bmw,3);
showCourse($participants);
// avancer($bmw,10);
$bmw->avancer(10);
showCourse($participants);
$bmw->avancer(80);
$mer->avancer(60);
showCourse($participants);

