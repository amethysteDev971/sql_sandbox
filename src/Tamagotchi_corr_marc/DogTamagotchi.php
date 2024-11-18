<?php

    namespace App\Tamagotchi_corr_marc;

    use App\Tamagotchi_corr_marc\Type\DogTamagochiType;

    class DogTamagotchi extends Tamagotchi
    {
        public function __construct(string $name, float $energy = 100, float $hunger = 0)
        {
            parent::__construct($name, new DogTamagochiType(), $energy, $hunger);
        }
    }