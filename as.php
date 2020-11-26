<?php
$con=mysqli_connect("localhost","root","","sam") or die("couldn't connect");
$name=$_POST["qw"];
$amount=$_POST["er"];
$sql="select amount from bank_ac where name='$name' ";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
	$n=$row['amount'];
	if($n >= $amount)
	{
	?>
		<script> alert("succeessful");
		</script>
	
}
<?php
mysqli_close($con);
?>

