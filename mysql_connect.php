<?php
$db_server = "127.0.0.1";
$db_name = "root";
$db_user = "webclass";
$db_password = "123456";
$conn = mysqli_connect($db_server, $db_name, $db_password, $db_user);
// $conn = mysqli_connect('127.0.0.1','root','123456','webclass');

if (!$conn) {
    exit('<h1>失敗</h1>');
}
