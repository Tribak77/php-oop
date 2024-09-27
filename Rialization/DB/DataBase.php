<?php 

class DataBase{
    public $books = [];

    public function __construct()
    {
        $this->getData();
    }

    private function getData(){
        $FilePath = '../DB/DataBase.txt';
        if(file_exists($FilePath)){
            $centent = file_get_contents($FilePath);
            $data = unserialize($centent);
            $this->books = $data->books;
        }
    }

    private function setData(){
        $FilePath = '../DB/DataBase.txt';
        $data = serialize($this);
        file_put_contents($FilePath, $data);
    }

    public function saveData(){
        $this->setData();
    }
}

?>