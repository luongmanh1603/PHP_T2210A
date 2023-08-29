<?php
session_start();
require "db.php";
$conn = connect();

$email = $_POST["email"];
$password = $_POST["password"];// 123456

// select * from users where email = '$email' and password = '$password' limit 1;

// email = abc@gmail.com
// password= ' or 1=1 '

// 1. tìm email xem có hay ko
// nếu ko có thì báo:  tài khoản haowcj mật khẩu ko đúng
$sql_check = "select * from users where email = '$email' limit 1";
$result = $conn->query($sql_check);
if($result->num_rows == 0){
    die("tài khoản hoặc mật khẩu ko đúng");
}
$user = $result->fetch_assoc();
// 2. compare password
$verify = password_verify($password,$user["password"]);
if($verify){
    $_SESSION["auth"] = $user;
    header("Location: products.php");
}else{
    die("tài khoản hoặc mật khẩu ko đúng");
}
