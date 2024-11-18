<?php

    namespace App\Tamagotchi_corr_marc;

    use App\Tamagotchi_corr_marc\Action\ActionInterface;
    use App\Tamagotchi_corr_marc\Exception\InvalidActionException;
    use App\Tamagotchi_corr_marc\Type\TamagochiType;

    abstract class Tamagotchi
    {
        protected string $name;
        protected TamagochiType $type;
        protected float $energy;
        protected float $maxEnergy;
        protected float $hunger;

        public function __construct(string $name, TamagochiType $type, float $energy = 100, float $hunger = 0)
        {
            $this->name = $name;
            $this->type = $type;
            $this->energy = $energy;
            $this->maxEnergy = $energy;
            $this->hunger = $hunger;

            echo sprintf(
                'Tamagotchi : %s (%s) - Énergie : %f - Faim : %f<br/>',
                $this->getName(),
                $this->type->getName(),
                $this->getEnergy(),
                $this->getHunger()
            );
        }

        public function getName(): string
        {
            return $this->name;
        }

        public function getType(): TamagochiType
        {
            return $this->type;
        }

        public function getEnergy(): float
        {
            return $this->energy;
        }

        public function getHunger(): float
        {
            return $this->hunger;
        }

        /**
         * @throws InvalidActionException
         */
        public function performAction(ActionInterface $action): void
        {
            if (!$this->type->hasAction($action)) {
                throw new InvalidActionException(
                    sprintf(
                        'L\'action %s n\'est pas autorisée pour %s qui est de type %s',
                        $action->getName(),
                        $this->getName(),
                        $this->type->getName()
                    )
                );
            }

            if ($this->energy + $action->getEnergyCost() < 0) {
                throw new InvalidActionException(
                    sprintf(
                        'L\'action %s nécessite %d points d\'énergie, mais seulement %d sont disponibles',
                        $action->getName(),
                        $action->getEnergyCost(),
                        $this->getEnergy()
                    )
                );
            }

            $this->updateHunger($action->getHungerCost());
            $this->updateEnergy($action->getEnergyCost());

            echo sprintf(
                '<strong>%s</strong> %s, %s %d points d’énergie, %s %d points de faim. <strong>Énergie : %d, Faim : %d</strong><br/>',
                $this->getName(),
                $action->getName(),
                ($action->getEnergyCost() < 0) ? "perd" : "gagne",
                abs($action->getEnergyCost()),
                ($action->getHungerCost() < 0) ? "perd" : "gagne",
                abs($action->getHungerCost()),
                $this->getEnergy(),
                $this->getHunger()
            );

        }


        public function updateEnergy(float $cost): void
        {
            $this->energy += $cost;
            if ($this->getEnergy() > $this->maxEnergy) {
                $this->energy = $this->maxEnergy;
            } else {
                if ($this->getEnergy() < 0) {
                    $this->energy = 0;
                }
            }
        }

        public function updateHunger(float $cost): void
        {
            $this->hunger += $cost;
            if ($this->getHunger() < 0) {
                $this->hunger = 0;
            }
        }
    }