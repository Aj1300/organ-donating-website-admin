<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Managerequest extends CI_Controller {
	public function __construct() { 
        parent::__construct();
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->helper('url');
		$this->load->library('session');
        $this->load->model('Managerequest_Model');
		
				
	}
	
	public function index(){
		if(!$this->session->userdata('US_Id')){
			header('location:'.base_url());
			
		}
		else{
		
			$US_Id = $this->session->userdata('US_Id');
			$data['userlist'] = $this->Managerequest_Model->getusers();
			$this->load->view('common/header', $data);
			$this->load->view('managerequest/managerequest');
			$this->load->view('common/footer');	
	    }
	}
		public function remove($OG_Id){
        $remove = $this->Managerequest_Model->remove($OG_Id);
        redirect('http://localhost/organ/o_admin/index.php/managerequest');
    }

} 