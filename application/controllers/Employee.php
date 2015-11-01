<?php 

class Employee extends MY_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('DataObjects/EmployeeModel', 'employee');
		// $this->lang->load('common');
	}

	function index(){

		$this->load->model('DataObjects/OfficeModel', 'office');
		
		$employees = $this->employee->getAll();
		$offices = toDropdownList($this->office->getAll());
		
		$this->load->view('Employee/list', compact('employees','offices'));
	}

	function office(){
		$id = $this->input->post('officeCode');
		
		$employees = $this->employee->byOffice($id);
		
		$this->load->model('DataObjects/OfficeModel', 'office');
		$offices = toDropdownList($this->office->getAll());
		
		$this->load->view('Employee/list', compact('employees', 'offices'));
	}

	function insertForm(){
		$this->load->view('Employee/insert');
	}

	function insert(){
		$this->employee->insert($this->input->post());
	}

	function detail(){
		$employeeNumber = $this->uri->segment(3);

		$employee = $this->employee->byId($employeeNumber);

		$this->load->view('Employee/detail', compact('employee'));

		// redirect(__class__.'/insertForm','location', 301);
	}


}