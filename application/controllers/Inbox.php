<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inbox extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("Login")); }       
	}

	public function index()
	{
		if($this->session->userdata('status') != "login"){
			redirect(base_url("Login"));
		}else{
		$this->load->view('Inbox');
		}
	}
	
	public function item()
	{
		if($this->session->userdata('status') != "login"){
			redirect(base_url("Login"));
		}else{
		$this->load->view('InboxItem');
		}
	}
	

	
}