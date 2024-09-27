<?php

require_once './BookPresentation.php';
require_once './AuthorPresentation.php';

function LibraryManagement()
{

    echo "====================";
    echo "\nChoose an option\n";
    echo "====================";

    echo "\n[1]. view books\n";
    echo "[2]. add a book\n";
    echo "[3]. delete a book\n";
    echo "[4]. edit a book\n";
    echo "-----------------\n";
    echo "[5]. view authors\n";
    echo "[6]. add an author\n";
    echo "[7]. delete an authors\n";
    echo "[8]. edit an authors\n";
    echo "--------------------\n";
    echo "[0]. exit\n";
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
            $id =readline("entre the id of the book you want to delete: ");
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
                $AuthorsPresentation = new AuthorPresentation();
                $AuthorsPresentation->showAuthors();
                break;
    
            case 6:
                $firstName = readline("Enter the first name of the author: ");
                $lastName = readline("Enter the last name of the author: ");
                $nasionality = readline("Enter the nasionality of the author: ");
                $AuthorsPresentation = new AuthorPresentation();
                $AuthorsPresentation->addAuthor($firstName, $lastName, $nasionality);
                break;
    
            case 7:
                $id =readline("entre the id of the author you want to delete: ");
                $AuthorsPresentation = new AuthorPresentation();
                // $AuthorsPresentation->deleteAuthor($id);
                break;
    
            case 8:
                $id = readline("Enter the id of the author you want to edit: ");
                $firstName = readline("Enter the first name of the author: ");
                $lastName = readline("Enter the last name of the author: ");
                $AuthorsPresentation = new AuthorPresentation();
                // $AuthorsPresentation->editAuthor($id, $firstName, $lastName);
                break;

        case 0:
            echo "Bye";
            exit;    

        default:
            echo "Invalid choice. Please try again\n";
    }
}

LibraryManagement();
