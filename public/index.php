<?php

Class Bag{
    private int $compartment;
    private string $colour;
    private int $storage;
    public int $items = 0;



    public function __construct(string $newColour, int $newCompartment){
        $this->compartment = $newCompartment;
        $this->colour = $newColour;
        $this->storage = $this->compartment * 4;



    }
    
    public function changeColour(string $newColour){
        $this->colour = $newColour;
        return $this->colour;
    }

    public function addItem(){
        if($this->items < $this->storage){
            $this->items++;
            return $this->items;
        }
        die("De tas is vol");
        
    }    

    public function get_compartment(){
        return $this->compartment;
    }

    public function get_colour(){
        return $this->colour;
    }
    public function get_items(){
        return $this->items;
    }

}


$eastpack = $bag = new Bag("black",2);
echo "Er is/zijn " .$bag->get_compartment() . " vak(ken). <br>";

$eastpack->changeColour("rood");

$bag->addItem();
$bag->addItem();
$bag->addItem();
$bag->addItem();

echo $bag->get_items() . "<br>";


echo "De tas is ". $eastpack->get_colour();

