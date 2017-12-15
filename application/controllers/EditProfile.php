<?php


class EditProfile extends CI_Controller{

    public function index(){
        $this->load->view('Admin/editProfile');
    }

    public function passwordOperation(){
        $this->load->view('Admin/editPassword');
    }

    public function ValidateEdit(){
        $this->form_validation->set_rules('firstName', 'First Name', 'required');
        $this->form_validation->set_rules('lastName', 'Last Name', 'required');
        $this->form_validation->set_rules('email', 'Email Address', 'required|valid_email');
        $this->form_validation->set_rules('telNo', 'Contact Number', 'trim|required|min_length[10]|max_length[15]');


        if ($this->form_validation->run() == FALSE) {

            redirect('EditProfile');

        }else{
            $updateProfileDetails = array('firstName', 'lastName', 'email', 'telNo');
            $this->session->unset_userdata($updateProfileDetails);
            $this->load->model('UserEditModel');
            $result=$this->UserEditModel->insertUserEditData();

            $userUpdateData = array(
                'firstName' => $result->firstName,
                'lastName' => $result->lastName,
                'email' => $result->email,
                'telNo' => $result->telNo,

            );

            $this->session->set_userdata($userUpdateData);
            $this->load->view('Admin/profile');

        }


    }


    public function validateEditPassword(){

        $this->form_validation->set_rules('oldPassword', 'Current Password', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('confirmPassword', 'Confirm Password', 'required|matches[password]');

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('Admin/editPassword');

        }else{
            $this->load->model('UserEditModel');
            $result=$this->UserEditModel->matchOldPassword();
            if ($result) {

                $this->load->model('UserEditModel');
                $response = $this->UserEditModel->changePassword();

                if ($response) {
                    $this->session->set_flashdata('message', 'You have Update the Password successfully!');
                    redirect('EditProfile/passwordOperation');
                } else {
                    $this->session->set_flashdata('message', 'Error occurred..Try Again!');
                    redirect('EditProfile/passwordOperation');
                }
            }else{
                $this->session->set_flashdata('message', 'Current Password You Entered Wrong...!');
                redirect('EditProfile/passwordOperation');

            }

        }

    }


}