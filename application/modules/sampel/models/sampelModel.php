<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class sampelModel extends CI_Model {

	
	function get_sampel(){
      	$result=$this->db->get('sampel');
      	return $result;
  	}
  	
	
	function get_all_sampel() {
      	$this->datatables->select('id,nama,status,spmjumlah,spmhari,kan,alasan');
      	$this->datatables->from('sampel');
      	$this->datatables->add_column(
      		'view', 
      		
      		'<a href="javascript:void(0);" title="Detail" class="detail_record label label-default" data-idaja="$1" data-namaaja="$2" data-statusaja="$3" data-spmjumlahaja="$4" data-spmhariaja="$5" data-kanaja="$6" data-alasanaja="$7">
            <i class="fa fa-eye" style="color: #777777">
            </i>
          </a>
          &nbsp;
          <a href="javascript:void(0);" title="Edit" class="edit_record label label-default" data-idaja="$1" data-namaaja="$2" data-statusaja="$3" data-spmjumlahaja="$4" data-spmhariaja="$5" data-kanaja="$6" data-alasanaja="$7">
      			<i class="fa fa-pencil" style="color: #777777">
      			</i>
      		</a>
      		&nbsp;
      		<a href="javascript:void(0);" title="Hapus" class="delete_record label label-default" data-idaja="$1">
      			<i class="fa fa-trash-o" style="color: #777777">
      			</i>
      		</a>',

      		'id,nama,status,spmjumlah,spmhari,kan,alasan');
      	return $this->datatables->generate();
 	 }

  	//insert data method
  	function insert_sampel(){
      	$data=array(
        	'nama'	=> $this->input->post('input_nama'),
          'status'  => $this->input->post('input_status'),
          'spmjumlah'  => $this->input->post('input_spmjumlah'),
          'spmhari'  => $this->input->post('input_spmhari'),
          'kan' => $this->input->post('input_kan'),
        	'alasan'	=> $this->input->post('input_alasan'),
      	);
      	$result=$this->db->insert('sampel', $data);
      	return $result;
  	}

  	//update data method
  	function update_sampel(){
      	$id=$this->input->post('edit_id');
      	$data=array( 
          'nama'  => $this->input->post('edit_nama'),
          'status'  => $this->input->post('edit_status'),
          'spmjumlah'  => $this->input->post('edit_spmjumlah'),
          'spmhari'  => $this->input->post('edit_spmhari'),
          'kan' => $this->input->post('edit_kan'),
          'alasan'  => $this->input->post('edit_alasan'),

      	);
      	$this->db->where('id',$id);
      	$result=$this->db->update('sampel', $data);
      	return $result;
  	}

  	//delete data method
  	function delete_sampel(){
      	$id=$this->input->post('id');
      	$this->db->where('id',$id);
     	$result=$this->db->delete('sampel');
      	return $result;
	}

  function get_active_sampel($where){
    $this->db->select('*');
    $this->db->from('sampel');
    $this->db->where($where);
    $result = $this->db->get();
    return $result;
  }
}
