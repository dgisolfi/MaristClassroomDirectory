<!-- home.php
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
						 <!-- 	<li class="dropdown"><a href="#" class="dropbtn">Report an Item</a>
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
					<p>Marist College Classroom Directory</p>
				</div>
					<div>

					<div id="googleMap" style="width:100%;height:400px;"></div>

					<script>
					function myMap() {
						var mapProp= {
						    center:new google.maps.LatLng(41.720858, -73.932443),
						    zoom:15,
						    mapTypeId: google.maps.MapTypeId.SATELLITE 
						};
						


				       var locations = [
				         ['Cannavino Library',  41.721943, -73.934141, 0, 'ShowBuilding.php'],
				         ['Donnelly Hall',  41.720858, -73.932443, 0, 'http://www.Marist.edu'],
				         ['Dyson Center',  41.724197, -73.933176, 0, 'http://www.Marist.edu'],
				         ['Fontaine  Hall',  41.725595, -73.933041, 0, 'http://www.Marist.edu'],
				         ['Hancock Center',  41.722925, -73.934498, 0, 'http://www.Marist.edu'],
				         ['Lowell Thomas Communications Center',  41.723268, -73.932827, 0, 'http://www.Marist.edu'],
				         ['McCann Center', 41.717302, -73.935121, 0, 'http://www.Marist.edu'],
				         ['Science and Allied Health Building',  41.722436, -73.930191, 0, 'http://www.Marist.edu'],
				         ['Steel Plant Studios and Gallery',  41.721352, -73.931117, 0, 'http://www.Marist.edu'],
				         ['Student Center/Music Building',  41.720877, -73.935169, 0, 'http://www.Marist.edu']
						];

						var Donnely = new google.maps.LatLng(41.720858, -73.932443);

					
						var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

						var infowindow = new google.maps.InfoWindow();

						var marker, i;

						for (i = 0; i < locations.length; i++) {
						  marker = new google.maps.Marker({
						   position: new google.maps.LatLng(locations[i][1], locations[i][2]),
						   map: map,
						   url: locations[i][4]
						  });

						 google.maps.event.addListener(marker, 'mouseover', (function(marker, i) {
						   return function() {
						     infowindow.setContent(locations[i][0]);
						     infowindow.open(map, marker);
						   }
						 })(marker, i));

						      google.maps.event.addListener(marker, 'click', (function(marker, i) {
						   return function() {
						     infowindow.setContent(locations[i][0]);
						     infowindow.open(map, marker);
						     window.location.href = this.url;
						   }
						 })(marker, i));

						}
					}
					</script>

					<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAV5jefxAIY0z4QbbgcHpToqmU0ULvx7KA&callback=myMap"
  					type="text/javascript"></script>
					<!--
					To use this code on your website, get a free API key from Google.
					Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
					-->

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