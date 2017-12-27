
<!--searchClass.php
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
require('../scripts/redirect.php');
require('../scripts/helperFunctions.php');
require('../scripts/showQuicklinkRecords.php');

?>
    <head>
        <meta charset = "utf-8">
        <link rel="stylesheet" type="text/css" href="style.css"> 
        <title>Search Classrooms</title>
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
                    <h1>Enter a classroom number below:</h1>
                </div>
                <div id="entryform">
                    <?php
                    // If the search button is pressed
                    if(isset($_POST['Search'])){
                        // get all values from the form
                        $room_num = $_POST['query'];
                        $page = 'searchResults.php?room_num='.$room_num;
                        redirect($page);
                    }

                    ?>
                    <form method="POST">
                        <input id="text" name="query" placeholder="Enter classroom number" value="<?php if(isset($_POST['query'])) echo $_POST['query'];?>" required>
                        <br/>
                        <p><input id="button" name="Search" type="submit" value="Search"></p>
                    </form>  
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