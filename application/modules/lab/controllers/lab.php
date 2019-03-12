<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class lab extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct(){
    	parent::__construct();
    	$this->load->library('datatables'); //load library ignited-dataTable
    	$this->load->model('labModel'); //load model crud_model
  	}

	public function index()
	{
		$data['bidang']=$this->labModel->get_bidang();
		//echo json_encode($data['bidang']);
		//$data['seksie']=$this->labModel->get_seksie();
		
		/*
		$a['kabid']=$this->labModel->get_kabid();
		$b['kasi']=$this->labModel->get_kasi();
		$c['koord']=$this->labModel->get_koord();
		$d['admin']=$this->labModel->get_admin();
		*/
		
		$this->load->view('layouts/header');
		$this->load->view('layouts/sidebar-1');
		$this->load->view('lab', $data);
		$this->load->view('layouts/footer');
		
	}

	function get_all_lab_json_ctrlr() { //get product data and encode to be JSON object
      	header('Content-Type: application/json');
      	echo $this->labModel->get_all_lab();
  	}

  	function get_lab_by_id_json(){
  		header('Content-Type: application/json');
  		echo $this->labModel->get_lab_by_id();
  	}
 
  	function insert_lab_ctrlr(){ //insert record method
      	$this->labModel->insert_lab();
      	redirect('lab');
 	}
 
 	function update_lab_ctrlr(){ //update record method
    	$this->labModel->update_lab();
      	redirect('lab');
  	}
 
  	function delete_lab_ctrlr(){ //delete record method
      	$this->labModel->delete_lab();
      	redirect('lab');
  	}

  	function get_seksie_ctrlr(){
  		if($this->input->post('edit_bidang')){
   			echo $this->labModel->get_seksie($this->input->post('edit_bidang'));
  		}
 	}
}
