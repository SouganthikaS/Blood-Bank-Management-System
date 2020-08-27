<!DOCTYPE html>
<html>
<title>Blood Donation Bank</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="nsty.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
  height: 100%;
  color: #777;
  line-height: 1.8;
  background-color: #fff8f2;
}
html {
  scroll-behavior: smooth;
}

/* Create a Parallax Effect */
.bgimg-1, .bgimg-2, .bgimg-3 {
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-1 {
  background-image: url('blood-bank2.jpg');
  min-height: 50%;
}

/* Second image (Portfolio) */
.bgimg-2 {
  background-image: url("what.jpg");
  min-height: 400px;
}

/* Third image (Contact) */
.bgimg-3 {
  background-image: url("/w3images/parallax3.jpg");
  min-height: 400px;
}

.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1600px) {
  .bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: scroll;
    min-height: 400px;
  }
}
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
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar" id="myNavbar" style="padding-top:10px;padding-bottom:8px;padding-left:50px">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <a href="#home" class="w3-bar-item w3-button"><i class="fa fa-home"></i>HOME</a>
    <a href="#what" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-question-circle"></i> WHAT HAPPENS</a>
    <a href="#register" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user-plus"></i> REGISTER</a>
	<a href="#request" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-medkit"></i> REQUEST BLOOD</a>
	<a href="#bloodbanks" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-tint"></i> BLOOD BANKS</a>
    <a href="login.php" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-red" title="Admin login">
      <i class="fa fa-user" ></i>
    </a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT</a>
    <a href="#portfolio" class="w3-bar-item w3-button" onclick="toggleFunction()">PORTFOLIO</a>
    <a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">CONTACT</a>
    <a href="#" class="w3-bar-item w3-button">SEARCH</a>
  </div>
</div>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container " id="home">
  <div class="w3-display-middle" style="white-space:nowrap">
  </div>
</div>

<!-- Container (About Section) -->
<div style="padding-left:300px;padding-right:300px">
  <h3 class="w3-center">BLOOD DONATION</h3>
  <p class="w3-center"><em>Why blood donation?</em></p>
  <p align="justify">Donating blood is a life saving measure especially when you have a rare blood type. Blood donation is safe and simple. We can save upto 3 to 4 precious lives by donating blood. Your blood donation will save someone’s life and not a single word can define this happiness which you will get after saving a life. You will have to feel this happiness yourself only. So donate your blood because any one may require blood any time including ourselves and our dear ones. So, Please come forward and help our society and make it more healthier.</p>
  <div class="w3-row">
    <div class="w3-col m6 w3-center w3-padding-large">
      <br/><br/><img src="india.jpg" class="w3-round w3-image" width="500" height="333">
    </div>

    <!-- Hide this text on small devices -->
    <div class="w3-col m6 w3-hide-small w3-padding-large">
	<p><b>Who can donate?</b></p>
    <ul>
		<li>Between the age 18 and 65</li>
		<li>Atleast 50kg weight</li>
		<li>Required heamoglobin level</li>
		<li>Must not have donated in last 3 months</li>
		<li>In good health condition</li>
	</ul>
	<p><b>Who shoud not donate?</b></p>
	<ul>
		<li>Travel history to epidemic area</li>
		<li>Injected drugs</li>
		<li>Recently had tattoo or body piercing</li>
		<li>Any kind of infection</li>
	</ul>
	<img src="comp.jpg" class="w3-round w3-image" width="500" height="333">
    </div>
  </div>
</div>
<div  class="w3-content w3-container w3-padding-64" id="what">
</div>
<div class="w3-row w3-center w3-dark-grey w3-padding-16">
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">300+</span><br>
    Blood Banks in Tamil Nadu
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">14</span><br>
    Blood Banks in Madurai
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">93%</span><br>
    Voluntary Donation
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">8 lac +</span><br>
    Units of blood donated
  </div>
</div>

<div class="bgimg-2 w3-display-container w3-opacity-min"></div>
<div>
<br/><br/><br/><br/><p align="justify" style="padding-left:300px;padding-right:300px">The donated blood starts its journey by getting freezed. A sample of the blood is taken for testing. It is then separated into three parts: red blood cells, plasma and the platelets. The red blood cells are fridged. The plasma is freezed where as the the platelets are left out in tray shaked in order to avoid bunching. Once the test results is arrived it is decided whether to store the blood or not. The next stop of the stored blood is hospitals. Henceforth one unit of blood benefits three persons.</p>
</div>
<!-- Container (Register Section) -->
<div  id="register" style="padding-bottom:25px"></div>
	<div class="reg">
	<div style="padding-left:80%;padding-top:30%">
	<div class="box">
		<h2>Register  as a Donor</h2>
		<form method="POST" onSubmit="alert('Thank you for joining our service!');">
		
		<div class="input-group">
			<input type="text" name="name" required="">
			<label>Name</label>
		</div>
		<div class="input-group">
			<input type="text" name="bl" required="" placeholder="O+ve">
			<label>Bloodgroup</label>
		</div>
		<div class="input-group">
			<input type="number" name="age" required="">
			<label>Age</label>
		</div>
		<div class="input-group">
			<input type="text" name="gender" required="">
			<label>Gender</label>
		</div>
		<div class="input-group">
			<input type="number" name="num" required="">
			<label>Contact</label>
		</div>
		<center><input type="submit" name="sub" value="Register"></center>
		</form>
		<?php
		if(isset($_POST['sub'])){
			require('db_connect.php');
			$name = $_POST['name'];
			$bl = $_POST['bl'];
			$a = $_POST['age'];
			$ge = $_POST['gender'];
			$con = $_POST['num'];
			switch($bl){
				case "O+ve" : $bid = 1; break;
				case "A+ve" : $bid = 2; break;
				case "B+ve" : $bid = 3; break;
				case "O-ve" : $bid = 4; break;
				case "A-ve" : $bid = 5; break;
				case "B-ve" : $bid = 6; break;
				case "AB+ve" : $bid = 7; break;
				case "AB-ve" : $bid = 8; break;
			}
			if ($ge == "Female" || $ge == "female" || $ge == "f" || $ge == "F")
				$g= "F";
			else
				$g= "M";
			$sql = "INSERT INTO `DONOR_DETAILS` (`NAME`,`BLOODGROUP_ID`,`AGE`,`GENDER`,`CONTACT`) VALUES ('$name',$bid,$a,'$g',$con);";
			if ( mysqli_query($connection,$sql)=== TRUE) {
				
			} else {
			echo "Error: " . $sql . "<br>";
			}
		}
		?>
	</div>
	</div>
	</div>
</div>
<!-- Container (Register Section) -->
<div  id="request" style="padding-bottom:25px"></div>
<div class="req">
	<div style="padding-left:20%;padding-top:25%">
	<div class="box">
		<h2>Form for Blood Request</h2>
		<form method="POST" onSubmit="alert('Our person will contact you soon!');">
		
		<div class="input-group">
			<input type="text" name="nam" required="">
			<label>Patient Name</label>
		</div>
		<div class="input-group">
			<input type="text" name="bld" required="" placeholder="O+ve">
			<label>Bloodgroup</label>
		</div>
		<div class="input-group">
			<input type="text" name="hos" required="">
			<label>Hospital</label>
		</div>
		<div class="input-group">
			<input type="number" name="unit" required="">
			<label>Units Required</label>
		</div>
		<div class="input-group">
			<input type="number" name="con" required="">
			<label>Contact</label>
		</div>
		<center><input type="submit" name="sub1" value="Request"></center>
		</form>
		<?php
		if(isset($_POST['sub1'])){
			require('db_connect.php');
			$nam = $_POST['nam'];
			$bl = $_POST['bld'];
			$hos = $_POST['hos'];
			$unit = $_POST['unit'];
			$con = $_POST['con'];
			switch($bl){
				case "O+ve" : $bid = 1; break;
				case "A+ve" : $bid = 2; break;
				case "B+ve" : $bid = 3; break;
				case "O-ve" : $bid = 4; break;
				case "A-ve" : $bid = 5; break;
				case "B-ve" : $bid = 6; break;
				case "AB+ve" : $bid = 7; break;
				case "AB-ve" : $bid = 8; break;
			}
			$sql = "INSERT INTO `REQUEST` (`PATIENT_NAME`,`BLOODGROUP_ID`,`HOSPITAL`,`UNITS`,`CONTACT`) VALUES ('$nam',$bid,'$hos',$unit,$con);";
			if ( mysqli_query($connection,$sql)=== TRUE) {
				
			} else {
			echo "Error: " . $sql . "<br>";
			}
		}
		?>
	</div>
	</div>
	</div>

<!-- Container (BloodBank Section) -->
<div class="w3-content w3-container w3-padding-64" id="bloodbanks">
<h3 class="w3-center">BLOOD DONATION BANKS IN MADURAI</h3><br/>
  <?php
		require('db_connect.php');
		$sql = "SELECT * FROM `bb`";
		$result = mysqli_query($connection,$sql);
		if ($result->num_rows > 0) {
			echo "<table><tr><th>ID</th><th>Blood Bank Name</th><th>Address</th><th>Supervisor</th><th>Contact</th></tr>";
		// output data of each row
			while($row = $result->fetch_assoc()) {
				echo "<tr>
					<td>" . $row["BB_NO"]. "</td>
					<td>" . $row["BLOOD_BANK_NAME"]. "</td>
					<td> " . $row["ADDRESS"]. "</td>
					<td> " . $row["SUPERVISOR"]. "</td>
					<td> " . $row["CONTACT"]. "</td>
					</tr>";
		}
		echo "</table>";
		} 
		else {
			echo "0 results";
		}

	?>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <p>Souganthika S &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Harsheni S K</p>
</footer>
 
<script>
// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
    } else {
        navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
    }
}

// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

</body>
</html>
