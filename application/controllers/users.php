<?php

class Users extends CI_Controller{
    public function register(){
        // Validate form
        $this->form_validation->set_rules('fname','First Name','trim|required|min_length[2]|max_length[20]');
        $this->form_validation->set_rules('lname','Last Name','trim|required');
        $this->form_validation->set_rules('email','Email','trim|required|valid_email');
        $this->form_validation->set_rules('uname','username','trim|required|min_length[4]|max_length[16]');
        $this->form_validation->set_rules('pwd','Password','trim|required|min_length[4]|max_length[50]');
        $this->form_validation->set_rules('cpwd','Confirm Password','trim|required|matches[pwd]');

        if ($this->form_validation->run() == FALSE){
            // show View
            $data['main_content'] = 'register';
            $this->load->view('main',$data);
        }
        else{
            if($this->User_model->register()){
                $this->session->set_flashdata('registered','You are Registered and can login');
                redirect('');
            }
            $this->load->view('formsuccess');
        }
    }
    // login script
    public function login(){
        $this->form_validation->set_rules('uname','username','trim|required|min_length[4]|max_length[16]');
        $this->form_validation->set_rules('pwd','Password','trim|required|min_length[4]|max_length[50]');

        $username = $this->input->post('uname');
        $password = md5($this->input->post('pwd'));

        $user_id = $this->User_model->login($username,$password);

        // validation
        if($user_id){
            // user data
            $data =array(
                'user_id' => $user_id,
                'username'  =>  $username,
                'logged_in'  =>  true
            );
            // set session username
            $this->session->set_userdata($data);
            // set session message
            $this->session->set_flashdata('pass_login','You have logged in');
            redirect('');
        }
        else{
            $this->session->set_flashdata('fail_login','Sorry cant log in');
            redirect('');
        }
    }

    // logout script
    public function logout(){
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('username');
        $this->session->sess_destroy();

        redirect('');
    }
}

?>