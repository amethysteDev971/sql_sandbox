<?php
require "todolist.php";

/*

* Ajouter une note textuel, exemple : "Acheter du beurre"
* Supprimer une note
* Rayer une note
* Lister une note 

*/

class TodoListManager {

    /**
     * Undocumented variable
     *
     * @var TodoList
     */
    private array $listeTodoListe = [];

    function __construct() {
       echo ('je suis le manager');

        //Créer une liste de notes
        $listeTodoListe[] = $note1 = new ToDoList('1',"Je teste ma liste",null);
        $listeTodoListe[] = $note2 = new ToDoList('2',"J'ai bien une liste",null);
        $listeTodoListe[] = $note3 = new ToDoList('3',"Ouf !!! encore une liste",null);
        $listeTodoListe[] = $note4 = new ToDoList('4',"Jusqu'ici tout vaaaaaaaaaaa bien !!!!!",null);


       // Affiche une liste de notes
    //    echo '<pre>';
    //    var_dump($listeTodoListe);
    //    echo '<pre>';
        echo '<hr>';
        
        foreach ($listeTodoListe as $key => $value) {
            // echo 'key '.$key.' $value '.$value;
            // echo $value;
            // var_dump($value);
            $note = $value;
            echo $note->getTextNote().'<br>';

        }
        echo '<hr>';

    }

    public function addNote($id,$new_note){
        echo 'addNote() ?<br>';
        var_dump($this->listeTodoListe);
        $this->listeTodoListe[] = new ToDoList($id,$new_note,null);
        $this->display();
    }

    public function display() : void {
        echo '<hr>';
        // echo 
        foreach ($this->listeTodoListe as $key => $note) {
            echo 'hey';
            echo $note->getTextNote().'<br>';
        }
        echo '<hr>';

    }

    /**
     * Get the value of listeTodoListe
     */ 
    public function getListeTodoListe()
    {
        return $this->listeTodoListe;
    }

    /**
     * Set the value of listeTodoListe
     *
     * @return  self
     */ 
    public function setListeTodoListe($listeTodoListe)
    {
        $this->listeTodoListe = $listeTodoListe;

        return $this;
    }
}



$manager = new TodoListManager();
$manager->addNote("5","J'ajoute une todo :-)");

