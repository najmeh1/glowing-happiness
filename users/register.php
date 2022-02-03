<?php require_once '../config/config.php';?>
<?php
//if(isset($_SESSION['user_login'])) {
 // header("Location:login.php");
//}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ثبت نام کاربر</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
<div id="main">
    <div id="register">
        <form action="register.php"method="post">
            <input type="text"name="email" placeholder="ایمیل  "><br>
            <input type="text" name="display_name"placeholder="نام"><br>
            <input type="password"name="password" placeholder="کلمه عبور"><br>
            <input type="password"name="password-conf" placeholder="تکرار کلمه عبور"><br>
            <input type="submit"name="register" value="ثبت نام">
        </form>

    </div>
</div>
</body>
</html>
<?php
if(isset($_POST['register'])){
    $email=$_POST['email'];
    $name=$_POST['display_name'];
    $password=md5($_POST['password']);
    $password_conf=md5($_POST['password-conf']);
if($password != $password_conf){
    echo 'پسورد و تکرار آن با هم برابر نیستند';
}else{
    mysqli_query($db,"INSERT INTO users(display_name,email,password)VALUES('$name','$email','$password')");
    echo 'ثبت نام شما با موفقیت انجام شد ';

}
};
?>