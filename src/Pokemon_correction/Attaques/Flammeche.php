<?php

    namespace App\Pokemon_correction\Attaques;

    use App\Pokemon_correction\Type\FeuType;

    class Flammeche extends Attaque implements AttaqueInterface
    {
        public function __construct()
        {
            parent::__construct("Flammeche", 10, new FeuType());
        }
    }