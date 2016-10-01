<?php

// include_once("model/List.php");
class Model {
	public function getBuyList()
	{
		// // here goes some hardcoded values to simulate the database
		// return array(
		// 	"1BHK/1BDR" => new List("1BHK/1BDR", "Jersey City", "A classic location.", "$1000"),
		// 	"2BHK" => new List("2BHK", "New York City", "A scenic view.", "$1600"),
		// 	"Studio" => new List("Studio", "Manhattan", "No Pets allowed.", "$800"),
		// );
	}
	
	public function getLists($title)
	{
		// we use the previous function to get all the books and then we return the requested one.
		// in a real life scenario this will be done through a db select command
		$allLists = $this->getBuyList();
		return $allLists[$title];
	}
	
	
}

?>