<!-- manageAdmins.php
Create a site for Limbo using CSS
Authors: James Ekstract, Daniel Gisolfi
Version 0.1 -->

<!DOCTYPE HTML>
<html>
<?php
ini_set('display_errors', TRUE);
error_reporting(E_ALL);
# Required PHP files to include
require('../scripts/connect_db.php');
require('../scripts/showRecords.php');
require('../scripts/inputRecord.php');

# Perform changes to database if made in table
if($_SERVER['REQUEST_METHOD'] == 'POST') {
	if(isset($_POST['deleteID'])) {
		$id = $_POST['deleteID'];
		delete_admin($dbc, $id);
	// } else {
	// 	$username = $_POST['username'];
	// 	$password1 = $_POST['password1'];
	// 	$password2 = $_POST['password2'];
	// 	insert_admin_record($dbc);	
	}
}  			
?>
	<head>
		<meta charset = "utf-8">
		<link rel="stylesheet" type="text/css" href="Style.css">
		<title>Manage Administrators</title>
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
		   		<div id="items">
		   			<div id="banner">
			   			<h1>Manage Admins</h1>
						<p>Manage administrator accounts which can manage the classroom directory database. To delete a record from the system press the minus symbol to the left of the record. To add a record press the "Add" button below</p>
					</div>
					<!-- create table -->
		   			<table class="qltable">
		   				<tr>
		   					<th></th>
		   					<th>First Name</th>
		   					<th>Last Name</th>
		   					<th>User Name</th>
		   					<th>Email</th>
		   				</tr>
		   			<?php
		   			# Populate table with all items from database
		   			show_admin_records($dbc);

		   			# Close database connection
		   			mysqli_close($dbc);

		   			if(isset($_POST['AddAdmins'])){
		  				redirect('addAdmin.php');
	  				}
		   			?>
		   			</table>
		   			<form method="POST">
						<input id="button" name="AddAdmins" type="submit" value="Add Admins">
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