<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inbox extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('m_inbox');
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
			$data['data4'] = $this->m_inbox->getDataInbox();
			$data['unread'] = $this->m_inbox->getDataInboxUnread();
			$data['countPesan'] = $this->m_leftMenu->countDataInbox();
			$this->load->view('Inbox', $data);
		}
	}

	public function InboxDeleteSuccess()
	{
		if($this->session->userdata('status') != "login"){
			redirect(base_url("Login"));
		}else{
			$data['err_message'] = "";
			$data['data4'] = $this->m_inbox->getDataInbox();
			$this->load->view('InboxDelete', $data);
		}
	}
	
	public function item($id_pesan)
	{
		if($this->session->userdata('status') != "login"){
			redirect(base_url("Login"));
		}else{
			$data['err_message'] = "";
			$data['data'] = $this->m_inbox->getDataInboxItem($id_pesan);
			$data['countPesan'] = $this->m_leftMenu->countDataInbox();
			$this->load->view('InboxItem', $data);

		}
	}

	public function deletePesan($id_pesan2)
	{
		if($this->session->userdata('status') != "login"){
			redirect(base_url("Login"));
		}else{
		    $this->m_inbox->deleteDataInboxItem($id_pesan2);
		    redirect("Inbox/InboxDeleteSuccess");
		}
	}

	
}
?>