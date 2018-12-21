<?php
date_default_timezone_get('Asia/Jakarta');

session_start();

include_once "conn.php";

$con = mysqli_connect($conn['host'],$conn['user'],$conn['pass'],$conn['db']);
if (mysqli_connect_errno()) {
	echo mysqli_connect_error();
}

function base_url($url = null){
	$base_url = "http://localhost/myproject";
	if ($url !=null) {
		return $base_url."/".$url;	
	} else {
		return $base_url;
	}
}

?>