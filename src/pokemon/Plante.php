<?php
namespace App\pokemon;

class Plante extends Pokemon {

    public function __construct($nom)
    {
        parent::__construct($nom,1,'Plante');
    }

    public function attack() : void{
        
    }

    public function weakness() : void{
        
    }

}