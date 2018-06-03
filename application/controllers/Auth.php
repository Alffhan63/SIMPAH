<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function login()
	{
		$method = $_SERVER['REQUEST_METHOD'];

		if($method != 'POST'){
			json_output(400,array('status' => 400,'message' => 'Bad request.'));
		} else {

			$check_auth_client = $this->MyModel->check_auth_client();

			if($check_auth_client == true){
				// $params = $_REQUEST;
				//
		    //     $NRK = $params['NRK'];
		    //     $password = $params['password'];
				$params = json_decode(file_get_contents('php://input'),TRUE);
				// $NRK = $this->input->post('NRK');
       			// $password = $this->input->post('password');
				if ($params['NRK'] == "" || $params['password'] == "") {
					$respStatus = 400;
					$response = array('status' => 400,'message' =>  'Input can\'t empty');
				} else {
					$response = $this->MyModel->login($params['NRK'],$params['password']);
				}
				// if ($NRK == '' || $password == '') {
				// 	$respStatus = 400;
				// 	$response = array('status' => 400,'message' =>  'Input can\'t empty');
				// }else {
				// 	$response = $this->MyModel->login($NRK,$password);
				// }


		        //$response = $this->MyModel->login($NRK,$password);
				//print_r($response);
				json_output($response['status'],$response);
			}
		}
	}

	public function logout()
	{
		$method = $_SERVER['REQUEST_METHOD'];
		if($method != 'POST'){
			json_output(400,array('status' => 400,'message' => 'Bad request.'));
		} else {
			$check_auth_client = $this->MyModel->check_auth_client();
			if($check_auth_client == true){
		        $response = $this->MyModel->logout();
				json_output($response['status'],$response);
			}
		}
	}
	public function authenticate(){
		$method = $_SERVER['REQUEST_METHOD'];
		if($method != 'POST'){
			json_output(400,array('status' => 400,'message' => 'Bad request.'));
		}else {
			$check_auth_client = $this->MyModel->check_auth_client();
			if($check_auth_client == true){
				$check_auth = $this->MyModel->authenticate();
				//echo $check_auth['status'];
				json_output($check_auth['status'],$check_auth);
			}
		}
	}

	public function hashing(){
		$hashing = crypt("media");
		echo $hashing;
	}

}
