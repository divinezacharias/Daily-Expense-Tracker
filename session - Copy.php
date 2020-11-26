<?php
session_start();
if(isset($_SESSION['uname']))
{
include("Dbconnection.php");


?>
<html>
<head>
</head>
<body>
<?php
echo"welecome ".$_SESSION['uname'];
$n=$_SESSION['uname'];
$p=$_SESSION['pwd'];
$log="select login_id from tbl_login where username='$n' and password='$p'";
$res=mysqli_query($con,$log);
$ro=mysqli_fetch_array($res);
$id=$ro['login_id'];
$query1 = "select file from register where login_id='$id'";
$result=mysqli_query($con,$query1);
		while($row = mysqli_fetch_array($result))
                         {
        	  	     $imageURL = 'uploads/'.$row["file"];
	?>
   		 <img width="5%" src="<?php echo $imageURL; ?>" alt="" />
                 <a href="logout.php">Logout</a>
	<?php }
}
else
{
	header("location:loginform.html");
}
?>
