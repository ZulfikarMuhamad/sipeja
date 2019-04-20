<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class alat extends CI_Controller {

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
    	if($this->session->userdata('stats')!= TRUE){
    		redirect(base_url("index.php/login"));
    	}
    	$this->load->library('datatables'); //load library ignited-dataTable
    	$this->load->model('alatModel'); //load model crud_model
  	}

	public function index()
	{
		$x['lab']=$this->alatModel->get_lab();
		$x['parameter']=$this->alatModel->get_parameter();
		
		$this->load->view('layouts/header');
		$this->load->view('layouts/sidebar-1');
		$this->load->view('alat', $x);
		$this->load->view('layouts/footer');
	}

	function get_all_alat_json_ctrlr() { //get product data and encode to be JSON object
      	header('Content-Type: application/json');
      	echo $this->alatModel->get_all_alat();
  	}

  	function get_alat_by_id_json(){
  		header('Content-Type: application/json');
  		echo $this->alatModel->get_alat_by_id();
  	}
 
  	function insert_alat_ctrlr(){ //insert record method
      	$this->alatModel->insert_alat();
      	redirect('alat');
 	}
 
 	function update_alat_ctrlr(){ //update record method
    	$this->alatModel->update_alat();
      	redirect('alat');
  	}
 
  	function delete_alat_ctrlr(){ //delete record method
      	$this->alatModel->delete_alat();
      	redirect('alat');
  	}

  	function get_all_alat(){
  		$get = $this->alatModel->get_alat()->result_array();

  		echo json_encode($get);
	  }

	function get_parameterById_ctrlr(){
		if($this->input->post('edit_lab')){
			 echo $this->labModel->get_parameterById($this->input->post('edit_lab'));
		}
   	}
}
