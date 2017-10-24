<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('home');
	}


	public function about(){
        $this->load->view('about');
    }


    public function contact(){
	    $this->load->view('contact');
    }

    public function login()
    {
        $this->load->view('login');
    }

    public function register()
    {
        $this->load->view('registration');
    }


}
