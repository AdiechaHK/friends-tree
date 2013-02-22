<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function home()
	{
		$this->load->view('friendstree_home');
	}
	public function signup()
	{
		$this->load->view('signup');
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */