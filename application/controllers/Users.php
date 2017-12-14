<?php


class Users extends CI_Controller{

    public function index(){
        $this->load->model('UserModel');
        $data = $this->UserModel->viewSystemUsers();

        if($data!=false){

            $this->load->view('Admin/SystemUsers',array('data' => $data));
        }else{

            $this->session->set_flashdata('message','OPzz...Error Occurred');
            $this->load->view('Admin/SystemUsers');
        }

    }


    public function deleteUser($id){
        if ($this->session->userdata('id')==$id) {
            $this->session->set_flashdata('message', 'You Cannot Block YourSelf...!');
            redirect('Users');
        }else{
            $this->load->model('UserModel');
            $response = $this->UserModel->blockUser($id);

            if ($response) {
                $this->session->set_flashdata('message', 'You have Blocked a User...!');
                redirect('Users');
            } else {
                $this->session->set_flashdata('message', 'Problem Occurred in Blocking Process...!');
                redirect('Users');
            }
        }
    }


public function viewUsersDetails($id){
$this->load->model('UserModel');
$data = $this->UserModel->UsersDetail($id);
$this->load->view('Admin/viewUsersDetails',array('data' => $data));

}


public function OnlineUsers(){
    $this->load->model('UserModel');
    $data = $this->UserModel->viewOnlineUsers();

    if($data!=false){

        $this->load->view('Admin/viewOnlineUsers',array('data' => $data));
    }else{

        $this->session->set_flashdata('message','OPzz...Error Occurred');
        $this->load->view('Admin/viewOnlineUsers');
    }
}


}