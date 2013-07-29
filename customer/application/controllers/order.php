<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Order extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		//print_r($this->session->all_userdata());
		$this->load->view('order-meal');
	}
	
	public function submit() {
	
		$this->load->model('order_meal');
		
		$order_data = $this->order_meal->insert_entry();
		
		if($order_data) {
			header('location: ../payment');
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */