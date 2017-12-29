<!--ShowClassroom.php
Create a site for the classroom view of Marist College
Author: Daniel Gisolfi
Version 1.0 -->
<!DOCTYPE HTML>
<html>
<?php
# Required PHP files to include
require('../scripts/connect_db.php');
require('../scripts/helperFunctions.php');
require('../scripts/show_record.php');
?>
    <head>
        <meta charset = "utf-8">
        <link rel="stylesheet" type="text/css" href="style.css"> 
        <title>Classroom Details</title>
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
                            <li class="adminlink"><a href="adminLogin.php">Admin</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- content area -->
            <div id="content_area">
                <!-- homepage welcome message/title -->
                <div id="banner">
                    <?php
                    #get the id of the classroom 
                    if(isset($_GET['id'])) {
                        $id = $_GET['id'];
                    }

                    #get the room number from the database
                    if(isset($_GET['room_num'])) {
                        $room_num = $_GET['room_num'];
                    }
                    
                    #Display the room number in the banner
                    echo "<h1> Room " . $room_num . "</h1>";
                    ?>
                    <p>Below are all available details of this room</p>
                </div>
                <div id="iteminfo">
                    <?php
                    #call the function to show all records
                    show_record($dbc, $id, $room_num);
                    ?>
                </div>
		   	</div>
			<!-- footer -->
			<div id="footer">
				<div id="footer-content">
					<p><a href= http://www.marist.edu>Marist College</a> | (845) 575-3000</p>
					<p>3399 North Road, Poughkeepsie, NY, 12601</p>
				</div>
			</div>
		</div>
	</body>
</html>