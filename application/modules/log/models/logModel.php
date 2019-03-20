<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class logModel extends CI_Model {

	
	function get_log(){
      	$result=$this->db->get('log');
      	return $result;
  	}
  	
	
	function get_all_log() {
      	$this->datatables->select('id,userId,aktivitas,alasan,created_at');
      	$this->datatables->from('log');
      	return $this->datatables->generate();
 	 }

  	//insert data method
  	function insert_log(){
        $aktivitas = $this->input->post('input_aktivitas');
        $alasan = $this->input->post('input_alasan');
        $date = date('Y-m-d H:i:s');

      	$data=array(
          'userId'  => "001",
          'aktivitas'  => $aktivitas,
        	'alasan'	=> $alasan,
          'created_at' => $date
      	);
      	$result=$this->db->insert('log', $data);
      	return $result;
  	}

  	//update data method
  	function update_log(){
      	$id=$this->input->post('edit_id');
        $data=array(
          'nama'  => $this->input->post('edit_nama'),
          'keterangan'  => $this->input->post('edit_keterangan'),
          'status'  => $this->input->post('edit_status'),
          'alasan'  => $this->input->post('edit_alasan')
        );
        $this->db->where('id',$id);
        $result=$this->db->update('log', $data);
        return $result;
  	}

  	//delete data method
  	function delete_log(){
      	$id=$this->input->post('id');
      	$this->db->where('id',$id);
     	$result=$this->db->delete('log');
      	return $result;
	}
}
