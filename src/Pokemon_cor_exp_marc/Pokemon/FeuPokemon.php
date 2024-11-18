<?php

    namespace App\Pokemon_cor_exp_marc\Pokemon;

    use App\Pokemon_cor_exp_marc\Attaques\Flammeche;
    use App\Pokemon_cor_exp_marc\Attaques\LanceFlamme;
    use App\Pokemon_cor_exp_marc\Pokemon;
    use App\Pokemon_cor_exp_marc\Type\EauType;
    use App\Pokemon_cor_exp_marc\Type\FeuType;
    use App\Pokemon_cor_exp_marc\Type\RocheType;

    class FeuPokemon extends Pokemon
    {
        public function __construct(string $name, float $niveau = 1)
        {
            $this->type = new FeuType();
            parent::__construct($name, $niveau);
        }

        public function getAttaques(): array
        {
            return [
                new Flammeche(),
                new LanceFlamme()
            ];
        }

        public function getFaiblesses(): array
        {
            return [
                new EauType(),
                new RocheType()
            ];
        }
    }