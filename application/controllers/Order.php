<?php 
class Order extends MY_Controller{
	function duration(){
		$this->load->model('DataObjects/OrderModel', 'order');
		$data = $this->order->getDuration();
		$this->load->helper('Utility');
		$this->load->view('Order/list', compact('data'));
	}
}