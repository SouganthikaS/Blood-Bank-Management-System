<!DOCTYPE html >
<html>
<head>
<title>Blood Bank</title>
<link rel="stylesheet" type="text/css" href="styles.css">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
  <link rel="stylesheet" type="text/css" href="styles.css">
  <link rel="stylesheet" type="text/css" href="nsty.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> 
</head>
<body>
<div>
<div class="container">
	<center><p class="font-weight-bold deep-orange-lighter-hover mb-3">Blood Donation Bank</p></center>
</div>
<div class="container">
	<div class="row">
		<div class="col-sm-6">
			<img src="blood-donation.jpg" class = "img-responsive" width = "100%"/>
		</div>
		<div class="col-sm-6 vertical-align pad">
		<div style="padding-left:40%;padding-top:100%">
		<div class="box">
		<form id="login-form" method="post" action="authen_login.php" >
			<div class="input-group">
			<input type="text" name="user_id" required="">
			<label>User Name</label>
		</div>
		<div class="input-group">
			<input type="password" name="user_pass" required="">
			<label>Password</label>
		</div>
				<center><button type="submit" class="btn btn-default">Submit</button></center>
		</form>
		</div>
		</div>
		</div>
	</div>
	<div class="footer" style ="width:100%">
		<p>Souganthika S &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Harsheni S K</p>
	</div>
</div>
</body>
</html>