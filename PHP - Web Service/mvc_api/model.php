<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Methods: *");

class model
{

	public $conn = "";

	function __construct()
	{
		$this->conn = new mysqli('localhost', 'root', '', 'students');
	}

	// select data query

	function table_select($table)
	{
		$sel = "select * from $table"; // query
		$run = $this->conn->query($sel); // run on the database
		while ($data = $run->fetch_object()) // fetch all data from database
		{
			$arr[] = $data;
		}
		if (!empty($arr)) {
			
			return $arr;
		}

	}

	// insert the data in DB query

	function insert($table, $arr)
	{
		$col_key = array_keys($arr);
		$col = implode(",", $col_key);

		$value_arr = array_values($arr);
		$value = implode("','", $value_arr);

		$ins = "insert into $table($col) values ('$value')";
		$run = $this->conn->query($ins);
		return $run;
	}

	// select where data fetch

	function select_where($table, $where)
	{
		$col_w = array_keys($where);
		$value_w = array_values($where);

		$sel = "select * from $table where 1=1"; // 1=1 means query continue
		$i = 0;
		foreach ($where as $w) {
			$sel .= " and $col_w[$i]='$value_w[$i]'";
			$i++;
		}
		$run = $this->conn->query($sel);
		return $run;
	}

	// delete data from the Database side

	function delete_where($table, $where)
	{
		$col_w = array_keys($where);
		$value_w = array_values($where);

		$del = "delete from $table where 1=1"; // 1=1 means query continue
		$i = 0;
		foreach ($where as $w) {
			$del .= " and $col_w[$i]='$value_w[$i]'";
			$i++;
		}
		$run = $this->conn->query($del);
		return $run;
	}

	// Edit data function and update

	function update_where($tbl, $data, $where)
	{
		$upd = "UPDATE $tbl set";

		$col_d = array_keys($data);
		$value_d = array_values($data);
		$j = 0;

		$count = count($data);
		foreach ($data as $d) {
			if ($count == $j + 1) {
				$upd .= " $col_d[$j]='$value_d[$j]'";
			} else {
				$upd .= " $col_d[$j]='$value_d[$j]' , ";
				$j++;
			}
		}

		$upd .= " where 1=1";
		$col_w = array_keys($where);
		$value_w = array_values($where);
		$i = 0;
		foreach ($where as $w) {
			echo $upd .= " and $col_w[$i]='$value_w[$i]'";
			$i++;
		}
		$run = $this->conn->query($upd);
		return $run;
	}


}
$obj = new model;
?>