<!DOCTYPE html>
<html>
<head>
  <title>Blood Donation Bank</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> 
	<style>
body {font-family: Arial, Helvetica, sans-serif;}

.navbar {
  width: 100%;
  overflow: auto;
}

.navbar a {
  float: left;
  padding: 12px;
  color: #bb0a1e;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background-color: #d72f42;
  color: white
}

.active {
  background-color: #edcfd2;
  font-color: white;
}

@media screen and (max-width: 50px) {
  .navbar a {
    float: none;
    display: block;
  }
}
</style>
<script>
		function selectPage(source){
			document.getElementById('frame').src=source;
		}
	</script>
</head>

<body>
<div class="navbar" id="menu" style="position: relative; z-index: 2;width: 800px">
  <a class="link active" href="#" onclick="selectPage('donorView.php')"><i class="fa fa-database"></i> View</a>
  <a class="link" href="#" onclick="selectPage('donorInsert.php')"><i class="fa fa-plus-square"></i> Insert</a>
  <a class="link" href="#" onclick="selectPage('donorUpdate.php')"><i class="fa fa-pencil-square"></i> Update</a>
  <a class="link" href="#" onclick="selectPage('donorSearch.php')"><i class="fa fa-fw fa-search"></i> Search</a> 
  <a class="link" href="#" onclick="selectPage('donorDelete.php')"><i class="fa fa-trash"></i> Delete</a> 
  <script>
	// Get the container element
var btnContainer = document.getElementById("menu");

// Get all buttons with class="btn" inside the container
var btns = btnContainer.getElementsByClassName("link");

// Loop through the buttons and add the active class to the current/clicked button
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>
</div>
	<iframe class="responsive-iframe" id="frame" src ="donorView.php" frameborder="0" style="width: 100%; height: 100%; position: absolute; padding-top:60px; padding-left:16px"></iframe>

</body>
</html>