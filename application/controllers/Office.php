<?php 

class Office extends MY_Controller{

	public function index($offset=0){
		$this->load->model('DataObjects/OfficeModel', 'office');
		$result = $this->office->getAll('array', $offset);
		$countOffice = $this->office->count();

		$this->table->set_template(array(
			'table_open' => '<table class="table table-striped">'
		));

		$this->pagination->initialize(array(
			'base_url' 	 => site_url('Office/index'),
			'total_rows' => $countOffice,
			'per_page'	 => 2,
			'first_tag_open'  => '<li>',
			'first_tag_close' => '</li>',
			'next_tag_open'  => '<li>',
			'next_tag_close' => '</li>',
			'cur_tag_open'  => '<li><a href="#">',
			'cur_tag_close' => '</a></li>',
			'last_tag_open'  => '<li>',
			'last_tag_close' => '</li>',
			'prev_tag_open'  => '<li>',
			'prev_tag_close' => '</li>',
			'num_tag_open'  => '<li>',
			'num_tag_close' => '</li>'
		));

		$this->load->view('Office/list.php', compact('result'));
	}

	function frmAdd(){
		$this->load->view('Office/frmAdd');
	}

	function add(){
		$office = $this->input->post('office');

		$this->form_validation->set_error_delimiters('<div class="error">',
													 '</div>');

		// $this->form_validation->set_rules('office', 'Office', 'required|min_length[5]');

		if($this->form_validation->run('addNewOffice') === false){
			$this->frmAdd();
		}else{
			echo 'Insert '.$office.' into database';
		}
	}
}