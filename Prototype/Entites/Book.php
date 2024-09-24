<?php
class Book{
    private $id;
    private $title;
    private $ISBD;

    public function __construct($title, $ISBD){
        $this->id=uniqid();
        $this->title=$title;
        $this->ISBD=$ISBD;
    }

    public function getId(){
        return $this->id;
    }
 
    public function setId($id){
        $this->id = $id;
    }
    
    public function getTitle(){
        return $this->title;
    }

    public function setData($title){
        $this->title = $title;
    }

    public function getISBD(){
        return $this->ISBD;
    }

    public function setISBD($ISBD){
        $this->ISBD = $ISBD;
    }
}

?>