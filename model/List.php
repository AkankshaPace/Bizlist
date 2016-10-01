<?php

class List {
	public $title;
	public $location;
	public $description;
	public $price;
	
	public function __construct($title, $location, $description, $price)  
    {  
        $this->title = $title;
	    $this->location = $location;
	    $this->description = $description;
	    $this->price = $price;
    } 
}
