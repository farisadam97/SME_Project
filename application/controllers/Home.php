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
<<<<<<< HEAD
      //  $this ->load->view('Header');
    	$data['err_message'] = "";
		$data['data1'] = $this->home_model->getDataExpert();
		$data['data2'] = $this->home_model->getDataPengetahuanTopik();
		$data['data3'] = $this->home_model->getDataPengetahuanExpert();
		$this->load->view('Home', $data);
=======
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
    	
>>>>>>> 496df43b348c83469b6d824b701b85a95d11812c
        //IKI HOME!!!
    }
}
