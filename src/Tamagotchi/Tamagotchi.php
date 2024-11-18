<?php
namespace App\Tamagotchi;

abstract class Tamagotchi {

    private string $name;
    private Type $type;
    private int $energy = 100;
    private int $hungry = 0;
        
    public function __construct($name,$type, int $energy= 100, $hungry = 0) {
        $this->name = $name;
        $this->type = $type;
        $this->energy = $energy;
        $this->hungry = $hungry;
    }

    abstract public function performAction($action);

    /**
     * * récupérer de l’énergie
     * * action alternative *
     */
    public function rest(): void {
        $this->energy =+ 10;
    } 
    
    

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

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
     * Get the value of energy
     */ 
    public function getEnergy()
    {
        return $this->energy;
    }

    /**
     * Set the value of energy
     *
     * @return  self
     */ 
    public function setEnergy($energy)
    {
        $this->energy = $energy;

        return $this;
    }

    /**
     * Get the value of hungry
     */ 
    public function getHungry()
    {
        return $this->hungry;
    }

    /**
     * Set the value of hungry
     *
     * @return  self
     */ 
    public function setHungry($hungry)
    {
        $this->hungry = $hungry;

        return $this;
    }
}