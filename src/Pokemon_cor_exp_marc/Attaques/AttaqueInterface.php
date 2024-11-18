<?php

    namespace App\Pokemon_cor_exp_marc\Attaques;

    use App\Pokemon_cor_exp_marc\Type;

    interface AttaqueInterface
    {
        public function getNom(): string;
        public function getDegats(): int;
        public function getType(): Type;
    }