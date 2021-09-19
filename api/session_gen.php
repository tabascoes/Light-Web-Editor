<?php
session_regenerate_id();
unset($_SESSION['id']);
unset($_SESSION['key']);

$ip = $_SERVER['REMOTE_ADDR'];
$ipint = var_dump(ip2long($ip));

$id = "";
$key = $ipint

$_SESSION['id'] = $id;
$_SESSION['key'] = $key;
?>
