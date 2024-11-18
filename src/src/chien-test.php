<?php

require 'Chien.php';


$boule = new Chien();
$boule->nom = 'Boule';
$boule->leverLaPatte();

$oscar = new Chien();
$oscar->nom = 'Oscar';
$oscar->aboyer();