<?php

setcookie("id" , "" , time()-100 );
setcookie("key" , "" , time()-100 );

session_start();
$session_id = session_id();

echo $session_id;

$ip = $_SERVER['REMOTE_ADDR'];
$ipint = var_dump(ip2long($ip));

$id = $session_id;
$key = $ipint
	
setcookie("id",$id);
setcookie("key",$key);
?>
