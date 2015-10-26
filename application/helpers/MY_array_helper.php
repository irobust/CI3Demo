<?php 

// convert result from query to dropdown list format
function toDropdownList($result, $keyColumn=null, $valueColumn=null){
	$list = [];

	if(is_null($keyColumn)){
		if(is_object($result[0])){
			reset($result[0]);
			$keyColumn = key($result[0]);
		}else{
			$keyColumn = array_keys($result[0])[0];
		}
	}

	if(is_null($valueColumn)){
		if(is_object($result[0])){
			reset($result[0]);
			next($result[0]);
			$valueColumn = key($result[0]);
		}else{
			$valueColumn = array_keys($result[0])[1];
		}
	}

	foreach ($result as $row) {
		if(is_object($row)){
			$row = (array)$row;
		}
		$key = $row[$keyColumn];
		$list[$key] = $row[$valueColumn];
	}
	return $list;
}