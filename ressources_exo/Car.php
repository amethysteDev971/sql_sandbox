<?php

    class Car
    {
        public string $nom;
        public string $marque;
        public float $position = 0;
        public float $vitesse = 10;

        public function avancer(float $step = 1) : void
        {
            $this->position += $this->vitesse * $step;
            echo sprintf("%s avance de %.2f pas, et sa nouvelle position est %f<br/>", $this->nom, $step, $this->position);
        }

        public function reculer(float $step = 1) : void
        {
            $this->position -= $this->vitesse * $step;
            echo sprintf("%s recule de %.2f pas, et sa nouvelle position est %f<br/>", $this->nom, $step, $this->position);

        }

    }