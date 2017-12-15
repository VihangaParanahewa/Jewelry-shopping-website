<?php


class UserEditModel extends CI_Model{

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


}