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
<style>
html {
  overflow-y: scroll; 
}
</style>
</head>

<body>
<div class="row">
<?php
if(isset($_POST['sub'])){
require('db_connect.php');
$name = $_POST['name'];
$hname = $_POST['hname'];
$bl = $_POST['bid'];
$units = $_POST['units'];
$iss = $_POST['iss'];
$con = $_POST['num'];
$pcon = $_POST['pnum'];
switch($bl){
	case "O+ve" : $bid = 1; break;
	case "A+ve" : $bid = 2; break;
	case "B+ve" : $bid = 3; break;
	case "O-ve" : $bid = 4; break;
	case "A-ve" : $bid = 5; break;
	case "B-ve" : $bid = 6; break;
	case "AB+ve" : $bid = 7; break;
	case "AB-ve" : $bid = 8; break;
}
$sql = "INSERT INTO `ORDER_DETAILS` (`PATIENT_NAME`, `HOSPITAL`, `BLOODGROUP`, `UNITS`, `ISSUED_OR_NOT`, `HOSPITAL_CONTACT`, `PATIENT_CONTACT`,`O_DATE`) VALUES ('$name','$hname','$bid',$units,'$iss',$con,$pcon,	CURDATE());";
if ( mysqli_query($connection,$sql)=== TRUE) {
	if($iss == "Yes"){
	$psql = "UPDATE `STOCK` SET `UNITS_AVAILABLE`= `UNITS_AVAILABLE`-$units WHERE `BLOODGROUP`='$bl'";
	$result = mysqli_query($connection,$psql);
	}
    echo "<script type='text/javascript'>alert('Record Inserted Successfully!');window.location.href='orderView.php';</script>";
} else {
    echo "Error: " . $sql . "<br>";
}
}
?>
	<div class="col-sm-3"></div>
	<div class="col-sm-4">
		<form method="POST">
			<div class="form-group">
				<label for="name">Patient Name:</label>
				<input type="text" class="form-control" id="name" name="name">
			</div>
			<div class="form-group">
				<label for="name">Hospital:</label>
				<input type="text" class="form-control" id="hname" name="hname">
			</div>
			<div class="form-group">
				<label for="bid">Bloodgroup:</label>
				<select class="form-control" id="bid" name="bid">
					<option>O+ve</option>
					<option>A+ve</option>
					<option>B+ve</option>
					<option>O-ve</option>
					<option>A-ve</option>
					<option>B-ve</option>
					<option>AB+ve</option>
					<option>AB-ve</option>
				</select>
			</div>
			<div class="form-group">
				<label for="age">Units Requested:</label>
				<input type="number" class="form-control" id="units" name="units">
			</div>
			<div class="form-group">
				<label for="gender">Issued or not:</label>
				<select class="form-control" id="iss" name="iss">
					<option>Yes</option>
					<option>No</option>
				</select>
			</div>
			<div class="form-group">
				<label for="contact">Hospital Contact:</label>
				<input type="number" class="form-control" id="num" name="num">
			</div>
			<div class="form-group">
				<label for="contact">Patient Contact:</label>
				<input type="number" class="form-control" id="pnum" name="pnum">
			</div>
			<center><button type="submit" class="btn btn-default" name="sub">Submit</button><center>
		</form>
	</div>
	<div class="col-sm-5"></div>
</div>
</body>
</html>