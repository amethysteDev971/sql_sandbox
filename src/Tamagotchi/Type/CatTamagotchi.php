<?php
namespace App\Tamagotchi\Type;

use App\Tamagotchi\Error\InvalidActionException;
use App\Tamagotchi\Tamagotchi;

/**
 * peut jouer, manger, dormir, et miauler
 */
class CatTamagotchi extends Tamagotchi {

    public function __construct(){
        parent::__construct("CatTamagotchi");
    }

    public function performAction($action) {
        
    }

    public function bark(): void{
        throw new InvalidActionException("Un pokemon de type CatTamagotchi ne peut pas aboyer",$this);
    }

    public function meow(): void{
        
    }
}