<?php
session_start();
include("Dbconnection.php");
$username=$_POST["uname"];
$password=$_POST["pwd"];
$sql="select * from tbl_login where username='$username' and password='$password'";
$result=mysqli_query($con,$sql);
$n=mysqli_num_rows($result);
  if($n>0)
    {
      $_SESSION['uname']=$username;
      $_SESSION['pwd']=$password;
   header("location:homepage.php");
    }
else
{
?>
<script>alert("invalid user name or password")
    window.location.href="loginform.html";
</script>
<?php
}
mysqli_close($con);
   ?>
