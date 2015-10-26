<?php 

class OfficeModel extends MY_Model{
	function getAll(){
		$query = $this->db->select('officeCode, city')
						  ->get('offices');
		return $query->result();
	}
}