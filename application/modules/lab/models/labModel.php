<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class labModel extends CI_Model {

	function get_bidang(){
    $this->db->order_by('kode', 'ASC');
    $result=$this->db->get('bidang');
    return $result;
  }

  function get_seksie($bidaja){
    $this->db->where('bidangId', $bidaja);
    $this->db->order_by('kode', 'ASC');
    $query = $this->db->get('seksie');
    //$output = '<option value="">Pilih Seksie</option>';
    foreach($query->result() as $row){
      $output .= '<option value="'.$row->id.'">'.$row->nama.'</option>';
    }
    return $output;
  }
  
	function get_all_lab() {
    $this->datatables->select('lab.id AS laid,lab.seksieId,lab.nama AS lanama,lab.kode,lab.status,lab.alasan,seksie.id AS sid,seksie.bidangId,seksie.nama AS snama,bidang.id AS bid,bidang.nama AS bnama,lab.kabidId,lab.kasieId,lab.koordId,lab.adminId');
    $this->datatables->from('lab');
    $this->datatables->join('seksie', 'lab.seksieId=seksie.id');
    $this->datatables->join('bidang', 'seksie.bidangId=bidang.id');
    $this->datatables->add_column(
      'view', 
      		
      '<a href="javascript:void(0);" title="Details" class="detail_record label label-default" data-laidaja="$1" data-seksieidaja="$2" data-lanamaaja="$3" data-kodeaja="$4" data-statusaja="$5" data-alasanaja="$6" data-sidaja="$7" data-bidangidaja="$8" data-snamaaja="$9" data-bidaja="$10" data-bnamaaja="$11" data-kabididaja="$12" data-kasieidaja="$13" data-koordidaja="$14" data-adminidaja="$15">
        <i class="fa fa-eye" style="color: #777777">
        </i>
      </a>
      &nbsp;
      <a href="javascript:void(0);" title="Edit" class="edit_record label label-default" data-laidaja="$1" data-seksieidaja="$2" data-lanamaaja="$3" data-kodeaja="$4" data-statusaja="$5" data-alasanaja="$6" data-sidaja="$7" data-bidangidaja="$8" data-snamaaja="$9" data-bidaja="$10" data-bnamaaja="$11" data-kabididaja="$12" data-kasieidaja="$13" data-koordidaja="$14" data-adminidaja="$15">
      	<i class="fa fa-pencil" style="color: #777777">
      	</i>
      </a>
      &nbsp;
      <a href="javascript:void(0);" title="Hapus" class="delete_record label label-default" data-laidaja="$1" data-lanamaaja="$3">
      	<i class="fa fa-trash-o" style="color: #777777">
      	</i>
      </a>',

      'laid,seksieId,lanama,kode,status,alasan,sid,bidangId,snama,bid,bnama,kabidId,kasieId,koordId,adminId');
    return $this->datatables->generate();
  }

  	//insert data method
  function insert_lab(){
    $now = date('Y-m-d H:i:s');
    $nama = $this->input->post('input_nama');
    $kode = $this->input->post('input_kode');
    $labId = $this->input->post('input_lab');
    $status = $this->input->post('input_status');
    $alasan = $this->input->post('input_alasan');
    /*insert intu lab*/
    $data=array(
      'nama'  => $nama,
      'kode'  => $kode,
      'labId'  => $labId,
      'status'  => $status,
      'alasan'	=> $alasan,
      'created_at'  => $now  
    );
    $result=$this->db->insert('lab', $data);

    /*insert into log*/
    $data = array(
      'userId' => '001',
      'aktivitas' => "Menambahkan laboratorium $nama",
      'alasan' => $alasan,
      'created_at' => $now
    );
    return $result;
  }

  	//update data method
  function update_lab(){
    $now = date('Y-m-d H:i:s');
    $id=$this->input->post('edit_id');
    $data=array(
      'nama'  => $this->input->post('edit_nama'),
      'kode'  => $this->input->post('edit_kode'),
      'seksieId'  => $this->input->post('edit_seksie'),
      'kabidId'  => $this->input->post('edit_kabid'),
      'kasieId'  => $this->input->post('edit_kasi'),
      'koordId'  => $this->input->post('edit_koord'),
      'adminId'  => $this->input->post('edit_admin'),
      'status'  => $this->input->post('edit_status'),
      'alasan'  => $this->input->post('edit_alasan'),
      'updated_at'  => $now
    );
    $this->db->where('id',$id);
    $result=$this->db->update('lab', $data);
    return $result;
  }

  	//delete data method
  function delete_lab(){
    $id=$this->input->post('id');
    $this->db->where('id',$id);
    $result=$this->db->delete('lab');
    return $result;
	}
}
