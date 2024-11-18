<?php

    namespace App\Tamagotchi_corr_marc\Type;

    use App\Tamagotchi_corr_marc\Action\ActionInterface;
    use App\Tamagotchi_corr_marc\Action\BarkAction;
    use App\Tamagotchi_corr_marc\Action\PlayAction;

    class DogTamagochiType extends TamagochiType
    {
        public function getName(): string
        {
            return "Dog";
        }

        public function __construct() {
            parent::__construct([
                PlayAction::class,
                BarkAction::class,
            ]);
        }

        public function getDefaultAction(): ActionInterface {
            return new BarkAction();
        }

    }