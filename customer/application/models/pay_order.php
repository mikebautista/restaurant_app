<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Pay_Order extends CI_Model {

    var $customer_id = '';
    var $cc_name   = '';
    var $cc_type = '';
    var $cc_number = '';
    var $cc_month = '';
    var $cc_year = '';
    var $pay_now = '';

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function insert_entry()
    {
        $this->cc_name 					= $this->input->post('cc_name'); // please read the below note
        $this->cc_type 					= $this->input->post('cc_type');
        $this->cc_number    			= $this->input->post('cc_number');
        $this->cc_month    				= $this->input->post('cc_month');
        $this->cc_year    				= $this->input->post('cc_year');
        $this->pay_now    				= $this->input->post('pay_now');
        $this->customer_id    			= $this->session->userdata('id');

        return $this->db->insert('payment', $this);
    }

}