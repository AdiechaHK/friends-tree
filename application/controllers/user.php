<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		$this->load->view('signup');
	}

	public function home()
	{
    $data = $this->session->userdata('user_obj');
    $this->load->view('user_home', $data);
	}

	public function sign_in()
	{
		$this->load->model('auth');
    $obj = $this->auth->sign_in();
    if($obj['cond']) {
      $this->session->set_userdata('signedIn', true);
      $this->session->set_userdata('user_obj', $obj['obj']);
      redirect("user/home");
    } else {
      $this->session->set_userdata('error', $obj['err']);
      redirect("welcome/sign_in");
    }	}

	public function sign_up()
	{
    $this->load->model('profile');
    $this->profile->insert_user_profile();
		$this->load->model('auth');
    $this->auth->sign_up();		
		redirect("welcome/sign_in");
	}

  public function profile() {
    $user_auth = $this->session->userdata('user_obj');
    $this->load->model('profile');
    $data['user'] = $this->profile->get_user($user_auth->email);
    $this->load->view('profile', $data);
  }

  public function profile_edit() {
    $user_auth = $this->session->userdata('user_obj');
    $this->load->model('profile');
    $data['user'] = $this->profile->get_user($user_auth->email);
    $this->load->view('profile_edit', $data);
  }

  public function sign_out(){
    $this->session->sess_destroy();
    redirect('welcome');
  }

  public function profile_save() {
    $user_auth = $this->session->userdata('user_obj');
    $this->load->model('profile');
    $this->profile->update_profile($user_auth->email);
    redirect('user/profile');
  }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */