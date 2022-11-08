
<?php
session_start();
header('location:index.php');
$conn= mysqli_connect('localhost','root','');
mysqli_select_db($conn,'jobs1');
    $cname=$_POST['cname'];
    $pos=$_POST['pos'];
    $Jdesc=$_POST['Jdesc'];
    $skills=$_POST['skills'];
    $CTC=$_POST['CTC'];

$s1 = "select * from jobvac where cname = '$cname'";
$result1 = mysqli_query($conn, $s1);
$num1=mysqli_num_rows($result1);
if($num1 == 1){
    echo" username Already taken";
}else{
    $reg1="INSERT INTO `jobvac`(`cname`, `position`, `Jdesc`, `skills`, `CTC`) VALUES ('$cname','$pos','$Jdesc','$skills','$CTC')";
    mysqli_query($conn, $reg1);
    echo" Registration Successful";
}
session_end();
?>