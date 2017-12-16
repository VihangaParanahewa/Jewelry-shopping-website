<?php


class UserEditModel extends CI_Model{

    public function checkEmail(){
        $email=$this->input->post('email');
        $id=$this->session->userdata('id');
        $query = $this->db->query("SELECT * FROM user WHERE email='$email' AND NOT id=$id;");

        if ($query->num_rows()>0){
            return false;
        }else{
            return true;
        }
    }

    public function insertUserEditData(){

        $data = array(

            'firstName'=> $this->input->post('firstName',TRUE),
            'lastName'=> $this->input->post('lastName',TRUE),
            'email'=> $this->input->post('email',TRUE),
            'telNo'=>$this->input->post('telNo',TRUE)

        );
        $this->db->where('id',$this->session->userdata('id'));
        $this->db->update('user',$data);
        $this->db->where('id',$this->session->userdata('id'));
        $respond=$this->db->get('user');
        return $respond->row(0);


    }



    public function matchOldPassword(){
        $oldPassword=sha1($this->input->post('oldPassword'));
        $this->db->where('id',$this->session->userdata('id'));
        $respond=$this->db->get('user');

        foreach ($respond->result_array() as $row)
        {
            $retrievePassword=$row['password'];
        }

        if ($retrievePassword==$oldPassword){
            return true;

        }else{
            return false;
        }

    }


    public function changePassword(){


        $data = array(

            'password'=> sha1($this->input->post('password',TRUE))

        );


        $this->db->where('id',$this->session->userdata('id'));
        return $this->db->update('user',$data);

    }



    public function findRelevantUser(){
        $this->db->where('email',$this->input->post('email'));
        $respond=$this->db->get('user');
        if ($respond->num_rows()>0){
            return $respond->result_array();
        }else{
            return false;
        }

    }


    public function updateNewPassword(){

        $data = array(

            'password'=> sha1($this->input->post('password',TRUE))

        );

        $this->db->where('email',$this->input->post('email'));
        return $this->db->update('user',$data);

    }


}