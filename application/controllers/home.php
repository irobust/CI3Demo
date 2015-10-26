<?php 


class Home extends MY_Controller{
	function index(){
		$obj = new StdClass();
		$obj->name = 'test object';
		$data = [1,2,3,4, $obj];
		echo json_encode($data);
	}

	function show(){
		$data = array(
				'id' => 7,
				'productname' => 'Product A'
			);
		// $this->load->view('inc/header');
		$this->load->view('home/show', $data);
		// $this->laod->view('inc/footer', $data['id']);
	}

	function showWithTemplate(){
		$this->_loadTemplate('home/show', [
				'id' => 7,
				'productname' => 'Product B'
			]);
	}
}








