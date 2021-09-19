<?php
session_start();
$session = $_COOKIE['PHPSESSID']
$randid = $_SESSION['randid'];
$id = $_SESSION['id'];
$key = $_SESSION['key'];
$ip = $_SERVER['REMOTE_ADDR'];

if $key = var_dump(ip2short($ip)){

// Need to change iv
openssl_decrypt($id, "AES-256-iv", $key, 0, "" );

$url = 'session_gen.php';

// POST送信するデータ
$data = array(
);

// URL エンコード
$data = http_build_query($data, "", "&");

// 送信時のオプション
$options = array('http' => array(
    'method' => 'POST',
    'content' => $data,
));

// ストリームコンテキストを作成
$options = stream_context_create($options);

// file_get_contents
$contents = file_get_contents($url, false, $options);

// 出力
}
?>
