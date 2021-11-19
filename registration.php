<?php

session_start();
header('location: login.php');

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

$q = "select * from userss where name = '$name'";
$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1){
    header('location:login.php?useralradyexists');
}
else{
    $qy = "insert into userss(name, password) values ('$name', '$password')";
    mysqli_query($con, $qy);
    echo "registration successfull";
}

?>