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
$product = null;
if($result->num_rows > 0){
    $product = $result->fetch_assoc();
}else{
    die("404 not found!");
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
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <form action="update.php?id=<?php echo $id;?>" method="post">
                    <!--                    <input type="hidden"name="id" value="--><?php //echo $id;?><!--"/>-->
                    <div class="mb-3">
                        <label>Product Name</label>
                        <input type="text" value="<?php echo $product["name"] ?>" name="name" class="form-control" required/>
                    </div>
                    <div class="mb-3">
                        <label>Product Price</label>
                        <input type="number" value="<?php echo $product["price"] ?>" name="price" class="form-control" required/>
                    </div>
                    <div class="mb-3">
                        <label>Product Qty</label>
                        <input type="number" value="<?php echo $product["qty"] ?>" name="qty" class="form-control" required/>
                    </div>
                    <div class="mb-3">
                        <label>Product Description</label>
                        <textarea name="description" class="form-control"><?php echo $product["description"] ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col"></div>
        </div>
    </div>
</section>
</body>
</html>
