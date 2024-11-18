<?php

    namespace App\Pokemon_correction\Attaques;

    use App\Pokemon_correction\Type;

    interface AttaqueInterface
    {
        public function getNom(): string;
        public function getDegats(): int;
        public function getType(): Type;
    }