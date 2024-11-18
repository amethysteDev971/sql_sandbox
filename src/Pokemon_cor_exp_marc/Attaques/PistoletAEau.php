<?php

    namespace App\Pokemon_cor_exp_marc\Attaques;

    use App\Pokemon_cor_exp_marc\Type\EauType;

    class PistoletAEau extends Attaque implements AttaqueInterface
    {
        public function __construct()
        {
            parent::__construct("Pistolet à eau", 10, new EauType());
        }
    }