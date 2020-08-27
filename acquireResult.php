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
$mo = $_POST['mo'];
$sql = "SELECT * FROM `RECEIVED` WHERE MONTH(`P_DATE`)=$mo";
$result = mysqli_query($connection,$sql);
		if ($result->num_rows > 0) {
			echo "<table><tr><th>SI</th><th>Donor ID</th><th>Name</th><th>Bloodgroup</th><th>Contact</th><th>Date</th></tr>";
		// output data of each row
			while($row = $result->fetch_assoc()) {
				echo "<tr>
					<td>" . $row["SI"]. "</td>
					<td>" . $row["DONOR_ID"]. "</td>
					<td>" . $row["NAME"]. "</td>
					<td> " . $row["BLOODGROUP"]. "</td>
					<td> " . $row["CONTACT"]. "</td>
					<td> " . $row["P_DATE"]. "</td>
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
	echo "<script type='text/javascript'>alert('Select criteria for search!');window.location.href='donorSearch.php';</script>";

switch($sc){
	case "Name" : $col = "NAME"; break;
	case "Contact" : $col = "CONTACT"; break;
	case "Donor ID" : $col = "DONOR_ID"; break;
}
if ($sc == "Name")
	$sql = "SELECT * FROM `RECEIVED` WHERE `$col`='$val'";
else
	$sql = "SELECT * FROM `RECEIVED` WHERE `$col`=$val";

$result = mysqli_query($connection,$sql);
		if ($result->num_rows > 0) {
			echo "<table><tr><th>SI</th><th>Donor ID</th><th>Name</th><th>Bloodgroup</th><th>Contact</th><th>Date</th></tr>";
		// output data of each row
			while($row = $result->fetch_assoc()) {
				echo "<tr>
					<td>" . $row["SI"]. "</td>
					<td>" . $row["DONOR_ID"]. "</td>
					<td>" . $row["NAME"]. "</td>
					<td> " . $row["BLOODGROUP"]. "</td>
					<td> " . $row["CONTACT"]. "</td>
					<td> " . $row["P_DATE"]. "</td>
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