<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class crud_laboratory_model extends CI_Model {

	
	function get_lab(){
      	$result=$this->db->get('lab');
      	return $result;
  	}
  	
	
	function get_all_laboratory() {
      	$this->datatables->select('id,seksieId,nama,kode,status,akreditasi,personel,akomodasi,beban,peralatan,metode,biaya,kabidId,kasieId,koordId,adminId,alasan');
      	$this->datatables->from('lab');
      	$this->datatables->add_column(
      		'view', 
      		
      		'<a href="javascript:void(0);" class="edit_record" data-idaja="$1" data-sekidaja="$2" data-namaaja="$3" data-kodeaja="$4" data-statusaja="$5" data-akreditasiaja="$6" data-personelaja="$7" data-akomodasiaja="$8" data-bebanaja="$9" data-peralatanaja="$10" data-metodeaja="$11" data-biayaaja="$12" data-kabidIdaja="$13" data-kasieIdaja="$14" data-koordIdaja="$15" data-adminIdaja="$16" data-alasanaja="$17">
      			<i class="fa fa-pencil" style="color: #777777">
      			</i>
      		</a>
      		
      		<a href="javascript:void(0);" class="delete_record" data-idaja="$1">
      			<i class="fa fa-trash-o" style="color: #777777">
      			</i>
      		</a>',

      		'id,seksieId,nama,kode,status,akreditasi,personel,akomodasi,beban,peralatan,metode,biaya,kabidId,kasieId,koordId,adminId,alasan');
      	return $this->datatables->generate();
 	 }

  	//insert data method
  	function insert_laboratory(){
      	$data=array(
        	'seksieId'	=> $this->input->post('input_seksieId'),
        	'nama'	=> $this->input->post('input_name'),
          'kode'  => $this->input->post('input_code'),
          'status'  => $this->input->post('input_status'),
          'akreditasi'  => $this->input->post('input_akreditasi'),
          'personel'  => $this->input->post('input_personel'),
          'akomodasi' => $this->input->post('input_akomodasi'),
          'beban' => $this->input->post('input_beban'),
          'peralatan' => $this->input->post('input_peralatan'),
          'metode'  => $this->input->post('input_metode'),
          'biaya' => $this->input->post('input_biaya'),
          'kabidId' => $this->input->post('input_kabidId'),
          'kasieId' => $this->input->post('input_kasieId'),
          'koordId' => $this->input->post('input_koordId'),
          'adminId' => $this->input->post('input_adminId'),
        	'alasan'	=> $this->input->post('input_alasan'),
      	);
      	$result=$this->db->insert('lab', $data);
      	return $result;
  	}

  	//update data method
  	function update_laboratory(){
      	$seksieId=$this->input->post('seksieId');
      	$data=array(
        	'nama'	=> $this->input->post('nama'),
        	'kode'	=> $this->input->post('kode')
      	);
      	$this->db->where('seksieId',$seksieId);
      	$result=$this->db->update('lab', $data);
      	return $result;
  	}

  	//delete data method
  	function delete_laboratory(){
      	$id=$this->input->post('id');
      	$this->db->where('id',$id);
     	$result=$this->db->delete('lab');
      	return $result;
	}
}
