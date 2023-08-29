<?php
$p_name = $_POST["name"];
$p_price = $_POST["price"];
$p_qty = $_POST["qty"];
$p_description = $_POST["description"];

// get products from db
// 1. connect db
$host = "127.0.0.1";
$dbname = "t2210a_php";
$dbuser = "root";
$dbpass = "root"; // Xampp: ""   Mamp: "root"

$conn = new mysqli($host,$dbuser,$dbpass,$dbname); // host user pass dbname
if($conn->connect_error){
    die("Connection refused!");
}
// connection succeed
$sql = "insert into products(name,price,qty,description) values('$p_name',$p_price,$p_qty,'$p_description')";
$conn->query($sql);
header("Location: products.php");
