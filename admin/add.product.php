<?php require_once '../config/config.php';?>
<?php
if(isset($_SESSION['admin_login']))
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>افزودن محصول</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
<div id="main">
    <h1>افزودن محصول</h1>
    <hr>
    <div id="nav">
        <ul>
            <li><a href="index.php">نمایش فروشگاه</a></li>
            <li><a href="product.php">لیست محصولات</a></li>
            <li><a href="add.product.php">افزودن محصول</a></li>
            <li><a href="user.php">لیست کاربران</a></li>
            <li><a href="comments.php">نظرات</a></li>
            <li><a href="orders.php">سفارش ها</a></li>
            <li><a href="do_logout.php">خروج از بخش مدریت</a></li>

            <hr>
            <div class="admin_main">
                <div class="add_product">
                <form action="add.product.php"method="post">
                    <input type="text"name="product_name"placeholder="نام محصول"><br>
                    <input type="text"name="product_price" placeholder="قیمت محصول"><br>
                    <textarea name="product_desc"placeholder="توضیحات محصول"></textarea><br>
                    <input type="text"name="product_img"placeholder="نام عکس محصول"><br>
                    <input type="submit"name="add_product"value="افزودن محصول">
                </form>
            </div>
    </div>
        </ul>
    </div>
</body>
</html>
<?php
if(isset($_POST['add_product'])){
    $product_name=$_POST['product_name'];
    $product_price=$_POST['product_price'];
    $product_desc=$_POST['product_desc'];
    $product_img=$_POST['product_img'];
    $addproduct= mysqli_query($db,"INSERT INTO products(product_name,product_price,product_desc,product_img)VALUES('$product_name','$product_price','$product_desc','$product_img')");
    if ($addproduct){
        echo 'محصول با موفقیت افزوده شد';
    };
}
?>
