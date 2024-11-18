<?php

namespace App\Tamagotchi\Error;

use App\Tamagotchi\Tamagotchi;
use App\Tamagotchi\Type;
use Exception;
class InvalidActionException extends Exception {

    // public function __construct($message = "", $code = 0,   Exception $previous = null) {
    public function __construct(string $message, Tamagotchi $tamagotchiType) {
        // parent::__construct($message, $code, $previous);
        parent::__construct($message, $code = 0, $previous = null);
        $tamagotchiType->rest();

        // Affichez un message pour indiquer qu’une action alternative a été exécutée
        echo '<br>#######   Une action alternative a été executée   ###########<br>';
    }

 
    

}