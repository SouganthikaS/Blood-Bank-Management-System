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
$bloodgroup = $_POST['bl'];
$val = $_POST['val'];
$col = $_POST['sym'];
if ($col == "+")
	$sql = "UPDATE `STOCK` SET `UNITS_AVAILABLE`= `UNITS_AVAILABLE`+$val WHERE `BLOODGROUP`='$bloodgroup'";
else
	$sql = "UPDATE `STOCK` SET `UNITS_AVAILABLE`= `UNITS_AVAILABLE`-$val WHERE `BLOODGROUP`='$bloodgroup'";
if ( mysqli_query($connection,$sql)=== TRUE) {
    echo "<script type='text/javascript'>alert('Record Updated Successfully!');window.location.href='stockView.php';</script>";
} else {
    echo "Error: " . $sql . "<br>";
}
}
?>
<div class="col-sm-3"></div>
	<div class="col-sm-4" style="padding-top:50px">
		<form method="POST">
			<div class="form-group">
				<label for="id">Update the </label>
				<select class="form-control" id="bl" name="bl">
					<option>O+ve</option>
					<option>A+ve</option>
					<option>B+ve</option>
					<option>AB+ve</option>
					<option>O-ve</option>
					<option>A-ve</option>
					<option>B-ve</option>
					<option>AB-ve</option>
				</select>
			</div>
			<div class="form-group">
			<label>By</label>
				<select class="form-control" id="sym" name="sym">
					<option>+</option>	
					<option>-</option>
				</select>
			</div>
			<div class="form-group">
				<input type="number" class="form-control" id="val" name="val">
				<label>Units</label>
			</div>
			<center><button type="submit" class="btn btn-default" name="sub">Submit</button><center>
		</form>
	</div>
	<div class="col-sm-5"></div>
</div>
</body>
</html>