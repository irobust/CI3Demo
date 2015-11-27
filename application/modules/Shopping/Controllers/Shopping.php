<?php 

class Shopping extends MX_Controller{
	function index(){
		echo 'Shopping Controller<br/>';
		echo modules::run('Finance/partial');

		$this->load->model('ShoppingModel','shopping');
		echo $this->shopping->orders().'<br/>';

		$this->load->model('Finance/FinanceModel', 'finance');
		echo $this->finance->top5();

		$this->load->model('DataObjects/EmployeeModel', 'employee');
		var_dump($this->employee->getAll());
	}
}