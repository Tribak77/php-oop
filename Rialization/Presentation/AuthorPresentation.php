<?php

require_once '../Services/AuthorService.php';
require_once '../Entites/Author.php';

class AuthorPresentation{
    public function showAuthors(){
        $AuthorService = new AuthorService();
        $authors = $AuthorService->getAuthors();

        if(!empty($authors)){
            echo "==============\n";
            echo "list of authors: \n";
            echo "==============\n";

            foreach($authors as $author){
                echo "First Name: " . $author->getFirstName() . "\n";
                echo "Last Name: " . $author->getLastName() . "\n";
                echo "Nasionality: " . $author->getNationality() . "\n";
                echo "ID: " . $author->getId() . "\n";
                echo "------------------\n";
            }
        } else{
            echo "===================\n";
            echo "No authors available.\n";   
            echo "===================\n";
        }
    }

    public function addAuthor($firstName, $lastName, $nasionality){
        $AuthorService = new AuthorService();
        $author = new Author($firstName, $lastName, $nasionality);
        $AuthorService->setAuthor($author);
        echo "Author added seccusfully";
    }

}

?>