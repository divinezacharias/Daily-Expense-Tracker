<?php
	session_start();

  if(isset($_SESSION['uname']))
  {
      	include("Dbconnection.php");
				$login_id =$_SESSION['login_id'];
				$username = $_SESSION['uname'];

				$image = "select file1 from register where login_id = (select login_id from tbl_login where username = '$uname');";
				$result = mysqli_query($con,$file);

        if(mysqli_num_rows($result)>0)
        {
						while($row = mysqli_fetch_array($result))
            {

		   					//$imgURL = 'Uploads/'.$row["Image"];
								$fileloc = "uploads/".$file;
            }
        }

       else
        {
            header('location: register.html');
        }
  }

  else
  {
      header('location: loginform.html');
  }


?>





<!DOCTYPE html>

<html>
    <head>
	<title> Login Message </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<style>
                .log{
			text-align :right;
                        color : red;
		}
		.maindiv{
			height:100%;
			min-height:100vh;
			width:100vw;
		}
		.panel{
			position:absolute;
			top:50%;
			left:50%;
			transform: translate(-50%, -50%);
		}

                a{
                    text-align : left;
                 }


	</style>
    </head>

    <body background = "result.jpg"> <br> <br>
        <div class = "log">
           <a href = "edit.php"> Edit Profile </a>
           <a href = "logout.php">Logout </a>
        </div>
	<!--<div class="maindiv">
		<div class="panel">-->

			<center> <h3>WELCOME TO HOME, <?= $lname?>.</h3> </center>
<?php
//echo($lname);
?>
                  <center> <img src="<?php echo($imgURL); ?>" alt="thepic"> </center> <br>

                  <table>
                       <tr>
                         <td> <td> <td> Name : &nbsp; </td> </td> </td>
                         <td>
													 <?php
													 			$sql = "select * from tbl_registration where Login_Id = (select Login_Id from tbl_login where Username = '$lname');";
																$resulti = mysqli_query($con,$sql);
																$row = mysqli_fetch_array($resulti);
													      echo $row['Name'];
													 ?>
												  </td>
                       </tr>
                 </table>

		</div>
	</div>
   </body>
</html>
