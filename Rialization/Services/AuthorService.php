<?php

require_once '../DataAccess/AuthorDAO.php';

class AuthorService{

    public function getAuthors(){
        $AuthorDAO = new AuthorDAO();
        return $AuthorDAO->getAuthors();
    }

    public function setAuthor($author){
        $AuthorDAO = new AuthorDAO();
        $AuthorDAO->setAuthor($author);
    }
}

?>