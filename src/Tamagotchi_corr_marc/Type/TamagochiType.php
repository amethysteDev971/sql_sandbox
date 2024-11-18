<?php

    namespace App\Tamagotchi_corr_marc\Type;

    use App\Tamagotchi_corr_marc\Action\ActionInterface;
    use App\Tamagotchi_corr_marc\Action\EatAction;
    use App\Tamagotchi_corr_marc\Action\SleepAction;

    abstract class TamagochiType
    {
        /**
         * @var array<class-string<ActionInterface>>
         */
        private array $actions;

        public function __construct(array $actions) {
            $this->actions = [
                EatAction::class,
                SleepAction::class,
                ...$actions
            ];
        }

        abstract public function getName(): string;

        public function getActions(): array
        {
            return $this->actions;
        }

        abstract public function getDefaultAction(): ActionInterface;

        public function hasAction(ActionInterface $action) : bool {
            foreach ($this->getActions() as $actionClass) {
                if ($action instanceof $actionClass) {
                    return true;
                }
            }
            return false;
        }

    }