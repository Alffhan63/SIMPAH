<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Perusahaan extends CI_Model {


    public function perusahaan_all(){
      $this->db->select('u.name,p.*');
      $this->db->from('perusahaan as p');
      $this->db->join('user as u','u.NRK = p.nrk','inner');
      $this->db->order_by('nama_perusahaan', 'asc');
     // $this->db->limit( $amount, $start_from * $amount );
      
      return $this->db->get()->result();
    }
    public function perusahaan_create_data($data)
    {
      
        $this->db->insert('perusahaan',$data);
        return array('status' => 200,'message' => 'Data has been created.');
    }
    public function perusahaan_update_data($id,$data)
    {
        $this->db->where('id_perusahaan',$id)->update('perusahaan',$data);
        return array('status' => 200,'message' => 'Data has been updated.');
    }
    public function perusahaan_delete_data($id)
    {
        $this->db->where('id_perusahaan',$id)->delete('perusahaan');
        return array('status' => 200,'message' => 'Data has been deleted.');
    }

    public function filter_answer(){
      //$query_filter = mysql_query("SELECT * FROM `perusahaan` WHERE MONTH(date_answer) = 5");
      return $this->db->select('*')->from('perusahaan')->order_by('id_perusahaan')->get()->result();
      //return $query_filter;
    }
    public function filter_answer_monthly(){
      //$query_filter = mysql_query("SELECT * FROM `perusahaan` WHERE MONTH(date_answer) = 5");
      return $this->db->select('*')->from('perusahaan')->where("DATE_FORMAT(date_answer,'%Y-%m')",2018,5)->order_by('id_perusahaan')->get()->result();
      //return $query_filter;
    }
    public function filter_answer_yearly(){
      //$query_filter = mysql_query("SELECT * FROM `perusahaan` WHERE MONTH(date_answer) = 5");
      return $this->db->select('*')->from('perusahaan')->where("DATE_FORMAT(date_answer,'%Y')", 2018)->order_by('id_perusahaan')->get()->result();
      //return $query_filter;
    }

      public function distinct_year(){
        $this->db->select('DISTINCT(year(date_answer)) as Tahun');
        $this->db->from('perusahaan');
        $this->db->order_by('Tahun');
        return $this->db->get()->result();
      }
      public function distinct_month($year){
        $this->db->select("DISTINCT(DATE_FORMAT(date_answer,'%m')) as Month , DATE_FORMAT(date_answer,'%M') as Month_string");
        $this->db->from('perusahaan');
        $this->db->order_by('Month');
        $this->db->where('year(date_answer)',$year);
        return $this->db->get()->result();
      }
      public function min_max_date(){
        $this->db->select('min(year(date_answer)) as min_tahun,max(year(date_answer)) as max_tahun');
        $this->db->from('perusahaan');
        return $this->db->get()->row();
      }

      public function total_answer_query($year,$month){
        $this->db->select("count(*) as total_perusahaan,
        IFNULL(SUM(if(ump_status = '1', 1, 0)),0)  as total_ump_status,
        IFNULL(SUM(if(umsp_status = '1', 1, 0)),0)  as total_umsp_status,
        IFNULL(SUM(if(ss_upah_status = '1', 1, 0)),0)  as total_ss_upah_status,
        IFNULL(SUM(if(bpjs_ktng_status = '1', 1, 0)),0)  as total_bpjs_ktng_status,
        IFNULL(SUM(if(bpjs_khs_status = '1', 1, 0)),0)  as total_bpjs_khs_status,
        IFNULL(SUM(if(jamsos_hub_luar_status = '1', 1, 0)),0)  as total_jamsos_hub_luar_status");
        $this->db->from('perusahaan');
        
        if ($year == '' & $month == '') {
          return $this->db->get()->row();
        }elseif ($month == '') {
          $this->db->where('year(date_answer)',$year);
          return $this->db->get()->row();
        }else{
          $this->db->where('year(date_answer)',$year);
          $this->db->where('month(date_answer)',$month);
          return $this->db->get()->row();
        }
      }




    public function total_perusahaan($year,$month){
      if ($year == '' & $month == '') {
        $this->db->select('*');
        $query=$this->db->get('perusahaan');
        return $query->result();
      }elseif ($month == '') {
        $this->db->select('*');
        $this->db->where("DATE_FORMAT(date_answer,'%Y')",$year);
        $query=$this->db->get('perusahaan');
        return $query->result();
      }else {
        $this->db->select('*');
        $this->db->where("DATE_FORMAT(date_answer,'%Y')",$year);
        $this->db->where("DATE_FORMAT(date_answer,'%m')",$month);
        $query=$this->db->get('perusahaan');
        return $query->result();
      }

    }

    public function list_perusahaan_mediator($NRK){
      $this->db->select('u.name,p.*');
      $this->db->from('perusahaan as p');
      $this->db->join('user as u','u.NRK = p.nrk','inner');
      $this->db->where('p.nrk',  $NRK);
      $this->db->order_by('date_answer', 'desc');
      return $this->db->get()->result();  

    }


    public function count_ump_status(){
      $this->db->select('ump_status');
      $this->db->where('ump_status',1);
      $query = $this->db->get('perusahaan');
      return $query;
    }

    public function search_perusahaan($kata){
      $this->db->like('nama_perusahaan',$kata);
      $query = $this->db->get('perusahaan');
      return $query->result();
    }


}
