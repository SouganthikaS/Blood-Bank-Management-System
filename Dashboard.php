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
	<script>
		function selectPage(source){
			document.getElementById('frame').src=source;
		}
	</script>
</head>

<body>

<div class="header" style="width:99%">
	<div class="row" style="background-color: #bb0a1e">
		<div class = "col-sm-1">
			<img src="home.jpg" class = "img-responsive" width = "90%"/>
		</div>
		<div class="col-sm-10 vertical-align">
			<p style = "font-family: Segoe UI Light;color: white; font-size: 44px ">Blood Donation Bank</p>
		</div>
		<div class="col-sm-1  vertical-align">
			<a href="login.php"><img src="logout.jpg" class = "img-responsive" width = "100%" title="Logout"/></a>
		</div>
	</div>
</div>
<div class="row " style="width:99%">
	<div class="col-sm-2 ">
		<div class="sticky-top">
		<div style="padding-top:150px"><button class="button" style=" width: 180px" onclick="selectPage('donor.php')"><span>Donor Details </span></button></div>
		<div style="padding-top:10px"><button class="button" style=" width: 180px" onclick="selectPage('stock.php')"><span>Stock Details </span></button></div>
		<div style="padding-top:10px"><button class="button" style=" width: 180px" onclick="selectPage('order.php')"><span>Order Details</span></button></div>
		<div style="padding-top:10px"><button class="button" style=" width: 180px" onclick="selectPage('acquire.php')"><span>Acquire Details</span></button></div>
		<div style="padding-top:10px;padding-bottom:200px"><button class="button" style=" width: 180px" onclick="selectPage('bb.php')"><span>Blood Banks </span></button></div>
		</div>
	</div>
	<div class="col-sm-10">
		<iframe class="responsive-iframe" id="frame" src ="donor.php" frameborder="0" style="width: 100%; height: 100%; position: absolute; padding-top:50px"></iframe>
	</div>
</div>
<div class="footer" style="width: 100%">
		<p>Souganthika S &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Harsheni S K</p>
</div>
</body>
</html>