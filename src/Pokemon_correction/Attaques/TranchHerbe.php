<?php

    namespace App\Pokemon_correction\Attaques;

    use App\Pokemon_correction\Type\PlanteType;

    class TranchHerbe extends Attaque implements AttaqueInterface
    {
        public function __construct()
        {
            parent::__construct("Tranch herbe", 10, new PlanteType());
        }
    }