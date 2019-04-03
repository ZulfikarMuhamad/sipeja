<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class loginModel extends CI_Model {

	
	// function get_login(){
 //      	$result=$this->db->get('login');
 //      	return $result;
 //  	}
  	
	
	// function get_all_login() {
 //      	$this->datatables->select('id,nama,keterangan,status,alasan');
 //      	$this->datatables->from('login');
 //      	$this->datatables->add_column(
 //      		'view', 
      		
 //      		'<a href="javascript:void(0);" title="Details" class="detail_record label label-default" data-idaja="$1" data-namaaja="$2" data-keteranganaja="$3" data-statusaja="$4" data-alasanaja="$5">
 //            <i class="fa fa-eye" style="color: #777777">
 //            </i>
 //          </a>
 //          &nbsp;
 //          <a href="javascript:void(0);" title="Edit" class="edit_record label label-default" data-idaja="$1" data-namaaja="$2" data-keteranganaja="$3" data-statusaja="$4" data-alasanaja="$5">
 //      			<i class="fa fa-pencil" style="color: #777777">
 //      			</i>
 //      		</a>
 //      		&nbsp;
 //      		<a href="javascript:void(0);" title="Hapus" class="delete_record label label-default" data-idaja="$1" data-namaaja="$2">
 //      			<i class="fa fa-trash-o" style="color: #777777">
 //      			</i>
 //      		</a>',

 //      		'id,nama,keterangan,status,alasan');
 //      	return $this->datatables->generate();
 // 	 }

 //  	//insert data method
 //  	function insert_login(){
 //      $nama = $this->input->post('input_nama');
 //      $keterangan = $this->input->post('input_keterangan');
 //      $status = $this->input->post('input_status');
 //      $alasan = $this->input->post('input_alasan');
 //      $date = date('Y-m-d H:i:s');

 //        /*insert into login table*/
 //      	$data=array(
 //          'nama'  => $nama,
 //          'keterangan'  => $keterangan,
 //          'status'  => $status,
 //        	'alasan'	=> $alasan,
 //          'created_at' => $date
 //      	);
 //      	$result=$this->db->insert('login', $data);

 //        insert into log 
 //        $data=array(
 //          'userId'  => "001",
 //          'aktivitas'  => "Menambahkan login uji $nama ",
 //          'alasan'  => $alasan,
 //          'created_at' => $date
 //        );
 //        $result=$this->db->insert('log', $data);
 //      	return $result;
 //  	}

 //  	//update data method
 //  	function update_login(){
 //      	$id=$this->input->post('edit_id');
 //        $nama=$this->input->post('edit_nama');
 //        $keterangan=$this->input->post('edit_keterangan');
 //        $status=$this->input->post('edit_status');
 //        $alasan=$this->input->post('edit_alasan');
 //        $date = date('Y-m-d H:i:s');

 //        /*updateing login*/
 //        $data=array(
 //          'nama'  => $nama,
 //          'keterangan'  => $keterangan,
 //          'status'  => $status,
 //          'alasan'  => $alasan,
 //          'updated_at' => $date
 //        );
 //        $this->db->where('id',$id);
 //        $result=$this->db->update('login', $data);

 //        /*insert into log*/ 
 //        $data=array(
 //          'userId'  => "001",
 //          'aktivitas'  => "Merubah login uji $nama ",
 //          'alasan'  => $alasan,
 //          'created_at' => $date
 //        );
 //        $result=$this->db->insert('log', $data);
 //        return $result;
 //  	}

 //  	//delete data method
 //  	function delete_login(){
 //      /*delete from login*/
 //      $id=$this->input->post('id');
 //      $this->db->where('id',$id);
 //     	$result=$this->db->delete('login');

 //      /*insert into log*/
 //      $date = date('Y-m-d H:i:s');
 //      $nama = $this->input->post('delete_nama');
 //      $data=array(
 //          'userId'  => "001",
 //          'aktivitas'  => "Menghapus login uji $nama",
 //          'alasan'  => $this->input->post('delete_alasan'),
 //          'created_at' => $date
 //        );
 //        $result=$this->db->insert('log', $data);

 //      	return $result;
//}
}
