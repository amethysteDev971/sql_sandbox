<?php
namespace App\Exo_interface;

use App\Exo_interface\Interface\CallableInterface;
use App\Exo_interface\Interface\ContactInterface;
use App\Exo_interface\Interface\EmailInterface;

class User implements ContactInterface, CallableInterface, EmailInterface{
     
    private string $nom;
    private string $prenom;
    private int $age;
    private string $email;
    private string $telephone;

    public function __construct($nom,$prenom,$age,$email,$telephone)
    {
        $this->nom = $nom;
        $this->prenom=$prenom;
        $this->age = $age;
        $this->email = $email;
        $this->telephone = $telephone;
    }

    /**
     * Get the value of telephone
     */ 
    public function getTelephone() : string
    {
        return $this->telephone;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail() : string
    {
        return $this->email;
    }

    /**
     * Get the value of age
     */ 
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Get the value of prenom
     */ 
    public function getPrenom() : string
    {
        return $this->prenom;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom() : string
    {
        return $this->nom;
    }
}