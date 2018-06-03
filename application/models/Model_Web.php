<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Model_Web extends CI_Model{

function login_check($NRK,$password)
{

  // $this->db->where('NRK', $NRK);
  // $query = $this->db->get_where('user', array('NRK'=>$NRK))->row();
  $q  = $this->db->select('password,ID_USER')->from('User')->where('NRK',$NRK)->get()->row();
  $hashed_password = $q->password;
  //print_r($hashed_password);
  //$crypt_password = crypt($password, $hashed_password);
  //$cryp_pass = substr($crypt_password,0,7);
  //print_r(crypt($password, $hashed_password));
  if (hash_equals($hashed_password, crypt($password, $hashed_password)) && $NRK=='admin') {
    print_r(hash_equals($hashed_password, crypt($password, $hashed_password)));
    //print_r(crypt($password, $hashed_password));
    $sess_array = array();
    //$row = $query->row();
    $sess_array = array('username' => $q->NRK, 'logged_in' => true);
    $this->session->set_userdata($sess_array);
    $status = array('status' =>true);
  }
  redirect('Admin/dashboard');
}

public function register_mediator($data){
  return $this->db->insert('user',$data);
}
public function edit($id){
    $this->db->where('ID_USER',$id);
    return $this->db->get('user');
}
public function update($id,$data){
    $this->db->where('ID_USER',$id);
    $this->db->update('user', $data);
    return $this->db->affected_rows();
}
public function delete($id){
    $this->db->where('ID_USER',$id);
    return $this->db->delete('user');
}
public function get_mediator(){
    $sql = $this->db->query("select * from user");
    return $sql;
}
public function get_perusahaan(){
    $sql = $this->db->query("select * from perusahaan");
    return $sql;
}



}
