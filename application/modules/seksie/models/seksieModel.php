<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class seksieModel extends CI_Model {

	
	function get_bidang(){
      	$result=$this->db->get('bidang');
      	return $result;
  }
  
	
	function get_all_seksie() {
      	$this->datatables->select('seksie.id AS sid,seksie.bidangId,seksie.nama AS snama,seksie.kode,seksie.status,seksie.alasan,bidang.id AS bid,bidang.nama AS bnama');
      	$this->datatables->from('seksie');
        $this->datatables->join('bidang', 'seksie.bidangId=bidang.id');
      	$this->datatables->add_column(
      		'view', 
      		
      		'<a href="javascript:void(0);" title="Details" class="detail_record label label-default" data-sidaja="$1" data-bidangidaja="$2" data-snamaaja="$3" data-kodeaja="$4" data-statusaja="$5" data-alasanaja="$6" data-bidaja="$7" data-bnamaaja="$8">
            <i class="fa fa-eye" style="color: #777777">
            </i>
          </a>
          &nbsp;
          <a href="javascript:void(0);" title="Edit" class="edit_record label label-default" data-sidaja="$1" data-bidangidaja="$2" data-snamaaja="$3" data-kodeaja="$4" data-statusaja="$5" data-alasanaja="$6" data-bidaja="$7" data-bnamaaja="$8">
      			<i class="fa fa-pencil" style="color: #777777">
      			</i>
      		</a>
      		&nbsp;
      		<a href="javascript:void(0);" title="Hapus" class="delete_record label label-default" data-sidaja="$1" data-snamaaja="$3">
      			<i class="fa fa-trash-o" style="color: #777777">
      			</i>
      		</a>',

      		'sid,bidangId,snama,kode,status,alasan,bid,bnama');
      	return $this->datatables->generate();
 	 }

  	//insert data method
  	function insert_seksie(){
      $nama = $this->input->post('input_nama');
      $kode = $this->input->post('input_kode');
      $bidangId = $this->input->post('input_bidang');
      $status = $this->input->post('input_status');
      $alasan = $this->input->post('input_alasan');
      $now = date('Y-m-d H:i:s');

      /*insert into seksie*/
    	$data=array(
        'nama'  => $nama,
        'kode'  => $kode,
        'bidangId'  => $bidangId,
        'status'  => $status,
      	'alasan'	=> $alasan,
        'created_at'  => $now
    	);
    	$result=$this->db->insert('seksie', $data);

      /*insert into log*/
      $data = array(
        'userId'=>'001',
        'aktivitas'=>"Menambahkan seksie $nama",
        'alasan'=>$alasan,
        'created_at'=>$now
      );
      $result = $this->db->insert('log', $data);

    	return $result;
  	}

  	//update data method
  	function update_seksie(){
      $nama = $this->input->post('edit_nama');
      $kode = $this->input->post('edit_kode');
      $bidangId = $this->input->post('edit_bidang');
      $status = $this->input->post('edit_status');
      $alasan = $this->input->post('edit_alasan');
      $now = date('Y-m-d H:i:s');
    	$id=$this->input->post('edit_id');

      /*update from seksie*/
      $data=array(
        'nama'  => $nama,
        'kode'  => $kode,
        'bidangId'  => $bidangId,
        'status'  => $status,
        'alasan'  => $alasan,
        'updated_at'  => $now
      );
      $this->db->where('id',$id);
      $result=$this->db->update('seksie', $data);

      /*insert into log*/
      $data = array(
        'userId'=>'001',
        'aktivitas'=>"Merubah seksie $nama",
        'alasan'=>$alasan,
        'created_at'=>$now
      );
      $result = $this->db->insert('log', $data);

      return $result;
  	}

  	//delete data method
  	function delete_seksie(){
      	$id=$this->input->post('delete_id');
        $nama = $this->input->post('delete_nama');
        $alasan = $this->input->post('delete_alasan');

        /*delete from seksie*/
      	$this->db->where('id',$id);
     	  $result=$this->db->delete('seksie');

        /*inserting into log*/
        $data = array(
          'userId' => '001',
          'aktivitas' => "Menghapus seksie $nama",
          'alasan' => $alasan,
          'created_at' => $now
        );
        $result = $this->db->insert('log', $data);

      	return $result;
	}
}
