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

	public function index(){
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
			$data['data4'] = $this->m_inbox->getDataInbox();
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

		$nipp = $_POST['nipp_penerima'];
		$subjek = $_POST['subjek'];
		$isi_pesan = $_POST['isi_pesan'];
		$nama = $this->m_login->cek_nama();
			
        $config['upload_path']         = './assets/uploaded_files';
		$config['allowed_types']        = 'jpeg|gif|jpg|png|xlsx|docx|doc|xls|pdf|ppt|pptx';
		$config['max_size']             = 1000000;
		$config['max_width']            = 10000;
		$config['max_height']           = 10000;
        
        $this->upload->initialize($config);
        $temp = explode(".", $_FILES["file"]["name"]);
		$newfilename = round(microtime(true)) . '.' . end($temp);
		move_uploaded_file($_FILES["file"]["tmp_name"], "assets/uploaded_files/" . $newfilename);

        $file=('assets/uploaded_files/'.$newfilename);
        
        $data_insert = array(
        		// 'id_conversation' => '',
				'id_pesan' => '',
				'nipp_penerima' => $nipp,
				'nipp_pengirim' => $this->session->userdata('nipp'),
				'subjek' => $subjek,
				'isi_pesan' => $isi_pesan,
				'nama_pengirim' => $nama,
				'file' => $file,
				'read_pesan' => '0'
			);
		$this->upload->data('userfile');
        $res = $this->m_inbox->InsertData('pesan',$data_insert);
        redirect('Inbox');      
	}

	public function balasPesan(){

		$nipp = $_POST['nipp_penerima'];
		$subjek = $_POST['subjek'];
		$isi_pesan = $_POST['isi_pesan'];
		$nama = $this->m_login->cek_nama();
			
        $config['upload_path']         = './assets/uploaded_files';
		$config['allowed_types']        = 'jpeg|gif|jpg|png|xlsx|docx|doc|xls|pdf|ppt|pptx';
		$config['max_size']             = 1000000;
		$config['max_width']            = 10000;
		$config['max_height']           = 10000;
        
        $this->upload->initialize($config);
        $temp = explode(".", $_FILES["file"]["name"]);
		$newfilename = round(microtime(true)) . '.' . end($temp);
		move_uploaded_file($_FILES["file"]["tmp_name"], "assets/uploaded_files/" . $newfilename);

        $file=('assets/uploaded_files/'.$newfilename);
        
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
		$this->upload->data('userfile');
        $res = $this->m_inbox->InsertData('pesan',$data_insert);
        redirect('Inbox');      
	}

}
?>