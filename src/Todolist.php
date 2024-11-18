<?php

// require_once 'Task.php';

class TodoList{

public array $todoList;

public function __construct()
{
    // parent::__construct($id,$textNote,$description);
    // $this->$todoList = $todoList;

}


public function addNote(string $id, string $textNote, ?string $description){
    // echo 'addNote() ?<br>';
    $this->todoList[] = new Task($id,$textNote,$description);
    echo '<i style="color:grey;">J\'ajoute une Task : </i>'.$textNote.'<br>';
    // echo '<pre>';
    // var_dump($this->todoList);
    // echo '</pre>';
    $this->display();
}

public function display() : void {
    echo '<hr>';
    // echo 
    foreach ($this->todoList as $key => $note) {
        // echo '<i style="color:grey;">Je toggle une Task : </i>'.$note->getTextNote().'<br>';

        if (!$note->getIsDisplay()){
            //Rayer la note
            // echo 'passe dans la condition ?';
            echo '<span style="text-decoration:line-through;">'.$note->getTextNote().'</span><br>';
        }else{
            echo 'hey ';
            echo $note->getTextNote().'<br>';
        }
        
    }
    // echo '<hr>';

}

public function toggleStatusTask($index) : void {
    for ($i=0; $i < count($this->todoList); $i++) { 
        // echo 'je parse la liste ';
        // echo '<pre>';
        // var_dump($this->todoList[$i]->getid());
        // echo '</pre>';
        if ($this->todoList[$i]->getid() === $index) {
            // echo 'toggle le statut pour rayer';
            // $this->todoList[$i]->setIsDisplay(false);
            $this->todoList[$i]->setIsDisplay(!$this->todoList[$i]->getIsDisplay());
            $this->display();
        }
    }
}

public function deleteTask($index) : void {
    for ($i=0; $i < count($this->todoList); $i++) { 
        if ($this->todoList[$i]->getid() === $index) {
            echo '<i style="color:grey;">Delete Task : </i>'.$this->todoList[$i]->getTextNote().'<br>';
            unset($this->todoList[$i]);
        }
       
    }
    // echo 'Je teste le delete <br>';
    // echo '<pre>';
    // var_dump($this->todoList);
    // echo '</pre>';
    
    $this->display();
}


/**
 * Get the value of todoList
 */ 
public function getTodoList()
{
return $this->todoList;
}

/**
 * Set the value of todoList
 *
 * @return  self
 */ 
public function setTodoList($todoList)
{
$this->todoList = $todoList;

return $this;
}
}