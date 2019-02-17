<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class lingkup extends CI_Controller {

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
    	$this->load->model('lingkupModel'); //load model crud_model
  	}

	public function index()
	{
		$x['lingkup']=$this->lingkupModel->get_lingkup();
		
		$this->load->view('layouts/header');
		$this->load->view('layouts/sidebar-1');
		$this->load->view('lingkup', $x);
		$this->load->view('layouts/footer');
	}

	function get_all_lingkup_json_ctrlr() { //get product data and encode to be JSON object
      	header('Content-Type: application/json');
      	echo $this->lingkupModel->get_all_lingkup();
  	}

  	function get_lingkup_by_id_json(){
  		header('Content-Type: application/json');
  		echo $this->lingkupModel->get_lingkup_by_id();
  	}
 
  	function insert_lingkup_ctrlr(){ //insert record method
      	$this->lingkupModel->insert_lingkup();
      	redirect('lingkup');
 	}
 
 	function update_lingkup_ctrlr(){ //update record method
    	$this->lingkupModel->update_lingkup();
      	redirect('lingkup');
  	}
 
  	function delete_lingkup_ctrlr(){ //delete record method
      	$this->lingkupModel->delete_lingkup();
      	redirect('lingkup');
  	}
}
