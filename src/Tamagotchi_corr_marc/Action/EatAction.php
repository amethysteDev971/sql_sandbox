<?php

    namespace App\Tamagotchi_corr_marc\Action;

    class EatAction implements ActionInterface
    {
        public function getName(): string {
            return 'eat';
        }

        public function getEnergyCost(): float
        {
            return 5;
        }

        public function getHungerCost(): float
        {
            return -20;
        }
    }