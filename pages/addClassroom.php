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
		<title>Add Classroom</title>
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
	  			if(isset($_POST['addClass'])){
		  			insert_class_record($dbc);
	  			}
	 
	  			?>
		   		<div id="entryform">
		   			<h1> Create New Classroom </h1>
					<p>Create new records of classrooms in the database</p>
					<p>All Fields are required </p>
					<form method="POST">
					  	<br>Room Type (Lab or CLassroom):<br>
					  	<input id="text" name="room_type" value="<?php if(isset($_POST['room_type'])) echo $_POST['room_type'];?>" required>
					  	<br>Room Number<br>
					  	<input id="text" name="room_num" value="<?php if(isset($_POST['room_num'])) echo $_POST['room_num'];?>" required>
					  	<br>Room Telephone Extension:<br>
					  	<input id="text" name="room_tel" value="<?php if(isset($_POST['room_tel'])) echo $_POST['room_tel'];?>" required>
					  	 <br>Room Podium Controller Type:<br>
					  	<input id="text" name="room_pod_ctrl" value="<?php if(isset($_POST['room_pod_ctrl'])) echo $_POST['room_pod_ctrl'];?>" required>
						<br>Room software list file path:<br>
					  	<input id="text" name="room_pod_sft" value="<?php if(isset($_POST['room_pod_sft'])) echo $_POST['room_pod_sft'];?>" required>
					  	<br>Room image file path:<br>
					  	<input id="text" name="room_pod_img" value="<?php if(isset($_POST['room_pod_img'])) echo $_POST['room_pod_img'];?>" required>
					  	<br>Building ID:<br>
					  	<input id="text" name="fk_build_id" value="<?php if(isset($_POST['fk_build_id'])) echo $_POST['fk_build_id'];?>" required>
					  	<br></br>
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



					


