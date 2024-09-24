<?php

// BookDAO (Data Access Object) class that is used to interact with 
// the Database class. The purpose of this BookDAO class is to encapsulate 
// the logic for reading and writing book data, 
// separating it from the actual data storage mechanism.

require 'DB/DataBase.php';

class BookDAO
{
    public function getBooks()
    {
        $DataBase = new DataBase();
        return $DataBase->books;
    }

    public function addBooks($book)
    {
        $DataBase = new DataBase();
        $DataBase->books = $book;
        $DataBase->saveData();
    }
}
