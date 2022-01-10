<?php 
require_once('index.php');
require_once('data.php');

class Staff{
    private $image;
    private $name;
    private $position;
    private $hobby;
    private $message;

    public function __construct($image,$name,$position,$hobby,$message){
        $this->image = $image;
        $this->name = $name;
        $this->position = $position;
        $this->hobby =$hobby;
        $this->message = $message;
    }
    public function getImage(){
        return $this->image;
    }
    public function getName(){
        return  $this->name;
    }
    public function getPosition(){
        return $this->position;
    }
    public function getHobby(){
        return $this->hobby;
    }
    public function getMessage(){
        return $this->message;
    }
}

?>