<?php
session_start();
?>
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="min.css" />
</head>
<body>

<div class="1">
<center>
<marquee><h1>Daily Expense Tracker</h1></marquee>
<h3></br></br>Add a new item:</h3><br></br>
<form action="addexpense.php" method="POST" enctype="multipart/form-data">
<table align="center" cellspacing="30">



  <tr>
   <th>Type:</th>
      <th><select name="type">
          <option value="card">Card</option>
          <option value="cash">Cash</option>
          <option value="cryptocoin">Cryptocoin</option>
          <option value="other">Other</option>
      </select></th>



    <th><br><br>Name:</br></br></th> <th><br><br><input type="text" name="name" placeholder="What did you spend on?"></br></br></th>
  </tr>

  <tr>
  <th> <br> <br>Date:</br></br></th> <th><br><br><input type="date" name="date"></br></br></th>

 <th>  <br><br> Amount:</br></br></th> <th><br><br><input type="number" name="amount" placeholder="How much?"></br></br></th>
  </tr>

<tr>
  <th colspan="2" ><input type="submit"  value ="Add a new expense" class="btn btn-secondary submit">
</th>

   <th colspan="2" ><a href="modify.php"><input type="button"  value ="View your expense" class="btn btn-secondary submit"></a>
 </th>
  </tr>

</table>
</form>
</div>
</body>
</html>
