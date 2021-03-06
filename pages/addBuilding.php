<!-- addBuilding.php
A form to add a Building
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
		<title>Add Building</title>
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
	  			if(isset($_POST['addBuild'])){
		  			insert_build_record($dbc);
	  			}
	 
	  			?>
		   		<div id="entryform">
		   			<h1> Create New Building </h1>
					<p>Create new records of Buildings in the database</p>
					<p>All Fields are required </p>
					<form method="POST">
					  	<br>Building ID<br>
					  	<input id="text" name="build_id" value="<?php if(isset($_POST['build_id'])) echo $_POST['build_id'];?>" required>
					  	<br>Building Name<br>
					  	<input id="text" name="building_Name" value="<?php if(isset($_POST['building_Name'])) echo $_POST['building_Name'];?>" required>
					  	<br></br>
					  	<input id="button" name="addBuild" type="submit" value="Add Building">
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