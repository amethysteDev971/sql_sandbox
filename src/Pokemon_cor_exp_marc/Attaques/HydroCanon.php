<?php

    namespace App\Pokemon_cor_exp_marc\Attaques;

    use App\Pokemon_cor_exp_marc\Type;
    use App\Pokemon_cor_exp_marc\Type\EauType;
    use App\Pokemon_cor_exp_marc\Type\FeuType;

    class HydroCanon extends Attaque implements AttaqueInterface
    {
        public function __construct()
        {
            parent::__construct("HydroCanon", 10, new EauType());
        }
    }