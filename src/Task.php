<?php

class Task {

private string $id;

private string $textNote;

private ?string $description;

private bool $isDisplay = true; 


function __construct(string $id, string $textNote, ?string $description) {
    $this->id = $id;
    $this->textNote = $textNote;
    $this->description = $description;
}


/**
 * Get the value of id
 */ 
public function getId()
{
return $this->id;
}

/**
 * Set the value of id
 *
 * @return  self
 */ 
public function setId($id)
{
$this->id = $id;

return $this;
}

/**
 * Get the value of textNote
 */ 
public function getTextNote() : string
{
return $this->textNote;
}

/**
 * Set the value of textNote
 *
 * @return  self
 */ 
public function setTextNote($textNote)
{
$this->textNote = $textNote;

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
 * Get the value of isDisplay
 */ 
public function getIsDisplay()
{
return $this->isDisplay;
}

/**
 * Set the value of isDisplay
 *
 * @return  self
 */ 
public function setIsDisplay($isDisplay)
{
$this->isDisplay = $isDisplay;

return $this;
}
}