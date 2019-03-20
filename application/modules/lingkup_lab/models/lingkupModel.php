<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class lingkupModel extends CI_Model {

	
	function get_lab(){
      	$result=$this->db->get('lab');
      	return $result;
  }
  
	
	function get_all_lingkup() {
        
      	$this->datatables->select('lingkup.id AS liid,lingkup.labId,lingkup.nama AS linama,lingkup.kode,lingkup.status,lingkup.alasan,lab.id AS laid,lab.nama AS lanama');
      	$this->datatables->from('lingkup');
        $this->datatables->join('lab', 'lingkup.labId=lab.id');
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
      		<a href="javascript:void(0);" title="Hapus" class="delete_record label label-default" data-liidaja="$1" data-linamaaja="$3">
      			<i class="fa fa-trash-o" style="color: #777777">
      			</i>
      		</a>',

      		'liid,labId,linama,kode,status,alasan,laid,lanama');
      	return $this->datatables->generate();
 	 }

  	//insert data method
  	function insert_lingkup(){
      $nama = $this->input->post('input_nama');
      $kode = $this->input->post('input_kode');
      $labId = $this->input->post('input_lab');
      $status = $this->input->post('input_status');
      $alasan = $this->input->post('input_alasan');
      $now = date('Y-m-d H:i:s');
      /*insert into ingkup*/
    	$data=array(
        'nama'  => $nama,
        'kode'  => $kode,
        'labId'  => $labId,
        'status'  => $status,
      	'alasan'	=> $alasan,
        'created_at'  => $now  
    	);
    	$result=$this->db->insert('lingkup', $data);

      /*insert into log*/
      $data = array(
        'userId' => '001',
        'aktivitas' => "Menambahkan lingkup laboratorium $nama",
        'alasan' => $alasan,
        'created_at' => $now
      );
      $result = $this->db->insert('log', $data);

    	return $result;
  	}

  	//update data method
  	function update_lingkup(){
      $now = date('Y-m-d H:i:s');
    	$id=$this->input->post('edit_id');
      $nama = $this->input->post('edit_nama');
      $kode = $this->input->post('edit_kode');
      $labId = $this->input->post('edit_lab');
      $status = $this->input->post('edit_status');
      $alasan = $this->input->post('edit_alasan');

      /*update lingkup*/
      $data=array(
        'nama'  => $nama,
        'kode'  => $kode,
        'labId'  => $labId,
        'status'  => $status,
        'alasan'  => $alasan,
        'updated_at'  => $now
      );
      $this->db->where('id',$id);
      $result=$this->db->update('lingkup', $data);

      /*insert into log*/
      $data = array(
      'userId' => '001',
      'aktivitas' => "Merubah lingkup laboratorium $nama",
      'alasan' => $alasan,
      'created_at' => $now
      );
      $result = $this->db->insert('log', $data);

        return $result;
  	}

  	//delete data method
  	function delete_lingkup(){
    	$id=$this->input->post('delete_id');
      $nama = $this->input->post('delete_nama');
      $alasan = $this->input->post('delete_alasan');

      /*delete from lingkup*/
    	$this->db->where('id',$id);
   	  $result=$this->db->delete('lingkup');

      /*insert into log*/
      $data = array(
        'userId' => '001',
        'aktivitas' => "Menghapus lingkup laboratorium $nama",
        'alasan' => $alasan,
        'created_at' => $now
      );
      $result = $this->db->insert('log', $data);

      return $result;
	}
}
