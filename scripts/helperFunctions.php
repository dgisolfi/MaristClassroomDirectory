
<?php

ini_set('display_errors', TRUE);
error_reporting(E_ALL);
require('connect_db.php');

function check_results($results) {
  global $dbc;
  if($results != true){
    echo '<p>SQL ERROR = ' . mysqli_error( $dbc ) . '</p>'  ;
  }
  return true ;
}


function validateName($input){
	global $dbc;
	$query = "SELECT first_name FROM admins WHERE user_name='" . $input . "'";
	# Execute the query
  	$results = mysqli_query($dbc, $query);
  	check_results($results);
  	if (mysqli_num_rows( $results ) == 0 ){
    	return false;
  	} else {
      return true;
 	}
}
# Hashes password and validates it against password in database
function validatePass($userName, $pw){
	global $dbc;
	#Retrieve password from DB and compare input to the actual value
	$query = "SELECT pass FROM admins WHERE user_name='" . $userName . "'" ;
	# Execute the query
  $results = mysqli_query($dbc, $query);
 	check_results($results);
  $row = mysqli_fetch_array($results, MYSQLI_ASSOC);
  if(password_verify($pw, $row['pass'])) {
    return true;
  } else {
    return false;
  }
}

function buildingToName($id){
  global $dbc;
  $query = "SELECT building_Name FROM buildings WHERE build_id = " .$id. "";
  $results = mysqli_query($dbc, $query);
  check_results($results);
  $row = mysqli_fetch_array($results, MYSQLI_ASSOC);
  return $row['building_Name'];
}

function console_log( $data ){
  echo '<script>';
  echo 'console.log('. json_encode( $data ) .')';
  echo '</script>';
}

?>