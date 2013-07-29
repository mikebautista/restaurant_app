<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

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
		$this->load->view('login');
	}
	
	public function login()
	{
		$this->load->model('login');
		
		$customer_data = $this->login->get_customer();
		
		
		if($customer_data) {
			$this->session->set_userdata(array('id' => $customer_data['id']));
			header('location: ../order');
		}
		else {
			header('location: ../');
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */