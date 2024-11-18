<?php

    namespace App\Pokemon_cor_exp_marc\Attaques;

    use App\Pokemon_cor_exp_marc\Type\PlanteType;

    class TranchHerbe extends Attaque implements AttaqueInterface
    {
        public function __construct()
        {
            parent::__construct("Tranch herbe", 10, new PlanteType());
        }
    }