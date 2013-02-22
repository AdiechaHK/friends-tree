<?php
class Profile extends CI_Model{

	var $name='';
	var $sname='';
	var $email='';
	var $password='';
	var $gender='';

	function __construct()
	{
		parent::__construct();
	}

	function insert_user()
	{
		$this->name 	=$_POST['name'];
		$this->sname 	=$_POST['sname'];
		$this->email 	=$_POST['email'];
		$this->password =$_POST['password'];
		$this->gender 	=$_POST['gender'];
 
		$user_data = array('email'=>$this->email,'password'=>$this->password );
		$this->db->insert('user',$user_data);

		$profile_data = array('name' =>$this->name ,'sname'=>$this->sname,'gender'=>$this->gender );
		$this->db->insert('profile',$profile_data);
	}

}
?>