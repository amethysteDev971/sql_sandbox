<?php

    namespace App\Pokemon_cor_exp_marc\Pokemon;

    use App\Pokemon_cor_exp_marc\Attaques\HydroCanon;
    use App\Pokemon_cor_exp_marc\Attaques\PistoletAEau;
    use App\Pokemon_cor_exp_marc\Pokemon;
    use App\Pokemon_cor_exp_marc\Type\EauType;
    use App\Pokemon_cor_exp_marc\Type\ElectriqueType;
    use App\Pokemon_cor_exp_marc\Type\FeuType;

    class EauPokemon extends Pokemon
    {

        public function __construct(string $name, float $niveau = 1)
        {
            $this->type = new EauType();
            parent::__construct($name, $niveau);
        }

        public function getAttaques(): array
        {
            return [
                new PistoletAEau(),
                new HydroCanon()
            ];
        }

        public function getFaiblesses(): array
        {
            return [
                new FeuType(),
                new ElectriqueType()
            ];
        }
    }