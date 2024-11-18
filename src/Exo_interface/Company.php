<?php

namespace App\Exo_interface;

use App\Exo_interface\Interface\CallableInterface;
use App\Exo_interface\Interface\EmailInterface;

class Company implements CallableInterface, EmailInterface{
 
    private string $nom;
    private string $email;
    private string $telephone;

    public function __construct($nom,$email,$telephone)
    {
        $this->nom = $nom;
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
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }
}