<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class labModel extends CI_Model {

	function get_bidang(){
    $result=$this->db->get('bidang');
    return $result;
  }

  function get_seksie(){
    $result=$this->db->get('seksie');
    return $result;
  }
  
	
	function get_all_lab() {
    
    $this->datatables->select('lab.id AS laid,lab.seksieId,lab.nama AS lanama,lab.kode,lab.status,lab.alasan,seksie.id AS sid,seksie.nama AS snama');
    $this->datatables->from('lab');
    $this->datatables->join('seksie', 'lab.seksieId=seksie.id');
    $this->datatables->add_column(
      'view', 
      		
      '<a href="javascript:void(0);" title="Details" class="detail_record label label-default" data-liidaja="$1" data-labidaja="$2" data-linamaaja="$3" data-kodeaja="$4" data-statusaja="$5" data-alasanaja="$6" data-laidaja="$7" data-lanamaaja="$8">
        <i class="fa fa-eye" style="color: #777777">
        </i>
      </a>
      &nbsp;
      <a href="javascript:void(0);" title="Edit" class="edit_record label label-default" data-liidaja="$1" data-labidaja="$2" data-linamaaja="$3" data-kodeaja="$4" data-statusaja="$5" data-alasanaja="$6" data-laidaja="$7" data-lanamaaja="$8">
      	<i class="fa fa-pencil" style="color: #777777">
      	</i>
      </a>
      &nbsp;
      <a href="javascript:void(0);" title="Hapus" class="delete_record label label-default" data-liidaja="$1">
      	<i class="fa fa-trash-o" style="color: #777777">
      	</i>
      </a>',

      'laid,seksieId,lanama,kode,status,alasan,sid,snama');
    return $this->datatables->generate();
   
    /*
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
        */
  }

  	//insert data method
  	function insert_lingkup(){
        $now = date('Y-m-d H:i:s');
      	$data=array(
          'nama'  => $this->input->post('input_nama'),
          'kode'  => $this->input->post('input_kode'),
          'labId'  => $this->input->post('input_lab'),
          'status'  => $this->input->post('input_status'),
        	'alasan'	=> $this->input->post('input_alasan'),
          'created_at'  => $now,
          'updated_at'  => $now,  
      	);
      	$result=$this->db->insert('lingkup', $data);
      	return $result;
  	}

  	//update data method
  	function update_lingkup(){
        $now = date('Y-m-d H:i:s');
      	$id=$this->input->post('edit_id');
        $data=array(
          'nama'  => $this->input->post('edit_nama'),
          'kode'  => $this->input->post('edit_kode'),
          'labId'  => $this->input->post('edit_lab'),
          'status'  => $this->input->post('edit_status'),
          'alasan'  => $this->input->post('edit_alasan'),
          'updated_at'  => $now
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
