<?php
  session_start();
if(isset($_SESSION['uname']))
{

    include("Dbconnection.php");
    $username=$_SESSION['uname'];
    $sql = "select * from register where login_id = (select login_id from tbl_login where username = '$username');";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
    // print_r($_POST); die();

    if (isset($_POST['Save'])){
    $username =$_SESSION["uname"];
    $name = $_POST['Name1'];
    $address = $_POST['Address'];
    $gender = $_POST['g'];
    $dob = $_POST["dob"];
    $phone=$_POST["phone"];
    $email=$_POST["Email"];
    //$img = $_FILES["myFile"]['name'];
    $country=$_POST["country"];
  //  $username=$_POST["uname"];
    //$password=$_POST["pass"];
  //  $file=$_FILES['file1']['name'];

  //  $fileloc = "uploads/".$file;

  //  move_uploaded_file($_FILES["file1"]["tmp_name"],$fileloc);

   $update = "update register set name = '$name', address = '$address', gender = '$gender',dob='$dob', phone = '$phone', email = '$email',country='$country'where login_id = $n";

   $resulte = mysqli_query($con,$update) or die ("ayyo query moonchi");
   // $sqli = "select * from tbl_registration where Login_Id = '$lid'";
   // $resulti =  mysqli_query($con,$sqli);
   // $rowi = mysqli_fetch_array($resulte);
}
?>
<!DOCTYPE html>
<html>
 <head>
   <title> Edit Profile </title>
 </head>

  <body background = "ty.jpg">
    <form method="POST" action=""> <br>
    <center>
      <table>
      <tr>
        <td> Name </td>
        <td> <input type = "text" name = "Name1"   value = "<?php echo $row['name']; ?>"> </td>

      </tr>

      <tr>
        <td> Address </td>
        <td> <input type = "text"  rows = "5" cols = "17" name = "Address" value = "<?php echo $row['address']; ?>" > </td>

      </tr>

      <tr>
        <td> Gender </td>
        <td> <input type = "text" name = "g"   value = <?php echo $row['gender'];?> > </td>
      </tr>


      <tr>
        <td> Dob </td>
        <td> <input type = "date" name = "dob"   value = <?php echo $row['dob'];?> > </td>
      </tr>


      <tr>
        <td> Phone No </td>
        <td> <input type = "text" name = "phone" value = <?php echo $row['phone'];?> /> </td>

      </tr>


      <tr>
        <td> Email </td>
        <td> <input type = "text" name = "Email" value = <?php echo $row['email'];?>  /> </td>
      </tr>

      <tr>
        <td> country </td>
        <td> <input type = "text" name = "country" value = <?php echo $row['country'];?> /> </td>



      <tr>
        <td>  File:

                 <td> <input type = "text" name = "file1" value =<?php echo $row['file'];?>/> </td>


         </td>
    </tr>

      <tr>
        <td> <td><input type = "submit" name = "Save" value = "Save My Details" class = "btn"/> </td> </td>

      </tr>
</table>
</center>
</form>

<?php
}
?>
