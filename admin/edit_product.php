
<?php require_once '../config/config.php';?>
<?php
if(isset($_SESSION['admin_login']))
    header("Location :login.php");
$id = $_GET['id'];
$query = mysqli_query($db,"SELECT * FROM products WHERE id = $id" );
$productInfo=mysqli_fetch_array($query);
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
                <form action="edit_product.php"method="post">
                    <input type="text"name="product_name"value="<?php echo $productInfo['product_name'];?>" placeholder="نام محصول"><br>
                    <input type="text"name="product_price"value="<?php echo $productInfo['product_price'];?>" placeholder="قیمت محصول"><br>
                    <textarea name="product_desc"placeholder="توضیحات محصول"><?php echo $productInfo['product_desc'];?></textarea><br>
                    <input type="text"name="product_img" value="<?php echo $productInfo['product_img'];?>" placeholder="نام عکس محصول"><br>
                    <input type="submit"name="add_product"value="بروز رسانی محصول">
                </form>
            </div>
    </div>
        </ul>
    </div>
</body>
</html>