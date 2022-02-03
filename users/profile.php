<?php require_once '../config/config.php';?>
<?php
//if(!isset($_SESSION['user_login'])) {
   // header("Location:login.php");
//}
$email=$_SESSION['user_login'];
$gitUsername=mysqli_query($db,"SELECT * FROM users WHERE email='$email'");
$username = mysqli_fetch_array($gitUsername);

 ?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>پروفایل کاربر</title>
        <link rel="stylesheet" href="../styles/styles.css">
    </head>
    <body>
    <div id="main">
        <h1>پروفایل کاربر</h1>
        <hr>
    <div id="nav">
        <ul>
            <li><a href="">مشخصات</a></li>
            <li><a href="">سفارشات</a></li>
            <li><a href="../config/do_logout.php">خروج</a></li>
            <hr>
            <div class="admin_main">
                <ul>
                    <li> نام شما :<?php echo $username['display_name']?></li><br>
                    <li>ایمیل شما: <?php echo $_SESSION['user_login']?></li>
                </ul>
            </div>
        </ul>
    </div>
    </body>
    </html>