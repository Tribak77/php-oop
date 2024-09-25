<?php

require '../DataAccess/BookDAO.php';

class BookService
{
    public function getBooks()
    {
        $bookDAO = new BookDAO();
        return $bookDAO->getBooks();
    }

    public function addBooks($book)
    {
        $DataBase = new BookDAO();
        return $DataBase->addBooks($book);
    }
}
