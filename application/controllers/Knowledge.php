<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Knowledge extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('m_knowledge');
		$this->load->model('m_leftMenu');
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
			$data['data6'] = $this->m_knowledge->getDataKnowledgeTopik();
			$data['data7'] = $this->m_knowledge->getDataKnowledgeExpert();
			// // $data['data9'] = $this->m_knowledge->getDataKnowledgeExpertItem();
			// $data['expert'] = $this->m_knowledge->getDataKnowledgeExpertItem($expert);
			$data['countPesan'] = $this->m_leftMenu->countDataInbox();
			$this->load->view('Knowledge', $data);
			// $this->indexExpert($id_knowledge);
		}
	}

	// public function indexExpert($id_knowledge)
	// {
	// 	if($this->session->userdata('status') != "login"){
	// 		redirect(base_url("Login"));
	// 	}else{
	// 		$data['err_message'] = "";
	// 		$data['id_knowledge'] = $this->m_knowledge->getDataKnowledgeParameter($id_knowledge);
			
	// 	}
	// }

	public function item($id_knowledge)
	{
		if($this->session->userdata('status') != "login"){
			redirect(base_url("Login"));
		}else{
			$data['err_message'] = "";
			$data['data8'] = $this->m_knowledge->getDataKnowledgeTopikItem($id_knowledge);
			$data['data9'] = $this->m_knowledge->getDataKnowledgeExpertItem($id_knowledge);
			$data['countPesan'] = $this->m_leftMenu->countDataInbox();
			$this->load->view('KnowledgeItem', $data);
		}
	}
}