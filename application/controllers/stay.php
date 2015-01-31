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
class stay extends Application{
    public function index()
	{
        $this->data["title"] = "Vancouver Explorer -- COMP4711 Assignemt1";
        $this->data["pageTitle"] = "Vancouver Explorer";
                $stays = $this->staydata->getAllStay();
                $content = "";
                
                // Parse each dine post into html
                foreach($stays as $stay)
                {
                    $content .= $this->creatStays($stay);
                }
                
                // Place the blog posts html into the page
                $this->data['stayposts'] = $content;
                
                $this->data['pagebody'] = 'stay';
                $this->render();
	}

        // Parse the contents of a single post into the post template
        public function creatStays($stay)
        {
            $content = $this->parser->parse('_sectionTemp', (array) $stay, true);
            
            return $content;
        }
}
