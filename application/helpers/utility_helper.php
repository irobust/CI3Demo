<?php 

function duration($startDate = null, $endDate = null){
	if(is_null($startDate)) $startDate = date('Y-m-d');
	if(is_null($endDate)) $endDate = date('Y-m-d');
	if(!is_a($startDate, 'DateTime')){
		$start = new DateTime($startDate);
	}
	if(!is_a($endDate, 'DateTime')){
		$end   = new DateTime($endDate);
	}
	return $end->diff($start)->format('%d'); 
}