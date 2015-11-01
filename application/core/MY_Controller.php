<?php 

class MY_Controller extends CI_Controller{

	function __construct(){
		parent::__construct();

		if(isset($_SESSION['lang'])){
			$this->lang->load('common', $_SESSION['lang']);
		}
	}

	// $view = content ที่ต้องการ load เข้ามา
	function _loadTemplate($view, $data = []){
		$content = $this->load->view($view, $data, TRUE);

		// $this->load->view('masterpage', compact('content'));
		$this->load->view('masterpage', ['content' => $content]);

	}
}