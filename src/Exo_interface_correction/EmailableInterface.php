<?php

    namespace App\Exo_interface_correction;

    interface EmailableInterface extends EmailInterface
    {
        public function getSender(): string; // "Marc Galoyer <mgaloyer@uneak.fr>"
    }