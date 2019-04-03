<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class sampel extends CI_Controller {

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
    	$this->load->model('sampelModel'); //load model crud_model
  	}

	public function index()
	{
		$x['sampel']=$this->sampelModel->get_sampel();
		
		$this->load->view('layouts/header');
		$this->load->view('layouts/sidebar-1');
		$this->load->view('sampel', $x);
		$this->load->view('layouts/footer');
	}

	function get_all_sampel_json_ctrlr() { //get product data and encode to be JSON object
      	header('Content-Type: application/json');
      	echo $this->sampelModel->get_all_sampel();
  	}

  	function get_sampel_by_id_json(){
  		header('Content-Type: application/json');
  		echo $this->sampelModel->get_sampel_by_id();
  	}
 
  	function insert_sampel_ctrlr(){ //insert record method
      	$this->sampelModel->insert_sampel();
      	redirect('sampel');
 	}
 
 	function update_sampel_ctrlr(){ //update record method
    	$this->sampelModel->update_sampel();
      	redirect('sampel');
  	}
 
  	function delete_sampel_ctrlr(){ //delete record method
      	$this->sampelModel->delete_sampel();
      	redirect('sampel');
  	}

  	function get_active_sampel(){
  		$get = $this->sampelModel->get_active_sampel(array('status'=>'1'))->result_array();
  		echo json_encode($get);
  	}
}
