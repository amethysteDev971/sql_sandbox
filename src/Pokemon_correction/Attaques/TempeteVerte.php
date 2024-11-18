<?php

    namespace App\Pokemon_correction\Attaques;

    use App\Pokemon_correction\Type\PlanteType;

    class TempeteVerte extends Attaque implements AttaqueInterface
    {
        public function __construct()
        {
            parent::__construct("Tempete verte", 10, new PlanteType());
        }
    }