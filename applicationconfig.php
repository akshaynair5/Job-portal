<?php
$servername="localhost";
$username="root";
$password="";
$db="jobs1";
$conn= mysqli_connect($servername,$username,$password,$db);
if(!$conn){
    die("connection failed: ".mysqli_connect_error());
}
if(isset($_POST['submit1'])){
    $name=$_POST['name'];
    $phone_no1=$_POST['phone_no1'];
    $qual=$_POST['qual'];
    $apply=$_POST['apply'];
    $year=$_POST['year'];
    $sql="INSERT INTO `candidates`(`name`, `phone_no1`, `qual`, `year`, `apply`) 
    values ('$name','$phone_no1','$qual','$year','$apply')"; 
 
    if(mysqli_query($conn,$sql)){
        echo "application sent successfully!";
    } else{
        echo"error:".$sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
