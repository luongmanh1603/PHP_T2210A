<?php
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
// 2. query db
$sql = "select * from products";
$result = $conn->query($sql);
$products= [];
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        $products[] = $row;
    }
}

?>
<!doctype html>
<html lang="en">
<head>
    <?php include("head.php"); ?>
</head>
<body>
<?php include("nav.php"); ?>
<section>
    <div class="container">
        <a href="create.php" class="btn btn-outline-primary">Create a new product</a>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Qty</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($products as $item):?>
                <tr>
                    <td><?php echo $item["id"] ?></td>
                    <td><?php echo $item["name"] ?></td>
                    <td><?php echo $item["price"] ?></td>
                    <td><?php echo $item["description"] ?></td>
                    <td><?php echo $item["qty"] ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $item["id"] ?>" class="btn btn-warning">Edit</a>
                        <a onclick="return confirm('Chắc chắn muốn xoá sản phẩm: <?php echo $item["name"] ?>')" href="delete.php?id=<?php echo $item["id"] ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>
    </div>
</section>
</body>
</html>
