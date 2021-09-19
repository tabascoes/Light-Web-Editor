<?php
session_start();
session_regenerate_id();
unset($_SESSION['id']);
unset($_SESSION['key']);

$ip = $_SERVER['REMOTE_ADDR'];
$ipint = var_dump(ip2long($ip));

function random($length = 8)
{
    return array_reduce(range(1, $length), function($p){ return $p.str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789')[0]; });
}

$id = random(100);
$key = $ipint

$_SESSION['id'] = $id;
$_SESSION['key'] = $key;
?>
