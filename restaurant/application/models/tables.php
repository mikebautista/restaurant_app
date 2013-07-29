<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Tables extends CI_Model {

    var $customer_id = '';
    var $table_number = '';
    
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    
    function get_table($id) 
    {
    	$this->customer_id = $id;
    	return $this->db->get_where('table_number', array('customer_id' => $this->customer_id));	
	}
    
    function insert_table($id) 
    {
    	$this->customer_id = $id;
    	$this->table_number = $this->input->post('table_number');
    	
	    return $this->db->insert('table_number', $this);
    }
    
    function update_table($id) 
    {
    	$this->table_number = $this->input->post('table_number');
    	
	    $this->db->where('customer_id', $id);
	    return $this->db->update('table_number', $this);
    }

}