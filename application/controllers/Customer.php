<?php


class Customer extends CI_Controller{

    public function viewPost(){
        $this->load->view('Customer/viewPost');
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