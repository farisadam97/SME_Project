<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("Login")); }       
	}

    public function index () {
	  //  $this ->load->view('Header');
	  	if($this->session->userdata('status') != "login"){
			redirect(base_url("Login"));
		}else{ 
			$this->load->model('home_model'); 
			// $this->load->view('Home');
			$data['err_message'] = "";
			$data['data1'] = $this->home_model->getDataExpert();
			$this->load->view('Home', $data);
		}
    	
        //IKI HOME!!!
    }
}
