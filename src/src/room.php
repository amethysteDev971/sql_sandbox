<?php

// id INT PRIMARY KEY AUTO_INCREMENT
// name VARCHAR(100) NOT NULL
// description TEXT DEFAULT NULL
// photo VARCHAR(255) DEFAULT NULL
// capacity INT NOT NULL
// width DECIMAL(5, 2) NOT NULL
// length DECIMAL(5, 2) NOT NULL
// status ENUM('active', 'inactive') NOT NULL DEFAULT 'active'
// created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
// updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP

class Room {
    private int $id;

    private string $name;

    private string $description;

    private int $capacity;
    
    private float $length;

    private float $width;

    private Status $status = Status::INACTIVE;

    private DateTime $createdAt;

    private DateTime $updatedAt;


    // function __construct() {

    // }

    public function __construct(int $id, string $name, string $description, string $capacity, float $length, float $width, DateTime $createdAt, DateTime $updatedAt) {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->capacity = $capacity;
        $this->length = $length;
        $this->width = $width;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
    }


    /**
     * Get the value of length
     */ 
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Set the value of length
     *
     * @return  self
     */ 
    public function setLength($length)
    {
        $this->length = $length;

        return $this;
    }

    /**
     * Get the value of width
     */ 
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set the value of width
     *
     * @return  self
     */ 
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get the value of createdAt
     */ 
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set the value of createdAt
     *
     * @return  self
     */ 
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get the value of updatedAt
     */ 
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set the value of updatedAt
     *
     * @return  self
     */ 
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get the value of capacity
     */ 
    public function getCapacity()
    {
        return $this->capacity;
    }

    /**
     * Set the value of capacity
     *
     * @return  self
     */ 
    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
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

    public function getSurface() : float {
        return  $this->getLength() * $this->getWidth(); 
    }

    public function isActive() : bool {

        if ($this->status == Status::ACTIVE) {
            return true;
        }

        return false;
    }

    public function activate() : void {
        $this->status = Status::ACTIVE;
    }

    public function desactivate() : void {
        $this->status = Status::INACTIVE;
    }

}