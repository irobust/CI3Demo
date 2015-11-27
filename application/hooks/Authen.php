<?php 

class Authen{
	private $CI;

	function __construct(){
		$this->CI = &get_instance();
	}

	function login(){
		if(strtolower($this->CI->uri->segment(1)) == 'login') return;
		if(isset($_SESSION['username'])){
			echo 'Welcome '.$_SESSION['username'];
		}else{
			$_SESSION['Controller'] = $this->CI->uri->segment(1);
			if(!empty($this->CI->uri->segment(2)))
				$_SESSION['Action'] 	= $this->CI->uri->segment(2);
			else
				$_SESSION['Action']		= 'index';
			redirect('Login');
		}
	}
}