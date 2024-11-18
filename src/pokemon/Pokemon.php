<?php

namespace App\pokemon;

// Exercice : Gestion de Pokémon avec Classe Abstraite
// Dans cet exercice, tu vas créer une classe abstraite Pokemon pour modéliser les comportements de base et spécifiques de différents types de Pokémon (comme les Pokémon de type Feu, Eau, et Plante).

// Chaque Pokémon a des caractéristiques communes (nom, niveau, type) et des méthodes partagées (afficher les détails, gagner un niveau). Cependant, chaque Pokémon a des attaques spécifiques et des faiblesses particulières en fonction de son type.

// Objectifs
// Utiliser une classe abstraite pour définir les caractéristiques et comportements communs des Pokémon.
// Créer des méthodes concrètes pour partager des comportements entre les sous-classes.
// Définir deux méthodes abstraites pour que chaque type de Pokémon implémente ses propres attaques et faiblesses.

abstract class Pokemon {

    protected string $nom;
    protected int $niveau;
    protected string $type;
    // protected array $attacks;

    public function __construct(string $nom,int $niveau,string $type)
    {
        $this->nom = $nom;
        $this->niveau = $niveau;
        $this->type = $type;
    }

    public function showDetail() : string {
        return 'test showDetail()';
    }
    public function winLevel() : string {
        return 'test winLevel()';
    }

    abstract function attack() : void;
    abstract function weakness() : void;



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
}

