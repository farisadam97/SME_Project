<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('m_home');
		$this->load->library('session');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("Login")); }       
	}


    public function index() {

	  	if($this->session->userdata('status') != "login"){
			redirect(base_url("Login"));
		}else{ 
			$this->load->model('m_home');
			$data['err_message'] = "";
			$data['data1'] = $this->m_home->getDataExpert();
			$data['data2'] = $this->m_home->getDataPengetahuanTopik();
			$data['data3'] = $this->m_home->getDataPengetahuanExpert();
			$this->load->view('Home', $data);
		}
        //IKI HOME!!!
    }
}
?>
