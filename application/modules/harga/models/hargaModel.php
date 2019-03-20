<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class hargaModel extends CI_Model {

	
	function get_sampel(){
        $result=$this->db->get('sampel');
        return $result;
    }
    function get_parameter(){
      	$result=$this->db->get('parameter');
      	return $result;
  	}
  	
	
	function get_all_harga() {
      	$this->datatables->select('harga.id as id,parameter.nama as namaparameter,sampel.nama as namasampel,harga.harga as harga,harga.status as status');
      	$this->datatables->from('harga');
        $this->datatables->join('parameter','harga.parameterId = parameter.id');
        $this->datatables->join('sampel','harga.sampelId = sampel.id');
      	$this->datatables->add_column(
      		'view', 
      		
      		'<a href="javascript:void(0);" title="Details" class="detail_record label label-default" data-idaja="$1" data-namaparameteraja="$2" data-namasampelaja="$3" data-hargaaja="$4" data-statusaja="$5">
            <i class="fa fa-eye" style="color: #777777">
            </i>
          </a>
          &nbsp;
          <a href="javascript:void(0);" title="Edit" class="edit_record label label-default" data-idaja="$1" data-namaparameteraja="$2" data-namasampelaja="$3" data-hargaaja="$4" data-statusaja="$5">
      			<i class="fa fa-pencil" style="color: #777777">
      			</i>
      		</a>
      		&nbsp;
      		<a href="javascript:void(0);" title="Hapus" class="delete_record label label-default" data-idaja="$1" data-namaparameteraja="$2" data-namasampelaja="$3">
      			<i class="fa fa-trash-o" style="color: #777777">
      			</i>
      		</a>',

      		'id,namaparameter,namasampel,harga,status');
      	return $this->datatables->generate();
 	 }

  	//insert data method
  	function insert_harga(){
      	$data=array(
          'parameterId'  => $this->input->post('input_nama_parameter'),
          'sampelId'  => $this->input->post('input_sampel_id'),
          'harga'  => $this->input->post('input_harga'),
        	'status'	=> $this->input->post('input_status'),
      	);
      	$result=$this->db->insert('harga', $data);
      	return $result;
  	}

  	//update data method
  	function update_harga(){
      	$id=$this->input->post('edit_id');
        $data=array(
          'harga'  => $this->input->post('edit_harga'),
          'status'  => $this->input->post('edit_status')
        );
        $this->db->where('id',$id);
        $result=$this->db->update('harga', $data);
        return $result;
  	}

  	//delete data method
  	function delete_harga(){
      	$id=$this->input->post('id');
      	$this->db->where('id',$id);
     	$result=$this->db->delete('harga');
      	return $result;
	}
}
