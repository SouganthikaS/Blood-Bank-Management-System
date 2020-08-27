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
$name = $_POST['name'];
$add = $_POST['ad'];
$sp = $_POST['sp'];
$con = $_POST['num'];

$sql = "INSERT INTO `BB` (`BLOOD_BANK_NAME`, `ADDRESS`, `SUPERVISOR`, `CONTACT`) VALUES ('$name','$add','$sp',$con);";
if ( mysqli_query($connection,$sql)=== TRUE) {
    echo "<script type='text/javascript'>alert('Record Inserted Successfully!');window.location.href='bbView.php';</script>";
} else {
    echo "Error: " . $sql . "<br>";
}
}
?>
	<div class="col-sm-3"></div>
	<div class="col-sm-4">
		<form method="POST">
			<div class="form-group">
				<label for="name">Blood Bank Name:</label>
				<input type="text" class="form-control" id="name" name="name">
			</div>
			
			<div class="form-group">
				<label for="age">Address:</label>
				<input type="text" class="form-control" id="ad" name="ad">
			</div>
			<div class="form-group">
				<label for="gender">Supervisor:</label>
				<input type="text" class="form-control" id="sp" name="sp">
			</div>
			<div class="form-group">
				<label for="contact">Contact:</label>
				<input type="number" class="form-control" id="num" name="num">
			</div>
			<center><button type="submit" class="btn btn-default" name="sub">Submit</button><center>
		</form>
	</div>
	<div class="col-sm-5"></div>
</div>
</body>
</html>