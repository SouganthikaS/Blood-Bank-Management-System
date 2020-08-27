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
$tov = $_POST['toval'];
switch($column){
	case "Name" : $col = "BLOOD_BANK_NAME"; break;
	case "Address" : $col = "ADDRESS"; break;
	case "Supervisor" : $col = "SUPERVISOR"; break;
	case "Contact" : $col = "CONTACT"; break;
}
if ($col == "CONTACT")
	$sql = "UPDATE `BB` SET `$col`=$tov WHERE `BLOOD_BANK_NAME`='$value'";
else
	$sql = "UPDATE `BB` SET `$col`='$tov' WHERE `BLOOD_BANK_NAME`='$value'";
if ( mysqli_query($connection,$sql)=== TRUE) {
    echo "<script type='text/javascript'>alert('Record Updated Successfully!');window.location.href='bbView.php';</script>";
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
					<option>Address</option>
					<option>Supervisor</option>
					<option>Contact</option>
				</select>
			</div>
			<div class="form-group">
				<label>For the Blood Bank</label>
				<input type="text" class="form-control" id="val" name="val">
			</div>
			<div class="form-group">
				<label>To:</label>
				<input type="text" class="form-control" id="toval" name="toval">
			</div>
			<center><button type="submit" class="btn btn-default" name="sub">Submit</button><center>
		</form>
	</div>
	<div class="col-sm-5"></div>
</div>
</body>
</html>