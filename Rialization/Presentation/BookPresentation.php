<?php 

require_once '../Services/BookService.php';
require_once '../Entites/Book.php';

class BookPresentation{

    public function showBooks(){
        $BookService = new BookService();
        $books = $BookService->getBooks();

        if(!empty($books)){
            echo "==============\n";
            echo "list of books: \n";
            echo "==============\n";

            foreach($books as $book){
                echo "Title: " . $book->getTitle() . "\n";
                echo "ISBD: " . $book->getISBD() . "\n";
                echo "ID: " . $book->getId() . "\n";
                echo "------------------\n";
            }
        } else{
            echo "===================\n";
            echo "No books available.\n";   
            echo "===================\n";
        }
    }

    public function addBook($title, $ISBD){
        $BookService = new BookService();
        $NewBook = new Book($title, $ISBD);
        $BookService->addBook($NewBook);
        echo "Book added successfully:\n Title: " . $title . "\n" . "ISBD: ". $ISBD . "\n";
    }

    public function deleteBook($id){
        $BookService = new BookService();
        $BookService->deleteBook($id);
        echo 'The book deleted succusfuly';
    }

    public function editBook($id, $title, $ISBD){
        $BookService = new BookService();
        $BookService->editBook($id, $title, $ISBD);
        echo 'The book edited succusfuly';
    }
}

?>