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

    public function editRingPost($id){
        $this->load->model('UserModel');
        $data = $this->UserModel->editRing($id);
        if($data!=false){
            $this->load->view('Admin/updateRingPost',array('data' => $data));
        }else{
            echo "Error...";
        }

    }

    public function editNecklacePost(){
        $this->load->view('Admin/updateNecklacePost');
    }

    public function editEarringPost(){
        $this->load->view('Admin/updateEarringPost');
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
                    $response = $this->UserModel->updateNecklacePostData();
                    break;
                case 'Earring':
                    $response = $this->UserModel->updateEarringPostData();
                    break;
                default:
                    $response=false;
            }


            if ($response) {
                $this->session->set_flashdata('message', 'You have Update the post successfully!');
                $this->load->view('Customer/viewPost');
            } else {
                $this->session->set_flashdata('message', 'Problem Occurred in Update Process...');
                $this->load->view('Customer/viewPost');

            }
        }
    }



    public function deletePost()
    {
        $this->load->model('UserModel');
        switch ($this->session->userdata('category')){
            case 'Ring':
                $response = $this->UserModel->deleteRingPostData();
                break;
            case 'Necklace':
                $response = $this->UserModel->deleteNecklacePostData();
                break;
            case 'Earring':
                $response = $this->UserModel->deleteEarringPostData();
                break;
            default:
                $response=false;
        }


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
