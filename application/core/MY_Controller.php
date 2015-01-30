<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Application extends CI_Controller {

    protected $data = array();

    /**
     * Constructor.
     * Establish view parameters & load common helpers
     */

    function __construct() {
        parent::__construct();
        $this->data = array();
    }

    /**
     * Render this page
     */
    function render() {
		/* Set up page */
        
        //$this->data['content'] = $this->parser->parse($this->data['content'], $this->data, true);
	$this->parser->parse("_template", $this->data);
    }

}

/* End of file MY_Controller.php */
/* Location: application/core/MY_Controller.php */