<!DOCTYPE html>
<html>
<head>
  <title>Blood Donation Bank</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
	<link rel="stylesheet" type="text/css" href="styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> 
</head>
<body>
<div class="row">
<?php
if(isset($_POST['sub'])){
require('db_connect.php');
$column = $_POST['col'];
$value = $_POST['val'];
$basedon = $_POST['sel'];
$bvalue = $_POST['num'];
switch($column){
	case "Name" : $col = "NAME"; break;
	case "Age" : $col = "AGE"; break;
	case "Gender" : $col = "GENDER"; break;
	case "Contact" : $col = "CONTACT"; break;
	case "BloodGroup ID" : $col = "BLOODGROUP_ID"; break;
}
if ($col == "BLOODGROUP_ID")
{
	switch($value){
	case "O+ve" : $value = 1; break;
	case "A+ve" : $value = 2; break;
	case "B+ve" : $value = 3; break;
	case "O-ve" : $value = 4; break;
	case "A-ve" : $value = 5; break;
	case "B-ve" : $value = 6; break;
	case "AB+ve" : $value = 7; break;
	case "AB-ve" : $value = 8; break;
}
}
if ($basedon == "Donor ID")
	$basedon = "DONOR_ID";
else
	$basedon = "CONTACT";
if ($col == "NAME" || $col == "GENDER")
	$sql = "UPDATE `DONOR_DETAILS` SET `$col`='$value' WHERE `$basedon`=$bvalue";

else
	$sql = "UPDATE `DONOR_DETAILS` SET `$col`=$value WHERE `$basedon`=$bvalue";
if ( mysqli_query($connection,$sql)=== TRUE) {
    echo "<script type='text/javascript'>alert('Record Updated Successfully!');window.location.href='donorView.php';</script>";
} else {
    echo "Error: " . $sql . "<br>";
}
}
?>
<div class="col-sm-3"></div>
	<div class="col-sm-4" style="padding-top:50px">
		<form method="POST">
			<div class="form-group">
				<label for="id">Update the</label>
				<select class="form-control" id="col" name="col">
					<option>Name</option>	
					<option>Age</option>
					<option>Gender</option>
					<option>Contact</option>
					<option>BloodGroup ID</option>
				</select>
			</div>
			<div class="form-group">
				<label for="contact">For the</label>
				<select class="form-control" id="sel" name="sel">
					<option>Donor ID</option>
					<option>Mobile Number</option>
				</select>
			</div>
			<div class="form-group">
				<label for="id">With the Value</label>
				<input type="number" class="form-control" id="num" name="num">
			</div>
			<div class="form-group">
				<label for="age">To:</label>
				<input type="text" class="form-control" id="val" name="val">
			</div>
			<center><button type="submit" class="btn btn-default" name="sub">Submit</button><center>
		</form>
	</div>
	<div class="col-sm-5"></div>
</div>
</body>
</html>