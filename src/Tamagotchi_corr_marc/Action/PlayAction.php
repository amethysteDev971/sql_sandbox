<?php

    namespace App\Tamagotchi_corr_marc\Action;

    class PlayAction implements ActionInterface
    {
        public function getName(): string {
            return 'play';
        }

        public function getEnergyCost(): float
        {
            return -25;
        }

        public function getHungerCost(): float
        {
            return 10;
        }
    }