<?php

    namespace App\Pokemon_correction\Pokemon;

    use App\Pokemon_correction\Attaques\HydroCanon;
    use App\Pokemon_correction\Attaques\PistoletAEau;
    use App\Pokemon_correction\Pokemon;
    use App\Pokemon_correction\Type\EauType;
    use App\Pokemon_correction\Type\ElectriqueType;
    use App\Pokemon_correction\Type\FeuType;

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