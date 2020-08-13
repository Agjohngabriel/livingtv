<?php 

require 'connect.php';

function create($table, $data){
	global $conn;
	$sql = "INSERT INTO orders SET ";
	  $i = 0;
	  foreach ($conditions as $key => $value) {
	  	if ($i === 0) {
	  		$sql = $sql . " $key=?";
	  	} else {
	  		$sql = $sql . "   $key=?";
	  	}
	  	$i++;
	  	
	  }
}