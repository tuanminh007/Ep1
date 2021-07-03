<?php

//DIEU HUONG theo MODULE va ACTION
$module = $action ='';
if(isset($_GET['module'])){
	$module = $_GET['module'];
}

if(isset($_GET['action'])){
	$action = $_GET['action'];
}

if($module == "" || $action == ""){
	$module = "Common";
	$action = "login";
}
//Dan den file
$path = "Module/$module/$action.php";

//Kiem tra duong dan

if(file_exists($path)){
	require_once ("Config/connectDB.php");
	require_once ("Config/session.php");
	require_once ($path);
	require_once ("Config/closeDB.php");
}
else{
	require_once("Module/Common/Notfound.php");
}

?>