<?php
$id = $_GET["id"];
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
$sql = "select * from products where id = $id";// 0 | 1
$result = $conn->query($sql);
if($result->num_rows > 0){
    $new_name = $_POST["name"];
    $new_price = $_POST["price"];
    $new_qty = $_POST["qty"];
    $new_description = $_POST["description"];
    $update_sql = "update products set name='$new_name',price=$new_price,qty=$new_qty,
                    description='$new_description' where id=$id";
    $conn->query($update_sql);
    header("Location: products.php");
}else{
    die("404 not found!");
}
