<?php
include("connection.php");
$actno=$_POST["actno"];
$name=$_POST["name"];
$amount=$_POST["amt"];

$sql="insert into account(name,actno,amount) values('$name','$actno','$amount')";
if(mysqli_query($con,$sql))
{
?>
<script>alert("successful");
</script>
<?php
}
mysqli_close($con);
?>
