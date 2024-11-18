<?php
require_once "Task.php";
require 'Todolist.php';

/*

* Ajouter une note textuel, exemple : "Acheter du beurre"
* Supprimer une note
* Rayer une note
* Lister une note 

*/

// class TodoListManager {

//     /**
//      * Undocumented variable
//      *
//      * @var TodoList
//      */
//     private array $listeTodoListe = [];

//     function __construct() {
//        echo ('je suis le manager');

//         //Créer une liste de notes
//         $listeTodoListe[] = $note1 = new Task('1',"Je teste ma liste",null);
//         $listeTaske[] = $note2 = new Task('2',"J'ai bien une liste",null);
//         $listeTaske[] = $note3 = new Task('3',"Ouf !!! encore une liste",null);
//         $listeTaske[] = $note4 = new Task('4',"Jusqu'ici tout vaaaaaaaaaaa bien !!!!!",null);


//        // Affiche une liste de notes
//     //    echo '<pre>';
//     //    var_dump($listeTodoListe);
//     //    echo '<pre>';
//         echo '<hr>';
        
//         foreach ($listeTodoListe as $key => $value) {
//             // echo 'key '.$key.' $value '.$value;
//             // echo $value;
//             // var_dump($value);
//             $note = $value;
//             echo $note->getTextNote().'<br>';

//         }
//         echo '<hr>';

//     }

//     public function addNote($id,$new_note){
//         echo 'addNote() ?<br>';
//         var_dump($this->listeTodoListe);
//         $this->listeTodoListe[] = new Task($id,$new_note,null);
//         $this->display();
//     }

//     public function display() : void {
//         echo '<hr>';
//         // echo 
//         foreach ($this->listeTodoListe as $key => $note) {
//             echo 'hey';
//             echo $note->getTextNote().'<br>';
//         }
//         echo '<hr>';

//     }

//     /**
//      * Get the value of listeTodoListe
//      */ 
//     public function getListeTodoListe()
//     {
//         return $this->listeTodoListe;
//     }

//     /**
//      * Set the value of listeTodoListe
//      *
//      * @return  self
//      */ 
//     public function setListeTodoListe($listeTodoListe)
//     {
//         $this->listeTodoListe = $listeTodoListe;

//         return $this;
//     }
// }



// $manager = new TodoListManager();
// $manager->addNote("5","J'ajoute une todo :-)");
// $tasksManager = new TodoList('1',"Je teste ma liste",null)
// $listeTodoListe[] = $note1 = new Task('1',"Je teste ma liste",null);
// $listeTaske[] = $note2 = new Task('2',"J'ai bien une liste",null);
// $listeTaske[] = $note3 = new Task('3',"Ouf !!! encore une liste",null);
// $listeTaske[] = $note4 = new Task('4',"Jusqu'ici tout vaaaaaaaaaaa bien !!!!!",null);

$tasksManager = new TodoList();
// $note1 = new Task('1',"Je teste ma liste",null);
$tasksManager->addNote('1',"Je teste ma liste",null);
$tasksManager->addNote('2',"J'ai bien une liste",null);
$tasksManager->toggleStatusTask('2');
$tasksManager->toggleStatusTask('2');
$tasksManager->deleteTask('2');
$tasksManager->addNote('3',"Faire mon Portfolio",null);
$tasksManager->addNote('4',"Prospecter entreprises pour un stage",null);