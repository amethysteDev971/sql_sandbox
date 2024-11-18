<?php

    namespace App\Pokemon_correction\Attaques;

    use App\Pokemon_correction\Type\FeuType;

    class LanceFlamme extends Attaque implements AttaqueInterface
    {
        public function __construct()
        {
            parent::__construct("Lance-flamme", 10, new FeuType());
        }
    }