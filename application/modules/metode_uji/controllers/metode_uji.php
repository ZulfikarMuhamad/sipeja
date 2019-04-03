<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class metode_uji extends CI_Controller {

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
    	$this->load->model('metodeModel'); //load model crud_model
  	}

	public function index()
	{
		$x['metode']=$this->metodeModel->get_metode();
		
		$this->load->view('layouts/header');
		$this->load->view('layouts/sidebar-1');
		$this->load->view('metode_uji', $x);
		$this->load->view('layouts/footer');
	}

	function get_all_metode_json_ctrlr() { //get product data and encode to be JSON object
      	header('Content-Type: application/json');
      	echo $this->metodeModel->get_all_metode();
  	}

  	function get_metode_by_id_json(){
  		header('Content-Type: application/json');
  		echo $this->metodeModel->get_metode_by_id();
  	}
 
  	function insert_metode_ctrlr(){ //insert record method
      	$this->metodeModel->insert_metode();
      	redirect('metode_uji');
 	}
 
 	function update_metode_ctrlr(){ //update record method
    	$this->metodeModel->update_metode();
      	redirect('metode_uji');
  	}
 
  	function delete_metode_ctrlr(){ //delete record method
      	$this->metodeModel->delete_metode();
      	redirect('metode_uji');
  	}
}
