<?php 

require '../Entites/Book.php';
require '../Services/BookService.php';

class BookPresentation{

    public function showBooks(){
        $BookService = new BookService();
        $Books = $BookService->getBooks();

        if(!empty($Books)){
            echo "=========================\n";
            echo "Book list: \n";

            foreach($Books as $book){
                echo "__________________________\n";
                echo "Title: " . $book->getTitle() . "\n";
                echo "ISBD: " . $book->getISBD() . "\n";
            }
            echo "__________________________\n";
        } else{
            echo "=========================\n";
            echo "No books available.\n";
        }
    }

    public function addBooks($title, $ISBD){
        $BookService = new BookService();
        $NewBook = new Book($title, $ISBD);
        $BookService->addBooks($NewBook);
        echo "Book added successfully:\n Title: " . $title . "\n" . "ISBD: ". $ISBD . "\n";
    }

    public function run(){
        echo "====================";
        echo "\nChoose an option\n";
        echo "====================";

        echo "\n[1]. view books\n";
        echo "[2]. add a book\n";
        echo "[3]. exit\n";
        echo "--------------------\n";

        $option = readline("Enter your choice: ");

        switch($option){
            case 1 :
                $this->showBooks();
                break;
            case 2 :
                $title = readline("Enter the title of the book: ");
                $ISBD = readline("Enter the ISBD of the book: ");
                $this->addBooks($title, $ISBD);
                break; 
            case 3 :
                echo "Bye!\n";
                exit;
            default :
            echo "Invalid choice. Please try again\n";           
        }
    }
}

?>