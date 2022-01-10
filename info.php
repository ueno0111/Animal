<?php
require_once('index.php');
require_once('data.php');

class Info{
    private $day;
    private $text;

    public function __construct($day,$text){
        $this->day = $day;
        $this->text = $text;
    }
    public function getDay(){
        return $this->day;
    }
    public function getText(){
        return $this->text;
    }
}

?>