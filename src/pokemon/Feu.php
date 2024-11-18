<?php
namespace App\pokemon;


class Feu extends Pokemon {
    

    public function __construct($nom)
    {
        parent::__construct($nom,1,'Feu');
    }

    public function attack() : void{
        
    }

    public function weakness() : void{
        
    }


    /**
     * Get the value of niveau
     */ 
    public function getNiveau()
    {
        return $this->niveau;
    }

    /**
     * Set the value of niveau
     *
     * @return  self
     */ 
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;

        return $this;
    }

    // /**
    //  * Get the value of attacks
    //  */ 
    // public function getAttacks()
    // {
    //     return $this->attacks;
    // }

    // /**
    //  * Set the value of attacks
    //  *
    //  * @return  self
    //  */ 
    // public function setAttacks($attacks)
    // {
    //     $this->attacks = $attacks;

    //     return $this;
    // }

    /**
     * Get the value of type
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */ 
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }
}