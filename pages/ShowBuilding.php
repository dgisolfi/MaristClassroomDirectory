<!--ShowBuilding.php
Create a site for the Building view of Marist College
Author: Daniel Gisolfi
Version 1.0 -->

<!DOCTYPE HTML>
<html>
<?php
# Required PHP files to include
require('../scripts/connect_db.php');
require('../scripts/helperFunctions.php');
require('../scripts/showQuicklinkRecords.php');
?>
    <head>
        <meta charset = "utf-8">
        <link rel="stylesheet" type="text/css" href="style.css"> 
        <title>Building Viewer</title>
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
                <!-- homepage welcome message/title -->
                <div id="banner">
                    <?php
                    #get the ID of the building
                    if(isset($_GET['id'])) {
                        $id = $_GET['id'];
                    }
                    #convert building ID to name
                    $buildingName = buildingToName($id);
                    echo "<h1>" . $buildingName . "</h1>";
                    ?>
                    <p>Select a classroom below to view further details</p>
                </div>
                    <div>   
                        <table class="qltable">
                          <tr>
                            <th>Room Type</th>
                            <th>Room Number</th> 
                          </tr>
                            <?php
                            #Show all records of the buildings with links 
                            show_quicklink_records($dbc, $id);
                            ?>
                        </table>
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