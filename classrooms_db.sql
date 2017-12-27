#Classroomrooms_db.sql
#Create and populate a database for Marist Classroomroom Directory
#Authors: Daniel Gisolfi
#Version 0.1

#Create the database
CREATE DATABASE IF NOT EXISTS Classroomrooms_db;
USE Classroomrooms_db;

-- #Create the user table
CREATE TABLE IF NOT EXISTS admins(
	user_id 		INT 	AUTO_INCREMENT 	PRIMARY KEY		NOT NULL,
	first_name 		TEXT,
	last_name 		TEXT	NOT NULL,
	user_name		TEXT	NOT NULL,
	email 			TEXT,
	pass 			TEXT	NOT NULL);



-- #Populate the user table
INSERT INTO admins(first_name, last_name, user_name, email, pass)
VALUES("Daniel", "Gisolfi", "stdg1", "Daniel.Gisolfi1@marist.edu", "$2y$10$CN0TG0C2jYy57.MQkCjNduFRscTmLJpRUSHZBMyAVfIVzUuD2Ze8e");

-- #Create the buildings table
CREATE TABLE IF NOT EXISTS buildings(
	build_id 		INT 	 AUTO_INCREMENT 	PRIMARY KEY		NOT NULL,
	building_Name	TEXT);

INSERT INTO buildings(building_Name)
VALUES	("Cannavino Library"),
		("Donnelly Hall"),
		("Dyson Center"),
		("51 Fulton"),	
		("Fontaine Hall"),
		("Hancock Center"),
		("Lowell Thomas Communications Center"),	
		("McCann Center"),
		("Science and Allied Health Building"),	
		("Steel Plant Studios and Gallery"),
		("Student Center/Music Building"),
		("West Cedar Townhouses(Lower)"),
		("West Cedar Townhouses(Upper)");


CREATE TABLE IF NOT EXISTS rooms(
	room_id			INT 	 AUTO_INCREMENT 	PRIMARY KEY 		NOT NULL,
	room_type		SET('Lab', 'Classroom')		NOT NULL,
	room_num		VARCHAR(13) CHARACTER SET utf8						NOT NULL,
	room_tel		INT,
	room_pod_ctrl 	SET('Crestron', 'Extron'),
	room_pod_sft	VARCHAR(34) CHARACTER SET utf8,
	room_pod_img	VARCHAR(32) CHARACTER SET utf8,
	fk_build_id 	INT  						NOT NULL);

ALTER TABLE rooms
ADD FOREIGN KEY (fk_build_id) REFERENCES buildings(build_id);


INSERT INTO rooms (room_type, room_num, room_tel, room_pod_ctrl, room_pod_sft, room_pod_img, fk_build_id)
VALUES ('Lab','LB110',NULL,NULL,'../data/software/LB110.txt','../data/images/LB110.jpg',1),
 ('Lab','LB111',NULL,NULL,'../data/software/LB111.txt','../data/images/LB111.jpg',1),
 ('Lab','LB112',NULL,NULL,'../data/software/LB112.txt','../data/images/LB112.jpg',1),
 ('Lab','LB300B',NULL,NULL,'../data/software/LB300B.txt','../data/images/LB300B.jpg',1),
 ('Lab','LB300C',NULL,NULL,'../data/software/LB300C.txt','../data/images/LB300C.jpg',1),
 ('Lab','LB300D',NULL,NULL,'../data/software/LB300D.txt','../data/images/LB300D.jpg',1),
 ('Lab','LB301',NULL,NULL,'../data/software/LB301.txt','../data/images/LB301.jpg',1),
 ('Lab','LB302',NULL,NULL,'../data/software/LB302.txt','../data/images/LB302.jpg',1),
 ('Lab','LB303',NULL,NULL,'../data/software/LB303.txt','../data/images/LB303.jpg',1),
 ('Lab','LB304',NULL,NULL,'../data/software/LB304.txt','../data/images/LB304.jpg',1),
 ('Lab','LB305',NULL,NULL,'../data/software/LB305.txt','../data/images/LB305.jpg',1),
 ('Lab','LB306',NULL,NULL,'../data/software/LB306.txt','../data/images/LB306.jpg',1),
 ('Lab','LB312',NULL,NULL,'../data/software/LB312.txt','../data/images/LB312.jpg',1),
 ('Lab','LB313',NULL,NULL,'../data/software/LB313.txt','../data/images/LB313.jpg',1),
 ('Lab','LB314',NULL,NULL,'../data/software/LB314.txt','../data/images/LB314.jpg',1),
 ('Lab','LB315',NULL,NULL,'../data/software/LB315.txt','../data/images/LB315.jpg',1),
 ('Lab','LB316',NULL,NULL,'../data/software/LB316.txt','../data/images/LB316.jpg',1),
 ('Lab','LB317',NULL,NULL,'../data/software/LB317.txt','../data/images/LB317.jpg',1),
 ('Lab','LB333',NULL,NULL,'../data/software/LB333.txt','../data/images/LB333.jpg',1),
 ('Lab','LB334',NULL,NULL,'../data/software/LB334.txt','../data/images/LB334.jpg',1),
 ('Lab','LBBasement',NULL,NULL,'../data/software/LBBasement.txt','../data/images/LBBasement.jpg',1),
 ('Classroom','DN100',NULL,NULL,'../data/software/DN100.txt','../data/images/DN100.jpg',2),
 ('Classroom','DN106',NULL,NULL,'../data/software/DN106.txt','../data/images/DN106.jpg',2),
 ('Classroom','DN112',NULL,NULL,'../data/software/DN112.txt','../data/images/DN112.jpg',2),
 ('Classroom','DN114',NULL,NULL,'../data/software/DN114.txt','../data/images/DN114.jpg',2),
 ('Classroom','DN118',NULL,NULL,'../data/software/DN118.txt','../data/images/DN118.jpg',2),
 ('Classroom','DN211',NULL,NULL,'../data/software/DN211.txt','../data/images/DN211.jpg',2),
 ('Classroom','DN225',NULL,NULL,'../data/software/DN225.txt','../data/images/DN225.jpg',2),
 ('Classroom','DN236',NULL,NULL,'../data/software/DN236.txt','../data/images/DN236.jpg',2),
 ('Classroom','DN236A',NULL,NULL,'../data/software/DN236A.txt','../data/images/DN236A.jpg',2),
 ('Classroom','DN237',NULL,NULL,'../data/software/DN237.txt','../data/images/DN237.jpg',2),
 ('Classroom','DN238',NULL,NULL,'../data/software/DN238.txt','../data/images/DN238.jpg',2),
 ('Classroom','DN240A',NULL,NULL,'../data/software/DN240A.txt','../data/images/DN240A.jpg',2),
 ('Classroom','DN240B',NULL,NULL,'../data/software/DN240B.txt','../data/images/DN240B.jpg',2),
 ('Classroom','DN254-DS1',NULL,NULL,'../data/software/DN254-DS1.txt','../data/images/DN254-DS1.jpg',2),
 ('Classroom','DN254-DS2',NULL,NULL,'../data/software/DN254-DS2.txt','../data/images/DN254-DS2.jpg',2),
 ('Classroom','DN254-DS3',NULL,NULL,'../data/software/DN254-DS3.txt','../data/images/DN254-DS3.jpg',2),
 ('Lab','DN107',NULL,NULL,'../data/software/DN107.txt','../data/images/DN107.jpg',2),
 ('Lab','DN227/231',NULL,NULL,'../data/software/DN227/231.txt','../data/images/DN227/231.jpg',2),
 ('Lab','DN229',NULL,NULL,'../data/software/DN229.txt','../data/images/DN229.jpg',2),
 ('Lab','DN254',NULL,NULL,'../data/software/DN254.txt','../data/images/DN254.jpg',2),
 ('Lab','DN258',NULL,NULL,'../data/software/DN258.txt','../data/images/DN258.jpg',2),
 ('Lab','DN258L-VM',NULL,NULL,'../data/software/DN258L-VM.txt','../data/images/DN258L-VM.jpg',2),
 ('Classroom','DY110',NULL,NULL,'../data/software/DY110.txt','../data/images/DY110.jpg',3),
 ('Classroom','DY133',NULL,NULL,'../data/software/DY133.txt','../data/images/DY133.jpg',3),
 ('Classroom','DY145',NULL,NULL,'../data/software/DY145.txt','../data/images/DY145.jpg',3),
 ('Classroom','DY146',NULL,NULL,'../data/software/DY146.txt','../data/images/DY146.jpg',3),
 ('Classroom','DY209',NULL,NULL,'../data/software/DY209.txt','../data/images/DY209.jpg',3),
 ('Classroom','DY210',NULL,NULL,'../data/software/DY210.txt','../data/images/DY210.jpg',3),
 ('Classroom','DY212',NULL,NULL,'../data/software/DY212.txt','../data/images/DY212.jpg',3),
 ('Classroom','DY213',NULL,NULL,'../data/software/DY213.txt','../data/images/DY213.jpg',3),
 ('Classroom','DY214',NULL,NULL,'../data/software/DY214.txt','../data/images/DY214.jpg',3),
 ('Classroom','DY215',NULL,NULL,'../data/software/DY215.txt','../data/images/DY215.jpg',3),
 ('Classroom','DY218',NULL,NULL,'../data/software/DY218.txt','../data/images/DY218.jpg',3),
 ('Classroom','DY226',NULL,NULL,'../data/software/DY226.txt','../data/images/DY226.jpg',3),
 ('Classroom','DY227',NULL,NULL,'../data/software/DY227.txt','../data/images/DY227.jpg',3),
 ('Classroom','DY228',NULL,NULL,'../data/software/DY228.txt','../data/images/DY228.jpg',3),
 ('Classroom','DY229',NULL,NULL,'../data/software/DY229.txt','../data/images/DY229.jpg',3),
 ('Classroom','DY231',NULL,NULL,'../data/software/DY231.txt','../data/images/DY231.jpg',3),
 ('Lab','DY206',NULL,NULL,'../data/software/DY206.txt','../data/images/DY206.jpg',3),
 ('Lab','DY230',NULL,NULL,'../data/software/DY230.txt','../data/images/DY230.jpg',3),
 ('Lab','DY303',NULL,NULL,'../data/software/DY303.txt','../data/images/DY303.jpg',3),
 ('Lab','DY304',NULL,NULL,'../data/software/DY304.txt','../data/images/DY304.jpg',3),
 ('Lab','DYHallway',NULL,NULL,'../data/software/DYHallway.txt','../data/images/DYHallway.jpg',3),
 ('Lab','FF202',NULL,NULL,'../data/software/FF202.txt','../data/images/FF202.jpg',4),
 ('Lab','FF204',NULL,NULL,'../data/software/FF204.txt','../data/images/FF204.jpg',4),
 ('Classroom','FN101',NULL,NULL,'../data/software/FN101.txt','../data/images/FN101.jpg',5),
 ('Classroom','FN102',NULL,NULL,'../data/software/FN102.txt','../data/images/FN102.jpg',5),
 ('Classroom','FN103',NULL,NULL,'../data/software/FN103.txt','../data/images/FN103.jpg',5),
 ('Classroom','FN104',NULL,NULL,'../data/software/FN104.txt','../data/images/FN104.jpg',5),
 ('Classroom','FN105',NULL,NULL,'../data/software/FN105.txt','../data/images/FN105.jpg',5),
 ('Classroom','FNHenryHudson',NULL,NULL,'../data/software/FNHenryHudson.txt','../data/images/FNHenryHudson.jpg',5),
 ('Classroom','HC1021',NULL,NULL,'../data/software/HC1021.txt','../data/images/HC1021.jpg',6),
 ('Classroom','HC2005',NULL,NULL,'../data/software/HC2005.txt','../data/images/HC2005.jpg',6),
 ('Classroom','HC2017',NULL,NULL,'../data/software/HC2017.txt','../data/images/HC2017.jpg',6),
 ('Classroom','HC2019',NULL,NULL,'../data/software/HC2019.txt','../data/images/HC2019.jpg',6),
 ('Classroom','HC2020',NULL,NULL,'../data/software/HC2020.txt','../data/images/HC2020.jpg',6),
 ('Classroom','HC2023',NULL,NULL,'../data/software/HC2023.txt','../data/images/HC2023.jpg',6),
 ('Lab','HC0004',NULL,NULL,'../data/software/HC0004.txt','../data/images/HC0004.jpg',6),
 ('Lab','HC0004-Mac',NULL,NULL,'../data/software/HC0004-Mac.txt','../data/images/HC0004-Mac.jpg',6),
 ('Lab','HC0005',NULL,NULL,'../data/software/HC0005.txt','../data/images/HC0005.jpg',6),
 ('Lab','HC0006',NULL,NULL,'../data/software/HC0006.txt','../data/images/HC0006.jpg',6),
 ('Lab','HC1020',NULL,NULL,'../data/software/HC1020.txt','../data/images/HC1020.jpg',6),
 ('Classroom','LT006',NULL,NULL,'../data/software/LT006.txt','../data/images/LT006.jpg',7),
 ('Classroom','LT013',NULL,NULL,'../data/software/LT013.txt','../data/images/LT013.jpg',7),
 ('Classroom','LT017',NULL,NULL,'../data/software/LT017.txt','../data/images/LT017.jpg',7),
 ('Classroom','LT019',NULL,NULL,'../data/software/LT019.txt','../data/images/LT019.jpg',7),
 ('Classroom','LT020',NULL,NULL,'../data/software/LT020.txt','../data/images/LT020.jpg',7),
 ('Classroom','LT021',NULL,NULL,'../data/software/LT021.txt','../data/images/LT021.jpg',7),
 ('Classroom','LT027',NULL,NULL,'../data/software/LT027.txt','../data/images/LT027.jpg',7),
 ('Classroom','LT129',NULL,NULL,'../data/software/LT129.txt','../data/images/LT129.jpg',7),
 ('Classroom','LT133',NULL,NULL,'../data/software/LT133.txt','../data/images/LT133.jpg',7),
 ('Classroom','LT225',NULL,NULL,'../data/software/LT225.txt','../data/images/LT225.jpg',7),
 ('Classroom','LT234',NULL,NULL,'../data/software/LT234.txt','../data/images/LT234.jpg',7),
 ('Classroom','LT239',NULL,NULL,'../data/software/LT239.txt','../data/images/LT239.jpg',7),
 ('Classroom','LT240',NULL,NULL,'../data/software/LT240.txt','../data/images/LT240.jpg',7),
 ('Lab','LT158',NULL,NULL,'../data/software/LT158.txt','../data/images/LT158.jpg',7),
 ('Lab','LT216',NULL,NULL,'../data/software/LT216.txt','../data/images/LT216.jpg',7),
 ('Lab','LT217',NULL,NULL,'../data/software/LT217.txt','../data/images/LT217.jpg',7),
 ('Lab','LT227',NULL,NULL,'../data/software/LT227.txt','../data/images/LT227.jpg',7),
 ('Lab','LT229',NULL,NULL,'../data/software/LT229.txt','../data/images/LT229.jpg',7),
 ('Lab','LT231',NULL,NULL,'../data/software/LT231.txt','../data/images/LT231.jpg',7),
 ('Lab','LT234B',NULL,NULL,'../data/software/LT234B.txt','../data/images/LT234B.jpg',7),
 ('Classroom','MC211',NULL,NULL,'../data/software/MC211.txt','../data/images/MC211.jpg',8),
 ('Lab','MCEnhancement',NULL,NULL,'../data/software/MCEnhancement.txt','../data/images/MCEnhancement.jpg',8),
 ('Classroom','AH004',NULL,NULL,'../data/software/AH004.txt','../data/images/AH004.jpg',9),
 ('Classroom','AH006',NULL,NULL,'../data/software/AH006.txt','../data/images/AH006.jpg',9),
 ('Classroom','AH008',NULL,NULL,'../data/software/AH008.txt','../data/images/AH008.jpg',9),
 ('Classroom','AH010',NULL,NULL,'../data/software/AH010.txt','../data/images/AH010.jpg',9),
 ('Classroom','AH012',NULL,NULL,'../data/software/AH012.txt','../data/images/AH012.jpg',9),
 ('Classroom','AH016',NULL,NULL,'../data/software/AH016.txt','../data/images/AH016.jpg',9),
 ('Classroom','AH102',NULL,NULL,'../data/software/AH102.txt','../data/images/AH102.jpg',9),
 ('Classroom','AH112',NULL,NULL,'../data/software/AH112.txt','../data/images/AH112.jpg',9),
 ('Classroom','AH204',NULL,NULL,'../data/software/AH204.txt','../data/images/AH204.jpg',9),
 ('Classroom','AH208',NULL,NULL,'../data/software/AH208.txt','../data/images/AH208.jpg',9),
 ('Classroom','AH220',NULL,NULL,'../data/software/AH220.txt','../data/images/AH220.jpg',9),
 ('Classroom','AH222',NULL,NULL,'../data/software/AH222.txt','../data/images/AH222.jpg',9),
 ('Classroom','AH302',NULL,NULL,'../data/software/AH302.txt','../data/images/AH302.jpg',9),
 ('Classroom','AH308',NULL,NULL,'../data/software/AH308.txt','../data/images/AH308.jpg',9),
 ('Lab','AH005',NULL,NULL,'../data/software/AH005.txt','../data/images/AH005.jpg',9),
 ('Lab','AH018',NULL,NULL,'../data/software/AH018.txt','../data/images/AH018.jpg',9),
 ('Lab','AH020',NULL,NULL,'../data/software/AH020.txt','../data/images/AH020.jpg',9),
 ('Lab','AH022',NULL,NULL,'../data/software/AH022.txt','../data/images/AH022.jpg',9),
 ('Lab','AH106',NULL,NULL,'../data/software/AH106.txt','../data/images/AH106.jpg',9),
 ('Lab','AH225',NULL,NULL,'../data/software/AH225.txt','../data/images/AH225.jpg',9),
 ('Lab','AH312',NULL,NULL,'../data/software/AH312.txt','../data/images/AH312.jpg',9),
 ('Lab','AH316',NULL,NULL,'../data/software/AH316.txt','../data/images/AH316.jpg',9),
 ('Classroom','MU3202',NULL,NULL,'../data/software/MU3202.txt','../data/images/MU3202.jpg',10),
 ('Classroom','MU3203',NULL,NULL,'../data/software/MU3203.txt','../data/images/MU3203.jpg',10),
 ('Classroom','MU3204',NULL,NULL,'../data/software/MU3204.txt','../data/images/MU3204.jpg',10),
 ('Lab','MU2218',NULL,NULL,'../data/software/MU2218.txt','../data/images/MU2218.jpg',10),
 ('Lab','LWLaundry',NULL,NULL,'../data/software/LWLaundry.txt','../data/images/LWLaundry.jpg',11),
 ('Lab','UWLounge',NULL,NULL,'../data/software/UWLounge.txt','../data/images/UWLounge.jpg',12);
