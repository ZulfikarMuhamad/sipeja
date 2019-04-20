<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class alatModel extends CI_Model {

	
	function get_alat(){
        $result=$this->db->get('alat');
        return $result;
		}

	function get_lab(){
			$result=$this->db->get('lab');
			return $result;
	}

	function get_parameter(){
		$result=$this->db->get('parameter');
		return $result;
}

function get_parameterById($labId){
	$this->db->where('labId', $labId);
	$this->db->order_by('nama', 'ASC');
	$query = $this->db->get('parameter');
	//$output = '<option value="">Pilih Seksie</option>';
	foreach($query->result() as $row){
		$output .= '<option value="'.$row->id.'">'.$row->nama.'</option>';
	}
	return $output;
}
  	
	
	function get_all_alat() {
      	$this->datatables->select('alat.id as id,alat.kode as kode, alat.nama as namaalat, parameter.nama as namaparameter,lab.nama as namalab,alat.kondisi as kondisi, alat.labId as labId, alat.parameterId as parameterId');
      	$this->datatables->from('alat');
        $this->datatables->join('parameter','alat.parameterId = parameter.id');
        $this->datatables->join('lab','alat.labId = lab.id');
      	$this->datatables->add_column(
      		'view', 
      		
      		'<a href="javascript:void(0);" title="Details" class="detail_record label label-default" data-idaja="$1" data-kodeaja="$2" data-namaalataja="$3" data-namaparameteraja="$4" data-namalabaja="$5" data-kondisiaja="$6" data-labIdaja="$7" data-parameterIdaja="$8">
            <i class="fa fa-eye" style="color: #777777">
            </i>
          </a>
          &nbsp;
          <a href="javascript:void(0);" title="Edit" class="edit_record label label-default" data-idaja="$1" data-kodeaja="$2" data-namaalataja="$3" data-namaparameteraja="$4" data-namalabaja="$5" data-kondisiaja="$6" data-labIdaja="$7" data-parameterIdaja="$8">
      			<i class="fa fa-pencil" style="color: #777777">
      			</i>
      		</a>
      		&nbsp;
      		<a href="javascript:void(0);" title="Hapus" class="delete_record label label-default" data-idaja="$1">
      			<i class="fa fa-trash-o" style="color: #777777">
      			</i>
      		</a>',

      		'id,kode,namaalat,namaparameter,namalab,kondisi,labId,parameterId');
      	return $this->datatables->generate();
 	 }

  	//insert data method
  	function insert_alat(){
      	$data=array(
            'kode'  => $this->input->post('input_kode'),
            'nama'  => $this->input->post('input_nama'),
            'labId'  => $this->input->post('input_lab'),
            'parameterId'  => $this->input->post('input_parameter'),
            'kondisi'	=> $this->input->post('input_kondisi'),
      	);
      	$result=$this->db->insert('alat', $data);
      	return $result;
  	}

  	//update data method
  	function update_alat(){
      	$id=$this->input->post('edit_id');
        $data=array(
            'kode'  => $this->input->post('edit_kode'),
						'nama'  => $this->input->post('edit_nama'),
            'labId'  => $this->input->post('edit_lab'),
            'parameterId'  => $this->input->post('edit_parameter'),
            'kondisi'	=> $this->input->post('edit_kondisi')
        );
        $this->db->where('id',$id);
        $result=$this->db->update('alat', $data);
        return $result;
  	}

  	//delete data method
  	function delete_alat(){
      	$id=$this->input->post('id');
      	$this->db->where('id',$id);
     	$result=$this->db->delete('alat');
      	return $result;
	}
}
