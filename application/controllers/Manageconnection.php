<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manageconnection extends CI_Controller {
	public function __construct() { 
        parent::__construct();
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->helper('url');
		$this->load->library('session');
        $this->load->model('Manageconnection_Model');
				
	}
	public function index(){
		if(!$this->session->userdata('US_Id')){
			header('location:'.base_url());
			
		}
		else{
			$US_Id = $this->session->userdata('US_Id');
			$data['userlist'] = $this->Manageconnection_Model->getusers();
			$this->load->view('common/header', $data);
			$this->load->view('manageconnection/manageconnection');
			$this->load->view('common/footer');	
	    }
    } 
	
	public function insert (){
	if(!$this->session->userdata('US_Id')) {
	
		header('location:'.base_url());
	}
	else{
			$data['pageTitle']  = ' Admin | manageconnection';
			$this->load->view('common/header',$data);
			$this->load->view('manageconnection/insert');
			$this->load->view('common/footer');
		} 	
}
  
	public function save(){
	if(isset($_POST)){
		$this->form_validation->set_rules('Name', 'name', 'trim|required');
		$this->form_validation->set_rules('Donororgan', 'donororgan', 'trim|required');
		$this->form_validation->set_rules('status', 'Status', 'trim|required');
		$this->form_validation->set_rules('userlocation', 'location', 'trim|required');
		
		

			$data['Donation_Info'] = $this->input->post("name");
			$data['Donating_Organ'] = $this->input->post("donororgan");
			$data['Location'] = $this->input->post("location");
			$data['Status'] = $this->input->post("status");
			$gal = $this->Manageconnection_Model->insert($data);
			$data['class'] = "success";
			$data['msg'] = "User inserted successfully";
			redirect('http://localhost/organ/o_admin/index.php/manageconnection');
		
	}
	

	
} 
}