#classrooms_db.sql
#Create and populate a database for Marist Classroom Directory
#Authors: Daniel Gisolfi
#Version 0.1

-- #Create the database
-- CREATE DATABASE IF NOT EXISTS classrooms_db;
-- USE classrooms_db;

-- -- #Create the user table
-- CREATE TABLE IF NOT EXISTS admins(
-- 	user_id 		INT 	AUTO_INCREMENT 	PRIMARY KEY		NOT NULL,
-- 	first_name 		TEXT,
-- 	last_name 		TEXT,
-- 	user_name		TEXT,
-- 	email 			TEXT,
-- 	pass 			TEXT);


-- -- #Populate the user table
-- INSERT INTO admins(first_name, last_name, user_name, email, pass)
-- VALUES("Daniel", "Gisolfi", "stdg1", "Daniel.Gisolfi1@marist.edu", "dan");

-- -- #Create the buildings table
-- CREATE TABLE IF NOT EXISTS buildings(
-- 	build_id 		INT 	 AUTO_INCREMENT 	PRIMARY KEY		NOT NULL,
-- 	building_Name	TEXT);

-- INSERT INTO buildings(building_Name)
-- VALUES("Cannavino Library"),
-- 		("Donnelly Hall"),
-- 		("Dyson Center"),
-- 		("Fontaine  Hall"),
-- 		("Hancock Center"),
-- 		("Lowell Thomas Communications Center"),
-- 		("McCann Center"),
-- 		("Science and Allied Health Building"),
-- 		("Steel Plant Studios and Gallery"),
-- 		("Student Center/Music Building");


-- CREATE TABLE IF NOT EXISTS rooms(
-- 	room_id			INT 	 AUTO_INCREMENT 	PRIMARY KEY 		NOT NULL,
-- 	room_type		SET('Lab', 'Classroom')		NOT NULL,
-- 	room_num		INT 						NOT NULL,
-- 	room_tel		INT,
-- 	room_pod_ctrl 	SET('Crestron', 'Extron'),
-- 	-- room_pod_comp	TEXT,
-- 	room_pod_sft	TEXT,
-- 	room_pod_img	TEXT,
-- 	fk_build_id 	INT  						NOT NULL);



-- ALTER TABLE rooms
-- ADD FOREIGN KEY (fk_build_id) REFERENCES buildings(build_id);


-- INSERT INTO rooms(room_type, room_num, room_tel, room_pod_ctrl, room_pod_sft, room_pod_img, fk_build_id)
-- VALUES("Classroom", 	301, 3472, "Crestron", "/pages/software.txt", "/pages/logo.png", 1),
-- 		("Classroom", 	303, 3349, "Extron","/pages/software.txt", "/pages/logo.png", 1),
-- 		("Lab", 		333, 3247, "Crestron", "/pages/software.txt", "/pages/logo.png", 1),
-- 		("Lab", 		110, 2398, "Extron", "/pages/software.txt", "/pages/logo.png",  1);









