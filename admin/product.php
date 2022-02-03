<?php require_once '../config/config.php';?>
<?php
if(isset($_SESSION['admin_login'])){
    header("Location:login.php");
}
$query= mysqli_query($db,"SELECT * FROM products");
    ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>لیست محصولات</title>
    <link rel="stylesheet" href="../styles/styles.css">
    <link rel="stylesheet" type="imge/png" href="../img/bak.jpg">
</head>
<body>
<div id="main">
    <h1>لیست محصولات</h1>
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
        </ul>
            <hr>
       <div class="admin_main">
         <div class="products">
           <table>
               <tr>
                   <th>نام محصول</th>
                   <th>قیمت محصول</th>
                   <th><a href="">ویرایش</a></th>
               </tr>
               <?php while ($row = mysqli_fetch_array($query)){               ?>
               <tr>
                   <td><?php echo $row['product_name']?></td>
                   <td><?php echo $row['product_price']?> </td>
                   <td><a href="edit_product.php?id<?php echo $row['id']?>">ویرایش</a> - <a href="delete_product.php?id=<?php echo $row['id']?>">حذف</a></td>
               </tr>
              <?php }?>
           </table>
       </div>
    </div>
</body>
</html>
