<?php
$debug = true;

# Shows admin records
function show_admin_records($dbc) {
	# Create database query for specified table
	$query = "SELECT * FROM admins";
	
	# Execute the query
	$results = mysqli_query($dbc, $query);
	check_results($results);

	# Show results
	if($results){
  		# Generate a table row for each row result
  		while ($row = mysqli_fetch_array($results, MYSQLI_ASSOC)) {
  				# Tables for lost and found pages - user view
  				
  				echo '<TR>';
  				# Delete button
	    		echo "<form action='manageAdmins.php' method='POST' name='adminDelete".$row['user_id']."'>";
	    		echo '<td><input type=\'image\' src=\'../pages/delete.png\' class=\'delico\' name=\'deleteID\' value=' . $row['user_id'] . '></td>';
	    		echo "</form>";
	        	echo '<TD>' . $row['first_name'] . '</TD>';
	        	echo '<TD>' . $row['last_name'] . '</TD>';
	        	echo '<TD>' . $row['user_name'] . '</TD>';
	        	echo '<TD>' . $row['email'] . '</TD>';
	    		echo '</TR>';
  			} 

  		}
  		# Free up the results in memory
  		mysqli_free_result($results);
	}

function show_class_records($dbc) {
	# Create database query for specified table
	$query = "SELECT * FROM rooms";
	
	# Execute the query
	$results = mysqli_query($dbc, $query);
	check_results($results);

	# Show results
	if($results){
  		# Generate a table row for each row result
  		while ($row = mysqli_fetch_array($results, MYSQLI_ASSOC)) {
  				
  				echo '<TR>';
  				# Delete button
	    		echo "<form action='manageClassrooms.php' method='POST' name='classDelete".$row['room_id']."'>";
	    		echo '<td><input type=\'image\' src=\'../pages/delete.png\' class=\'delico\' name=\'deleteID\' value=' . $row['room_id'] . '></td>';
	    		echo "</form>";
	        	echo '<TD>' . $row['room_id'] . '</TD>';
	        	echo '<TD>' . $row['room_type'] . '</TD>';
	        	echo '<TD>' . $row['room_num'] . '</TD>';
	        	echo '<TD>' . $row['room_tel'] . '</TD>';
	        	echo '<TD>' . $row['room_pod_ctrl'] . '</TD>';
	        	echo '<TD>' . $row['room_pod_sft'] . '</TD>';
	        	echo '<TD>' . $row['room_pod_img'] . '</TD>';
	        	echo '<TD>' . $row['fk_build_id'] . '</TD>';
	    		echo '</TR>';
  			} 

  		}
  		# Free up the results in memory
  		mysqli_free_result($results);
	}


function show_building_records($dbc) {
	# Create database query for specified table
	$query = "SELECT * FROM buildings";
	
	# Execute the query
	$results = mysqli_query($dbc, $query);
	check_results($results);

	# Show results
	if($results){
  		# Generate a table row for each row result
  		while ($row = mysqli_fetch_array($results, MYSQLI_ASSOC)) {
  				
  				echo '<TR>';
  				# Delete button
	    		echo "<form action='manageBuildings.php' method='POST' name='buildDelete".$row['build_id']."'>";
	    		echo '<td><input type=\'image\' src=\'../pages/delete.png\' class=\'delico\' name=\'deleteID\' value=' . $row['build_id'] . '></td>';
	    		echo "</form>";
	        	echo '<TD>' . $row['build_id'] . '</TD>';
	        	echo '<TD>' . $row['building_Name'] . '</TD>';
	    		echo '</TR>';
  			} 

  		}
  		# Free up the results in memory
  		mysqli_free_result($results);
	}


?>
