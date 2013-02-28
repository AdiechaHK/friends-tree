<?php
class Profile extends CI_Model{

	var $name='';
    var $sname='';
	var $email='';
    var $gender='';
    var $city='';
    var $state='';
	var $dob='';

	function __construct()
	{
		parent::__construct();
	}

	function insert_user_profile()
	{
		$this->name 	= $_POST['name'];
		$this->sname 	= $_POST['sname'];
        $this->gender   = $_POST['gender'];
		$this->email 	= $_POST['email'];

		$this->db->insert('profile', $this);
	}

    function get_user($email) 
    {
        $obj = NULL;
        foreach($this->db->query('SELECT * FROM profile WHERE email="'.$email.'";')->result() as $row)
        {
            $obj = $row;
            break;
        }
        return $obj;
    }

    function update_profile($email) {
        $this->name     = $_POST['name'];
        $this->sname    = $_POST['sname'];
        $this->gender   = $_POST['gender'];
        $this->email    = $email;
        $this->db->update('profile', $this, array('email' => $email));
    }
}
?>