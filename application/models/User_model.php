<?php 
class User_model extends CI_Model{
    public function register(){
        $data = array(
            'first_name'     => $this->input->post('fname'),
            'last_name'     => $this->input->post('lname'),
            'email'     => $this->input->post('email'),
            'username'  =>  $this->input->post('uname'),
            'password'       =>  md5($this->input->post('pwd'))
        );
        $insert =   $this->db->insert('users', $data);
        return $insert;
    }

    public function login($username,$password){
        // validate
        $this->db->where('username',$username);
        $this->db->where('password',$password);

        $result = $this->db->get('users');
        if($result->num_row==1){
            return $result->row(0)->ID;
        }
        else{
            return false;
        }
    }
}