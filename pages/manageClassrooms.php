<!-- manageAdmins.php
A site to manage all records of Classrooms within the DB
Authors: Daniel Gisolfi
Version 1.0 -->

<!DOCTYPE HTML>
<html>
<?php
# Required PHP files to include
require('../scripts/connect_db.php');
require('../scripts/showRecords.php');
require('../scripts/inputRecord.php');

# Perform changes to database if made in table
if($_SERVER['REQUEST_METHOD'] == 'POST') {
	if(isset($_POST['deleteID'])) {
		$id = $_POST['deleteID'];
		delete_class($dbc, $id);
	}
}  			
?>
	<head>
		<meta charset = "utf-8">
		<link rel="stylesheet" type="text/css" href="Style.css">
		<title>Manage Classrooms</title>
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
			   			<h1>Manage Classrooms</h1>
			   			<p>Add or Remove classroom records that can be accessed. To delete a record from the system press the minus symbol to the left of the record. To add a record press the "Add" button below.</p>
			   		</div>
				<!-- create table -->
				<!-- create a responsive table	 -->
				<div style="overflow-x:auto;">
						
		   			<table class="qltable">
		   				<tr>
		   					<th></th>
		   					<th>Room ID</th>
		   					<th>Room Type</th>
		   					<th>Room Number</th>
		   					<th>Room Extension</th>
		   					<th>Room Podium Controller</th>
		   					<th>Room Software File Path</th>
		   					<th>Room Image File Path</th>
		   					<th>Building ID</th>
		   				</tr>
		   			<?php
		   			# Populate table with all items from database
		   			show_class_records($dbc);

		   			# Close database connection
		   			mysqli_close($dbc);
		   			
		   			if(isset($_POST['addClass'])){
		  				redirect('addClassroom.php');
	  				}
		   			?>
		   			</table>
		   		</div>
		   			<form method="POST">
						<input id="button" name="addClass" type="submit" value="Add Classroom">
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