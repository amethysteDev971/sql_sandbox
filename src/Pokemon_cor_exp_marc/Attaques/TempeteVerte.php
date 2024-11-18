<?php

    namespace App\Pokemon_cor_exp_marc\Attaques;

    use App\Pokemon_cor_exp_marc\Type\PlanteType;

    class TempeteVerte extends Attaque implements AttaqueInterface
    {
        public function __construct()
        {
            parent::__construct("Tempete verte", 10, new PlanteType());
        }
    }