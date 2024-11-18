<?php

namespace App\Exo_interface;

use App\Exo_interface\Interface\CallInterface;
use App\Exo_interface\Interface\ContactInterface;
use App\Exo_interface\Interface\EmailInterface;

class Contact implements ContactInterface, EmailInterface{
    
    private string $nom;
    private string $prenom;
    private string $email;

    public function __construct($nom,$prenom,$email)
    {
        $this->nom = $nom;
        $this->prenom=$prenom;
        $this->email = $email;
    }


    /**
     * Get the value of prenom
     *
     * @return string
     */
    public function getPrenom() :string
    {
        return $this->prenom;
    }

    /**
     * Get the value of nom
     * 
     * @return string
     */ 
    public function getNom() :string
    {
        return $this->nom;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail() : string
    {
        return $this->email;
    }
}