<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perusahaan extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        /*
        $check_auth_client = $this->MyModel->check_auth_client();
		if($check_auth_client != true){
			die($this->output->get_output());
		}
		*/
    }

	public function index()
	{
		$method = $_SERVER['REQUEST_METHOD'];
		if($method != 'GET'){
			json_output(400,array('status' => 400,'message' => 'Bad request.'));
		} else {
			$check_auth_client = $this->MyModel->check_auth_client();
			if($check_auth_client == true){
		        $response = $this->MyModel->auth();
		        if($response['status'] == 200){
		        	$resp = $this->Model_perusahaan->perusahaan_all();
							json_output(200,array(
								'code' => 200,
								'Message' => 'Get Data Sukses',
								'Perusahaan'=> $resp));
		        }
			}
		}
	}
	public function perusahaan_all()
	{
		$method = $_SERVER['REQUEST_METHOD'];
		if($method != 'GET'){
			json_output(400,array('status' => 400,'message' => 'Bad request.'));
		} else {
			$check_auth_client = $this->MyModel->check_auth_client();
			if($check_auth_client == true){
		        $response = $this->MyModel->auth();
		        if($response['status'] == 200){
		        	$resp = $this->Model_perusahaan->perusahaan_all();
							json_output(200,array(
								'code' => 200,
								'Message' => 'Get Data Sukses',
								'Perusahaan'=> $resp));
		        }
			}
		}
	}

  //http://localhost/SISdisnaker/index.php/perusahaan/create(bentuk json{})
	public function create()
	{
		$method = $_SERVER['REQUEST_METHOD'];
		if($method != 'POST'){
			json_output(400,array('status' => 400,'message' => 'Bad request.'));
		} else {
			$check_auth_client = $this->MyModel->check_auth_client();
			if($check_auth_client == true){
		        $response = $this->MyModel->auth();
		        $respStatus = $response['status'];
		     if($respStatus == 200){
					$params = json_decode(file_get_contents('php://input'),TRUE);
					$params['date_answer'] = date('Y-m-d');
					if ($params['nama_perusahaan'] == "" || $params['alamat_perusahaan'] == "") {
						$respStatus = 400;
						$resp = array('status' => 400,'message' =>  'Data can\'t empty');
					} else {
		        		$resp = $this->Model_perusahaan->perusahaan_create_data($params);
					}
					json_output($respStatus,$resp);
		        }
			}
		}
	}
  //http://localhost/SISdisnaker/index.php/perusahaan/update/:id
	public function update($id)
	{
		$method = $_SERVER['REQUEST_METHOD'];
		if($method != 'PUT' || $this->uri->segment(3) == '' || is_numeric($this->uri->segment(3)) == FALSE){
			json_output(400,array('status' => 400,'message' => 'Bad request.'));
		} else {
			$check_auth_client = $this->MyModel->check_auth_client();
			if($check_auth_client == true){
		        $response = $this->MyModel->auth();
		        $respStatus = $response['status'];
		        if($response['status'] == 200){
					$params = json_decode(file_get_contents('php://input'), TRUE);
					//$params['updated_at'] = date('Y-m-d H:i:s');
					if ($params['nama_perusahaan'] == "" || $params['alamat_perusahaan'] == "") {
						$respStatus = 400;
						$resp = array('status' => 400,'message' =>  'Title & Address can\'t empty');
					} else {
		        		$resp = $this->Model_perusahaan->perusahaan_update_data($id,$params);
					}
					json_output($respStatus,$resp);
		        }
			}
		}
	}

	public function delete($id)
	{
		$method = $_SERVER['REQUEST_METHOD'];
		if($method != 'DELETE' || $this->uri->segment(3) == '' || is_numeric($this->uri->segment(3)) == FALSE){
			json_output(400,array('status' => 400,'message' => 'Bad request.'));
		} else {
			$check_auth_client = $this->MyModel->check_auth_client();
			if($check_auth_client == true){
		        $response = $this->MyModel->auth();
		        if($response['status'] == 200){
		        	$resp = $this->Model_perusahaan->perusahaan_delete_data($id);
					json_output($response['status'],$resp);
		        }
			}
		}
	}
	public function filter_answer(){
		$method = $_SERVER['REQUEST_METHOD'];
		if($method != 'GET'){
			json_output(400,array('status' => 400,'message' => 'Bad request.'));
		} else {
			$check_auth_client = $this->MyModel->check_auth_client();
			if($check_auth_client == true){
						$response = $this->MyModel->auth();
						if($response['status'] == 200){
							$resp = $this->Model_perusahaan->filter_answer();
						json_output($response['status'],$resp);
						}
			}
		}

	}
	public function filter_answer_monthly(){
		$method = $_SERVER['REQUEST_METHOD'];
		if($method != 'GET'){
			json_output(400,array('status' => 400,'message' => 'Bad request.'));
		} else {
			$check_auth_client = $this->MyModel->check_auth_client();
			if($check_auth_client == true){
		        $response = $this->MyModel->auth();
		        if($response['status'] == 200){
		        	$resp = $this->Model_perusahaan->filter_answer_monthly();
	    			json_output($response['status'],$resp);
		        }
			}
		}

	}
	public function filter_answer_yearly(){
		$method = $_SERVER['REQUEST_METHOD'];
		if($method != 'GET'){
			json_output(400,array('status' => 400,'message' => 'Bad request.'));
		} else {
			$check_auth_client = $this->MyModel->check_auth_client();
			if($check_auth_client == true){
		        $response = $this->MyModel->auth();
		        if($response['status'] == 200){
		        	$resp = $this->Model_perusahaan->filter_answer_yearly();
	    			json_output($response['status'],$resp);
		        }
			}
		}

	}
	public function total_answer_year($year){
		$method = $_SERVER['REQUEST_METHOD'];
		if($method != 'GET'){
			json_output(400,array('status' => 400,'message' => 'Bad request.'));
		} else {
			$check_auth_client = $this->MyModel->check_auth_client();
			if($check_auth_client == true){
		        $response = $this->MyModel->auth();
		        if($response['status'] == 200){
		        	$resp = count($this->Model_perusahaan->total_answer_year($year));
	    			json_output($response['status'],$resp);
		        }
			}
		}

	}

	public function total_answer(){
		$method = $_SERVER['REQUEST_METHOD'];
		if($method != 'GET'){
			json_output(400,array('status' => 400,'message' => 'Bad request.'));
		} else {
			$check_auth_client = $this->MyModel->check_auth_client();
			if($check_auth_client == true){
		        $response = $this->MyModel->auth();
		        if($response['status'] == 200){
					$range_year = $this->Model_perusahaan->distinct_year();
					$min_max_year = $this->Model_perusahaan->min_max_date();
					foreach($range_year as $tahun){
						unset($total_month_data);	
						$total_year_data = $this->Model_perusahaan->total_answer_query($tahun->Tahun,'');
						$range_month = $this->Model_perusahaan->distinct_month($tahun->Tahun);
						foreach($range_month as $bulan){
							$monthly = $this->Model_perusahaan->total_answer_query($tahun->Tahun,$bulan->Month);
							$total_month_data[] = array(
								'month'=> $bulan->Month_string,
								'total_perusahaan'=>(int) $monthly->total_perusahaan,
								'total_ump_status'=>(int)$monthly->total_ump_status,
								'total_umsp_status'=>(int)$monthly->total_umsp_status,
								'total_ss_upah_status'=>(int)$monthly->total_ss_upah_status,
								'total_bpjs_ktng_status'=>(int)$monthly->total_bpjs_ktng_status,
								'total_bpjs_khs_status'=>(int)$monthly->total_bpjs_khs_status,
								'total_jamsos_hub_luar_status'=>(int)$monthly->total_jamsos_hub_luar_status);
						
						}
						$array_per_tahun[]=array(
							'year'=>$tahun->Tahun,
							'total_perusahaan'=>(int)$total_year_data->total_perusahaan,
							'total_ump_status'=>(int)$total_year_data->total_ump_status,
							'total_umsp_status'=>(int)$total_year_data->total_umsp_status,
							'total_ss_upah_status'=>(int)$total_year_data->total_ss_upah_status,
							'total_bpjs_ktng_status'=>(int)$total_year_data->total_bpjs_ktng_status,
							'total_bpjs_khs_status'=>(int)$total_year_data->total_bpjs_khs_status,
							'total_jamsos_hub_luar_status'=>(int)$total_year_data->total_jamsos_hub_luar_status,
							'perbulan'=>$total_month_data
						);

					}
					$total_data = $this->Model_perusahaan->total_answer_query('','');
					$resp=array(
						'total_data' => $total_data,
						'data_per_year'=>$array_per_tahun);
	    			json_output($response['status'],$resp);
		        }
			}
		}

	}

	public function list_perusahaan_mediator($NRK){
		$method = $_SERVER['REQUEST_METHOD'];
		if($method != 'GET'){
			json_output(400,array('status' => 400,'message' => 'Bad request.'));
		} else {
			$check_auth_client = $this->MyModel->check_auth_client();
			if($check_auth_client == true){
		        $response = $this->MyModel->auth();
		        if($response['status'] == 200){
		        	$resp = $this->Model_perusahaan->list_perusahaan_mediator($NRK);
	    			json_output(200,array(
							'code' => 200,
							'Message' => 'Get Data Sukses',
							'Perusahaan'=> $resp));
		        }
			}
		}

	}

	public function search_perusahaan($kata){
		$method = $_SERVER['REQUEST_METHOD'];
		if($method != 'GET'){
			json_output(400,array('status' => 400,'message' => 'Bad request.'));
		} else {
			$check_auth_client = $this->MyModel->check_auth_client();
			if($check_auth_client == true){
		        $response = $this->MyModel->auth();
		        if($response['status'] == 200){
		        	$resp = $this->Model_perusahaan->search_perusahaan($kata);
							json_output(200,array(
								'code' => 200,
								'Message' => 'Get Data Sukses',
								'Perusahaan'=> $resp));
		        }
			}
		}
	}

	public function select_user(){
		print_r(count($this->MyModel->select_user()));
	}

}
