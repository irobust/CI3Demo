<?php
use Illuminate\Database\Capsule\Manager as DB;

class Test extends MY_Controller{
	function queryBuilder(){
		$employees = DB::table('employees')->get();

		foreach ($employees as $employee) {
			echo "<div>{$employee->firstName}</div>";
		}
	}

	function orm(){
		$this->load->model('DataObjects/ProductModel');

		$products = ProductModel::all();

		foreach ($products as $product) {
			echo "<div>{$product->productName}</div>";
		}
	}
}