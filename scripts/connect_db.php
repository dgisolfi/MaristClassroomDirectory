<?php 
# CONNECT TO MySQL DATABASE.


# Connect to the limbo database.

# Otherwise fail gracefully and explain the error. 

$dbc = @mysqli_connect ( 'localhost', 'root', '', 'classrooms_db' )


OR die ( mysqli_connect_error() ) ;


# Set encoding to match PHP script encoding.
mysqli_set_charset( $dbc, 'utf8' ) ;
