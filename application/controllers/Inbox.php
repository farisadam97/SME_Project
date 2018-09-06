<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inbox extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('m_inbox');
		$this->load->model('m_leftMenu');
		$this->load->model('m_login');
		$this->load->library('session');
		$this->load->helper('form');
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
			$data['countPesan'] = $this->m_leftMenu->countDataInbox();
			$data['nama'] = $this->m_login->cek_nama();
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
			$data['countPesan'] = $this->m_leftMenu->countDataInbox();
			$data['nama'] = $this->m_login->cek_nama();
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
			$data['nama'] = $this->m_login->cek_nama();
			$this->load->view('InboxItem', $data);
			
		}
	}

	public function deletePesan($id_pesan2){
		if($this->session->userdata('status') != "login"){
			redirect(base_url("Login"));
		}else{
		    $this->m_inbox->deleteDataInboxItem($id_pesan2);
		    redirect("Inbox");
		}
	}

	public function kirimPesan(){
		if (isset($_POST['pesan'])){
			$file = ".assets/uploaded_files/".basename($_FILES['file']['name']);
			$nipp = $_POST['nipp_penerima'];
			$subjek = $_POST['subjek'];
			$isi_pesan = $_POST['isi_pesan'];
			$nama = $this->m_login->cek_nama();
			$data_insert = array(
				'id_pesan' => '',
				'nipp_penerima' => $nipp,
				'nipp_pengirim' => $this->session->userdata('nipp'),
				'subjek' => $subjek,
				'isi_pesan' => $isi_pesan,
				'nama_pengirim' => $nama,
				'file' => $file,
				'read_pesan' => '0'
			);
			if(is_uploaded_file($_FILES['file']['tmp_name'])){
				move_uploaded_file($_FILES['file']['tmp_name'],$file);
				$this->m_inbox->kirimPesan($data_insert);
				$data['err_message'] = "Message Sent!";
				redirect("Inbox",$data);
			} else{
				$this->m_inbox->kirimPesan($data_insert);
				$data['err_message'] = "Message Sent!";
				redirect("Inbox");
			}
		    }
			// $config['upload_path']          = APPPATH. '../assets/uploaded_files/';
			// $config['allowed_types']        = 'jpeg|jpg|png';
			// $config['max_size']             = 25000;
			
			// $this->load->library('inbox', $config);

			
			// $nipp = $_POST['nipp_penerima'];
			// $subjek = $_POST['subjek'];
			// $isi_pesan = $_POST['isi_pesan'];
			// $nama = $this->m_login->cek_nama();
			// $file = 
			// $data_insert = array(
			// 	'id_pesan' => '',
			// 	'nipp_penerima' => $nipp,
			// 	'nipp_pengirim' => $this->session->userdata('nipp'),
			// 	'subjek' => $subjek,
			// 	'isi_pesan' => $isi_pesan,
			// 	'nama_pengirim' => $nama,
				
			// 	'read_pesan' => '0'
			// );
			// $this->m_inbox->kirimPesan($data_insert);
		 	// $data['err_message'] = "Message Sent!";
			// redirect("Inbox");
            
	}
}
?>