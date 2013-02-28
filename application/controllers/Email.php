<?php
class Email extends CI_Controller {

    function Email()
    {
      parent::__construct();
      $this->load->library('email');
    }

    function index()
    {
        $config['protocol']    = 'smtp';
        $config['smtp_host']    = 'smtp.gmail.com';
        $config['smtp_port']    = '465';
        $config['smtp_timeout'] = '7';
        $config['smtp_user']    = 'adiechahari@gmail.com';
        $config['smtp_pass']    = 'HacKer001';
        $config['charset']    = 'utf-8';
        $config['newline']    = "\r\n";
        $config['mailtype'] = 'text'; // or html
        $config['validation'] = TRUE; // bool whether to validate email or not      

        $this->email->initialize($config);

        $this->email->from('adiechahari@gmail.com', 'Adiecha Harikrushna');
        $this->email->to('tom.23790@gmail.com'); 

        $this->email->subject('Email Test');
        $this->email->message('Testing the email class.');  

        $this->email->send();

        echo $this->email->print_debugger();

        // $this->load->view('email_view');
    }
}
?>