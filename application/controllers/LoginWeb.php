<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginWeb extends CI_Controller {
		public function __construct(){
	    parent::__construct();
	    $this->load->model('Model_Web');
		}


	public function index()
	{
		if ($this->session->userdata('logged_in'))
			{
			redirect('Admin/dashboard','refresh');
			}else{
			$this->load->helper(array('form'));
			$this->load->view('Templates/Header');
			$this->load->view('Main/Login');
			$this->load->view('Templates/Footer');
      print_r($this->session->userdata('logged_in'));
			}

	}
	public function login_check(){
		// if($this->input->post('NRK',true)== "" && $this->input->post('password',true)==""){
		// 	redirect('', 'refresh');
		// }
		$NRK = $this->input->post('NRK',true);
		$password = $this->input->post('password',true);
		$this->Model_Web->login_check($NRK,$password);
		}


  		// public function logout(){
      //   $this->session->sess_destroy();
      //   //$this->session->unset_userdata(1525888339);
      //     // $test = array('NRK','logged_in');
  		// 		// $this->session->unset_userdata($test);
  		// 		redirect('LoginWeb');
  		// }
		public function logout(){
			$this->session->unset_userdata('logged_in');
			redirect('LoginWeb','refresh');
		}







  	}
