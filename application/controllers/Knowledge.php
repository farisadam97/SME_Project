<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Knowledge extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('m_knowledge');
		$this->load->model('m_leftMenu');
		$this->load->model('m_login');
		$this->load->library('session');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("Login")); }       
	}

	public function index()
	{
		if($this->session->userdata('status') != "login"){
			redirect(base_url("Login"));
		}else{
			$data['err_message'] = "";
			$data['data7'] = $this->m_knowledge->getDataKnowledgeTopikExpert();
			$data['countPesan'] = $this->m_leftMenu->countDataInbox();
			$data['nama'] = $this->m_login->getRole();
			$this->load->view('Knowledge', $data);
		}
	}

	public function item($id_knowledge)
	{
		if($this->session->userdata('status') != "login"){
			redirect(base_url("Login"));
		}else{
			$data['err_message'] = "";
			$data['data8'] = $this->m_knowledge->getDataKnowledgeTopikItem($id_knowledge);
			$data['data9'] = $this->m_knowledge->getDataKnowledgeExpertItem($id_knowledge);
			$data['countPesan'] = $this->m_leftMenu->countDataInbox();
			$data['nama'] = $this->m_login->getRole();
			$this->load->view('KnowledgeItem', $data);
		}
	}
}