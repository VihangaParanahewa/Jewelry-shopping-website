<?php


class Login extends CI_Controller{

    public function loginUser(){
        $this->form_validation->set_rules('email', 'Email Address', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('login');
        }
        else{
            $this->load->model('UserModel');
            $result=$this->UserModel->userLogin();

            if($result!=false){
                $this->load->model('UserModel');
                $this->UserModel->userActive($result->id);

                $userData=array(
                    'id'=>$result->id,
                    'firstName'=>$result->firstName,
                    'lastName'=>$result->lastName,
                    'email'=>$result->email,
                    'telNo'=>$result->telNo,
                    'type'=>$result->type,
                    'logged_in'=>TRUE,

                );

                $this->session->set_userdata( $userData);
                $this->session->set_flashdata('message','Welcome ');

                redirect('Admin/index');

            }else{
                $this->session->set_flashdata('message','Invalid username or password... Please Try Again...');
                redirect('Home/login');
            }




        }


}

public function logoutUser(){

    $logoutDetails = array('id', 'firstName','lastName','email','logged_in');
    $this->load->model('UserModel');
    $this->UserModel->userInActive($this->session->userdata('id'));

    $this->session->unset_userdata($logoutDetails);
    redirect('Home');
}

public function viewProfile(){
    $this->load->view('Admin/profile');
}

}