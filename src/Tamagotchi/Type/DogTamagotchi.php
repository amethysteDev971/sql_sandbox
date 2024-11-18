<?php
namespace App\Tamagotchi\Type;


use App\Tamagotchi\Error\InvalidActionException;
use App\Tamagotchi\Tamagotchi;

/**
 * peut jouer, manger, dormir, et aboyer
 */
class DogTamagotchi extends Tamagotchi {

    public function __construct(){
        parent::__construct("DogTamagotchi");
    }

    public function performAction($action) {
        
    }

    public function bark(): void{
        
    }

    public function meow(): void{
        throw new InvalidActionException("Un pokemon de type DogTamagotchi ne peut pas miauler",$this);
    }

}