<?php
include("Dbconnection.php");
$username=$_POST["uname"];
$password=$_POST["pass"];
$name=$_POST['Name1'];
$address=$_POST["Address"];
$gender=$_POST["g"];
$dob=$_POST["dob"];
$phone=$_POST["phone"];
$email=$_POST["Email"];

$country=$_POST["country"];
$file=$_FILES['file1']['name'];

$fileloc = "uploads/".$file;

move_uploaded_file($_FILES["file1"]["tmp_name"],$fileloc);

$sql="insert into tbl_login(username,password) values ('$username','$password')";
mysqli_query($con,$sql);
$n=mysqli_insert_id($con);
$sql="insert into register(name,address,gender,login_id,dob,phone,email,country,file) values('$name','$address','$gender',$n,'$dob','$phone','$email','$country','$file')";

if(mysqli_query($con,$sql))
{
header("location:loginform.html");
}
mysqli_close($con);
?>
