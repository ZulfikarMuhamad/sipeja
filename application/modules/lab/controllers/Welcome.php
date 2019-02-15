<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
    	$this->load->model('crud_laboratory_model'); //load model crud_model
  	}

	public function index()
	{
		$x['lab']=$this->crud_laboratory_model->get_lab();
		
		$this->load->view('layouts/header');
		$this->load->view('layouts/sidebar-1');
		$this->load->view('laboratory', $x);
		$this->load->view('layouts/footer');
	}

	function get_all_laboratory_json_ctrlr() { //get product data and encode to be JSON object
      	header('Content-Type: application/json');
      	echo $this->crud_laboratory_model->get_all_laboratory();
  	}
 
  	function insert_laboratory_ctrlr(){ //insert record method
      	$this->crud_laboratory_model->insert_laboratory();
      	redirect('lab');
 	}
 
 	function update_laboratory_ctrlr(){ //update record method
    	$this->crud_laboratory_model->update_laboratory();
      	redirect('lab');
  	}
 
  	function delete_laboratory_ctrlr(){ //delete record method
      	$this->crud_laboratory_model->delete_laboratory();
      	redirect('lab');
  	}
}
