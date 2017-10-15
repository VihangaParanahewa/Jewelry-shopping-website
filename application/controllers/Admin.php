<?php
if(!Defined('BASEPATH')) exit('No direct script access allowed');


class Admin extends CI_Controller{

    public function index(){
        $this->load->view('Admin/dashboard');
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

    public function editRingPost(){
        $this->load->view('Admin/updateRingPost');
    }

    public function updateRingPost(){

        if ($this->input->post('submit') == 'cancel') {
            $this->load->view('Customer/viewPost');
        }else{
            $this->load->model('UserModel');
            $response = $this->UserModel->updateRingPostData();

            if ($response) {
                $this->session->set_flashdata('message', 'You have Update the post successfully!');
                $this->load->view('Customer/viewPost');
            } else {
                $this->session->set_flashdata('message', 'Problem Occurred in Update Process...');
                $this->load->view('Customer/viewPost');

            }
        }

        unset(
            $_SESSION['title'],
            $_SESSION['description'],
            $_SESSION['category'],
            $_SESSION['price'],
            $_SESSION['image'],
            $_SESSION['colour']

        );
    }



    public function deleteRingPost()
    {
        $this->load->model('UserModel');
        $response = $this->UserModel->deleteRingPostData();

        if ($response) {
            $this->session->set_flashdata('message', 'You have Deleted the Post...');
            $this->load->view('Customer/viewPost');
        } else {
            $this->session->set_flashdata('message', 'Problem Occurred in Deleting Process...');
            $this->load->view('Customer/viewPost');

        }

        unset(
            $_SESSION['title'],
            $_SESSION['description'],
            $_SESSION['category'],
            $_SESSION['price'],
            $_SESSION['image'],
            $_SESSION['colour']

        );
    }

}
