<!-- adminLogin.php
Create a site for Limbo using CSS
Authors: James Ekstract, Daniel Gisolfi
Version 0.1 -->
<!DOCTYPE html>
<html>
<?php
#outputs errors for debugging
ini_set('display_errors', TRUE);
error_reporting(E_ALL);

require('../scripts/redirect.php');
require('../scripts/limboFunctions.php');

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
                            <li><a href=""></a></li>
                            <li><a href="">Search Classrooms</a></li>
                         <!--   <li class="dropdown"><a href="#" class="dropbtn">Report an Item</a>
                            <div class="dropdown-content">
                                <a href="">Lost</a>
                                <a href="">Found</a>
                            </div> -->
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
	  			<div id="footer"></div>
  			<!-- end container -->
   			 </div>
		 </div>
	</body>
</html>

