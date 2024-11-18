<?php

    namespace App\Tamagotchi_corr_marc\Action;

    class SwimAction implements ActionInterface
    {
        public function getName(): string {
            return 'swim';
        }

        public function getEnergyCost(): float
        {
            return -10;
        }

        public function getHungerCost(): float
        {
            return 5;
        }
    }