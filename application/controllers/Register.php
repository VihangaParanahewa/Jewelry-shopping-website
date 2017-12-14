<?php


class Register extends CI_Controller
{

    public function registerUser(){
        $this->form_validation->set_rules('firstName', 'First Name', 'required');
        $this->form_validation->set_rules('lastName', 'Last Name', 'required');
        $this->form_validation->set_rules('email', 'Email Address', 'required|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('confirmPassword', 'Confirm Password', 'required|matches[password]');
        $this->form_validation->set_rules('telNo', 'Contact Number', 'trim|required|min_length[10]|max_length[15]|is_unique[user.telNo]');


        if ($this->form_validation->run() == FALSE)
        {
            if ($this->input->post('submit',TRUE)=='Confirm'){
                $this->load->view('Admin/operations');
            }else{
                $this->load->view('registration');
            }


        } else {
           $this->load->model('UserModel');
           $response=$this->UserModel->insertUserData();
           if ($response){

               if ($this->input->post('submit',TRUE)=='Confirm'){
                   $this->session->set_flashdata('message','NEW USER have registered successfully!');
                   redirect('Admin/operations');
               }else{
                   $this->session->set_flashdata('message','You have registered successfully!');
                   redirect('Home/register');
               }

           }
           else{
               $this->session->set_flashdata('message','Problem Occurred, Try Again...');

               if ($this->input->post('submit',TRUE)=='Confirm'){
                   redirect('Admin/operations');
               }else{
                   redirect('Home/register');
               }

           }



        }

    }

}

