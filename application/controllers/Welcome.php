<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index() {
        
        /* Set the page title, heading, and content here */
		$this->data["title"] = "Vancouver Explorer";
		$this->data["pageTitle"] = "Vancouver Explorer -- COMP4711 Assignemt1";
		/* calls Render in the Main_Controller 
		see MY_Controller.php in ./core */
		$this->render(); 
    }
}
