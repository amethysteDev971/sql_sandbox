<?php
namespace App\Tamagotchi\Interface;

interface ActionInterface {

    /**
     * retourne le coût énergétique de l’action
     */
    public function getEnergyCost() : int;

    /**
     * retourne la quantité de faim générée par l’action
     */
    public function getHungerIncrease() : int;
}