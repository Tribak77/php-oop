<?php 

include_once '../DB/DataBase.php';

class BookDAO{
    public function getBooks(){
        $DataBase = new DataBase();
        return $DataBase->books;
    }

    public function addBook($book){
        $DataBase = new DataBase();
        $DataBase->books[] = $book;
        $DataBase->saveData();
    }

    public function deleteBook($id){
        $DataBase = new DataBase();
        $books = $DataBase->books;

        foreach($books as $key => $book){
            if($book->getId() == $id){
                unset($books[$key]); 
                $DataBase->books = $books; 
                $DataBase->saveData();  
                break;  
            }
        }
    }

    public function editBook($id, $title, $ISBD){
        $DataBase = new DataBase();
        $books = $DataBase->books;

        foreach($books as $book){
            if($book->getId() == $id){
                $book->setTitle($title);
                $book->setISBD($ISBD);
                $DataBase->saveData();
                break;
            }
        }
    }
}

?>