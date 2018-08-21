<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('home_model');
//                if($this->session->userdata('username') != 'admin'){
//                    redirect(My_Controller/login);
//                }
                
	}

    public function index () {
      //  $this ->load->view('Header');
    	$data['err_message'] = "";
		$data['data1'] = $this->home_model->getDataExpert();
		$data['data2'] = $this->home_model->getDataPengetahuan();
		$this->load->view('Home', $data);
        //IKI HOME!!!
    }
}
