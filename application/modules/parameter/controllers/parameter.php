<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class parameter extends CI_Controller {

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
    	$this->load->model('parameterModel'); //load model crud_model
  	}

	public function index()
	{
		$x['parameter']=$this->parameterModel->get_parameter();
		
		$this->load->view('layouts/header');
		$this->load->view('layouts/sidebar-1');
		$this->load->view('parameter', $x);
		$this->load->view('layouts/footer');
	}

	function get_all_parameter_json_ctrlr() { //get product data and encode to be JSON object
      	header('Content-Type: application/json');
      	echo $this->parameterModel->get_all_parameter();
  	}

  	function get_parameter_by_id_json(){
  		header('Content-Type: application/json');
  		echo $this->parameterModel->get_parameter_by_id();
  	}
 
  	function insert_parameter_ctrlr(){ //insert record method
      	$this->parameterModel->insert_parameter();
      	redirect('parameter');
 	}
 
 	function update_parameter_ctrlr(){ //update record method
    	$this->parameterModel->update_parameter();
      	redirect('parameter');
  	}
 
  	function delete_parameter_ctrlr(){ //delete record method
      	$this->parameterModel->delete_parameter();
      	redirect('parameter');
  	}
}
