<?php


class UserModel extends CI_Model{

    function insertUserData(){

        $data = array(

            'firstName'=> $this->input->post('firstName',TRUE),
            'lastName'=> $this->input->post('lastName',TRUE),
            'email'=> $this->input->post('email',TRUE),
            'password'=> sha1($this->input->post('password',TRUE)),

        );

        return $this->db->insert('user',$data);
        //return false;
    }

    function userLogin(){
        $email=$this->input->post('email');
        $password=sha1($this->input->post('password'));

        $this->db->where('email',$email);
        $this->db->where('password',$password);
        $respond=$this->db->get('user');

        if ($respond->num_rows()==1){
            return $respond->row(0);
        }else{
            return false;
        }


    }

    public function insertPostData(){

        $data = array(

            'title'=> $this->input->post('title',TRUE),
            'category'=> $this->input->post('category',TRUE),
            'description'=> $this->input->post('description',TRUE),
            'colour'=>$this->input->post('colour',TRUE),
            'price'=>$this->input->post('price',TRUE),
            'image'=>$this->input->post('image',TRUE),

        );

        switch ($this->input->post('category')){
            case 'Ring':
                return $this->db->insert('ring',$data);
                break;
            case 'Necklace':
                return $this->db->insert('necklace',$data);
                break;
            case 'Earring':
                return $this->db->insert('earring',$data);
                break;
            default:
                return false;
        }


    }



}