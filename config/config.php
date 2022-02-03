<?php
$db =mysqli_connect('localhost','najmeh','najmeh09120354186','simple-ecommerce');
if(!$db){
    echo mysqli_connect_error();
}
ini_set('display_errors',1);
error_reporting(E_ALL);
session_start();
define('ADMIN_USERNAME','admin');
    define('ADMIN_PASSWORD','13579');