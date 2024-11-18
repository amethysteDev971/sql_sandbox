<?php

    namespace App\Tamagotchi_corr_marc\Type;

    use App\Tamagotchi_corr_marc\Action\ActionInterface;
    use App\Tamagotchi_corr_marc\Action\MeowAction;
    use App\Tamagotchi_corr_marc\Action\PlayAction;

    class CatTamagochiType extends TamagochiType
    {
        public function getName(): string
        {
            return "Cat";
        }

        public function __construct() {
            parent::__construct([
                PlayAction::class,
                MeowAction::class,
            ]);
        }

        public function getDefaultAction(): ActionInterface {
            return new MeowAction();
        }

    }