<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class bidang extends CI_Controller {

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
    	$this->load->model('bidangModel'); //load model crud_model
  	}

	public function index()
	{
		//$x['bidang']=$this->bidangModel->get_bidang();
		
		$this->load->view('layouts/header');
		$this->load->view('layouts/sidebar-1');
		//$this->load->view('bidang', $x);
		$this->load->view('bidang');
		$this->load->view('layouts/footer');
	}

	function get_all_bidang_json_ctrlr() { //get product data and encode to be JSON object
      	header('Content-Type: application/json');
      	echo $this->bidangModel->get_all_bidang();
  	}

  	function get_bidang_by_id_json(){
  		header('Content-Type: application/json');
  		echo $this->bidangModel->get_bidang_by_id();
  	}
 
  	function insert_bidang_ctrlr(){ //insert record method
      	$this->bidangModel->insert_bidang();
      	redirect('bidang');
 	}
 
 	function update_bidang_ctrlr(){ //update record method
    	$this->bidangModel->update_bidang();
      	redirect('bidang');
  	}
 
  	function delete_bidang_ctrlr(){ //delete record method
      	$this->bidangModel->delete_bidang();
      	redirect('bidang');
  	}
}
