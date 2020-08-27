<html>
<head>
	<style>
		table {
			font-family: arial, sans-serif;
			border-collapse: collapse;
			width: 100%;
		}

		td {
			border: 1px solid #dddddd;
			text-align: left;
			padding: 8px;
		}
		th {
			border: 1px solid #dddddd;
			text-align: center;
			padding: 8px;
			color: white;
			background-color: #828282;
		}

		tr:nth-child(even) {
			background-color: #dddddd;
		}
</style>
</head>
<body>
<?php
if(isset($_POST['sub'])){
require('db_connect.php');
$bloodgroup = $_POST['bl'];
$op = $_POST['sym'];
$age = $_POST['age'];
if ($bloodgroup == "-----" && $op == "-----"){
	echo "<script type='text/javascript'>alert('Select criteria for filter!');window.location.href='donorSearch.php';</script>";
}
else if($bloodgroup == "-----"){
	if($op == "Greater than")
		$sql = "SELECT `DONOR_ID`,`NAME`,`CONTACT` FROM `DONOR_DETAILS` WHERE `AGE`>$age";	
	else
		$sql = "SELECT `DONOR_ID`,`NAME`,`CONTACT` FROM `DONOR_DETAILS` WHERE `AGE`<$age";
}
else if($op == "-----"){
	switch($bloodgroup){
	case "O+ve" : $value = 1; break;
	case "A+ve" : $value = 2; break;
	case "B+ve" : $value = 3; break;
	case "O-ve" : $value = 4; break;
	case "A-ve" : $value = 5; break;
	case "B-ve" : $value = 6; break;
	case "AB+ve" : $value = 7; break;
	case "AB-ve" : $value = 8; break;
	}
	$sql = "SELECT `DONOR_ID`,`NAME`,`CONTACT` FROM `DONOR_DETAILS` WHERE `BLOODGROUP_ID`=$value";
}
else{
	switch($bloodgroup){
	case "O+ve" : $value = 1; break;
	case "A+ve" : $value = 2; break;
	case "B+ve" : $value = 3; break;
	case "O-ve" : $value = 4; break;
	case "A-ve" : $value = 5; break;
	case "B-ve" : $value = 6; break;
	case "AB+ve" : $value = 7; break;
	case "AB-ve" : $value = 8; break;
	}
	if($op == "Greater than")
		$sql = "SELECT `DONOR_ID`,`NAME`,`CONTACT` FROM `DONOR_DETAILS` WHERE `AGE`>$age && `BLOODGROUP_ID`=$value";	
	else
		$sql = "SELECT `DONOR_ID`,`NAME`,`CONTACT` FROM `DONOR_DETAILS` WHERE `AGE`<$age && `BLOODGROUP_ID`=$value";
}
$result = mysqli_query($connection,$sql);
		if ($result->num_rows > 0) {
			echo "<table><tr><th>Donor ID</th><th>Name</th><th>Contact</th></tr>";
		// output data of each row
			while($row = $result->fetch_assoc()) {
				echo "<tr>
					<td>" . $row["DONOR_ID"]. "</td>
					<td>" . $row["NAME"]. "</td>
					<td> " . $row["CONTACT"]. "</td>
					</tr>";
		}
		echo "</table>";
		} 
		else {
			echo "<script type='text/javascript'>alert('No data found!');window.location.href='donorSearch.php';</script>";
		}
}
if(isset($_POST['sub1'])){
require('db_connect.php');
$sc = $_POST['sc'];
$val = $_POST['sval'];
if ($sc == "-----")
	echo "<script type='text/javascript'>alert('Select criteria for search!');window.location.href='donorSearch.php';</script>";

switch($sc){
	case "Name" : $col = "NAME"; break;
	case "Contact" : $col = "CONTACT"; break;
	case "Donor ID" : $col = "donor_ID"; break;
}
if ($sc == "Name")
	$sql = "SELECT * FROM `donor_details` WHERE `$col`='$val'";
else
	$sql = "SELECT * FROM `donor_details` WHERE `$col`=$val";

$result = mysqli_query($connection,$sql);
		if ($result->num_rows > 0) {
			echo "<table><tr><th>Donor ID</th><th>Name</th><th>Bloodgroup ID</th><th>Age</th><th>Gender</th><th>Contact</th></tr>";
		// output data of each row
			while($row = $result->fetch_assoc()) {
				echo "<tr>
					<td>" . $row["DONOR_ID"]. "</td>
					<td>" . $row["NAME"]. "</td>
					<td> " . $row["BLOODGROUP_ID"]. "</td>
					<td> " . $row["AGE"]. "</td>
					<td> " . $row["GENDER"]. "</td>
					<td> " . $row["CONTACT"]. "</td>
					</tr>";
		}
		echo "</table>";
		} 
		else {
			echo "<script type='text/javascript'>alert('No data found!');window.location.href='donorSearch.php';</script>";
		}
}	
	?>
</body>
</html>