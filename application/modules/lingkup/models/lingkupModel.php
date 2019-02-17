<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class lingkupModel extends CI_Model {

	
	function get_lingkup(){
      	$result=$this->db->get('lingkup');
      	return $result;
  	}
  	
	
	function get_all_lingkup() {
      	$this->datatables->select('id,labId,nama,kode,status,alasan');
      	$this->datatables->from('lingkup');
      	$this->datatables->add_column(
      		'view', 
      		
      		'<a href="javascript:void(0);" class="edit_record" data-idaja="$1" data-labIdaja="$2" data-namaaja="$3" data-kodeaja="$4" data-statusaja="$5" data-alasanaja="$7">
      			<i class="fa fa-pencil" style="color: #777777">
      			</i>
      		</a>
      		
      		<a href="javascript:void(0);" class="delete_record" data-idaja="$1">
      			<i class="fa fa-trash-o" style="color: #777777">
      			</i>
      		</a>',

      		'id,labId,nama,kode,status,alasan');
      	return $this->datatables->generate();
 	 }

  	//insert data method
  	function insert_lingkup(){
      	$data=array(
          'labId'  => $this->input->post('input_lab'),
          'nama'  => $this->input->post('input_nama'),
        	'kode'	=> $this->input->post('input_kode'),
          'status'  => $this->input->post('input_status'),
        	'alasan'	=> $this->input->post('input_alasan'),
      	);
      	$result=$this->db->insert('lingkup', $data);
      	return $result;
  	}

  	//update data method
  	function update_lingkup(){
      	$id=$this->input->post('edit_id');
      	$data=array( 
          'labId'  => $this->input->post('edit_labId'),
          'nama'  => $this->input->post('edit_nama'),
          'kode'  => $this->input->post('edit_kode'),
          'status'  => $this->input->post('edit_status'),
          'alasan'  => $this->input->post('edit_alasan'),

      	);
      	$this->db->where('id',$id);
      	$result=$this->db->update('lingkup', $data);
      	return $result;
  	}

  	//delete data method
  	function delete_lingkup(){
      	$id=$this->input->post('id');
      	$this->db->where('id',$id);
     	$result=$this->db->delete('lingkup');
      	return $result;
	}
}
