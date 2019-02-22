<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class metodeModel extends CI_Model {

	
	function get_metode(){
      	$result=$this->db->get('metode');
      	return $result;
  	}
  	
	
	function get_all_metode() {
      	$this->datatables->select('id,nama,keterangan,status,alasan');
      	$this->datatables->from('metode');
      	$this->datatables->add_column(
      		'view', 
      		
      		'<a href="javascript:void(0);" class="edit_record" data-idaja="$1" data-namaaja="$2" data-keteranganaja="$3" data-statusaja="$4" data-alasanaja="$5">
      			<i class="fa fa-pencil" style="color: #777777">
      			</i>
      		</a>
      		
      		<a href="javascript:void(0);" class="delete_record" data-idaja="$1">
      			<i class="fa fa-trash-o" style="color: #777777">
      			</i>
      		</a>',

      		'id,nama,keterangan,status,alasan');
      	return $this->datatables->generate();
 	 }

  	//insert data method
  	function insert_metode(){
      	$data=array(
        	'labId'	=> $this->input->post('input_lab'),
          'nama'  => $this->input->post('input_nama'),
          'status'  => $this->input->post('input_status'),
        	'alasan'	=> $this->input->post('input_alasan'),
      	);
      	$result=$this->db->insert('metode', $data);
      	return $result;
  	}

  	//update data method
  	function update_metode(){
      	$id=$this->input->post('edit_id');
      	$data=array( 
          'nama'  => $this->input->post('edit_nama'),
          'keterangan'  => $this->input->post('edit_keterangan'),
          'status'  => $this->input->post('edit_status'),
          'alasan'  => $this->input->post('edit_alasan'),

      	);
      	$this->db->where('id',$id);
      	$result=$this->db->update('metode', $data);
      	return $result;
  	}

  	//delete data method
  	function delete_metode(){
      	$id=$this->input->post('id');
      	$this->db->where('id',$id);
     	$result=$this->db->delete('metode');
      	return $result;
	}
}
