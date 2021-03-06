<!-- home.php
The starting page for all users that displays a map of campus
Author: Daniel Gisolfi
Version 1.0 -->

<!DOCTYPE HTML>
<html>
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
					<h1>Marist Classroom Directory</h1>
					<p>please select the marker below for the building the classroom is in</p>
				</div>
					<div>

					<div id="googleMap" style="width:100%;height:400px;"></div>

					<script>
					function myMap() {
						// Declare a starting point and type of map
						var mapProp= {
						    center:new google.maps.LatLng(41.722545, -73.934117),
						    zoom:15,
						    mapTypeId: google.maps.MapTypeId.SATELLITE 
						};
						

						//All locations and cords opf buildi
				       var locations = [
				         ['Cannavino Library',  41.721943, -73.934141, 0, 'ShowBuilding.php?id=1'],
				         ['Donnelly Hall',  41.720858, -73.932443, 0, 'ShowBuilding.php?id=2'],
				         ['Dyson Center',  41.724197, -73.933176, 0, 'ShowBuilding.php?id=3'],
				         ['51 Fulton',  41.724019, -73.927368, 0, 'ShowBuilding.php?id=4'],
				         ['Fontaine  Hall',  41.725595, -73.933041, 0, 'ShowBuilding.php?id=5'],
				         ['Hancock Center',  41.722925, -73.934498, 0, 'ShowBuilding.php?id=6'],
				         ['Lowell Thomas Communications Center',  41.723268, -73.932827, 0, 'ShowBuilding.php?id=7'],
				         ['McCann Center', 41.717302, -73.935121, 0, 'ShowBuilding.php?id=8'],
				         ['Science and Allied Health Building',  41.722436, -73.930191, 0, 'ShowBuilding.php?id=9'],
				         ['Steel Plant Studios and Gallery',  41.721352, -73.931117, 0, 'ShowBuilding.php?id=10'],
				         ['Student Center/Music Building',  41.720877, -73.935169, 0, 'ShowBuilding.php?id=11'],
				         ['West Cedar Townhouses(Lower)',  41.720358, -73.930163, 0, 'ShowBuilding.php?id=12'],
				         ['West Cedar Townhouses(Upper)',  41.721478, -73.926059, 0, 'ShowBuilding.php?id=13'],
						];

						// Declare the cords of donnelly for starting point
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