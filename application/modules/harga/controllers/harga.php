<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class harga extends CI_Controller {

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
    	$this->load->model('hargaModel'); //load model crud_model
  	}

	public function index()
	{
		$x['sampel']=$this->hargaModel->get_sampel();
		$x['parameter']=$this->hargaModel->get_parameter();
		
		$this->load->view('layouts/header');
		$this->load->view('layouts/sidebar-1');
		$this->load->view('harga', $x);
		$this->load->view('layouts/footer');
	}

	function get_all_harga_json_ctrlr() { //get product data and encode to be JSON object
      	header('Content-Type: application/json');
      	echo $this->hargaModel->get_all_harga();
  	}

  	function get_harga_by_id_json(){
  		header('Content-Type: application/json');
  		echo $this->hargaModel->get_harga_by_id();
  	}
 
  	function insert_harga_ctrlr(){ //insert record method
      	$this->hargaModel->insert_harga();
      	redirect('harga');
 	}
 
 	function update_harga_ctrlr(){ //update record method
    	$this->hargaModel->update_harga();
      	redirect('harga');
  	}
 
  	function delete_harga_ctrlr(){ //delete record method
      	$this->hargaModel->delete_harga();
      	redirect('harga');
  	}

  	function get_all_harga(){
  		$get = $this->hargaModel->get_harga()->result_array();

  		echo json_encode($get);
  	}
}
