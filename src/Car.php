<?php


class CarAgnes {

    public string $nom;

    public string $marque;

    public float $position = 0;

    public float $vitesse = 10;

    public bool $isGo = false;

    public bool $isFinished = false;

    public function avancer (float $step) :void {
        $this->position += $this->vitesse * $step;
    }

    




}