<?php
header('Content-type: application/json');

$info = (object)[];

$info->ip = $_SERVER["REMOTE_ADDR"];
$info->software = $_SERVER['SERVER_SOFTWARE'];
$info->language = $_SERVER['HTTP_ACCEPT_LANGUAGE'];

echo json_encode($info);
?>
