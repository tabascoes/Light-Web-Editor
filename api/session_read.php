<?php
session_start();
$session = $_COOKIE['PHPSESSID']
$randid = $_SESSION['randid'];
$id = $_SESSION['id'];
$key = $_SESSION['key'];
$ip = $_SERVER['REMOTE_ADDR'];

// Need to change iv
openssl_decrypt($id, "AES-256-iv", $key, 0, "" );
?>
