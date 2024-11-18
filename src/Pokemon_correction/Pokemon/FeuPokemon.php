<?php

    namespace App\Pokemon_correction\Pokemon;

    use App\Pokemon_correction\Attaques\Flammeche;
    use App\Pokemon_correction\Attaques\LanceFlamme;
    use App\Pokemon_correction\Pokemon;
    use App\Pokemon_correction\Type\EauType;
    use App\Pokemon_correction\Type\FeuType;
    use App\Pokemon_correction\Type\RocheType;

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