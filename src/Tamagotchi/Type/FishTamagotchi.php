<?php
namespace App\Tamagotchi\Type;

use App\Tamagotchi\Error\InvalidActionException;
use App\Tamagotchi\Tamagotchi;

/**
 * peut nager, manger, et dormir
 */
class FishTamagotchi extends Tamagotchi {

    public function __construct(){
        parent::__construct("FishTamagotchi");
    }

    public function performAction($action) {
        
    }

    public function bark(): void{
        throw new InvalidActionException("Un pokemon de type FishTamagotchi ne peut pas aboyer",$this);
    }

    public function meow(): void{
        throw new InvalidActionException("Un pokemon de type FishTamagotchi ne peut pas miauler",$this);
    }

}