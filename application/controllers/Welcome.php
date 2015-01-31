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
        $homes = $this->homedata->getAll();
                $content = "";
                
                // Parse each dine post into html
                foreach($homes as $home)
                {
                    $content .= $this->creatHomes($home);
                }
                
                // Place the blog posts html into the page
                $this->data['homeposts'] = $content;
                
                $this->data['pagebody'] = 'homepage';
                $this->render();
		/* calls Render in the Main_Controller 
		see MY_Controller.php in ./core */
    }
    
    public function creatHomes($home)
        {
            $content = $this->parser->parse('_sectionTemp', (array) $home, true);
            
            return $content;
        }
}
