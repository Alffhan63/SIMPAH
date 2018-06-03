<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
		public function __construct(){
	    parent::__construct();
			$this->load->library('session');
	    $this->load->model('Model_Web');
		}


		public function index()
		{


		}
		public function dashboard(){
			$this->load->library('session');
			//print_r($this->session->userdata('logged_in'));
			if ($this->session->userdata('logged_in')==true)
				{
					$this->load->view('Templates/HeaderDash');
					$this->load->view('Main/Dashboard');
					$this->load->view('Templates/FooterDash');
					//print_r($this->session->all_userdata('logged_in'));
					//$this->session->sess_destroy();
				}else{
					redirect('LoginWeb');
				}
			//print_r($this->session->all_userdata('logged_in'));
			}

			// public function register_mediator(){
			// 	$option=$this->input->post('option');
      //   $id=$this->input->post('id');
			// 	$role=$this->input->post('role');
      //   $NRK=$this->input->post('NRK');
      //   $nama_depan=$this->input->post('nama_depan');
      //   $nama_belakang=$this->input->post('nama_belakang');
			// 	$name= $nama_depan + '' + $nama_belakang;
      //   $password=$this->input->post('password');
			// 	$hash_password = crypt($password,'');
      //   $data=array(
      //   'NRK'=>$NRK,
      //   'name'=>$name,
      //   'password'=>$hash_password,
      //   'user_role'=>$role,
			// 	'created_at'=>date('Y-m-d H:i:s')
      //   );
      //   if ($option=='add'){
      //       $this->table_m->save($data);
      //           redirect('Main/view');
      //       }
      //    else{
      //       $this->table_m->update($id,$data);
      //           redirect('Main/tables');
      //       }
			// }




				public function halaman_register(){
					$this->load->library('session');
					//print_r($this->session->userdata('logged_in'));
					if ($this->session->userdata('logged_in')==true)
						{
							$data['option']='add';
							$this->load->view('Templates/HeaderDash');
							$this->load->view('Main/Register',$data);
							$this->load->view('Templates/FooterDash');
							//print_r($this->session->all_userdata('logged_in'));
							//$this->session->sess_destroy();
						}else{
							redirect('LoginWeb');
						}
				}
				public function register()
	    	{
	        // $option=$this->input->post('option');
	        $id=$this->input->post('id');
					$role=$this->input->post('role');
	        $nama_depan=$this->input->post('nama_depan');
	        $nama_belakang=$this->input->post('nama_belakang');
					$NRK=$this->input->post('NRK');
	        $name= "{$nama_depan} {$nama_belakang}";
	        $password_input=$this->input->post('password');
	        $password=crypt($password_input,'');
	        $data=array(
	        'NRK'=>$NRK,
	        'name'=>$name,
	        'password'=>$password,
	        'user_role'=>$role,
	        'created_at'=>date('Y-m-d H:i:s'),
	        );
	            $this->Model_Web->register_mediator($data);
	                redirect('Admin/tabel_mediator');

	        }

					public function edit(){
						// $option=$this->input->post('option');
		        $id=$this->input->post('id');
						$role=$this->input->post('role');
						$NRK=$this->input->post('NRK');
		        $name= $this->input->post('name');
		        $password_input=$this->input->post('password');
		        $password=crypt($password_input,'');
						$data=array(
		        'NRK'=>$NRK,
		        'name'=>$name,
		        'password'=>$password,
		        'user_role'=>$role,
		        'updated_at'=>date('Y-m-d H:i:s')
		        );
						$this->Model_Web->update($id,$data);
								redirect('Admin/tabel_mediator');
					}
					public function edit_mediator($id){
						if ($this->session->userdata('logged_in')==true)
							{
							$data['option']='edit';
							$data['sql'] = $this->Model_Web->edit($id);
							$this->load->view('Templates/HeaderDash');
							$this->load->view('Main/Edit',$data);
							$this->load->view('Templates/FooterDash');
						}else {
							redirect('LoginWeb');
						}
					}
					public function delete_mediator($id){
	        $data['sql'] = $this->Model_Web->delete($id);
	        redirect('Admin/Tabel_Mediator');
        }

					public function tabel_mediator(){
						$this->load->library('session');
						//print_r($this->session->userdata('logged_in'));
						if ($this->session->userdata('logged_in')==true)
							{
								$data['sql'] = $this->Model_Web->get_mediator();
								$this->load->view('Templates/HeaderDash');
								$this->load->view('Main/Table_Mediator',$data);
								$this->load->view('Templates/FooterDash');
								//print_r($this->session->all_userdata('logged_in'));
								//$this->session->sess_destroy();
							}else{
								redirect('LoginWeb');
							}
					}
					public function tabel_perusahaan(){
						$this->load->library('session');
						//print_r($this->session->userdata('logged_in'));
						if ($this->session->userdata('logged_in')==true)
							{
								$data['sql'] = $this->Model_Web->get_perusahaan();
								$this->load->view('Templates/HeaderDash');
								$this->load->view('Main/Table_Perusahaan',$data);
								$this->load->view('Templates/FooterDash');
								//print_r($this->session->all_userdata('logged_in'));
								//$this->session->sess_destroy();
							}else{
								redirect('LoginWeb');
							}
					}





	}
