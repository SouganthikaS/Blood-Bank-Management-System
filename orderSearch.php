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
<div class="row" >
	<div class="col-sm-3"></div>
	<div class="col-sm-4">
		<form method="POST" action="orderResult.php">
		<br/><p><b>Filter by:</b></p>
			<div class="form-group">
				<label>Blood Group</label>
				<select class="form-control" id="bl" name="bl">
					<option>-----</option>
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
				<label>Month</label>
				<select class="form-control" id="mo" name="mo">
					<option>-----</option>
					<option>01</option>
					<option>02</option>
					<option>03</option>
					<option>04</option>
					<option>05</option>
					<option>06</option>
					<option>07</option>
					<option>08</option>
					<option>09</option>
					<option>10</option>
					<option>11</option>
					<option>12</option>
				</select>
			</div>
			<div class="form-group">
				<label>Hospital</label>
				<input type="text" class="form-control" id="hos" name="hos" placeholder="Enter the hospital name">
			</div>
			
			<center><button type="submit" class="btn btn-default" name="sub">Submit</button></center>
			<br/><p><b>Search by:</b></p>
			<div class="form-group">
				<select class="form-control" id="sc" name="sc">
					<option>-----</option>
					<option>Patient Name</option>	
					<option>Patient Contact</option>
				</select>
			</div>
			<div class="form-group">
				<label>Value</label>
				<input type="text" class="form-control" id="sval" name="sval">
			</div>
			<center><button type="submit" class="btn btn-default" name="sub1">Submit</button></center>
	</div>
	<div class="col-sm-5">
	<iframe class="responsive-iframe" id="frame" src ="orderResult.php" frameborder="0" style="width: 100%; height: 100%; padding-top:16px; padding-left:14px"></iframe>
	</div>
</div>
</body>
</html>