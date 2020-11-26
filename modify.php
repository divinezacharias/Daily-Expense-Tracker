<?php
  session_start();
if(isset($_SESSION['uname']))
{

    include("Dbconnection.php");
    $username=$_SESSION['uname'];
    $sql = "select * from expense where login_id = (select login_id from tbl_login where username = '$username');";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
    // print_r($_POST); die();

    if (isset($_POST['Save'])){
    //$username =$_SESSION["uname"];
    $type = $_POST['type'];
    $name = $_POST['name'];
    $date = $_POST['date'];
    $amount = $_POST['amount'];

  //  $username=$_POST["uname"];
    //$password=$_POST["pass"];
  //  $file=$_FILES['file1']['name'];

  //  $fileloc = "uploads/".$file;

  //  move_uploaded_file($_FILES["file1"]["tmp_name"],$fileloc);

   $update = "update expense set name = '$name', type = '$type', date = '$date',amount='$amount'where login_id = (select login_id from tbl_login where username = '$username');";

   $resulte = mysqli_query($con,$update) or die ("not executed");
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
      <?php
      $sql = "select * from expense where login_id = (select login_id from tbl_login where username = '$username') and expense_id = (select max(expense_id) from expense);";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result);
      ?>
      <table>
      <tr>
        <td> type </td>
        <td> <input type = "text" name = "type"   value = "<?php echo $row['type']; ?>"> </td>

      </tr>



      <tr>
        <td> name </td>
        <td> <input type = "text" name = "name"   value = <?php echo $row['name'];?> > </td>
      </tr>


      <tr>
        <td> date </td>
        <td> <input type = "date" name = "date"   value = <?php echo $row['date'];?> > </td>
      </tr>


      <tr>
        <td> Amount </td>
        <td> <input type = "text" name = "amount" value = <?php echo $row['amount'];?> /> </td>

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
