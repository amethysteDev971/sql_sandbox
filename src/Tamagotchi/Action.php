<?php
namespace App\Tamagotchi;

use App\Tamagotchi\Tamagotchi;
use App\Tamagotchi\Interface\ActionInterface;

abstract class Action implements ActionInterface {
    
    protected int $energyCost;
    protected int $hungerIncrease;

    public function __construct(Tamagotchi $energyCost) {
        $this->energyCost = $energyCost;
    }

    /**
     * retourne le coût énergétique de l’action
     */
    public function getEnergyCost() : int{
        return $this->energyCost;
    }

    /**
     * retourne la quantité de faim générée par l’action
     */
    public function getHungerIncrease() : int{
        return $this->hungerIncrease;
    }

    /**
     * Jouer
     */
    public function play() : void{

    }

    /**
     * Manger
     */
    public function eat() : void{
        
    }

    /**
     * Dormir
     */
    public function sleep() : void{
        
    }

    // /**
    //  * récupérer de l’énergie
    //  * **action alternative**
    //  */
    // public function rest() : void{
        
    // }

    abstract public function bark(): void;
    abstract public function meow(): void;
}