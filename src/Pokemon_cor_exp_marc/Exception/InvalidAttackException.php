<?php

    namespace App\Pokemon_cor_exp_marc\Exception;

    use App\Pokemon_cor_exp_marc\Pokemon;

    class InvalidAttackException extends \Exception
    {
        public Pokemon $victime;
        public Pokemon $attaquant;
        public string $nomAttaque;

        public function __construct(Pokemon $attaquant, Pokemon $victime, string $nomAttaque)
        {
            $this->nomAttaque = $nomAttaque;
            $this->victime = $victime;
            $this->attaquant = $attaquant;

            parent::__construct(
                sprintf(
                    'L\'attaque %s contre le pokemon %s n\'existe pas pour %s',
                    $nomAttaque,
                    $victime->getName(),
                    $attaquant->getName()
                )
            );
        }
    }