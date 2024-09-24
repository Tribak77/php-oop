<?php

require 'DataAccess/BookDAO.php';

class BookService
{
    public function getBooks()
    {
        $DataBase = new BookDAO();
        return $DataBase->getBooks();
    }

    public function addBooks($book)
    {
        $DataBase = new BookDAO();
        return $DataBase->addBooks($book);
    }
}
