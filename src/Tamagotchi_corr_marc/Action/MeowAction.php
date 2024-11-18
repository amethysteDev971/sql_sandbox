<?php

    namespace App\Tamagotchi_corr_marc\Action;

    class MeowAction implements ActionInterface
    {
        public function getName(): string {
            return 'meow';
        }

        public function getEnergyCost(): float
        {
            return -5;
        }

        public function getHungerCost(): float
        {
            return 0;
        }
    }