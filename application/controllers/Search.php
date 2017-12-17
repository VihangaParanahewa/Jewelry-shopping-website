<?php

class Search extends CI_Controller {

    public function searchRing(){
        $this->load->model('UserSearchModel');
        $data = $this->UserSearchModel->getSearchRingData();
        if($data!=false){
            $this->load->view('Customer/ring',array('data' => $data));
        }else{
            $this->session->set_flashdata('message','No Result Found.!');
            $this->load->view('Customer/ring',array('data' => $data));
        }
    }


    public function searchNecklace(){

        $this->load->model('UserSearchModel');
        $data = $this->UserSearchModel->getSearchNecklaceData();
        if($data!=false){
            $this->load->view('Customer/necklace',array('data' => $data));
        }else{
            $this->session->set_flashdata('message','No Result Found.!');
            $this->load->view('Customer/necklace',array('data' => $data));
        }

    }


    public function searchEarring(){

        $this->load->model('UserSearchModel');
        $data = $this->UserSearchModel->getSearchEarringData();
        if($data!=false){
            $this->load->view('Customer/earring',array('data' => $data));
        }else{
            $this->session->set_flashdata('message','No Result Found.!');
            $this->load->view('Customer/earring',array('data' => $data));
        }

    }

}