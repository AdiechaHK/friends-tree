<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		$this->load->view('signup');
	}
	public function signup()
	{
		$this->load->model('profile');
		$this->profile->insert_user();
		
		$this->load->view("welcome_message");
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */