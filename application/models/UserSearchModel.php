<?php

class UserSearchModel extends CI_Model{


    public function getSearchRingData(){
        $query = "";
        switch ($this->input->post('category')) {
            case 'price':
                $price=$this->input->post('search');
                if ($this->input->post('symbol')=="="){
                    $query = "SELECT DISTINCT * FROM ring WHERE price=$price;";
                }elseif ($this->input->post('symbol')==">"){
                    $query = "SELECT DISTINCT * FROM ring WHERE price>$price;";
                }else{
                    $query = "SELECT DISTINCT * FROM ring WHERE price<$price;";
                }
                $respond = $this->db->query("$query");
                if ($respond->num_rows() > 0) {
                    return $respond->result_array();
                } else {
                    return false;
                }
                //use this kind of coding for the query to avoid Case sensitivity in Search option
                break;
        }
    }


    public function getSearchNecklaceData(){
        $query = "";
        switch ($this->input->post('category')) {
            case 'price':
                $price=$this->input->post('search');
                if ($this->input->post('symbol')=="="){
                    $query = "SELECT DISTINCT * FROM necklace WHERE price=$price;";
                }elseif ($this->input->post('symbol')==">"){
                    $query = "SELECT DISTINCT * FROM necklace WHERE price>$price;";
                }else{
                    $query = "SELECT DISTINCT * FROM necklace WHERE price<$price;";
                }
                $respond = $this->db->query("$query");
                if ($respond->num_rows() > 0) {
                    return $respond->result_array();
                } else {
                    return false;
                }
                //use this kind of coding for the query to avoid Case sensitivity in Search option
                break;

        }
    }



    public function getSearchEarringData(){
        $query = "";
        switch ($this->input->post('category')) {
            case 'price':
                $price=$this->input->post('search');
                if ($this->input->post('symbol')=="="){
                    $query = "SELECT DISTINCT * FROM earring WHERE price=$price;";
                }elseif ($this->input->post('symbol')==">"){
                    $query = "SELECT DISTINCT * FROM earring WHERE price>$price;";
                }else{
                    $query = "SELECT DISTINCT * FROM earring WHERE price<$price;";
                }
                $respond = $this->db->query("$query");
                if ($respond->num_rows() > 0) {
                    return $respond->result_array();
                } else {
                    return false;
                }
                //use this kind of coding for the query to avoid Case sensitivity in Search option
                break;

        }
    }


}