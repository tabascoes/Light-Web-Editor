<?php
$session = $_COOKIE['PHPSESSID']
$id = $_COOKIE["id"];
$key = $_COOKIE["key"];

$ip = $_SERVER['REMOTE_ADDR'];

	
setcookie("id" , "" , time()-100 );
setcookie("key" , "" , time()-100 );
session_regenerate_id();
?>
