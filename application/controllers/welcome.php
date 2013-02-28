<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		// $this->load->view('welcome_message');
		$this->load->view('friendstree_home');
	}
	public function home()
	{
		$this->load->view('friendstree_home');
	}
	public function sign_up()
	{
		$this->load->view('sign_up');
	}

	public function sign_in() 
	{
		$this->load->view('sign_in');
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */