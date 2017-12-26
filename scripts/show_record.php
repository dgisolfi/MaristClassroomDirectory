<?php
$debug = true;


function show_record($dbc, $id, $room_num) {
  # Create a query to get the name and price sorted by price
  $query = "SELECT * FROM rooms WHERE fk_build_id = '". $id . "' AND room_num = '" . $room_num . "'";

  # Execute the query
  $results = mysqli_query($dbc, $query);
  check_results($results);

  # Generate item information
  if($results){
    if($row = mysqli_fetch_array($results, MYSQLI_ASSOC)) {
      echo '<p>Building: ' . buildingToName($id) . '</p>';
      echo '<p>Room Type: ' . $row['room_type'] . '</p>';
      echo '<p>Room Number: ' . $row['room_num'] . '</p>';
      echo '<p>Phone Number: '. $row['room_tel'] .'</p>';
      // echo '<p>Podium Computer Details: '. $row['room_pod_comp'] .'</p>';
      echo '<p>Podium Controller type: '. $row['room_pod_ctrl'] .'</p>';
      echo '<p>Available Software:</p>';
      echo '<object data='. $row['room_pod_sft'] .'></object>';
      echo '<p>Current Podium Setup:</p>';
      echo '<div id="compImage" ><img src="'.$row['room_pod_img'].'" height="600" width="600"></div>';
    }
      # Free up the results in memory
      mysqli_free_result( $results ) ;
  }
}

?>