<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class crud_laboratory_model extends CI_Model {

	
	function get_lab(){
      	$result=$this->db->get('lab');
      	return $result;
  	}
  	
	
	function get_all_laboratory() {
      	$this->datatables->select('seksieId,nama,kode');
      	$this->datatables->from('lab');
      	$this->datatables->add_column(
      		'view', 
      		
      		'<a href="javascript:void(0);" class="edit_record" data-seksieId="$1" data-nama="$2" data-kode="$3" >
      			<i class="fa fa-pencil" style="color: #777777">
      			</i>
      		</a>
      		
      		<a href="javascript:void(0);" class="delete_record" data-seksieId="$0">
      			<i class="fa fa-trash-o" style="color: #777777">
      			</i>
      		</a>',

      		'seksieId,nama,kode');
      	return $this->datatables->generate();
 	 }

  	//insert data method
  	function insert_laboratory(){
      	$data=array(
        	'seksieId'	=> $this->input->post('seksieId'),
        	'nama'	=> $this->input->post('nama'),
        	'kode'	=> $this->input->post('kode'),
      	);
      	$result=$this->db->insert('lab', $data);
      	return $result;
  	}

  	//update data method
  	function update_laboratory(){
      	$seksieId=$this->input->post('seksieId');
      	$data=array(
      		'seksieId'	=> $this->input->post('seksieId'),
        	'nama'	=> $this->input->post('nama'),
        	'kode'	=> $this->input->post('kode'),
      	);
      	$this->db->where('seksieId',$seksieId);
      	$result=$this->db->update('lab', $data);
      	return $result;
  	}

  	//delete data method
  	function delete_laboratory(){
      	$seksieId=$this->input->post('seksieId');
      	$this->db->where('seksieId',$seksieId);
     	$result=$this->db->delete('lab');
      	return $result;
	}
}
