<?php


class Admin extends CI_Controller{

    public function index(){
        $this->load->view('Admin/dashboard');
    }

    public function addPost(){
        $this->load->view('Admin/addPost');
    }

}