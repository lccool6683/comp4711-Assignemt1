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
class go extends Application{
    public function index()
	{
        $this->data["title"] = "Vancouver Explorer -- COMP4711 Assignemt1";
        $this->data["pageTitle"] = "Vancouver Explorer";
                $gos = $this->godata->getAllGo();
                $content = "";
                
                // Parse each dine post into html
                foreach($gos as $go)
                {
                    $content .= $this->creatGos($go);
                }
                
                // Place the blog posts html into the page
                $this->data['goposts'] = $content;
                
                $this->data['pagebody'] = 'go';
                $this->render();
	}

        // Parse the contents of a single post into the post template
        public function creatGos($go)
        {
            $content = $this->parser->parse('_sectionTemp', (array) $go, true);
            
            return $content;
        }
}
