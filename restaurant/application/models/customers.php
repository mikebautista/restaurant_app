<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Customers extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function get_customer_list()
    {
        $query = $this->db->get('order');
        
        foreach($query->result_array() as $k => $row) {
	       $customer[$k] = $row;
	       $customer_id = array('customer_id' => $row['customer_id']);
	       
	       $payment = $this->db->get_where('payment', $customer_id);
	       $customer[$k]['payment'] = $payment->last_row('array');
	       $table = $this->db->get_where('table_number', $customer_id);
	       $customer[$k]['table'] = $table->last_row('array');
        }
        
        
        return $customer;
    }
    
    function get_customer($id)
    {
		$customer_id = array('customer_id' => $id);
		$order = $this->db->get_where('order', $customer_id);
        $customer = $order->last_row('array');
       
		$payment = $this->db->get_where('payment', $customer_id);
		$customer['payment'] = $payment->last_row('array');
		$table = $this->db->get_where('table_number', $customer_id);
		$customer['table'] = $table->last_row('array');
    
        
        return $customer;
    }

}