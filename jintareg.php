<?php
    session_start();
    include("Dbconnection.php");



    if (isset($_POST['submit'])){
      //$usertype = 0;
      $username = $_POST['uname'];
      $password = $_POST['pwd'];
      $result = mysqli_query($con,"select * from tbl_login where username = '$username' and password='$password'");

    //$rows = mysqli_fetch_array($result);

    if (mysqli_num_rows($result)>0)
    {
      while($row = mysqli_fetch_array($result))
      {
        $login_id = $row['login_id'];
        echo $login_id;
        $_SESSION['login_id'] = $login_id;
      }

	$_SESSION['uname']=$username;
      //  $_SESSION['thepic']=$imgurl;
        mysqli_close($con);
	header('location: logmsg.php');
   }

  }
 if (isset($_POST['RegForm'])){

   $name=$_POST['Name1'];
   $address=$_POST["Address"];
   $gender=$_POST["g"];
   $dob=$_POST["dob"];
   $phone=$_POST["phone"];
   $email=$_POST["Email"];
   $country=$_POST["country"];
   $file=$_FILES['file1']['name'];

  $sqli = "select * from tbl_login where Username = '$username'";
  $resulti = mysqli_query($con,$sqli);
  $usertype = $row['Usertype'];
  if($usertype == 0)
  {
    header('location : logmsg.php');
  }
  else
    {
      header('location:loginform.html');
    }

  if(mysqli_num_rows($resulti)<1)
  {
   $sql = "insert into tbl_login(username,password) values('$username','$password')";
   mysqli_query($con, $sql);
   $id = mysqli_insert_id($con);

    $sqli = "insert into register(name,address,gender,login_id,dob,phone,email,country,file) values('$name','$address','$gender',$n,'$dob','$phone','$email','$country','$file')";

    $fileloc = "uploads/".$file;
    move_uploaded_file($_FILES["file1"]["tmp_name"],$fileloc);
    if(mysqli_query($con,$sqli))

    ?>
              <script>
                  window.alert('Success');
              </script>

     <?php
      }
     else
      {
      ?>
        <script>
              window.alert( "Already Registered User");
        </script>
    <?php
      }


         mysqli_close($con);
       }
         //header('location: login.html');

	  ?>
