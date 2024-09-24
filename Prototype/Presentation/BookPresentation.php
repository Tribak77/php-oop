<?php 

require 'Entites/Book.php';
require 'Services/BookService.php';

class BookPresentation{

    public function showBooks(){
        $BookService = new BookService();
        $Books = $BookService->getBooks();

        if(!empty($Books)){
            echo "=========================\n";
            echo "Book list: \n";

            foreach($Books as $Book){
                echo "__________________________\n";
                echo "Title: " . $Book->getTitle() . "\n";
                echo "ISBD: " . $Book->getISBD() . "\n";
            }
            echo "__________________________\n";
        } else{
            echo "No books available.\n";
        }
    }

    public function addBooks(){

    }
}

?>