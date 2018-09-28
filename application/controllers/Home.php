<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('m_home');
		$this->load->model('m_leftMenu');
		$this->load->model('m_login');
		$this->load->library('session');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("Login")); }       
	}


    public function index() {

	  	if($this->session->userdata('status') != "login"){
			redirect(base_url("Login"));
		}else{ 
			$data['err_message'] = "";
			$data['login'] = $this->m_home->getStatsCount();
			$data['ranking'] = $this->m_home->getStatsRanking();
			$data['leaderboard'] = $this->m_home->getLeaderboard();
			$data['rank'] = $this->m_home->getLeaderboardUser();
			$data['data1'] = $this->m_home->getDataExpert();
			$data['data2'] = $this->m_home->getDataPengetahuanTopik();
			$data['data3'] = $this->m_home->getDataPengetahuanExpert();
			$data['data7'] = $this->m_home->getDataKnowledgeTopikExpert();
			$data['role'] = $this->m_login->getRole();
			$data['countPesan'] = $this->m_leftMenu->countDataInbox();
			$this->load->view('Home', $data);
		}
        
    }

}
?>
