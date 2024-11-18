<?php
require_once 'Humain.php';

class Homme extends Humain{

    protected string $genre = 'Masculin';

    public function __construct($nom,$age,$origin)
    {   
        parent::__construct($nom,$age,$this->genre,$origin);
        
    }

    public function seRase(){
        
    }

    public function parler(?string $parole = null){
        echo 'Bonjour, je m\'appelle '.$this->nom.' et je suis du genre '. $this->genre;
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