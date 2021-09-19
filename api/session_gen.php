<?php
session_regenerate_id();
setcookie("id" , "" , time()-100 );
setcookie("key" , "" , time()-100 );

$ip = $_SERVER['REMOTE_ADDR'];
$ipint = var_dump(ip2long($ip));

$id = "";
$key = $ipint

$_SESSION['id'] = $id;
setcookie("id",$id);
setcookie("key",$key);
?>
