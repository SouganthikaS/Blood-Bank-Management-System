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
		$sql = "SELECT * FROM `donor_details`";
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
			echo "0 results";
		}

	?>
</body>
</html>