<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class log extends CI_Controller {

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
    	}else if($this->session->userdata('role') != '1'){
    		redirect(base_url("index.php/Error404"));
    	}
    	$this->load->library('datatables'); //load library ignited-dataTable
    	$this->load->model('logModel'); //load model crud_model
  	}

	public function index()
	{
		$x['log']=$this->logModel->get_log();
		
		$this->load->view('layouts/header');
		$this->load->view('layouts/sidebar-1');
		$this->load->view('log', $x);
		$this->load->view('layouts/footer');
	}

	function get_all_log_json_ctrlr() { //get product data and encode to be JSON object
      	header('Content-Type: application/json');
      	echo $this->logModel->get_all_log();
  	}

  	function get_log_by_id_json(){
  		header('Content-Type: application/json');
  		echo $this->logModel->get_log_by_id();
  	}
 
  	function insert_log_ctrlr(){ //insert record method
      	$this->logModel->insert_log();
      	redirect('log');
 	}
 
 	function update_log_ctrlr(){ //update record method
    	$this->logModel->update_log();
      	redirect('log');
  	}
 
  	function delete_log_ctrlr(){ //delete record method
      	$this->logModel->delete_log();
      	redirect('log');
  	}
}
