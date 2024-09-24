<?php

class DataBase{
    public $books=[];

    public function __construct()
    {
        $this->getData();
    }

    private function getData(){
        $filePath = 'DB/Books.txt';
        if(file_exists($filePath)){
            $content = file_get_contents($filePath);
            $data = unserialize($content);
            $this->books = $data->books;
        }
    }

    private function setData(){
        $filePath = 'DB/Books.txt';
        $data = serialize($this);
        file_put_contents($filePath,$data);
    }

    public function saveData(){
        $this->setData();
    }

}


?>