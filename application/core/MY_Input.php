<?php 

class MY_Input extends CI_Input{
	function post($index = null, $xssclean = true){
		$data = $this->_fetch_from_array($_POST, $index, $xssclean);
		if(is_array($data)){
			$sanitizeData = [];
			foreach ($data as $key => $item) {
				$sanitizeData[$key] = htmlspecialchars($item, ENT_QUOTES);			
			}
			return $sanitizeData;
		}else{
			return htmlspecialchars($data, ENT_QUOTES);
		}
	}
}