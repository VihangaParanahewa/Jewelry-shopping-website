<?php


class Customer extends CI_Controller{

    public function index()
    {
        $this->load->view('Customer/home');
    }


    public function about(){
        $this->load->view('Customer/about');
    }

    public function contact(){
        $this->load->view('Customer/contact');
    }

    public function viewPost(){
        $this->postRing();
    }

    public function postRing(){
        $this->load->model('UserModel');
        $data=$this->UserModel->ringPost();
        if($data!=false){

            $this->load->view('Customer/ring',array('data' => $data));
        }else{

            $this->session->set_flashdata('message','OPzz...Nothing To Publish');
            $this->load->view('Customer/ring');
        }

    }






    public function postNecklace(){
        $this->load->model('UserModel');
        $data=$this->UserModel->necklacePost();
        if($data!=false){

            $this->load->view('Customer/necklace',array('data' => $data));
        }else{
            $this->session->set_flashdata('message','OPzz...Nothing To Publish');
            $this->load->view('Customer/necklace');
        }

    }





    public function postEarring(){
        $this->load->model('UserModel');
        $data=$this->UserModel->earringPost();
        if($data!=false){

            $this->load->view('Customer/earring',array('data' => $data));
        }else{
            $this->session->set_flashdata('message','OPzz...Nothing To Publish');
            $this->load->view('Customer/earring');
        }
    }

}