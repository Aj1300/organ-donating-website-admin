<?php
class Login_Model extends CI_Model{
	
	public function Verify_User($email, $password){
		/*
		$loginQuery = $this->db->query("Select * from admin_user where AU_Email='".$email."' and AU_Password='".$password."' and AU_Status='1'");
		return $loginQuery->result_array();
		*/
		return $this->db->select("*")
						->from("o_user")
						->where("US_Email",$email)
						->where("US_Password",$password)
						->where("US_Type",'1')
						->where("US_Status",'1')
						->get()
						->row();
		
		//print_r($this->db->last_query());    
	}
	
}
?>