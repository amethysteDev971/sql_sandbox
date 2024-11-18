<?php

    namespace App\Pokemon_correction\Attaques;

    use App\Pokemon_correction\Type\EauType;

    class PistoletAEau extends Attaque implements AttaqueInterface
    {
        public function __construct()
        {
            parent::__construct("Pistolet à eau", 10, new EauType());
        }
    }