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
			redirect(base_url('Home'));
		}
		//$this->load->view('Login');
	}

	function aksi_login(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$where = array(
			'email' => $email,
			'password' => $password
			);
		$cek = $this->m_login->cek_login("user",$where)->num_rows();
		if($cek > 0){

			$data_session = array(
				'nama' => $email,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);

			redirect(base_url('Home'));

		}else{
			$this->load->view('Login');
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}