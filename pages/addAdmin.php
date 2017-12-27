<!-- addAdmin.php
Create a site for Limbo using CSS
Authors: James Ekstract, Daniel Gisolfi
Version 0.1 -->

<!DOCTYPE HTML>
<?php
ini_set('display_errors', TRUE);
error_reporting(E_ALL);

require('../scripts/inputRecord.php');

?>
<html>
	<head>
		<meta charset = "utf-8">
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>Limbo - Add Admin</title>
	</head>
	<body>
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
						 <!-- 	<li class="dropdown"><a href="#" class="dropbtn">Report an Item</a>
						  	<div class="dropdown-content">
						  		<a href="">Lost</a>
						  		<a href="">Found</a>
						  	</div> -->
						  	
						  	<li class="adminlink"><a href="adminLogin.php">Admin</a></li>
						</ul>
					</div>
				</div>
			</div>
	  		<!-- content area -->
	  		<div id="content_area">
	  			<?php
	  			if(isset($_POST['addAdmin'])){
		  			insert_admin_record($dbc);
	  			}
	  			?>
		   		<div id="entryform">
		   			<div id="items">
			   			<a href="manageAdmins.php" id="mgadmin">Manage Items</a>
			   			<br/>
			   			<a href="addAdmin.php" id="mgadmin">Add Admin</a>
					</div>
		   			<h1> Create New Admin </h1>
					<p>Create new admin to manage the classroom directory database</p>
					<p>* = Required Field</p>
					<form method="POST">
					  	<br>First Name:<br>
					  	<input id="text" name="first_name" value="<?php if(isset($_POST['first_name'])) echo $_POST['first_name'];?>">
					  	<br>*Last Name<br>
					  	<input id="text" name="last_name" value="<?php if(isset($_POST['last_name'])) echo $_POST['last_name'];?>">
					  	<br>*Username:<br>
					  	<input id="text" name="username" value="<?php if(isset($_POST['username'])) echo $_POST['username'];?>">
					  	 <br>Email:<br>
					  	<input id="text" name="email" value="<?php if(isset($_POST['email'])) echo $_POST['email'];?>">
						<br>*Password:<br>
					  	<input id="text" type="password" name="password1">
					  	<br>*Confirm Password:<br>
					  	<input id="text" type="password" name="password2">
					  	<br><br>
					  	<input id="button" name="addAdmin" type="submit" value="Add Admin">
					  	<input id="button" name="manageAdmins" type="submit"value="Manage Admins" action="manageAdmins.php">
	  				</form> 
	   			 </div>
   			 	<!-- footer -->
	  			<div id="footer"></div>
  			<!-- end container -->
   			 </div>
		 </div>
	</body>
</html>



					


