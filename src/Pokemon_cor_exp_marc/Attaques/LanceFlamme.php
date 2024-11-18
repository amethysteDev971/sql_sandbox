<?php

    namespace App\Pokemon_cor_exp_marc\Attaques;

    use App\Pokemon_cor_exp_marc\Type\FeuType;

    class LanceFlamme extends Attaque implements AttaqueInterface
    {
        public function __construct()
        {
            parent::__construct("Lance-flamme", 10, new FeuType());
        }
    }