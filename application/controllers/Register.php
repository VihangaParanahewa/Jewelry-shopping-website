<?php


class Register extends CI_Controller
{

    public function registerUser(){
        $this->form_validation->set_rules('firstName', 'First Name', 'required');
        $this->form_validation->set_rules('lastName', 'Last Name', 'required');
        $this->form_validation->set_rules('email', 'Email Address', 'required|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('confirmPassword', 'Confirm Password', 'required|matches[password]');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('registration');
        }
        else
        {
           $this->load->model('UserModel');
           $response=$this->UserModel->insertUserData();
           if ($response){
               $this->session->set_flashdata('message','You have registered successfully!');
               redirect('Home/register');
           }
           else{
               $this->session->set_flashdata('message','Problem Occurred, Try Again...');
               redirect('Home/register');

           }

        }

    }

}

