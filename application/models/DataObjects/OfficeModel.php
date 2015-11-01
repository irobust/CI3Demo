<?php 

class OfficeModel extends MY_Model{
	function getAll($type="object", $offset=0, $perpage=2){
		$query  = $this->db->select('officeCode, city')
						   ->limit($perpage, $offset)
						   ->get('offices');
		if($type=="object")
			return $query->result();
		return $query->result_array();
	}

	function count(){
		return $this->db->count_all_results('offices');
	}
}