<?php
include_once("model/Model.php");

class Controller {
	public $model;
	
	public function __construct()  
    {  
        $this->model = new Model();

    } 
	
	public function invoke($path)
	{   
		define("CONFIG_ROOT_DIR",        realpath(__DIR__ . '/../'.$_SERVER['HTTP_HOST']));

		switch ($path) {
			case '/About':
			    include CONFIG_ROOT_DIR .'view/About.html';
				break;
			case '/Buy':
				$buyListing = $this->model->getBuyList();
		        include CONFIG_ROOT_DIR .'view/Buy.html';
		        break;
		    case '/ContactUs':
		        include CONFIG_ROOT_DIR .'view/ContactUs.html';
		        break;
		     case '/Listing':
		     	$lists = $this->model->getLists();
		     	include CONFIG_ROOT_DIR .'view/listing.html';
		        break;
			default:
		        include CONFIG_ROOT_DIR .'view/Home.html';
				break;
		}
	}
}

?>