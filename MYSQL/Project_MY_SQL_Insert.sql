/*
Database Systems - Group Project - Insert tables
Student Name: Jack Boeri
Student ID: 100296865


No incompatibility from MSSQL to MYSQL

MY SQL

----------------------------------------------------------------------------------------------------*/

INSERT INTO People (PeopleID, FName, LName, Phone, Email) VALUES 
(100845934, 'John', 'Samiro', 8589403928, 'John@gmail.com'),
(100394832, 'Victoria', 'Nordil', 7789482934, 'VictoriaV@hotmail.com'),
(100389493, 'Jack', 'Bodery', 7788347293, 'Jbodery@gmail.com'),
(200483948, 'Saeed', 'Mirijali', 7783829384, 'Saeed@langara.ca'),
(100378927, 'Nicole', 'Nordil', 7788432864, 'nicolenn@gmail.com'),
(100384938, 'Eric', 'Joffrey', 7783746394, 'Joffreye@hotmail.com'),
(300234934, 'Kristina', 'Wong', 6049320245, 'Kwu@tutanota.com');

INSERT INTO Member (PeopleID, Department) VALUES 
(100845934, 'Staff'),
(100394832, 'Marketing'),
(100389493, 'Computer Science'),
(100378927, 'Engineering');


INSERT INTO Student (PeopleID, FieldOfStudy) VALUES 
(100389493, 'Computer Science'),
(100394832, 'Marketing'),
(100378927, 'Engineering');

INSERT INTO Staff (PeopleID, Position, OfficeLocation, StartDate) VALUES 
(100845934, 'Janitor', 'Vancouver', '2019-03-20'),
(100384938, 'Receptionist', 'Vancouver', '2019-11-01');

INSERT INTO Professor (PeopleID, StartDate, OfficeLocation) VALUES 
(200483948, '2016-01-02', 'Vancouver');

INSERT INTO Advertisement VALUES
(1,'Housing','2020/12/20','0:2:0', 100, 50), 
(2,'Job','2020/10/20','0:0:30', 60, 50);

INSERT INTO AdvertisementApprovedByStaff VALUES 
(1,100384938),
(2,100384938);

INSERT INTO CollegeMember VALUES 
(100272425,'CPSC'),
(35501113,'CPSC');

INSERT INTO NonCollegeMember VALUES
(300234934);

INSERT INTO Messages VALUES 
(200,'Hello! I am interested in your apartment, is it still available?'), 
(201,'Thank you for your interest. Yes, it is still available.');

INSERT INTO MemberMessage VALUES 
(100389493,100394832,200),
(100394832,100389493,201);


INSERT INTO SenderSendsMessageToReciever VALUES 
(100394832, 100389493, 'Apartment for rent', 100, '2020/12/15','07:20:00'), 
(100389493, 100394832, 'Apartment for rent', 101, '2020/12/28','12:35:01');

INSERT INTO Board VALUES
(15,'Central','2','Cafeteria'),
(16,'Burmingham','1','Library'),
(17, 'Henry Angus', '3', 'Library');


INSERT INTO AdvertisementPostedOnBoard VALUES 
(1,15),
(2,16);

INSERT INTO AdvertisementPostedByMember VALUES 
(1,100394832),
(2,100389493);

