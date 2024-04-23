<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manageuser extends CI_Controller {
	public function __construct() { 
        parent::__construct();
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->helper('url');
		$this->load->library('session');
        $this->load->model('Manageuser_Model');
		
				
	}
	
	public function index(){
		if(!$this->session->userdata('US_Id')){
			header('location:'.SITE_PATH);
		}else{
			$US_Id = $this->session->userdata('US_Id');
			$data['userlist'] = $this->Manageuser_Model->getusers();
			$this->load->view('common/header', $data);
			$this->load->view('manageuser/manageuser');
			$this->load->view('common/footer');
		}
	}
			public function add($US_Id){
			if(!$this->session->userdata('US_Id')){
			header('location:'.SITE_PATH);
		}else
		{
		if($US_Id){
				$data['data'] = $this->Manageuser_Model->thisUser($US_Id);
				$data['pageTitle']  = ' Admin | Manageuser';
				$this->load->view('common/header', $data);
				$this->load->view('manageuser/add');
				$this->load->view('common/footer');
			}
		}
	}
	public function save(){
		if(isset($_POST)){
			$this->form_validation->set_rules('name', 'name', 'trim|required');
			$this->form_validation->set_rules('address', 'address', 'trim|required');
			$this->form_validation->set_rules('phone', 'name', 'trim|required');
			$this->form_validation->set_rules('email', 'name', 'trim|required');
				if ($this->form_validation->run() == FALSE) {
					if($this->form_validation->error_string()!=""){
						$data['msg'] = $this->form_validation->error_string();
					}
			}	
			
			$data['US_Name'] = $this->input->post("name");
			$data['US_Address'] = $this->input->post("address");
			$data['US_Phone'] = $this->input->post("phone");
			$data['US_Email'] = $this->input->post("email");
			$data['US_Id'] = $this->input->post("US_Id");
			$checkuser = $this->Manageuser_Model->checkuser($data);
			$gal = $this->Manageuser_Model->update($data);
			$data['class'] = "success";
			$data['msg'] = " added successfully";
			redirect('http://localhost/organ/o_admin/index.php/manageuser');

			}

		}
	
}