<?php

    namespace App\Pokemon_correction\Attaques;

    use App\Pokemon_correction\Type;
    use App\Pokemon_correction\Type\EauType;
    use App\Pokemon_correction\Type\FeuType;

    class HydroCanon extends Attaque implements AttaqueInterface
    {
        public function __construct()
        {
            parent::__construct("HydroCanon", 10, new EauType());
        }
    }