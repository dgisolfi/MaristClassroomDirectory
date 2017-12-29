<!-- addAdmin.php
A form to add a administrator
Authors: Daniel Gisolfi
Version 1.0 -->

<!DOCTYPE HTML>
<?php
#Required PHP files to include
require('../scripts/inputRecord.php');
?>
<html>
	<head>
		<meta charset = "utf-8">
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>Add Administrators</title>
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
						  	<li><a href="manageClassrooms.php">Manage Classrooms</a></li>
						  	<li><a href="manageBuildings.php">Manage Buildings</a></li>
						  	<li><a href="manageAdmins.php">Manage Admins</a></li>
						  	<li class="adminlink"><a href="admin.php">Admin</a></li>
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
	  			if(isset($_POST['manageAdmins'])){
		  			redirect('manageAdmins.php');
	  			}
	  			?>
		   		<div id="entryform">
		   			<h1> Create New Admin </h1>
					<p>Create new admin to manage the classroom directory database</p>
					<p>* = Required Field</p>
					<form method="POST">
					  	<br>First Name:<br>
					  	<input id="text" name="first_name" value="<?php if(isset($_POST['first_name'])) echo $_POST['first_name'];?>">
					  	<br>*Last Name<br>
					  	<input id="text" name="last_name" value="<?php if(isset($_POST['last_name'])) echo $_POST['last_name'];?>" required>
					  	<br>*Username:<br>
					  	<input id="text" name="username" value="<?php if(isset($_POST['username'])) echo $_POST['username'];?>" required>
					  	 <br>Email:<br>
					  	<input id="text" name="email" value="<?php if(isset($_POST['email'])) echo $_POST['email'];?>">
						<br>*Password:<br>
					  	<input id="text" type="password" name="password1" required>
					  	<br>*Confirm Password:<br>
					  	<input id="text" type="password" name="password2" required>
					  	<br><br>
					  	<input id="button" name="addAdmin" type="submit" value="Add Admin">
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
		 </div>
	</body>
</html>



					


