<?php

Class Auto{
    private $name;
    private $color="red";

 
    function set_name($name){
        $this->name = $name;
        $this->get_name();
    }
    
    function get_name(){
        return $this->name;
    }
}

$eersteAuto = new Auto();
$eersteAuto->set_name("ferrari");
