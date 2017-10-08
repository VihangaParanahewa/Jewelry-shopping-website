<?php


class Customer extends CI_Controller{

    public function viewPost(){
        $this->load->view('Customer/viewPost');
    }

    public function postRing(){
        $this->load->view('Customer/ring');
    }

    public function postNecklace(){
        $this->load->view('Customer/necklace');
    }

    public function postEarring(){
        $this->load->view('Customer/earring');
    }

}