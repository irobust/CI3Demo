<?php 

class OrderModel extends MY_Model{
	function getDuration(){
		$query = $this->db->select('orderNumber, orderDate, shippedDate')
				 		  ->from('orders')
						  ->limit(5)->get();
		return $query->result();
	}
}