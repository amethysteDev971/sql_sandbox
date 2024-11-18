<?php

    namespace App\Tamagotchi_corr_marc\Action;

    interface ActionInterface
    {
        public function getName(): string;
        public function getEnergyCost(): float;
        public function getHungerCost(): float;
    }