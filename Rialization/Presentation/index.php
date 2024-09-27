<?php

require_once './BookPresentation.php';

function LibraryManagement()
{

    echo "====================";
    echo "\nChoose an option\n";
    echo "====================";

    echo "\n[1]. view books\n";
    echo "[2]. add a book\n";
    echo "[3]. delete a book\n";
    echo "[4]. edit a book\n";
    echo "[5]. exit\n";
    echo "--------------------\n";

    $option = readline("Enter your choice: ");

    switch ($option) {
        case 1:
            $BooksPresentation = new BookPresentation();
            $BooksPresentation->showBooks();
            break;

        case 2:
            $title = readline("Enter the title of the book: ");
            $ISBD = readline("Enter the ISBD of the book: ");
            $BooksPresentation = new BookPresentation();
            $BooksPresentation->addBook($title, $ISBD);
            break;

        case 3:
            $id =readline("entre the id of the book: ");
            $BooksPresentation = new BookPresentation();
            $BooksPresentation->deleteBook($id);
            break;

        case 4:
            $id = readline("Enter the id of the book you want to edit: ");
            $title = readline("Enter the title of the book: ");
            $ISBD = readline("Enter the ISBD of the book: ");
            $BooksPresentation = new BookPresentation();
            $BooksPresentation->editBook($id, $title, $ISBD);
            break;

        case 5:
            echo "Bye";
            exit;    

        default:
            echo "Invalid choice. Please try again\n";
    }
}

LibraryManagement();
