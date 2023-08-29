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
                <form action="post.php" method="post">
                    <div class="mb-3">
                        <label>Product Name</label>
                        <input type="text" name="name" class="form-control" required/>
                    </div>
                    <div class="mb-3">
                        <label>Product Price</label>
                        <input type="number" name="price" class="form-control" required/>
                    </div>
                    <div class="mb-3">
                        <label>Product Qty</label>
                        <input type="number" name="qty" class="form-control" required/>
                    </div>
                    <div class="mb-3">
                        <label>Product Description</label>
                        <textarea name="description" class="form-control"></textarea>
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
