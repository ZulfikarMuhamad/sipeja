<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

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
    	$this->load->model('loginModel'); //load model crud_model
  	}

	public function index()
	{
		$this->load->view('login');
		$this->load->view('layouts/footer');
	}

	function login_act()
	{	
		$username = $this->input->post('username');
		$role = $this->input->post('role');
		$roleName;
		if ($role == '1') {
			$roleName = "Administrator";
		}else if($role == '2'){
			$roleName = "Kepala Laboratorium";
		}

		$session_arr = array(
			'nama' => $username,
			'role' => $role,
			'roleName' => $roleName,
			'stats' => TRUE
		);

		$this->session->set_userdata($session_arr);
		redirect(base_url("index.php/sampel"));
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url("index.php/login"));
	}
}
