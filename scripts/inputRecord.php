<!-- inputRecord.php
Various functions used in limbo
Authors: James Ekstract, Daniel Gisolfi
Version 0.1 -->

<?php
require('connect_db.php');
require('helperFunctions.php');
require('../scripts/redirect.php');


# Inserts new admin record into the database
function insert_admin_record($dbc) {
	$username = $_POST['username'];
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$email = $_POST['email'];	
	$password1 = $_POST['password1'];
	$password2 = $_POST['password2'];


	if(empty($username)) {
		echo '<div id="content_area"><h2>Please enter a username</h2></div>';
	} else if(empty($last_name)) {
		echo '<div id="content_area"><h2>Please Enter a last Name</h2></div>';
	} else if(empty($password1)) {
		echo '<div id="content_area"><h2>Please Enter a password</h2></div>';
	} else if(empty($password2)) {
		echo '<div id="content_area"><h2>Please confirm password</h2></div>';
	} else if($password1 != $password2) {
		echo '<div id="content_area"><h2>Passwords do not match. Please try again.</h2></div>';
	} else {
		$password1 = password_hash($password1, PASSWORD_DEFAULT);
		$query = "INSERT INTO admins(first_name, last_name, user_name, email, pass) VALUES('" . $first_name . "','" . $last_name . "','" . $username . "','" . $email . "','" . $password1 . "')";
		$result = mysqli_query($dbc, $query);
		check_results($result);
		echo '<div id="content_area"><h2>Admin Added</h2></div>';
		// $page ='manageAdmins.php';
		// redirect($page);
	}
}

function delete_admin($dbc, $id) {
	$query = "DELETE FROM ADMINS WHERE user_id='" . $id . "'";
	$result = mysqli_query($dbc, $query);
	check_results($result);
	echo '<div id="content_area"><h2>Admin Deleted</h2></div>';

}

function delete_class($dbc, $id) {
	$query = "DELETE FROM rooms WHERE room_id='" . $id . "'";
	$result = mysqli_query($dbc, $query);
	check_results($result);
	echo '<div id="content_area"><h2>Room Deleted</h2></div>';

}



function alert($result){
	if (!$result){
			echo '<div id="content_area"><h2>Please submit a valid record!</h2></div>';
		}else{
			echo '<div id="content_area"><h2>Record Saved in Database</h2></div>';
	}
}

?>

