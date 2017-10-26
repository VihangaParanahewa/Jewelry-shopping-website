<?php
if(!Defined('BASEPATH')) exit('No direct script access allowed');


class Admin extends CI_Controller{

    public function index(){
        $this->load->view('Customer/home');
    }

    public function addPost(){
        $this->load->view('Admin/addPost');
    }

    public function add()
    {

        if ($this->input->post('submit') == 'cancel') {
            $this->load->view('Admin/addPost');

        } else {
            switch ($this->input->post('category')){
                case 'Ring':
                    $this->form_validation->set_rules('title', 'Title', 'required|is_unique[ring.title]');
                    break;
                case 'Necklace':
                    $this->form_validation->set_rules('title', 'Title', 'required|is_unique[necklace.title]');
                    break;
                case 'Earring':
                    $this->form_validation->set_rules('title', 'Title', 'required|is_unique[earring.title]');
                    break;
                default:
                    $this->form_validation->set_rules('title', 'Title', 'required');

            }
            $this->form_validation->set_rules('category', 'Category', 'required');
            $this->form_validation->set_rules('description', 'Description', 'required');
            $this->form_validation->set_rules('colour', 'Colour', 'required');
            $this->form_validation->set_rules('price', 'Price', 'required');
            $this->form_validation->set_rules('image', 'Image', 'required');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('Admin/addPost');
            }else {
                $this->load->model('UserModel');
                $response = $this->UserModel->insertPostData();

                if ($response) {
                    $this->session->set_flashdata('message', 'You have upload the post successfully!');
                    $this->addPost();
                } else {
                    $this->session->set_flashdata('message', 'Category field NOT selected, Try Again...');
                    $this->addPost();

                }

            }
        }
    }

    public function editRingPost($id){
        $this->load->model('UserModel');
        $data = $this->UserModel->editRing($id);
        if($data!=false){
            $this->load->view('Admin/updateRingPost',array('data' => $data));
        }else{
            echo "Error...";
        }

    }

    public function editNecklacePost($id){
        $this->load->model('UserModel');
        $data = $this->UserModel->editNecklace($id);
        if($data!=false){
            $this->load->view('Admin/updateNecklacePost',array('data' => $data));
        }else{
            echo "Error...";
        }
    }

    public function editEarringPost($id){
        $this->load->model('UserModel');
        $data = $this->UserModel->editEarring($id);
        if($data!=false){
            $this->load->view('Admin/updateEarringPost',array('data' => $data));
        }else{
            echo "Error...";
        }
    }

    public function updatePost($id){

        if ($this->input->post('submit') == 'cancel') {
            $this->load->view('Customer/viewPost');
        }else{
            $this->load->model('UserModel');
            switch ($this->input->post('category')){
                case 'Ring':
                    $response = $this->UserModel->updateRingPostData($id);
                    break;
                case 'Necklace':
                    $response = $this->UserModel->updateNecklacePostData($id);
                    break;
                case 'Earring':
                    $response = $this->UserModel->updateEarringPostData($id);
                    break;
            }


            if ($response) {
                $this->session->set_flashdata('message', 'You have Update the post successfully!');
                $this->load->view('Customer/messageBox');

            } else {
                $this->session->set_flashdata('message', 'Problem Occurred in Update Process...');
                $this->load->view('Customer/messageBox');
            }
        }
    }

    public function deleteRing($id){
        $this->load->model('UserModel');
        $response = $this->UserModel->deleteRingPostData($id);

        if ($response) {
            $this->session->set_flashdata('message', 'You have Deleted the Post...');
            $this->load->view('Customer/messageBox');
        } else {
            $this->session->set_flashdata('message', 'Problem Occurred in Deleting Process...');
            $this->load->view('Customer/messageBox');

        }

    }

    public function deleteNecklace($id){
        $this->load->model('UserModel');
        $response = $this->UserModel->deleteNecklacePostData($id);

        if ($response) {
            $this->session->set_flashdata('message', 'You have Deleted the Post...');
            $this->load->view('Customer/messageBox');
        } else {
            $this->session->set_flashdata('message', 'Problem Occurred in Deleting Process...');
            $this->load->view('Customer/messageBox');

        }

    }

    public function deleteEarring($id){
        $this->load->model('UserModel');
        $response = $this->UserModel->deleteEarringPostData($id);

        if ($response) {
            $this->session->set_flashdata('message', 'You have Deleted the Post...');
            $this->load->view('Customer/messageBox');
        } else {
            $this->session->set_flashdata('message', 'Problem Occurred in Deleting Process...');
            $this->load->view('Customer/messageBox');

        }

    }
}
