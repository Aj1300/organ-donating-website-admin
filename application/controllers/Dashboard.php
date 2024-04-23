<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->helper('url');
		$this->load->library('session');
	}
	public function index()
	{
		if(!$this->session->userdata('US_Id')){
			header('location:'.SITE_PATH);
		}else{
		$this->load->view('common/header');
		$this->load->view('dashboard');
		$this->load->view('common/footer');
		}
	}
}