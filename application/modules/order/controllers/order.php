<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class order extends CI_Controller {

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
    	$this->load->model('orderModel'); //load model crud_model
  	}

	public function index()
	{
		//$data['bidang']=$this->labModel->get_bidang();
		//echo json_encode($data['bidang']);
		//$data['seksie']=$this->labModel->get_seksie();
		
		/*
		$a['kabid']=$this->labModel->get_kabid();
		$b['kasi']=$this->labModel->get_kasi();
		$c['koord']=$this->labModel->get_koord();
		$d['admin']=$this->labModel->get_admin();
		*/
		
		$this->load->view('layouts/header');
		$this->load->view('layouts/sidebar-1');
		$this->load->view('order');
		$this->load->view('layouts/footer');	
	}

	function get_all_order_json_ctrlr() { //get product data and encode to be JSON object
      	header('Content-Type: application/json');
      	echo $this->orderModel->get_all_order();
  	}

  	function get_order_by_id_json(){
  		header('Content-Type: application/json');
  		echo $this->orderModel->get_order_by_id();
  	}
 
  	function insert_order_ctrlr(){ //insert record method
      	$this->orderModel->insert_order();
      	redirect('order');
 	}
 
 	function update_order_ctrlr(){ //update record method
    	$this->orderModel->update_order();
      	redirect('order');
  	}
 
  	function delete_order_ctrlr(){ //delete record method
      	$this->orderModel->delete_order();
      	redirect('order');
  	}

  	/*
  	function get_seksie_ctrlr(){
  		if($this->input->post('edit_bidang')){
   			echo $this->labModel->get_seksie($this->input->post('edit_bidang'));
  		}
 	}
 	*/
}
