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

		$namaFile = $_FILES['file']['name'];
		$namaSementara = $_FILES['file']['tmp_name'];
		$dirUpload = ".assets/uploaded_files/";
		if (isset($_POST['pesan'])){
			$file = $dirUpload.basename($namaFile);
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
				if(is_uploaded_file($namaSementara)){
					// $destination_path = getcwd().DIRECTORY_SEPARATOR;
					// $target_path = $destination_path . basename( $_FILES["file"]["name"]);
					move_uploaded_file($namaSementara,$file); // lek pengen gae fungsi sing atas, $file gantien dadi $target_path ; //
					$this->m_inbox->kirimPesan($data_insert);
					$data['err_message'] = "Message Sent!";
					redirect("Inbox",$data);
				} else{
					$this->m_inbox->kirimPesan($data_insert);
					$data['err_message'] = "Message Sent!";
					redirect("Inbox",$data);
				}
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
			
				// $this->load->helper('form');
				// $this->load->library('form_validation');
				// $this->load->library('upload');

				// $is_submit = $this->input->post('is_submit');

				// if(isset($is_submit) && $is_submit == 1){

				// 	$fileUpload = array();
				// 	$isUpload = FALSE;

				// 	$config = array(
				// 	'upload_path' => '.assets/uploaded_files/',
				// 	'allowed_types' => 'jpg|jpeg|png',
				// 	'max_size' => 20000
				// );

				// $this->upload->initialize($config);

				// if($this->upload->do_upload('file')){

				// 	$fileUpload = $this->upload->data();
				// 	$isUpload = TRUE;

				// }
				// if($isUpload){
				// 	$data_insert =array(
				// 		'id_pesan' => '',
				// 		'nipp_penerima ' => $this->input->post('nipp_penerima'),
				// 		'nipp_pengirim' => $this->session->userdata('nipp'),
				// 		'subjek' => $this->input->post('subjek'),
				// 		'isi_pesan' => $this->input->post('isi_pesan'),
				// 		'nama' =>$this->m_login->cek_nama(),
				// 		'read_pesan' => '0',
				// 		'file' => $fileUpload['file_name']
				// 	);
				// 	$this->m_inbox->kirimPesan($data_insert);
				// 	$this->load->view('Inbox');
				// }
				// }else{
				// redirect('Home');
				// }
				
            
	
	public function balasPesan(){
		//$data['data'] = $this->m_inbox->getDataInboxItem($id_pesan);
		$nipp = $this->input->post('nipp_penerima');
		$subjek = 'Balasan untuk '.$_POST['subjek'];
		$isi_pesan = $_POST['isi_pesan'];
		$nama = $this->m_login->cek_nama();
		$data_insert = array(
			'id_pesan' => '',
			'nipp_penerima' => $nipp,
			'nipp_pengirim' => $this->session->userdata('nipp'),
			'subjek' => $subjek,
			'isi_pesan' => $isi_pesan,
			'nama_pengirim' => $nama,
			'read_pesan' => '0'
		);
		$this->m_inbox->kirimPesan($data_insert);
		$data['err_message'] = "Message Sent!";
		redirect("Inbox",$data);
	}
}
?>