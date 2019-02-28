<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class parameterModel extends CI_Model {

	
	function get_parameter(){
      	$result=$this->db->get('parameter');
      	return $result;
  	}
  	
	
	function get_all_parameter() {
      	$this->datatables->select('parameter.id as id,parameter.labId as labId,parameter.nama as namaparameter,parameter.status as status,parameter.alasan as alasan,lab.nama as namalab');
      	$this->datatables->from('parameter');
        $this->datatables->join('lab','parameter.labId = lab.id');
      	$this->datatables->add_column(
      		'view', 
      		
      		'<a href="javascript:void(0);" class="detail_record label label-default" data-idaja="$1" data-labaja="$2" data-namaaja="$3" data-statusaja="$4" data-alasanaja="$5" data-namalabaja="6">
            <i class="fa fa-eye" style="color: #777777">
            </i>
          </a>

          <a href="javascript:void(0);" class="edit_record label label-default" data-idaja="$1" data-labaja="$2" data-namaaja="$3" data-statusaja="$4" data-alasanaja="$5" data-namalabaja="6">
      			<i class="fa fa-pencil" style="color: #777777">
      			</i>
      		</a>
      		
      		<a href="javascript:void(0);" class="delete_record label label-default" data-idaja="$1">
      			<i class="fa fa-trash-o" style="color: #777777">
      			</i>
      		</a>',

      		'id,labId,namaparameter,status,alasan,namalab');
      	return $this->datatables->generate();
 	 }

  	//insert data method
  	function insert_parameter(){
      	$data=array(
        	'labId'	=> $this->input->post('input_lab'),
          'nama'  => $this->input->post('input_nama'),
          'status'  => $this->input->post('input_status'),
        	'alasan'	=> $this->input->post('input_alasan'),
      	);
      	$result=$this->db->insert('parameter', $data);
      	return $result;
  	}

  	//update data method
  	function update_parameter(){
      	$id=$this->input->post('edit_id');
      	$data=array( 
          'labId'  => $this->input->post('edit_lab'),
          'nama'  => $this->input->post('edit_nama'),
          'status'  => $this->input->post('edit_status'),
          'alasan'  => $this->input->post('edit_alasan'),

      	);
      	$this->db->where('id',$id);
      	$result=$this->db->update('parameter', $data);
      	return $result;
  	}

  	//delete data method
  	function delete_parameter(){
      	$id=$this->input->post('id');
      	$this->db->where('id',$id);
     	$result=$this->db->delete('parameter');
      	return $result;
	}
}
