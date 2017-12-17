

<?php
ini_set('display_errors', TRUE);
error_reporting(E_ALL);

# Shows link records
function show_quicklink_records($dbc, $id) {
	# Create database query for specified id
	$query = "SELECT room_type, room_num, fk_build_id FROM rooms WHERE fk_build_id = '". $id . "'ORDER BY room_num ASC;";
	
	# Execute the query
	$results = mysqli_query($dbc, $query);
	check_results($results);

	# Show results
	if($results){
  		# For each row result, generate a id row
  		while ($row = mysqli_fetch_array($results, MYSQLI_ASSOC)) {
  			$alink = '<A HREF=showClassroom.php?id=' . $row['fk_build_id']  . '&room_num='. $row['room_num'] .'>' . $row['room_num'] . '</A>';
    		echo '<TR>';
    		echo '<TD>' . $row['room_type'] . '</TD>';
    		echo '<TD>' . $alink . '</TD>';
    		echo '</TR>';	
  		}

  		# Free up the results in memory
  		mysqli_free_result( $results ) ;
	}
}

?>

