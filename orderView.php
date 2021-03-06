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
		require('db_connect.php');
		$sql = "SELECT * FROM `order_details`";
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
			echo "0 results";
		}

	?>
</body>
</html>