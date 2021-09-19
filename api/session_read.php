<?php
$id = $_COOKIE["id"];
$key = $_COOKIE["key"];

$ip = $_SERVER['REMOTE_ADDR'];

	
setcookie("id" , "" , time()-100 );
setcookie("key" , "" , time()-100 );
?>
