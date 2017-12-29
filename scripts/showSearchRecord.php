<!--showSearchRecord.php
Create a site for the classroom view of Marist College
Author: Daniel Gisolfi
Version 1.0 -->

<?php
# Shows link records
function show_search_records($dbc, $room_num) {
	# Create database query for specified id
	$query = "SELECT room_type, room_num, fk_build_id FROM rooms WHERE room_num LIKE '%". $room_num . "%' ORDER BY room_num ASC;";
	
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

