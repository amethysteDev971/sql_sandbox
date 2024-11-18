<?php

    namespace App\Tamagotchi_corr_marc\Type;

    use App\Tamagotchi_corr_marc\Action\ActionInterface;
    use App\Tamagotchi_corr_marc\Action\SwimAction;

    class FishTamagochiType extends TamagochiType
    {
        public function getName(): string
        {
            return "Fish";
        }

        public function __construct() {
            parent::__construct([
                SwimAction::class,
            ]);
        }

        public function getDefaultAction(): ActionInterface {
            return new SwimAction();
        }
    }