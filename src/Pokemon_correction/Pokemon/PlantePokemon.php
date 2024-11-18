<?php

    namespace App\Pokemon_correction\Pokemon;

    use App\Pokemon_correction\Attaques\TempeteVerte;
    use App\Pokemon_correction\Attaques\TranchHerbe;
    use App\Pokemon_correction\Pokemon;
    use App\Pokemon_correction\Type\FeuType;
    use App\Pokemon_correction\Type\GlaceType;
    use App\Pokemon_correction\Type\PlanteType;

    class PlantePokemon extends Pokemon
    {

        public function __construct(string $name, float $niveau = 1)
        {
            $this->type = new PlanteType();
            parent::__construct($name, $niveau);
        }


        public function getAttaques(): array
        {
            return [
                new TranchHerbe(),
                new TempeteVerte()
            ];
        }

        public function getFaiblesses(): array
        {
            return [
                new FeuType(),
                new GlaceType()
            ];
        }
    }