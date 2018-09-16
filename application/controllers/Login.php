<?php 

class Login extends CI_Controller{

	function __construct(){
		parent::__construct();	
		$this->load->library('session');	
		$this->load->model('m_login');

	}

	function index(){
		$data['err_message'] = "";
		if($this->session->userdata('status') != "login"){
			$this->load->view('Login');
		}else{ 			
			$this->load->view('Home');
		}
		
	}

	function aksi_login(){
		$nipp = $this->input->post('nipp');
		$password = $this->input->post('password');
		$where = array(
			'nipp' => $nipp,
			'password' => $password
			);
				
		$cek = $this->m_login->cek_login("user",$where)->num_rows();
		
		if($cek > 0){
			$data_session = array(
				
				'nipp' => $nipp,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);

			$date = $this->m_login->getLoginDate();
			$dulu = $date[0]['tanggal'];
			$skrg = DATE('Y-m-d');

			if($dulu != $skrg)
			{
				$this->m_login->set_counter();
			}else{}

			redirect(base_url('Home'));


		}else{
			$this->session->set_flashdata('message', 'Oops! Try again.');
			redirect('Login');
		}
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}