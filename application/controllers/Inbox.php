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
	
	public function item($id_conversation)
	{
		if($this->session->userdata('status') != "login"){
			redirect(base_url("Login"));
		}else{
			$data['err_message'] = "";
			$data['data'] = $this->m_inbox->getDataInboxItem($id_conversation);
			$data['data4'] = $this->m_inbox->getDataInbox();
			$data['countPesan'] = $this->m_leftMenu->countDataInbox();
			$data['nama'] = $this->m_login->cek_nama();
			$this->load->view('InboxItem', $data);
			
		}
	}

	public function deletePesan($id_inbox){
		if($this->session->userdata('status') != "login"){
			redirect(base_url("Login"));
		}else{
		    $this->m_inbox->deleteDataInboxItem($id_inbox);
		    redirect("Inbox");
		}
	}

	public function kirimPesan(){
		if($this->session->userdata('status') != "login"){
			redirect(base_url("Login"));
		}else{
			$nipp = $_POST['nipp_penerima'];
			$subjek = $_POST['subjek'];
			$isi_pesan = $_POST['isi_pesan'];
			$nama = $this->m_login->cek_nama();
			if ($_FILES["file"]["name"]!=null) {
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
			}else{
			 	$file="";
			}
	        

	        $id_conversation = $this->m_inbox->getConversation();
			$a=(int)$id_conversation[0]['id_conversation'];
			$b= $a+1;

			$id_pesan = $this->m_inbox->getPesan();
			$c=(int)$id_pesan[0]['id_pesan'];
			$d= $c+1;
	        
	        $data_insert = array(
	        		'id_conversation' => $b,
					'id_pesan' => $d,
					'nipp_penerima' => $nipp,
					'nipp_pengirim' => $this->session->userdata('nipp'),
					'subjek' => $subjek,
					'isi_pesan' => $isi_pesan,
					'nama_pengirim' => $nama,
					'file' => $file,
					'read_pesan' => '0'
				);
			$this->upload->data('userfile');
			
	        $this->m_inbox->InsertData('pesan',$data_insert);
	        redirect('Inbox');

        } 
	}

	public function balasPesan($id_inbox){

		if($this->session->userdata('status') != "login"){
			redirect(base_url("Login"));
		}else{
			$nipp = $_POST['nipp_penerima'];
			$subjek = $_POST['subjek'];
			$isi_pesan = $_POST['isi_pesan'];
			$nama = $this->m_login->cek_nama();
			if ($_FILES["file"]["name"]!=null) {
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

	        }else{
			 	$file="";
			}


			$id_conversation = $this->m_inbox->getConversationID($id_inbox);
			$a=(int)$id_conversation[0]['id_conversation'];

			$id_pesan = $this->m_inbox->getPesan();
			$c=(int)$id_pesan[0]['id_pesan'];
			$d= $c+1;

	        // $id_conv2 = $this->m_inbox->getConversationItem($id_conv);
	        $data_insert = array(
	        		'id_conversation' => $a,
					'id_pesan' => $d,
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

	public function gantiKeterangan($id_conversation)
	{
		if($this->session->userdata('status') != "login"){
			redirect(base_url("Login"));
		}else{
			$this->m_inbox->updateKeterangan($id_conversation);
			redirect('Inbox');
		}
	}



}
?>