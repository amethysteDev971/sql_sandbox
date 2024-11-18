<?php
require __DIR__ . '/../vendor/autoload.php';

use App\pokemon\Feu;
use App\pokemon\Plante;
use App\pokemon\Eau;

echo 'POKEMON<br>';

$salameche = new Feu('Salameche');
echo 'mon pokemon s\'appelle '.$salameche->getNom().' et est de type '.$salameche->getType().'<br>';

$bulbizarre = new Plante('Bulbizarre');
echo 'mon pokemon s\'appelle '.$bulbizarre->getNom().' et est de type '.$bulbizarre->getType().'<br>';

$carapuce = new Eau('Carapuce');
echo 'mon pokemon s\'appelle '.$carapuce->getNom().' et est de type '.$carapuce->getType().'<br>';

echo $carapuce->showDetail().'<br>';
echo $carapuce->winLevel().'<br>';