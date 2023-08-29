<?php
require "db.php";
$fullname = $_POST["fullname"];
$email = $_POST["email"];
$password = $_POST["password"];

$conn = connect();
// 1.  Kiểm tra email đã có hay chưa?
$sql_check = "select * from users where email = '$email'";
if($conn->query($sql_check)->num_rows > 0){
    die("Email is existed!");
}
// 2. Nếu email chưa đk thì hash password
$hashed_password= password_hash($password,PASSWORD_BCRYPT);
$sql = "insert into users(fullname,email,password) values('$fullname','$email',
                                                  '$hashed_password')";
$conn->query($sql);
header("Location: register.php");
