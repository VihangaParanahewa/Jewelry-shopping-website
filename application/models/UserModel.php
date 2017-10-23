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


    public function ringPost(){
        $respond=$this->db->get('ring');

        if ($respond->num_rows()>0){
            return $respond->result_array();
        }else{
            return false;
        }


    }

    public function necklacePost(){
    $respond=$this->db->get('necklace');

    if ($respond->num_rows()>0){
        return $respond->result_array();
    }else{
        return false;
    }


}

    public function earringPost(){
        $respond=$this->db->get('earring');

        if ($respond->num_rows()>0){
            return $respond->result_array();
        }else{
            return false;
        }


    }

    public function editRing($id){
        $this->db->where('ringId',$id);
        $respond=$this->db->get('ring');
        if ($respond->num_rows()>0) {
            return $respond->result_array();
        }else{
            return false;
        }
    }


    public function updateRingPostData($id){

        $data = array(

            'title'=> $this->input->post('title'),
            'category'=> $this->input->post('category'),
            'description'=> $this->input->post('description'),
            'price'=>$this->input->post('price'),
            'colour'=>$this->input->post('colour'),
            'image'=>$this->input->post('image'),

        );


       $this->db->where('ringId',$id);
        return $this->db->update('ring', $data);

    }


    public function deleteRingPostData($id){
        $this->db->where('ringId',$id);
        return $this->db->delete('ring');
    }


    public function updateNecklacePostData(){

        $data = array(

            'title'=> $this->input->post('title'),
            'category'=> $this->input->post('category'),
            'description'=> $this->input->post('description'),
            'price'=>$this->input->post('price'),
            'colour'=>$this->input->post('colour'),
            'image'=>$this->input->post('image'),

        );


        $this->db->where('title',$this->session->userdata('title'));
        return $this->db->update('necklace', $data);
    }



    public function updateEarringPostData(){

        $data = array(

            'title'=> $this->input->post('title'),
            'category'=> $this->input->post('category'),
            'description'=> $this->input->post('description'),
            'price'=>$this->input->post('price'),
            'colour'=>$this->input->post('colour'),
            'image'=>$this->input->post('image'),

        );


        $this->db->where('title',$this->session->userdata('title'));
        return $this->db->update('earring', $data);
    }




    public function deleteNecklacePostData($id){
        $this->db->where('necklaceId',$id);
        return $this->db->delete('necklace');
    }

    public function deleteEarringPostData($id){
        $this->db->where('earringId',$id);
        return $this->db->delete('earring');
    }

}