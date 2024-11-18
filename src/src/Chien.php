<?php

class Chien {

    public $nom;
    public $race;
    public $age;
    public $couleur;
    public int $energie = 100;


 function __construct() {

    }

public function aboyer() : void {

    $this->energie = $this->energie - 30;
    echo 'wouaf wouaf';
}

public function manger($aliment) : void {
    echo $this->nom.'Miam Miam<br>';
}

public function leverLaPatte() : void {
    echo $this->nom.'Patte levée<br>';
}


}