<?php

session_start();


$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'login');

$name = $_POST['user'];
$password = $_POST['password'];
if(empty(trim($_POST["user"]))){
    header('location:login.php?usernamecannotbeempty');
}
elseif(empty(trim($_POST['password']))){
    header('location:login.php?passwordcannotbeempty');
}

$q = "select * from userss where name = '$name' && password = '$password'";
$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1){
    header('location: index.php');
}
else{
    header('location: login.php');
}

?>