<?php

// Require the PageController - all files/pages will require the PageController
require "app/controllers/PageController.php";

// if the user has requested a page
if ( isset ($_GET ["page"]) ) {
	// user requested a page
	$requestedPage = $_GET ["page"];
	}
 else {
 	// load the home page
 	$requestedPage = "home";
  }


// what page has the user requested?
switch( $requestedPage ) 
{
	case "home":
		// load the home page files
		require "app/controllers/HomeController.php";
		$controller = new HomeController ();  // use the class name
	break;

	case "products":
		// load the products page files
		require "app/controllers/ProductsController.php";
		$controller = new ProductsController ();  // use the class name

	break;

	case "contacts":
		// load the contact page files

	break;

	case "products":
		// load the register page files
	break;

	case "products":
		// load the login page files
	break;

	default:
		// tell the user page not found
	break;
}
$controller -> buildHTML ();  //buildHTML is a method

// do not put a closing php tag 
// anything after the closing php tag will be treated as html codes 