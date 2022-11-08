<?php
session_start();
header('location:login.php');
$con= mysqli_connect('localhost','root','');
mysqli_select_db($con,'jobs1');
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['phone_no'];
$password = $_POST['password'];

$s = "select * from users where name = '$name'";
$result = mysqli_query($con, $s);
$num=mysqli_num_rows($result);
if($num == 1){
    echo" username Already taken";
}else{
    $reg=" insert into users(name,email,phone_no,password) values ('$name' ,'$email' ,'$number' ,'$password')";
    mysqli_query($con, $reg);
    echo" Registration Successful";
}
?>