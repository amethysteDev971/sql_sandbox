<?php

    namespace App\Tamagotchi_corr_marc\Action;

    class SleepAction implements ActionInterface
    {
        public function getName(): string {
            return 'sleep';
        }

        public function getEnergyCost(): float
        {
            return 10;
        }

        public function getHungerCost(): float
        {
            return 5;
        }
    }