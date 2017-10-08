<?php


class Customer extends CI_Controller{

    public function viewPost(){
        $this->load->view('Customer/viewPost');
    }

    public function postRing(){
        $this->load->model('UserModel');
        $respond=$this->UserModel->ringPost();
        if($respond!=false){

            $this->session->set_userdata('ring',$respond);
            //$this->session->set_userdata($result);

        }else{
            $this->session->set_flashdata('message','OPzz...Nothing To Publish');
        }

        $this->load->view('Customer/ring');
    }






    public function postNecklace(){
        $this->load->view('Customer/necklace');
    }





    public function postEarring(){
        $this->load->view('Customer/earring');
    }

}