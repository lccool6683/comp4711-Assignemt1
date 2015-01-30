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
        $this->data["title"] = "Vancouver Explorer -- COMP4711 Assignemt1";
        $this->data["pageTitle"] = "Vancouver Explorer";
		/* calls Render in the Main_Controller 
		see MY_Controller.php in ./core */
        $this->render(); 
    }
}
