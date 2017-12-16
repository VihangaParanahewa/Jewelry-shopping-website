<?php


class Login extends CI_Controller
{

    public function loginUser()
    {
        $this->form_validation->set_rules('email', 'Email Address', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('login');
        } else {
            $this->load->model('UserModel');
            $result = $this->UserModel->userLogin();

            if ($result != false) {
                $this->load->model('UserModel');
                $this->UserModel->userActive($result->id);

                $userData = array(
                    'id' => $result->id,
                    'firstName' => $result->firstName,
                    'lastName' => $result->lastName,
                    'email' => $result->email,
                    'telNo' => $result->telNo,
                    'type' => $result->type,
                    'logged_in' => TRUE,

                );

                $this->session->set_userdata($userData);
                $this->session->set_flashdata('message', 'Welcome ');

                redirect('Admin/index');

            } else {
                $this->session->set_flashdata('message', 'Invalid username or password... Please Try Again...');
                redirect('Home/login');
            }


        }


    }

    public function logoutUser()
    {

        $logoutDetails = array('id', 'firstName', 'lastName', 'email', 'logged_in');
        $this->load->model('UserModel');
        $this->UserModel->userInActive($this->session->userdata('id'));

        $this->session->unset_userdata($logoutDetails);
        redirect('Home');
    }

    public function viewProfile()
    {
        $this->load->view('Admin/profile');
    }


    public function requireEmail(){
        $this->form_validation->set_rules('email', 'Email Address', 'required|valid_email');


        if ($this->form_validation->run() == FALSE)
        {
            $this->session->set_flashdata('message','Email Field Required & Enter Your Logging valid Email..!');
            redirect('Home/login');

        }else{

            $this->load->model('UserEditModel');
            $data=$this->UserEditModel->findRelevantUser();

            if($data!=false){
                $this->load->view('codeValidation',array('data' => $data));
            }else{
                $this->session->set_flashdata('message','Error Occurred...enter the correct logging Email..!');
                redirect('Home/login');
            }

        }
    }


    public function matchCode(){
        $this->form_validation->set_rules('generatedCode', 'SMS CODE', 'required');
        $this->form_validation->set_rules('textCode', 'Entered Code', 'required|matches[generatedCode]');


        if ($this->form_validation->run() == FALSE)
        {
            $this->session->set_flashdata('message','You Entered Code NOT Match..!');
            redirect('Home/login');

        }else{
            $data=array('email'=>$this->input->post('email'));

            $this->load->view('newPassword',array('data' => $data));
        }
    }


    public function updatePassword(){
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('confirmPassword', 'Confirm Password', 'required|matches[password]');
        if ($this->form_validation->run() == FALSE)
        {
            $this->session->set_flashdata('message','You are Violated the Conditions..!');
            redirect('Home/login');

        }else{
            $this->load->model('UserEditModel');
            $data=$this->UserEditModel->updateNewPassword();

            if($data){
                $this->session->set_flashdata('message','Update The Password, Now You can Log With New Password..!');
                redirect('Home/login');;
            }else{
                $this->session->set_flashdata('message','Opzz..Error Occurred, Try Again..!');
                redirect('Home/login');
            }
        }


    }


}