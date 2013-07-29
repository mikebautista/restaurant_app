<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Order_Meal extends CI_Model {

    var $name   = '';
    var $meal = '';
    var $drinks = '';
    var $special_instructions = '';
    var $time = '';
    var $customer_id = '';

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function insert_entry()
    {
        $this->name 					= $this->input->post('person_name'); // please read the below note
        $this->meal 					= $this->input->post('meal');
        $this->drinks    				= $this->input->post('drinks');
        $this->special_instructions    	= $this->input->post('special_instructions');
        $this->time    					= $this->input->post('time');
        $this->customer_id    			= $this->session->userdata('id');
        
        // Remove all entries to make sure there are only one
        $this->db->delete('order', array('customer_id' => $this->customer_id)); 

        return $this->db->insert('order', $this);
    }

}