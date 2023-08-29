<?php
$id = $_GET["id"];

$host = "127.0.0.1";
$dbname = "t2210a_php";
$dbuser = "root";
$dbpass = "root"; // Xampp: ""   Mamp: "root"

$conn = new mysqli($host,$dbuser,$dbpass,$dbname); // host user pass dbname
if($conn->connect_error){
    die("Connection refused!");
}
// connection succeed
$sql = "delete from products where id=$id";// 0 | 1
$result = $conn->query($sql);
header("Location: products.php");
