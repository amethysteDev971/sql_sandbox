<?php

    namespace App\Pokemon_cor_exp_marc\Pokemon;

    use App\Pokemon_cor_exp_marc\Attaques\TempeteVerte;
    use App\Pokemon_cor_exp_marc\Attaques\TranchHerbe;
    use App\Pokemon_cor_exp_marc\Pokemon;
    use App\Pokemon_cor_exp_marc\Type\FeuType;
    use App\Pokemon_cor_exp_marc\Type\GlaceType;
    use App\Pokemon_cor_exp_marc\Type\PlanteType;

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