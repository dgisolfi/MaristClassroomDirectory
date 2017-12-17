#classrooms_db.sql
#Create and populate a database for Marist Classroom Directory
#Authors: Daniel Gisolfi
#Version 0.1

#Create the database
CREATE DATABASE IF NOT EXISTS classrooms_db;
USE classrooms_db;

#Create the user table
CREATE TABLE IF NOT EXISTS admins(
	user_id 		INT 	AUTO_INCREMENT 	PRIMARY KEY		NOT NULL,
	first_name 		TEXT,
	last_name 		TEXT,
	user_name		TEXT,
	email 			TEXT,
	pass 			TEXT);


#Populate the user table
INSERT INTO admins(first_name, last_name, user_name, email, pass)
VALUES("Daniel", "Gisolfi", "stdg1", "Daniel.Gisolfi1@marist.edu", "dan");

#Create the buildings table
CREATE TABLE IF NOT EXISTS buildings(
	build_id 		INT 	 AUTO_INCREMENT 	PRIMARY KEY		NOT NULL,
	building_Name	TEXT);

INSERT INTO buildings(building_Name)
VALUES("Cannavino Library"),
		("Donnelly Hall"),
		("Dyson Center"),
		("Fontaine  Hall"),
		("Hancock Center"),
		("Lowell Thomas Communications Center"),
		("McCann Center"),
		("Science and Allied Health Building"),
		("Steel Plant Studios and Gallery"),
		("Student Center/Music Building");


-- CREATE TABLE IF NOT EXISTS rooms(
-- 	room_id			INT 	 AUTO_INCREMENT 	PRIMARY KEY 		NOT NULL,
-- 	room_type		SET('Lab', 'Classroom')		NOT NULL,
-- 	room_num		INT,
-- 	fk_build_id 		INT 	FOREIGN KEY fk_build_id REFERENCES buildings(build_id));