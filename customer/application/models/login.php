<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Model {

    var $username   = '';
    var $password = '';

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function get_customer()
    {
        $this->username = $this->input->post('username');
        $this->password = $this->input->post('password');
        $query = $this->db->get_where('restaurant_customers', array('username' => $this->username, 'password' => $this->password));
        
        return $query->row_array();
    }

}