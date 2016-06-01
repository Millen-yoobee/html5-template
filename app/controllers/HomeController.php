<?php

class HomeController extends PageController {

	 // Properties
	private $latestProducts;
	

	// Constructor
	public function __construct () {   //runs immediately

		// Prepare the title; displays as Tab title on the browser
		$this -> title = "Home page";  //can be Trade Me or Pinster

		// Prepare meta description
		$this -> metaDesc = "See our wonderful range of kids toys and gifts";

		// Get latest products
	 }

	public function buildHTML () {
		include "app/templates/header.php";
		include "app/templates/home/home.php";
		include "app/templates/footer.php";

	 }


}


//do not put a closing php tag