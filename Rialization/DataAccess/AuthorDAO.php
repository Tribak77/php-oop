<?php

require_once '../DB/DataBase.php';

class AuthorDAO{

    public function getAuthors(){
        $DataBase = new DataBase();
        return $DataBase->authors;
    }

    public function setAuthor($author){
        $DataBase = new DataBase();
        $DataBase->authors[] = $author;
        $DataBase->saveData();
    }
}


?>