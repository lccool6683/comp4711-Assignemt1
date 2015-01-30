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
        $this->data['bkHome'] = "#slide-1";
        $this->data["dineLink"] = "#slide-2";
        $this->data["goLink"] = "#slide-3";
        $this->data["stayLink"] = "#slide-4";
        $this->data["aboutLink"] = "/about";
		/* calls Render in the Main_Controller 
		see MY_Controller.php in ./core */
        $this->render(); 
    }
    
    function home() {
        $this->load->view('homepage');
    }
}
