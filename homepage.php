<?php
session_start();
$uname=$_SESSION['uname'];

?>



<html>
<head>
<title></title>

<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/mdb.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
</head>
<body>
<div class="submenu">
<div class="container">
<div class="row">

<div class="col-lg-4" "col-sm-12">info@company.com 9999999999</div>
<div class= "col-lg-8" "col-sm-12">
<div class="submenuright">
<img src="img/facebook-icon.png" width="20"height="20"/>
<img src="img/linked.png"width="20" height="20"/></div>
</div></div>
<?php
if(isset($_SESSION['uname']))
{
include("Dbconnection.php");


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
   		 <img id="lavan" width="4%" src="<?php echo $imageURL; ?>" alt="" />


								<span class='ioio'>welcome <?php echo $_SESSION['uname'];?></span>
								<?php
}
}
else
{
	header("location:loginform.html");
}
?>
</div></div><div class="menu"><div class="container"><div class="row">
<div class="col-lg-2" "col-sm-12"> </div>
<div class="col-lg-10" "col-sm-12">
<div class="submenuright">
<ul class="menuitem">

<li><a href="main.php">Add a new Expense</a></li>
<li><a href="modify.php">View Expense</a></li> 
<li><a href="contact.html">Contact us</a></li>
<li><a href="register.html">Sign up</a></li>

<li><a href="logout.php">Logout</a></li>
</ul></div></div></div>
</div>
</div>
<div class="image">
<img src="img/FP-Specimen_FP-SFJB.gif"/>




</div>
</div></br></br></div>
 </div></p>
</div>
</div></div>



<center>
<div><h2> About Us<h2></center> </div>
<div class=""container>
<div class="row">
<div class="col-lg-4" "col-sm-12">
<table><tr><td><img src="img/dfdf.gif" width=600px height=400px></td>
<div><p></br><td><h4>Expense tracker is complete app to track your all the expenses bared by your pocket or bared by you & manage your personal finance. So that you can trace where your money goes as well as from where money comes in, you can limit & plan accordingly. A feature rich tracking application with numerous powerful tools like, Income/Expense, Bills, Accounts, Reports etc. Not only that, app has all the information yet not un-secure as it does not ask to save any sensitive data for its operations.<br><br><br>Also features like Income/Expense, keep tracking of your incoming & outgoing flows, Bills maintain your recurring expenses & keep reminding you as your helping hand. Out of these features reports is a mind blowing Artificial intelligence based feature, that analyzes based on your data and gives graphical results of your income & expenses. Over all a powerful personal finance tool that keeps on improving your productivity, saves a time & helps you to save your money.</td></h4></tr></table></div>
</div>


<center>
<div><h2> Services<h2></center> </div>
<div class=""container>
<div class="row">
<div class="col-lg-4" "col-sm-12">
<table><tr><td><img src="img/ft.gif" width=600px height=400px></td>
<div><p></br><td><h4><ul><li>7X Faster processing of expenses.</li><br>
<li>>30% Improvement in employee productivity..</li><br>
<li>96% Reduction in paperwork.</li><br>
<li>Reduced leakage on false submissions.</li></ul></td></h4></tr></table></div>
</div>


<br>
<br>


<div class="footer">
<span class="footerleft">info@company.com</span>
<span class= "footerright">
<img src="img/facebook-icon.png" width="20"height="20"/>
<img src="img/linked.png"width="20" height="20"/>
</span>
</div>
</body>
</html>
