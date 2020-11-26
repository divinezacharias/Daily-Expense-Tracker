<?php
session_start();
?>
<html>
<head>
<title>COMPLAINT</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
body
{
background-repeat:no-repeat;
background-position:center;
background-size:cover;
}
form
{
background-color:#f0eec7;
opacity:0.9;
margin-left:400px;
margin-right:400px;
flex:right;
}
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}
input[type=reset] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: center;
}
</style>
</head>
<body background="pic100.jpeg">
<div class="d-flex align-items-end flex-column" style="height:50px">
<div class="row align-items- justify-content-left">
<form action="addcom.php" method="POST" enctype="multipart/form-data">
<h1 style="text-align:center;color:#e05712;font-family:Algerian">COMPLAINT</h1>
<br>

<table align ="center"style="color:black;font-family:Garamond;font-size:20px;">
<tr>
	<td><label for="sub">SUBJECT:</label></td>
	<td><select id="ctrSubDropDownLong"required class="form-control" title="Select Subject" name="subject" ">
<option value="0">Select Subject</option>
<option value="PERSON MISSING">PERSON MISSING</option>
<option value="VEHICLE MISSING">VEHICLE MISSING</option>
<option value="CELL PHONE MISSING">CELL PHONE MISSING </option>
<option value="JEWEL SNATCHING">JEWEL SNATCHING</option>
<option value="BAG LIFTING / THEFT">BAG LIFTING / THEFT</option>
<option value="OTHER THEFT">OTHER THEFT</option>
<option value="RECEIVING STOLEN PROPERTY">RECEIVING STOLEN PROPERTY</option>
<option value="DOCUMENT MISSING">DOCUMENT MISSING</option>
<option value="CHEATING / EMBEZZLEMENT / LAND GRABBING">CHEATING / EMBEZZLEMENT / LAND GRABBING </option>
<option value="MAKING COUNTERFEIT NOTES / COINS">MAKING COUNTERFEIT NOTES / COINS</option>
<option value="MURDER">MURDER</option>
<option value="KIDNAPPING / WRONGFUL CONFINEMENT">KIDNAPPING / WRONGFUL CONFINEMENT</option>
<option value="HURT">HURT</option>
<option value="DAMAGING PROPERTY">DAMAGING PROPERTY</option>
<option value="WORDY QUERREL / THREATENING">WORDY QUERREL / THREATENING</option>
<option value="EXTORTION">EXTORTION</option>
<option value="PUBLIC NUISANCE">PUBLIC NUISANCE</option>
<option value="EVE TEASING">EVE TEASING</option>
<option value="OFFENCE RELATED TO MARRIAGE">OFFENCE RELATED TO MARRIAGE</option>
<option value="RAPE ">RAPE </option>
<option value="CYBER OFFENCES">CYBER OFFENCES</option>
<option value="TRAFFIC VIOLATION">TRAFFIC VIOLATION</option>
<option value="OTHER OFFENCES">OTHER OFFENCES</option>
</select>
</td>
</tr>


<tr>
	<td><label for="date">DATE OF BIRTH:</label></td>
	 <td><input type='date' required class="form-control" id="dte" name="date" onblur=  required></td>
</tr>

<tr>
	<td><label for="phone">PHONE NO:</label></td>
	 <td><input type='number' required class="form-control" placeholder="number" id="phno" name="phone" onblur="validate2()"required> 
	 </td></td>
</tr>


<tr>
	<td><label for="dateofo">DATE OF OCCURENCE:</label></td>
	<td><input type='date' min="2000-01-01"  max="2050-01-01" required class="form-control" placeholder="number" id="dateofo" name="doo" onblur= required> 
	 </td></td>

<tr>
	<td><label for="occurence">PLACE OF OCCURENCE:</label></td>
	<td><textarea cols='25' rows='4' maxlength="350" required class="form-control" name="plcofocc" placeholder="max.350 words"id="place" required></textarea></td>
</tr>
 <tr>
	<td><label for="description">DESCRIPTION:</label></td>
	<td><textarea cols='25' rows='4' maxlength="350"required class="form-control" name="descri" placeholder="max.350 words"  id="description" required></textarea></td>
</tr>

 <tr> 
		<td>UPLOAD YOUR FILE</td>
        <td><input type="file" name="sfile"></td>
</tr>
<tr>
	<td><br><input type="submit" id="bt" value="REGISTER" class="btn btn-secondary"></td>
	<td><br><input type='reset' value='RESET' onclick='location.reload()' class="btn btn-secondary"></td>
	</tr>
</TABLE>
</form>
</div>
</div>
<script>
function validname()
   {
    var name=document.getElementById("nam").value;
	var letters =/^[a-zA-Z ]*$/;
	if(!name.match(letters))
	{
	 alert("Please enter your name correctly");
	 document.getElementById("nam").value="";
	}
   }
  
function validate2()
{
var phone = document.getElementById("phno").value;
var phn=/^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[789]\d{9}$/;
if (phone == "")
    {
      alert("Phone number can't be blank ");
      count++;
      return false;
    }
else if(phone.length!=10)
{
alert("Enter your phone number correctly!");
count++;
return false;
}
else if(!phone.match(phn))
{
alert("Please enter valid number");
count++;
return false;
}
else
{
count=0;
}
}
</script>
</body>
</html>

