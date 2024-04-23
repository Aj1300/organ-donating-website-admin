<?php
class Managerequest_Model extends CI_Model{
    protected $table_name;
    public function __construct()
    {
        parent::__construct();
        $this->table_name = 'ob_products';
   
    }
	public function getusers() {	
		return $this->db->query("select * from organ_request ")->result();
	}
	
	public function remove($OG_Id) {	
		return $query= $this->db->query("delete from organ_request WHERE OG_Id='".$OG_Id."'");
	}
}	