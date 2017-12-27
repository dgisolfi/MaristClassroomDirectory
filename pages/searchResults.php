
<!--searchResults.php
Create a site for the classroom view of Marist College
Author: Daniel Gisolfi
Version 0.1 -->

<!DOCTYPE HTML>
<html>
<?php
ini_set('display_errors', TRUE);
error_reporting(E_ALL);
# Required PHP files to include
require('../scripts/connect_db.php');
require('../scripts/helperFunctions.php');
require('../scripts/showSearchRecord.php');
require('../scripts/showQuicklinkRecords.php');

?>
    <head>
        <meta charset = "utf-8">
        <link rel="stylesheet" type="text/css" href="style.css"> 
        <title>Search Results</title>
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
                    <?php
                    if(isset($_GET['room_num'])) {
                        $room_num = $_GET['room_num'];
                    }
                    echo "<h1>All rooms with number " . $room_num . "</h1>";
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
                            show_search_records($dbc, $room_num);
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