<?php
require_once 'Humain.php';

class Femme extends Humain{

  
    protected string $genre = 'Feminin';

    public function __construct($nom,$age,$origin)
    {
        // $nom,$age,$genre,$origin
        parent::__construct($nom,$age,$this->genre,$origin);
    }

    public function parler(?string $parole = null) : void {
        echo 'Bonjour, je m\'appelle '.$this->nom.' et je suis du genre '. $this->genre ;
    }

    public function seMaquille(){

    }


    /**
     * Get the value of genre
     */ 
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set the value of genre
     *
     * @return  self
     */ 
    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }

   
}