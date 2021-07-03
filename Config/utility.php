<?php
// require_once("config.php");
function execute($sql){
    $conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
	mysqli_set_charset($conn, 'utf8');

	mysqli_query($conn, $sql);

	mysqli_close($conn);
}
function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}

function executeResult($sql, $isSingle = false) {
	$conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
	mysqli_set_charset($conn, 'utf8');


	$resultset = mysqli_query($conn, $sql);
	$data      = [];


	if($isSingle) {
		$data = mysqli_fetch_array($resultset, 1);
	} else {
		while (($row = mysqli_fetch_array($resultset, 1)) != null) {
			$data[] = $row;
		}
	}


	mysqli_close($conn);

	return $data;
}
function getGET($key){
	$value = '';
	if(isset($_GET[$key])){
		$value = $_GET[$key];
	}
	$value = fixSqlInjection($value);
	return $value;
}

function getPOST($key){
	$value = '';
	if(isset($_POST[$key])){
		$value = $_POST[$key];
	}
	$value = fixSqlInjection($value);
	return $value;
}


function fixSqlInjection($str) {
	$str = str_replace("\\", "\\\\", $str);
	$str = str_replace("'", "\'", $str);
	return $str;
}
function getMD5Security($pwd) {
	return md5(md5($pwd).MD5_PRIMARY_KEY);
}


?>