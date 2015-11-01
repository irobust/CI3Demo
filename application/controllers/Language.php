<?php 

class Language extends MY_Controller{
	function locale($language){
		// $this->session->userdata('lang', $language);
		$_SESSION['lang'] = $language;

		redirect('Employee', 'location', 301);
	}
}