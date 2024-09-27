<?php 

require_once '../DataAccess/BookDAO.php';

class BookService{

    public function getBooks(){
        $bookDAO = new BookDAO();
        return $bookDAO->getBooks();
    }

    public function addBook($book){
        $bookDAO = new BookDAO();
        $bookDAO->addBook($book);
    }

    public function deleteBook($id){
        $bookDAO = new BookDAO();
        $bookDAO->deleteBook($id);
    }

    public function editBook($id, $title, $ISBD){
        $bookDAO = new BookDAO();
        $bookDAO->editBook($id, $title, $ISBD);
    }
}
?>