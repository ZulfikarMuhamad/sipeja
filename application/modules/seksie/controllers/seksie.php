<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class seksie extends CI_Controller {

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
    	$this->load->model('seksieModel'); //load model crud_model
  	}

	public function index()
	{
		$x['bidang']=$this->seksieModel->get_bidang();
		
		$this->load->view('layouts/header');
		$this->load->view('layouts/sidebar-1');
		$this->load->view('seksie', $x);
		//$this->load->view('seksie');
		$this->load->view('layouts/footer');
	}

	function get_all_seksie_json_ctrlr() { //get product data and encode to be JSON object
      	header('Content-Type: application/json');
      	echo $this->seksieModel->get_all_seksie();
  	}

  	function get_seksie_by_id_json(){
  		header('Content-Type: application/json');
  		echo $this->seksieModel->get_seksie_by_id();
  	}
 
  	function insert_seksie_ctrlr(){ //insert record method
      	$this->seksieModel->insert_seksie();
      	redirect('seksie');
 	}
 
 	function update_seksie_ctrlr(){ //update record method
    	$this->seksieModel->update_seksie();
      	redirect('seksie');
  	}
 
  	function delete_seksie_ctrlr(){ //delete record method
      	$this->seksieModel->delete_seksie();
      	redirect('seksie');
  	}
}
