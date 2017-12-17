<?php
$debug = true;


function show_record($dbc, $id, $room_num) {
  # Create a query to get the name and price sorted by price
  $query = "SELECT room_type, room_num FROM rooms WHERE fk_build_id = '". $id . "' AND room_num = '" . $room_num . "'";

  # Execute the query
  $results = mysqli_query($dbc, $query);
  check_results($results);

  # Generate item information
  if($results){
    if($row = mysqli_fetch_array($results, MYSQLI_ASSOC)) {
      echo '<p>Room Type: ' . $row['room_type'] . '</p>';
      echo '<p>Room Number: ' . $row['room_num'] . '</p>';
      echo '<p>Building: ' . buildingToName($id) . '</p>';
            
    }
      # Free up the results in memory
      mysqli_free_result( $results ) ;
  }
}

?>