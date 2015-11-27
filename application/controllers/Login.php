<?php 

class Login extends MY_Controller{
	function index(){
		$this->load->view('login');
	}

	function authen(){
		// Check username and password
		$_SESSION['username'] = 'admin';
		redirect($_SESSION['Controller'].'/'.$_SESSION['Action']);
	}

	function logout(){
		session_destroy();
	}
}