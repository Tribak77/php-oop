<?php

class Book{
    private $title;
    private $author;
    private $year;

    public function __construct($title, Author $author, $year){
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
    }

    public function getTitle(){
        return $this->title;
    }

    public function setTitle($title){
        $this->title = $title;
    }

    public function getAuthor(){
        return $this->author;
    }

    public function setAuthor(Author $author){
        $this->author = $author;
    }

    public function getYear(){
        return $this->year;
    }

    public function setYear($year){
        $this->year = $year;
    }
}

class Author{
    private $name;
    private $birthYear;

    public function __construct($name, $birthYear){
        $this->name = $name;
        $this->birthYear = $birthYear;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getBirthYear(){
        return $this->birthYear;
    }

    public function setBirthYear($birthYear){
        $this->birthYear = $birthYear;
    }
}

function save_data_into_file(Book $book, string $file){
    $serializedData = serialize($book);
    file_put_contents($file ,$serializedData);
}

function read_data_from_file(string $file){
    $serializedData = file_get_contents($file);
    return unserialize($serializedData);
}

$author = new Author("j.k",1960);
$book = new Book("harry poter", $author,1997);

$file = "book_data.txt";
save_data_into_file($book, $file);

$read_book = read_data_from_file($file);

echo "Title: ". $read_book->getTitle(). "\n";
echo "Author: ". $read_book->getAuthor()->getName(). "\n";
echo "Year: ". $read_book->getYear();
?>
