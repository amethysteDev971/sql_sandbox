<?php
namespace App\Tamagotchi;

abstract class Type extends Action

{
    private string $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

    /**
     * @return string
    */
    public function getName(): string
    {
        return $this->name;
    }

    
}