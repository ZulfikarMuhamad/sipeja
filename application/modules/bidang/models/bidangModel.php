<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class bidangModel extends CI_Model {

	/*
	function get_metode(){
      	$result=$this->db->get('metode');
      	return $result;
  }
  */
	
	function get_all_bidang() {
      	$this->datatables->select('id,nama,kode,status,alasan');
      	$this->datatables->from('bidang');
      	$this->datatables->add_column(
      		'view', 
      		
      		'<a href="javascript:void(0);" title="Details" class="detail_record label label-default" data-idaja="$1" data-namaaja="$2" data-kodeaja="$3" data-statusaja="$4" data-alasanaja="$5">
            <i class="fa fa-eye" style="color: #777777">
            </i>
          </a>
          &nbsp;
          <a href="javascript:void(0);" title="Edit" class="edit_record label label-default" data-idaja="$1" data-namaaja="$2" data-kodeaja="$3" data-statusaja="$4" data-alasanaja="$5">
      			<i class="fa fa-pencil" style="color: #777777">
      			</i>
      		</a>
      		&nbsp;
      		<a href="javascript:void(0);" title="Hapus" class="delete_record label label-default" data-idaja="$1">
      			<i class="fa fa-trash-o" style="color: #777777">
      			</i>
      		</a>',

      		'id,nama,kode,status,alasan');
      	return $this->datatables->generate();
 	 }

  	//insert data method
  	function insert_bidang(){
        $now = date('Y-m-d H:i:s');
      	$data=array(
          'nama'  => $this->input->post('input_nama'),
          'kode'  => $this->input->post('input_kode'),
          'status'  => $this->input->post('input_status'),
        	'alasan'	=> $this->input->post('input_alasan'),
          'created_at'  => $now,
          'updated_at'  => $now,  
      	);
      	$result=$this->db->insert('bidang', $data);
      	return $result;
  	}

  	//update data method
  	function update_bidang(){
        $now = date('Y-m-d H:i:s');
      	$id=$this->input->post('edit_id');
        $data=array(
          'nama'  => $this->input->post('edit_nama'),
          'kode'  => $this->input->post('edit_kode'),
          'status'  => $this->input->post('edit_status'),
          'alasan'  => $this->input->post('edit_alasan'),
          'updated_at'  => $now
        );
        $this->db->where('id',$id);
        $result=$this->db->update('bidang', $data);
        return $result;
  	}

  	//delete data method
  	function delete_bidang(){
      	$id=$this->input->post('id');
      	$this->db->where('id',$id);
     	$result=$this->db->delete('bidang');
      	return $result;
	}
}
