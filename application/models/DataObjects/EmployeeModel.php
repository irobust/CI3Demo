<?php 

class EmployeeModel extends MY_Model{

	function getAll(){
		// $sql = "SELECT 'firstName,lastName' FROM employees";
		// $query = $this->db->query($sql);

		// SELECT firstName, lastName, email, o.city
		// FROM employees e INNER JOIN offices o ON e.officeCode = o.officeCode

		$query = $this->db->select("e.employeeNumber id, CONCAT_WS(' ',firstName, lastName) as name, email, o.city")
						  ->from('employees e')
						  ->join('offices o', 'e.officeCode = o.officeCode')
						  ->limit(5)
						  ->get();

		return $query->result();
	}

	function byOffice($officeCode){
		$query = $this->db->select("e.employeeNumber id, CONCAT_WS(' ',firstName, lastName) as name, email, o.city")
						  ->from('employees e')
						  ->join('offices o', 'e.officeCode = o.officeCode')
						  ->where('o.officeCode', $officeCode)
						  ->get();

		return $query->result();

	}

	function byId($id){
		$query = $this->db->where('employeeNumber', $id)
						  ->get('employees');
		return $query->row();
	}


	// base_url/employee/insert
	function insert($data){
		$this->db->insert('employees', $data);
	}
}