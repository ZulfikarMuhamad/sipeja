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
      		
      		'<a href="javascript:void(0);" class="edit_record" data-idview="$1" data-seksieidview="$2" data-namaview="$3" data-kodeview="$4" data-statusview="$5" data-akreditasiview="$6" data-personelview="$7" data-akomodasiview="$8" data-bebanview="$9" data-peralatanview="$10" data-metodeview="$11" data-biayaview="$12" data-kabididview="$13" data-kasieidview="$14" data-koordidview="$15" data-adminidview="$16" data-alasanview="$17">
      			<i class="fa fa-pencil" style="color: #777777">
      			</i>
      		</a>
      		
      		<a href="javascript:void(0);" class="delete_record" data-idview="$1">
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
      	$id=$this->input->post('id');
      	$data=array(
        	'seksieId'	=> $this->input->post('seksieId'),
        	'nama'	=> $this->input->post('nama'),
          'kode'  => $this->input->post('kode'),
          'status'  => $this->input->post('status'),
          'akreditasi'  => $this->input->post('akreditasi'),
          'personel'  => $this->input->post('personel'),
          'akomodasi'  => $this->input->post('akomodasi'),
          'beban'  => $this->input->post('beban'),
          'peralatan'  => $this->input->post('peralatan'),
          'metode'  => $this->input->post('metode'),
          'biaya'  => $this->input->post('biaya'),
          'kabidId'  => $this->input->post('kabidId'),
          'kasieId'  => $this->input->post('kasieId'),
          'koordId'  => $this->input->post('koordId'),
          'adminId'  => $this->input->post('adminId'),
          'alasan'  => $this->input->post('alasan')
      	);
      	$this->db->where('id',$id);
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
