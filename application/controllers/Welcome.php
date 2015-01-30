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
        $this->load->view('_template');
        // build the list of authors, to pass on to our view
        //$source = $this->quotes->all();
        //$authors = array();
        //foreach ($source as $record) {
        //    $authors[] = array('who' => $record['who'], 'mug' => $record['mug'], 'href' => $record['where']);
        //}
        //$this->data['authors'] = $authors;

        
    }
}
