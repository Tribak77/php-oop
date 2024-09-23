<?php
class Book{
    private $Id;
    private $Title;
    private $ISBD;

    public function __construct($Title, $ISBD){
        $this->Id=uniqid();
        $this->Title=$Title;
        $this->ISBD=$ISBD;
    }

    public function getId(){
        return $this->Id;
    }
 
}

?>