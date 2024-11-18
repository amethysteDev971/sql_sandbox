<?php

    namespace App\Tamagotchi_corr_marc\Action;

    class BarkAction implements ActionInterface
    {
        public function getName(): string {
            return 'bark';
        }

        public function getEnergyCost(): float
        {
            return -50;
        }

        public function getHungerCost(): float
        {
            return 10;
        }
    }