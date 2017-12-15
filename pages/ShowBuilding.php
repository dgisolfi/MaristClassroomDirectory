
<!--ShowBuilding.php
Create a site for the classroom view of Marist College
Author: Daniel Gisolfi
Version 0.1 -->

<!DOCTYPE HTML>
<html>
<?php
# Required PHP files to include
//require('../scripts/connect_db.php');

?>
    <head>
        <meta charset = "utf-8">
        <link rel="stylesheet" type="text/css" href="style.css"> 
        <title>Home</title>
    </head>
    <body>
        <!-- container -->
        <div id="container">
            <!--  header -->
            <div id="header">
                <div id="header-content">
                    <!-- logo/home link -->
                    <!-- <div id="logo"><span title="Home"><a href="home.php"><img src="limbologo.png"></a></span></div> -->
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
                <!-- homepage welcome message/title -->
                <div id="banner">
                    <h1></h1>
                    <?php echo '<p>$name</p>' ?>;
                </div>
                    <div>
                    <?php

                    ?>
                    </div>
		   		</div>
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