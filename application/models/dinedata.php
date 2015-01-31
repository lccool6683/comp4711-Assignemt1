<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of dineData
 *
 * @author Clemens
 */
class dinedata extends CI_Model{
    
    // Dummy data for dine
    var $data = array(
        array('id' => '1', 'content' => 'eat as much as you can',
            'img' => '../img/dine1.jpg'),
        
        array('id' => '2', 'content' => 'eat as like u never eat before',
            'img' => 'img/dine2.jpg'),
        
        array('id' => '3', 'content' => 'hou yeah',
            'img' => 'img/dine3.jpg'),
        
        array('id' => '4', 'content' => 'end',
            'img' => 'img/dine4.jpg')
    );
    
    // Constructor
    public function __construct() {
        parent::__construct();
    }
    
    // Retrieve all dine data
    public function getAllDine() {
        return $this->data;
    }
}
