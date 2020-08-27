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
$hos = $_POST['hos'];
$mo = $_POST['mo'];
switch($bloodgroup){
	case "O+ve" : $bid = 1; break;
	case "A+ve" : $bid = 2; break;
	case "B+ve" : $bid = 3; break;
	case "O-ve" : $bid = 4; break;
	case "A-ve" : $bid = 5; break;
	case "B-ve" : $bid = 6; break;
	case "AB+ve" : $bid = 7; break;
	case "AB-ve" : $bid = 8; break;
}
if ($bloodgroup == "-----" && $hos == "" && $mo == "-----"){
	echo "<script type='text/javascript'>alert('Select criteria for filter!');window.location.href='orderSearch.php';</script>";
}
else if($bloodgroup == "-----" && $mo == "-----" ){
		$sql = "SELECT * FROM `ORDER_DETAILS` WHERE `HOSPITAL`='$hos'";	
}
else if($hos == "" && $mo == "-----"){
	$sql = "SELECT * FROM `ORDER_DETAILS` WHERE `BLOODGROUP`=$bid";
}
else if($bloodgroup == "-----" && $hos == ""){
	$sql = "SELECT * FROM `ORDER_DETAILS` WHERE MONTH(`O_DATE`)=$mo";
}
else if($mo == "-----"){
	$sql = "SELECT * FROM `ORDER_DETAILS` WHERE `HOSPITAL`='$hos'  && `BLOODGROUP`=$bid";
}
else if($bloodgroup == "-----"){
	$sql = "SELECT * FROM `ORDER_DETAILS` WHERE MONTH(`O_DATE`)=$mo && `HOSPITAL`='$hos'";
}
else if($hos == ""){
	$sql = "SELECT * FROM `ORDER_DETAILS` WHERE MONTH(`O_DATE`)=$mo && `BLOODGROUP`=$bid";
}
else{
	$sql = "SELECT * FROM `ORDER_DETAILS` WHERE MONTH(`O_DATE`)=$mo && `HOSPITAL`='$hos' && $bid";
}
$result = mysqli_query($connection,$sql);
		if ($result->num_rows > 0) {
			echo "<table><tr><th>Order No</th><th>Patient Name</th><th>Hospital</th><th>Bloodgroup ID</th><th>Units</th><th>Issued or not</th><th>Hospital Contact</th><th>Patient Contact</th><th>Date</th></tr>";
		// output data of each row
			while($row = $result->fetch_assoc()) {
				echo "<tr>
					<td>" . $row["O_NO"]. "</td>
					<td>" . $row["PATIENT_NAME"]. "</td>
					<td> " . $row["HOSPITAL"]. "</td>
					<td> " . $row["BLOODGROUP"]. "</td>
					<td> " . $row["UNITS"]. "</td>
					<td> " . $row["ISSUED_OR_NOT"]. "</td>
					<td> " . $row["HOSPITAL_CONTACT"]. "</td>
					<td> " . $row["PATIENT_CONTACT"]. "</td>
					<td> " . $row["O_DATE"]. "</td>
					</tr>";
		}
		echo "</table>";
		} 
		else {
			echo "<script type='text/javascript'>alert('No data found!');window.location.href='orderSearch.php';</script>";
		}
}
if(isset($_POST['sub1'])){
require('db_connect.php');
$sc = $_POST['sc'];
$val = $_POST['sval'];
if ($sc == "-----")
	echo "<script type='text/javascript'>alert('Select criteria for search!');window.location.href='orderSearch.php';</script>";

switch($sc){
	case "Patient Name" : $col = "PATIENT_NAME"; break;
	case "Patient Contact" : $col = "PATIENT_CONTACT"; break;
}
if ($sc == "Patient Name")
	$sql = "SELECT * FROM `order_details` WHERE `$col`='$val'";
else
	$sql = "SELECT * FROM `order_details` WHERE `$col`=$val";

$result = mysqli_query($connection,$sql);
		if ($result->num_rows > 0) {
			echo "<table><tr><th>Order No</th><th>Patient Name</th><th>Hospital</th><th>Bloodgroup ID</th><th>Units</th><th>Issued or not</th><th>Hospital Contact</th><th>Patient Contact</th><th>Date</th></tr>";
		// output data of each row
			while($row = $result->fetch_assoc()) {
				echo "<tr>
					<td>" . $row["O_NO"]. "</td>
					<td>" . $row["PATIENT_NAME"]. "</td>
					<td> " . $row["HOSPITAL"]. "</td>
					<td> " . $row["BLOODGROUP"]. "</td>
					<td> " . $row["UNITS"]. "</td>
					<td> " . $row["ISSUED_OR_NOT"]. "</td>
					<td> " . $row["HOSPITAL_CONTACT"]. "</td>
					<td> " . $row["PATIENT_CONTACT"]. "</td>
					<td> " . $row["O_DATE"]. "</td>
					</tr>";
		}
		echo "</table>";
		} 
		else {
			echo "<script type='text/javascript'>alert('No data found!');window.location.href='orderSearch.php';</script>";
		}
}	
	?>
</body>
</html>