<?php
class Auth extends CI_Model{

  var $email = '';
  var $password = '';
  var $active = '';

  public function sign_up() {
    $this->email   = $_POST['email']; 
    $this->password = md5($_POST['password']);

    $this->db->insert('auth', $this);
  }

  public function sign_in() {

    $ret_obj;
    $this->email   = $_POST['email']; 
    $this->password = md5($_POST['password']);

    $query = $this->db->get_where('auth', array('email'=> $this->email));

    $num = $query->num_rows();

    if($num == 0) {
        $ret_obj['cond'] = false;
        $ret_obj['err'] = "No user Found";
    } else if($num == 1) {
        foreach ($query->result() as $row)
        {
            if($row->password == $this->password) {
                if($row->active != 0) {
                    $ret_obj['cond'] = true;
                    $ret_obj['obj'] = $row;
                } else {
                    $ret_obj['cond'] = false;
                    $ret_obj['err'] = "Not activated";
                }
            } else {
                $ret_obj['cond'] = false;
                $ret_obj['err'] = "Incorrect password";
            }
            break;
        }
    } else {
        $ret_obj['cond'] = false;
        $ret_obj['err'] = "User conflict - please inform site admin for this issue";
    }
    return $ret_obj;
  }

}
?>