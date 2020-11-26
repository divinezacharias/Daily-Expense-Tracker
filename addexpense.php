<?php
session_start();
include("Dbconnection.php");
$type=$_POST['type'];
$name=$_POST['name'];
$date=$_POST['date'];
$amount=$_POST['amount'];

$username=$_SESSION["uname"];
$password=$_SESSION["pwd"];

// print_r($_POST);die();

$sql="select * from tbl_login where username='$username' and password='$password'";
$r=mysqli_query($con,$sql);
$row=mysqli_fetch_array($r);
$n=$row['login_id'];

$sql1="insert into expense(login_id,type,name,date,amount) values ($n,'$type','$name','$date','$amount')";

if(mysqli_query($con,$sql1))
    {
    ?>
    <script>alert("successfully inserted");</script><?php
    header("location:success.html");
    ?><?php
    }
else
{
header('location:main.php');
}
mysqli_close($con);
?>
