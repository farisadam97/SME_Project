<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Experts extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('m_expert');
		$this->load->library('session');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("Login")); }       
	}
	
	public function index()
	{
		if($this->session->userdata('status') != "login"){
			redirect(base_url("Login"));
		}else{
			$this->load->model('m_expert');
			$data['err_message'] = "";
			$data['data5'] = $this->m_expert->getDataExperts();
			$this->load->view('Experts', $data);
		}
	}
	public function item($nipp)
	{
		if($this->session->userdata('status') != "login"){
			redirect(base_url("Login"));
		}else{
			$data['err_message'] = "";
			$data = $this->m_expert->getDataExpertsItem($nipp);
			$this->load->view('ExpertsItem', array('data'=>$data));
		}
	}
}