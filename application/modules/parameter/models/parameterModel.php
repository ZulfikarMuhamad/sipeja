<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class parameterModel extends CI_Model {

	
	function get_lab(){
      	$result=$this->db->get('lab');
      	return $result;
  	}
  	
	
	function get_all_parameter() {
      	$this->datatables->select('parameter.id as id,parameter.labId as labId,parameter.nama as namaparameter,parameter.status as status,parameter.alasan as alasan,lab.nama as namalab');
      	$this->datatables->from('parameter');
        $this->datatables->join('lab','parameter.labId = lab.id');
      	$this->datatables->add_column(
      		'view', 
      		
      		'<a href="javascript:void(0);" title="Detail" class="detail_record label label-default" data-idaja="$1" data-labaja="$2" data-namaaja="$3" data-statusaja="$4" data-alasanaja="$5" data-namalabaja="$6">
            <i class="fa fa-eye" style="color: #777777">
            </i>
          </a>
          &nbsp;
          <a href="javascript:void(0);" title="Edit" class="edit_record label label-default" data-idaja="$1" data-labaja="$2" data-namaaja="$3" data-statusaja="$4" data-alasanaja="$5" data-namalabaja="$6">
      			<i class="fa fa-pencil" style="color: #777777">
      			</i>
      		</a>
      		&nbsp;
      		<a href="javascript:void(0);" title="Hapus" class="delete_record label label-default" data-idaja="$1" data-namaaja="$3">
      			<i class="fa fa-trash-o" style="color: #777777">
      			</i>
      		</a>',

      		'id,labId,namaparameter,status,alasan,namalab');
      	return $this->datatables->generate();
 	 }

  	//insert data method
  	function insert_parameter(){
      $labId = $this->input->post('input_lab');
      $nama = $this->input->post('input_nama');
      $status = $this->input->post('input_status');
      $alasan = $this->input->post('input_alasan');
      $date = date('Y-m-d H:i:s');
      /*insert into parameter*/
      	$data=array(
        	'labId'	=> $labId,
          'nama'  => $nama,
          'status'  => $status,
        	'alasan'	=> $alasan,
          'created_at' => $date
      	);
      	$result=$this->db->insert('parameter', $data);

        /*insert into log*/
        $data=array(
          'userId' => '001',
          'aktivitas' => "Menambahkan parameter $nama",
          'alasan' => $alasan,
          'created_at' => $date
        );
        $result=$this->db->insert('log', $data);
      	return $result;
  	}

  	//update data method
  	function update_parameter(){
      	$id = $this->input->post('edit_id');
        $labId = $this->input->post('edit_lab');
        $nama = $this->input->post('edit_nama');
        $status = $this->input->post('edit_status');
        $alasan = $this->input->post('edit_alasan');
        $date = date('Y-m-d H:i:s');
        /*update into parameter*/
      	$data=array( 
          'labId'  => $labId,
          'nama'  => $nama,
          'status'  => $status,
          'alasan'  => $alasan,
          'updated_at' => $date
      	);
      	$this->db->where('id',$id);
      	$result=$this->db->update('parameter', $data);

        /*inserting into log*/
        $data = array(
          'userId' => '001',
          'aktivitas' => "Merubah parameter $nama",
          'alasan' => $alasan,
          'created_at' => $date
        );
        $result = $this->db->insert('log', $data);
      	return $result;
  	}

  	//delete data method
  	function delete_parameter(){
      	$id=$this->input->post('delete_id');
        $nama = $this->input->post('delete_nama');
        $alasan = $this->input->post('delete_alasan');
        $date = date('Y-m-d H:i:s');

        /*delete from parameter*/
      	$this->db->where('id',$id);
     	  $result=$this->db->delete('parameter');

        /*inserting into log*/
        $data = array(
          'userId' => '001',
          'aktivitas' => "Menghapus parameter $nama",
          'alasan' => $alasan,
          'created_at' => $date
        );
        $result = $this->db->insert('log', $data);
      	return $result;
	}

  function get_active_parameter($where){
      $this->db->select('*');
      $this->db->from('parameter');
      $this->db->where($where);
      $result = $this->db->get();
      return $result;
  }
}
