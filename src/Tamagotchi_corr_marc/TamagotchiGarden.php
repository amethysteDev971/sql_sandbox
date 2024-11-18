<?php

    namespace App\Tamagotchi_corr_marc;

    use App\Tamagotchi_corr_marc\Exception\InvalidActionException;

    class TamagotchiGarden
    {
        /**
         * @var array<Tamagotchi>
         */
        protected array $tamagotchis = [];

        public function __construct(array $tamagotchis = []) {
            $this->tamagotchis = $tamagotchis;
        }

        public function performActions(array $actions) : void {
            foreach ($this->tamagotchis as $tamagotchi) {

                echo "<br/><br/><strong>### Actions pour " . $tamagotchi->getName() . "</strong><br/>";

                $currentAction = 0;
                while($tamagotchi->getEnergy() >= 20 && $tamagotchi->getHunger() <= 50 && $currentAction < count($actions)) {
                    try {
                        echo "## Action: " . $actions[$currentAction]->getName() . " : ";
                        $tamagotchi->performAction($actions[$currentAction]);

                    } catch (InvalidActionException $e) {
                        echo "<strong style='color:#FF0000;'>Error : " . $e->getMessage() . " :</strong> ";
                        $tamagotchi->performAction($tamagotchi->getType()->getDefaultAction());
                    }

                    $currentAction++;
                }

                if ($tamagotchi->getHunger() > 50) {
                    echo sprintf(
                        '<strong>%s</strong> a trop faim et doit être nourri. <strong>Énergie : %d, Faim : %d</strong><br/>',
                        $tamagotchi->getName(),
                        $tamagotchi->getEnergy(),
                        $tamagotchi->getHunger()
                    );
                }

                if ($tamagotchi->getEnergy() < 20) {
                    echo sprintf(
                        '<strong>%s</strong> est trop fatigué et doit se reposer. <strong>Énergie : %d, Faim : %d</strong><br/>',
                        $tamagotchi->getName(),
                        $tamagotchi->getEnergy(),
                        $tamagotchi->getHunger()
                    );
                }

            }
        }

    }