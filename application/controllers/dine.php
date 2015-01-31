<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of dine
 *
 * @author Clemens
 */
class dine extends Application{
    public function index()
	{
        $this->data["title"] = "Vancouver Explorer -- COMP4711 Assignemt1";
        $this->data["pageTitle"] = "Vancouver Explorer";
                $dines = $this->dinedata->getAllDine();
                $content = "";
                
                // Parse each dine post into html
                foreach($dines as $dine)
                {
                    $content .= $this->creatDines($dine);
                }
                
                // Place the blog posts html into the page
                $this->data['dineposts'] = $content;
                
                $this->data['pagebody'] = 'dine';
                $this->render();
	}

        // Parse the contents of a single post into the post template
        public function creatDines($dine)
        {
            $content = $this->parser->parse('_sectionTemp', (array) $dine, true);
            
            return $content;
        }
}
