<?php require_once '../config/config.php';?>
<?php
if(isset($_SESSION['admin_login']))
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>مدریت فروشگاه</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
<div id="main">
    <h1>مدیریت فروشگاه</h1>
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
        </ul>

    </div>
    </div>
</body>
</html>
