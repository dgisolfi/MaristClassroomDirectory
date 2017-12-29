<!-- adminLogin.php
A login form for admins
Authors: Daniel Gisolfi
Version 1.0 -->
<!DOCTYPE html>
<html>
<?php
require('../scripts/redirect.php');
require('../scripts/helperFunctions.php');

if ($_SERVER[ 'REQUEST_METHOD' ] == 'POST') {
	$userName = $_POST['userName'];
	$pw = $_POST['pw'];
	#Validate username and password
	$uVal = validateName($userName);
	$pVal = validatePass($userName, $pw);
	
	#Ensures no empty fields
	if (empty($userName) OR empty($pw)){
		echo '<div id="content_area"><h2>Please complete the form Fully.</h2></div>';
	#Ensure the username is correct
	}else if (!$uVal) {
		echo '<div id="content_area"><h2>User Name Invalid for Account.</h2></div>';
	#Ensure the Password is correct
	}else if (!$pVal){
		echo '<div id="content_area"><h2>Password Invalid for Account.</h2></div>';
	#Else allow for login and redirect
	}else{
		redirect('admin.php');
	}
}
?>


<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		 <title>Administrator Login</title>
	</head>
	<body>
		<!-- container -->
		<div id="container">
			<!--  header -->
			<div id="header">
			 <div id="header-content">
                    <!-- logo/home link -->
                    <div id="logo"><span title="Home"><a href="home.php"><img src="logo.png"></a></span></div>
                    <!-- navbar -->
                    <div class="navbar">
                        <ul>
                            <li><a href="searchClass.php">Search Classrooms</a></li>
                            </li>
                            <li class="adminlink"><a href="adminLogin.php">Admin</a></li>
                        </ul>
                    </div>
                </div>
			</div>
	  		<!-- content area -->
	  		<div id="content_area">
		   		<div id="entryform">
		   			<h1>Confirm Login</h1>
		   			<form action="adminLogin.php" method="POST">
						<br>User Name:<br>
		  				<input id="text" name="userName" placeholder="Enter Username" value="<?php if(isset($_POST['userName'])) echo $_POST['userName'];?>">
		  				<br>Password:<br>
		  				<input id="text" type="password" name="pw" placeholder="Enter Password" value="">
		  				<br/>
		  				<p><input id="button" type="submit" value="Login"></p>
			  		</form> 	  		
	   			 </div>
   			 	<!-- footer -->
		  		<div id="footer">
					<div id="footer-content">
						<p><a href= http://www.marist.edu>Marist College</a> | (845) 575-3000</p>
						<p>3399 North Road, Poughkeepsie, NY, 12601</p>
					</div>
				</div>
  			<!-- end container -->
   			</div>
	</body>
</html>

