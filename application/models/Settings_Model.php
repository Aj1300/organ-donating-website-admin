<?php
class Settings_Model extends CI_Model{
    protected $table_name;
    public function __construct()
    {
        parent::__construct();
        $this->table_name = 'o_user';
   
    }
	public function getusers() {
        //$q = $this->db->query"select * from o_user where US_Type = 1 and US_Status = 1");		
		return $this->db->query("select * from o_user where US_Type = 1 and US_Status = 1")->result();
	}
	public function thisUser($US_Id){
		$data = $this->db->select('*')
						 ->from('o_user')
						 ->where('US_Id', $US_Id)
						 ->get()
						 ->row_array();
		return $data;
	}
	public function checkuser($data) {
		//echo("SELECT * FROM o_user WHERE US_Name = '".$data['US_Name']."' and US_Id <> '".$data['US_Id']."'");exit();
		$query = $this->db->query("SELECT * FROM o_user WHERE US_Name = '".$data['US_Name']."' and US_Id <> '".$data['US_Id']."'")->row();
		return $query;
	}
	public function update($data){
		//print_r("update ob_products CA_Id ='".$data['CA_Id']."'");exit();
		return $this->db->where('US_Id', $data['US_Id'])
							->update('o_user', $data);
	}

}	