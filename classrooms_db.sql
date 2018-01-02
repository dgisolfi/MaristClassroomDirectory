-- #Classrooms_db.sql
-- #Create and populate a database for Marist Classroomroom Directory
-- #Authors: Daniel Gisolfi
-- #Version 1.0

-- #Create the database
CREATE DATABASE IF NOT EXISTS Classroomrooms_db;
USE Classroomrooms_db;

-- -- #Create the user table
CREATE TABLE IF NOT EXISTS admins(
	user_id 		INT 	AUTO_INCREMENT 	PRIMARY KEY		NOT NULL,
	first_name 		TEXT,
	last_name 		TEXT	NOT NULL,
	user_name		TEXT	NOT NULL,
	email 			TEXT,
	pass 			TEXT	NOT NULL);



-- -- #Populate the user table
INSERT INTO admins(first_name, last_name, user_name, email, pass)
VALUES("Daniel", "Gisolfi", "admin", "Daniel.Gisolfi1@marist.edu", "$2y$10$Bwz/33vtw0.ef1MQV7D6Xeor8nvSbkBfuNc3jTQd.34D1fDdMuNf.");

-- -- #Create the buildings table
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
	room_pod_ctrl 	VARCHAR(12) CHARACTER SET utf8,
	room_pod_sft	VARCHAR(34) CHARACTER SET utf8,
	room_pod_img	VARCHAR(32) CHARACTER SET utf8,
	fk_build_id 	INT  						NOT NULL);

-- ALTER TABLE rooms
-- ADD FOREIGN KEY (fk_build_id) REFERENCES buildings(build_id);



INSERT INTO rooms (room_type, room_num, room_tel, room_pod_ctrl, room_pod_sft, room_pod_img, fk_build_id)
VALUES('Lab','LB110',NULL,NULL,'../data/software/LB110.txt','../data/images/LB110.jpg',1),
('Lab','LB111',NULL,NULL,'../data/software/LB111.txt','../data/images/LB111.jpg',1),
('Lab','LB112',NULL,NULL,'../data/software/LB112.txt','../data/images/LB112.jpg',1),
('Lab','LB300B',NULL,NULL,'../data/software/LB300B.txt','../data/images/LB300B.jpg',1),
('Lab','LB300C',NULL,NULL,'../data/software/LB300C.txt','../data/images/LB300C.jpg',1),
('Lab','LB300D',NULL,NULL,'../data/software/LB300D.txt','../data/images/LB300D.jpg',1),
('Lab','LB301',6251,'Extron','../data/software/LB301.txt','../data/images/LB301.jpg',1),
('Lab','LB302',6252,'Extron','../data/software/LB302.txt','../data/images/LB302.jpg',1),
('Lab','LB303',6253,'Extron','../data/software/LB303.txt','../data/images/LB303.jpg',1),
('Lab','LB304',3042,'Crestron','../data/software/LB304.txt','../data/images/LB304.jpg',1),
('Lab','LB305',NULL,NULL,'../data/software/LB305.txt','../data/images/LB305.jpg',1),
('Lab','LB306',NULL,NULL,'../data/software/LB306.txt','../data/images/LB306.jpg',1),
('Lab','LB312',NULL,NULL,'../data/software/LB312.txt','../data/images/LB312.jpg',1),
('Lab','LB313',NULL,NULL,'../data/software/LB313.txt','../data/images/LB313.jpg',1),
('Lab','LB314',NULL,'Crestron','../data/software/LB314.txt','../data/images/LB314.jpg',1),
('Lab','LB315',NULL,NULL,'../data/software/LB315.txt','../data/images/LB315.jpg',1),
('Lab','LB316',NULL,NULL,'../data/software/LB316.txt','../data/images/LB316.jpg',1),
('Lab','LB317',NULL,NULL,'../data/software/LB317.txt','../data/images/LB317.jpg',1),
('Lab','LB333',NULL,NULL,'../data/software/LB333.txt','../data/images/LB333.jpg',1),
('Lab','LB334',2735,NULL,'../data/software/LB334.txt','../data/images/LB334.jpg',1),
('Class','DN100',6051,'Extron','../data/software/DN100.txt','../data/images/DN100.jpg',2),
('Class','DN106',6053,'Crestron','../data/software/DN106.txt','../data/images/DN106.jpg',2),
('Class','DN112',6222,'Crestron','../data/software/DN112.txt','../data/images/DN112.jpg',2),
('Class','DN114',6223,'Extron','../data/software/DN114.txt','../data/images/DN114.jpg',2),
('Class','DN118',6225,'Crestron','../data/software/DN118.txt','../data/images/DN118.jpg',2),
('Class','DN211',6263,'Extron','../data/software/DN211.txt','../data/images/DN211.jpg',2),
('Class','DN225',6264,'Extron','../data/software/DN225.txt','../data/images/DN225.jpg',2),
('Class','DN236',6054,'Extron','../data/software/DN236.txt','../data/images/DN236.jpg',2),
('Class','DN236A',6055,'Extron','../data/software/DN236A.txt','../data/images/DN236A.jpg',2),
('Class','DN237',6263,'Extron','../data/software/DN237.txt','../data/images/DN237.jpg',2),
('Class','DN238',NULL,'Extron','../data/software/DN238.txt','../data/images/DN238.jpg',2),
('Class','DN240A',6343,'Extron','../data/software/DN240A.txt','../data/images/DN240A.jpg',2),
('Class','DN240B',6277,'Extron','../data/software/DN240B.txt','../data/images/DN240B.jpg',2),
('Class','DN254-DS1',3024,'Sharp TV','../data/software/DN254-DS1.txt','../data/images/DN254-DS1.jpg',2),
('Class','DN254-DS2',3024,'Sharp TV','../data/software/DN254-DS2.txt','../data/images/DN254-DS2.jpg',2),
('Class','DN254-DS3',3024,'Sharp TV','../data/software/DN254-DS3.txt','../data/images/DN254-DS3.jpg',2),
('Lab','DN107',4540,'Sharp TV','../data/software/DN107.txt','../data/images/DN107.jpg',2),
('Lab','DN227/231',6420,NULL,'../data/software/DN227/231.txt','../data/images/DN227/231.jpg',2),
('Lab','DN229',NULL,NULL,'../data/software/DN229.txt','../data/images/DN229.jpg',2),
('Lab','DN258',7552,NULL,'../data/software/DN258.txt','../data/images/DN258.jpg',2),
('Lab','DN258L-VM',7552,'Extron','../data/software/DN258L-VM.txt','../data/images/DN258L-VM.jpg',2),
('Class','DY110',6241,'Extron','../data/software/DY110.txt','../data/images/DY110.jpg',3),
('Class','DY133',6243,'Extron','../data/software/DY133.txt','../data/images/DY133.jpg',3),
('Class','DY145',6244,'Extron','../data/software/DY145.txt','../data/images/DY145.jpg',3),
('Class','DY146',6092,'Extron','../data/software/DY146.txt','../data/images/DY146.jpg',3),
('Class','DY209',6279,'Extron','../data/software/DY209.txt','../data/images/DY209.jpg',3),
('Class','DY210',6083,'Extron','../data/software/DY210.txt','../data/images/DY210.jpg',3),
('Class','DY212',6403,'Extron','../data/software/DY212.txt','../data/images/DY212.jpg',3),
('Class','DY213',6404,'Extron','../data/software/DY213.txt','../data/images/DY213.jpg',3),
('Class','DY214',6084,'Extron','../data/software/DY214.txt','../data/images/DY214.jpg',3),
('Class','DY215',6093,'Extron','../data/software/DY215.txt','../data/images/DY215.jpg',3),
('Class','DY218',6280,'Extron','../data/software/DY218.txt','../data/images/DY218.jpg',3),
('Class','DY226',6094,'Extron','../data/software/DY226.txt','../data/images/DY226.jpg',3),
('Class','DY227',6245,'Extron','../data/software/DY227.txt','../data/images/DY227.jpg',3),
('Class','DY228',6057,'Extron','../data/software/DY228.txt','../data/images/DY228.jpg',3),
('Class','DY229',6246,'Extron','../data/software/DY229.txt','../data/images/DY229.jpg',3),
('Class','DY231',6248,'Extron','../data/software/DY231.txt','../data/images/DY231.jpg',3),
('Lab','DY206',6278,'Extron','../data/software/DY206.txt','../data/images/DY206.jpg',3),
('Lab','DY230',NULL,'Extron','../data/software/DY230.txt','../data/images/DY230.jpg',3),
('Lab','DY303',6247,'Extron','../data/software/DY303.txt','../data/images/DY303.jpg',3),
('Lab','DY304',NULL,'Crestron','../data/software/DY304.txt','../data/images/DY304.jpg',3),
('Lab','FF202',NULL,'Toshiba','../data/software/FF202.txt','../data/images/FF202.jpg',4),
('Lab','FF204',NULL,'Sharp TV','../data/software/FF204.txt','../data/images/FF204.jpg',4),
('Class','FN101',4293,'Extron','../data/software/FN101.txt','../data/images/FN101.jpg',5),
('Class','FN102',6259,'Extron','../data/software/FN102.txt','../data/images/FN102.jpg',5),
('Class','FN103',6260,'Extron','../data/software/FN103.txt','../data/images/FN103.jpg',5),
('Class','FN104',6261,'Extron','../data/software/FN104.txt','../data/images/FN104.jpg',5),
('Class','FN105',6239,'Extron','../data/software/FN105.txt','../data/images/FN105.jpg',5),
('Class','FNHenryHudson',NULL,'Toshiba','../data/software/FNHenryHudson.txt','../data/images/FNHenryHudson.jpg',5),
('Class','HC1021',2521,'Extron','../data/software/HC1021.txt','../data/images/HC1021.jpg',6),
('Class','HC2005',2276,'Extron','../data/software/HC2005.txt','../data/images/HC2005.jpg',6),
('Class','HC2017',2524,'Extron','../data/software/HC2017.txt','../data/images/HC2017.jpg',6),
('Class','HC2019',2606,'Extron','../data/software/HC2019.txt','../data/images/HC2019.jpg',6),
('Class','HC2020',2997,'Extron','../data/software/HC2020.txt','../data/images/HC2020.jpg',6),
('Class','HC2023',7739,'Crestron','../data/software/HC2023.txt','../data/images/HC2023.jpg',6),
('Lab','HC0004',7234,'Extron','../data/software/HC0004.txt','../data/images/HC0004.jpg',6),
('Lab','HC0005',7451,'Extron','../data/software/HC0005.txt','../data/images/HC0005.jpg',6),
('Lab','HC0006',2904,'Extron','../data/software/HC0006.txt','../data/images/HC0006.jpg',6),
('Lab','HC1020',2998,'Crestron','../data/software/HC1020.txt','../data/images/HC1020.jpg',6),
('Class','LT006',6334,'Extron','../data/software/LT006.txt','../data/images/LT006.jpg',7),
('Class','LT013',6081,'Crestron','../data/software/LT013.txt','../data/images/LT013.jpg',7),
('Class','LT017',6335,'Crestron','../data/software/LT017.txt','../data/images/LT017.jpg',7),
('Class','LT019',2323,'Extron','../data/software/LT019.txt','../data/images/LT019.jpg',7),
('Class','LT020',6233,'Crestron','../data/software/LT020.txt','../data/images/LT020.jpg',7),
('Class','LT021',6232,'Crestron','../data/software/LT021.txt','../data/images/LT021.jpg',7),
('Class','LT027',6402,'Crestron','../data/software/LT027.txt','../data/images/LT027.jpg',7),
('Class','LT129',6235,'Extron','../data/software/LT129.txt','../data/images/LT129.jpg',7),
('Class','LT133',6234,'Extron','../data/software/LT133.txt','../data/images/LT133.jpg',7),
('Class','LT225',6401,'Crestron','../data/software/LT225.txt','../data/images/LT225.jpg',7),
('Class','LT234',6101,'Crestron','../data/software/LT234.txt','../data/images/LT234.jpg',7),
('Class','LT239',6240,'Crestron','../data/software/LT239.txt','../data/images/LT239.jpg',7),
('Class','LT240',6111,'Crestron','../data/software/LT240.txt','../data/images/LT240.jpg',7),
('Lab','LT158',6091,'Crestron','../data/software/LT158.txt','../data/images/LT158.jpg',7),
('Lab','LT216',NULL,NULL,'../data/software/LT216.txt','../data/images/LT216.jpg',7),
('Lab','LT217',NULL,NULL,'../data/software/LT217.txt','../data/images/LT217.jpg',7),
('Lab','LT227',6238,'Crestron','../data/software/LT227.txt','../data/images/LT227.jpg',7),
('Lab','LT229',6078,'Crestron','../data/software/LT229.txt','../data/images/LT229.jpg',7),
('Lab','LT231',6144,'Crestron','../data/software/LT231.txt','../data/images/LT231.jpg',7),
('Lab','LT234B',6101,'Sharp TV','../data/software/LT234B.txt','../data/images/LT234B.jpg',7),
('Class','MC211',6272,'Extron','../data/software/MC211.txt','../data/images/MC211.jpg',8),
('Lab','MCEnhancement',2325,NULL,'../data/software/MCEnhancement.txt','../data/images/MCEnhancement.jpg',8),
('Class','AH004',6310,'Crestron','../data/software/AH004.txt','../data/images/AH004.jpg',9),
('Class','AH006',6312,'Crestron','../data/software/AH006.txt','../data/images/AH006.jpg',9),
('Class','AH008',6313,NULL,'../data/software/AH008.txt','../data/images/AH008.jpg',9),
('Class','AH010',6315,NULL,'../data/software/AH010.txt','../data/images/AH010.jpg',9),
('Class','AH012',6317,'Crestron','../data/software/AH012.txt','../data/images/AH012.jpg',9),
('Class','AH016',6321,'Crestron','../data/software/AH016.txt','../data/images/AH016.jpg',9),
('Class','AH102',6325,'Crestron','../data/software/AH102.txt','../data/images/AH102.jpg',9),
('Class','AH112',6327,'Crestron','../data/software/AH112.txt','../data/images/AH112.jpg',9),
('Class','AH204',6331,'Extron','../data/software/AH204.txt','../data/images/AH204.jpg',9),
('Class','AH208',6333,'Extron','../data/software/AH208.txt','../data/images/AH208.jpg',9),
('Class','AH220',NULL,'Crestron','../data/software/AH220.txt','../data/images/AH220.jpg',9),
('Class','AH222',6340,'Crestron','../data/software/AH222.txt','../data/images/AH222.jpg',9),
('Class','AH302',6341,'Crestron','../data/software/AH302.txt','../data/images/AH302.jpg',9),
('Class','AH308',6346,'Crestron','../data/software/AH308.txt','../data/images/AH308.jpg',9),
('Lab','AH005',6311,'Crestron','../data/software/AH005.txt','../data/images/AH005.jpg',9),
('Lab','AH018',6322,NULL,'../data/software/AH018.txt','../data/images/AH018.jpg',9),
('Lab','AH020',6323,NULL,'../data/software/AH020.txt','../data/images/AH020.jpg',9),
('Lab','AH022',6324,NULL,'../data/software/AH022.txt','../data/images/AH022.jpg',9),
('Lab','AH106',6326,NULL,'../data/software/AH106.txt','../data/images/AH106.jpg',9),
('Lab','AH312',6348,'Crestron','../data/software/AH312.txt','../data/images/AH312.jpg',9),
('Lab','AH316',6349,'Crestron','../data/software/AH316.txt','../data/images/AH316.jpg',9),
('Class','MU3202',6431,'Extron','../data/software/MU3202.txt','../data/images/MU3202.jpg',11),
('Class','MU3203',6268,'Extron','../data/software/MU3203.txt','../data/images/MU3203.jpg',11),
('Class','MU3204',6267,'Extron','../data/software/MU3204.txt','../data/images/MU3204.jpg',11),
('Lab','MU2218',NULL,NULL,'../data/software/MU2218.txt','../data/images/MU2218.jpg',11),
('Lab','LWLaundry',NULL,NULL,'../data/software/LWLaundry.txt','../data/images/LWLaundry.jpg',12);
('Lab','UWLounge',NULL,NULL,'../data/software/UWLounge.txt','../data/images/UWLounge.jpg',13);