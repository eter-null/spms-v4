-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2023 at 01:53 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spmsv4_core`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_data` (IN `param1` INT, IN `param2` VARCHAR(255))   BEGIN
  -- Insert data into table1 and get the auto-generated ID
  INSERT INTO table1 (column1) VALUES (param1);
  SET @table1_id = LAST_INSERT_ID();

  -- Insert data into table2 and get the auto-generated ID
  INSERT INTO table2 (column1, column2) VALUES (@table1_id, param2);
  SET @table2_id = LAST_INSERT_ID();
  
  -- Insert data into table3 and get the auto-generated ID
  INSERT INTO table3 (column1, column2) VALUES (@table1_id, @table2_id);
  SET @table3_id = LAST_INSERT_ID();
  
  -- Return the generated IDs
  SELECT @table1_id AS table1_id, @table2_id AS table2_id, @table3_id AS table3_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_into_5Tables` (`name` VARCHAR(100), `age` INT)   BEGIN
  INSERT INTO DemoTable(StudentFirstName) VALUES(name);
  INSERT INTO DemoTable2(ClientName,ClientAge) VALUES(name,age);

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_try` (IN `studentID` INT(11), IN `semester` VARCHAR(10), IN `sectionID` INT(11), IN `year` VARCHAR(4), IN `courseID` VARCHAR(10), IN `marks` INT(3), IN `grade` VARCHAR(1))   BEGIN
  INSERT INTO students(studentID, semester, sectionID ,year,courseID,marks,grade)VALUES (studentID,semester,sectionID,year,courseID,marks,grade);
  -- Insert data into table1 and get the auto-generated ID
   INSERT INTO registration1_t(sectionID ,studentID ) VALUES (sectionID, studentID);  
  SET @registration1_t_registrationID = LAST_INSERT_ID();

  -- Return the generated IDs
  SELECT @registration1_t_registrationID AS registration1_t_id;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `answer_t`
--

CREATE TABLE `answer_t` (
  `answerID` int(11) NOT NULL,
  `answerDetails` mediumtext NOT NULL,
  `answerNum` int(11) NOT NULL,
  `markObtained` int(11) DEFAULT NULL,
  `registrationID` int(11) NOT NULL,
  `questionID` int(11) NOT NULL,
  `examID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `answer_t`
--

INSERT INTO `answer_t` (`answerID`, `answerDetails`, `answerNum`, `markObtained`, `registrationID`, `questionID`, `examID`) VALUES
(100, 'aaa', 1, 6, 10, 0, 11),
(101, 'bbb', 2, 7, 10, 0, 11),
(102, 'ccc', 3, 8, 10, 0, 11),
(103, 'ami ayon', 1, 9, 19, 0, 11),
(104, 'ami ayon', 2, 9, 19, 0, 11),
(105, 'ami ayon', 3, 9, 19, 0, 11),
(106, 'EEE131', 1, 10, 1, 0, 12),
(107, 'Electronics 1', 2, 7, 1, 0, 12),
(108, 'xdxdxbxfb', 1, 6, 24, 0, 12),
(109, 'gdjdhd', 2, 7, 24, 0, 12),
(110, 'dcdcdcd', 1, 9, 20, 0, 13),
(111, 'tyybn', 1, 9, 25, 0, 15),
(112, 'kumh ', 2, 7, 25, 0, 15),
(113, 'hgf', 3, 8, 25, 0, 15),
(114, 'dfghj', 4, 6, 25, 0, 15),
(115, 'fgbfbg', 1, 6, 7, 0, 14),
(116, 'tntn', 2, 10, 7, 0, 14),
(117, 'kkj', 3, 7, 7, 0, 14),
(118, 'h k', 4, 7, 7, 0, 14),
(119, 'brbnfn', 1, 6, 25, 0, 16),
(120, 'rnrnr', 2, 6, 25, 0, 16),
(150, '', 150, 9, 205, 100, 100),
(151, '', 15, 14, 210, 0, 15),
(152, '', 75, 78, 250, 0, 75),
(153, '', 75, 48, 0, 0, 75),
(154, '', 75, 14, 0, 0, 75),
(155, '', 75, 45, 0, 0, 75),
(156, '', 75, 1000, 0, 0, 75),
(157, '', 75, 65, 0, 0, 75),
(158, '', 75, 32, 0, 0, 75),
(159, '', 75, 12, 0, 0, 75),
(160, '', 75, 14, 0, 0, 75),
(161, '', 75, 89, 0, 0, 75),
(162, '', 75, 78, 0, 0, 75),
(163, '', 75, 85, 0, 0, 75),
(164, '', 75, 96, 4, 0, 75),
(165, '', 75, 77, 8, 0, 75),
(166, '', 75, 23, 12, 0, 75),
(167, '', 75, 45, 14, 0, 75),
(168, '', 75, 32, 18, 0, 75),
(169, '', 75, 23, 22, 0, 75),
(170, '', 75, 242, 52, 0, 75),
(171, '', 75, 242, 53, 0, 75),
(172, '', 75, 231, 54, 0, 75),
(173, '', 75, 34, 55, 0, 75),
(174, '', 75, 34, 56, 0, 75);

-- --------------------------------------------------------

--
-- Table structure for table `backlogdata`
--

CREATE TABLE `backlogdata` (
  `backlog_id` int(11) UNSIGNED NOT NULL,
  `id` int(11) DEFAULT NULL,
  `faculty_id` int(11) DEFAULT NULL,
  `semester` varchar(11) DEFAULT NULL,
  `section` int(11) DEFAULT NULL,
  `year` varchar(10) DEFAULT NULL,
  `course` varchar(191) DEFAULT NULL,
  `marks` int(10) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `backlogdata`
--

INSERT INTO `backlogdata` (`backlog_id`, `id`, `faculty_id`, `semester`, `section`, `year`, `course`, `marks`, `timestamp`) VALUES
(19, 2147483647, 4408, 'ersgsdtgfsr', 34234, '234234', 'sdfsd', 32, '2023-04-26 14:30:15'),
(20, 4535345, 4408, '443', 435435, '324234', 'dfgdfg', 345, '2023-04-26 14:30:41'),
(21, 1232132, 4408, '7', 3, '232', 'wserwe', 23, '2023-04-26 14:33:04'),
(22, 1236132, 4408, '7', 3, '232', 'wserwe', 23, '2023-04-26 14:36:56'),
(23, 12126132, 4408, '7', 3, '232', 'wserwe', 23, '2023-04-26 14:37:51'),
(24, 12126137, 4408, '7', 3, '232', 'wserwe', 23, '2023-04-26 14:38:20'),
(25, 12129137, 4408, '7', 3, '232', 'wserwe', 23, '2023-04-26 14:40:07'),
(26, 3423, 4408, '3', 3, '2', 'wefe', 242, '2023-04-26 14:40:18'),
(27, 39023, 4408, '3', 3, '2', 'wefe', 242, '2023-04-26 14:49:34'),
(28, 390232323, 4408, '3', 3, '2', 'wefe', 242, '2023-04-26 14:50:08'),
(29, 234234, 4408, '333', 324, '23432', 'sder', 231, '2023-04-26 15:05:38'),
(30, 2342, 4408, '11', 0, '3234', 'sdf', 34, '2023-04-26 15:10:37'),
(31, 23421, 4408, '11', 0, '3234', 'sdf', 34, '2023-04-26 15:11:53'),
(32, 565115, 4408, 'iiiuu', 654, '5646', 'opk', 11, '2023-04-26 19:24:03'),
(41, 4258, 800, 'pop', 8000, '8000', 'JJJJ', 85, '2023-04-26 19:51:35'),
(42, 7453, 999, 'pop', 999, '999', 'pppo', 15, '2023-04-26 19:55:07'),
(51, 12123, 4408, 'NJKNJ', 31, '541', 'XAN ', 55, '2023-04-26 20:22:40'),
(52, 5481, 4408, 'JIJN', 51, '5645', 'jkn', 99, '2023-04-26 20:25:10'),
(53, 1930921, 4408, 'summer', 100, '2023', 'cmn', 80, '2023-04-26 20:32:58'),
(54, 52309921, 4408, 'autumn', 85, '444', 'kn', 33, '2023-04-26 20:33:36'),
(55, 456789, 4408, 'knm', 521, '5231', 'nm ', 87, '2023-04-26 20:34:46'),
(56, 6530921, 4408, 'ckn ', 0, ' mm ', ' xd', 77, '2023-04-26 20:35:54'),
(57, 7830921, 4408, 'comak', 100, '2625', 'xnjmk', 42, '2023-04-26 20:53:00'),
(58, 1222, 4408, 'ncka', 105, '105', 'cdn', 66, '2023-04-26 20:59:21'),
(59, 8954, 4408, 'mk ', 0, '53', '5630', 55, '2023-04-26 21:07:59'),
(60, 5656, 4408, '520', 520, '520', '20', 20, '2023-04-26 21:08:14'),
(61, 21320, 4408, 'hjb', 120, '3221', 'kmn', 45, '2023-04-26 21:13:56'),
(62, 4567854, 4408, 'hhh', 200, '203', 'dhcbj', 36, '2023-04-26 21:38:35'),
(63, 1632031, 4408, 'ml', 560, '10012', 'nhh', 100, '2023-04-26 21:41:44'),
(64, 4521676, 4408, 'dm', 400, '2415', 'jskn ', 30, '2023-04-26 21:48:07'),
(65, 7863732, 4408, 'cdm', 507, '12', 'axdm ', 75, '2023-04-26 21:52:13'),
(66, 1, 4408, 'jnk', 5210, '52103', ' m', 9, '2023-04-26 21:59:38'),
(67, 22, 4408, 'nsc', 300, '3020', 'lsm', 63, '2023-04-26 22:10:02'),
(68, 561085, 4408, 'dnc', 10256, '2015', 'jdcn', 20, '2023-04-26 22:20:48'),
(69, 357, 4408, 'kmkl', 963, '963', 'cs', 56, '2023-04-26 23:38:21'),
(70, 5000, 4408, 'pop', 999, '600', 'pppo', 15, '2023-04-26 23:41:51'),
(71, 6000, 4408, 'popl', 1000, '700', 'KKL', 45, '2023-04-26 23:41:51'),
(72, 70000, 4408, 'pop', 8000, '800', 'JJJJ', 85, '2023-04-26 23:41:52');

-- --------------------------------------------------------

--
-- Table structure for table `clo_matrix_t`
--

CREATE TABLE `clo_matrix_t` (
  `clo_MatID` int(11) NOT NULL,
  `cloNum` int(11) NOT NULL,
  `coDescription` mediumtext NOT NULL,
  `ploAssessed` varchar(10) NOT NULL,
  `correlation` int(11) NOT NULL,
  `courseOutlineID` int(11) NOT NULL,
  `c` int(11) DEFAULT NULL,
  `p` int(11) DEFAULT NULL,
  `a` int(11) DEFAULT NULL,
  `s` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clo_matrix_t`
--

INSERT INTO `clo_matrix_t` (`clo_MatID`, `cloNum`, `coDescription`, `ploAssessed`, `correlation`, `courseOutlineID`, `c`, `p`, `a`, `s`) VALUES
(3, 1, 'Understand the database applications starting from conceptual design using data models diagram (ERD), Process Model diagram (BPMN)', 'PLO-b', 3, 4, 0, 4, 0, 0),
(4, 2, 'Basic understanding of data access structures and comparison between those structures, Determine the normalization form of Database.', 'PLO-c', 3, 4, 5, 0, 0, 0),
(5, 3, 'Ability to analyze the ERD, Process diagram and normalization concept.', 'PLO-d', 3, 4, 0, 6, 0, 6),
(6, 1, 'sdfgh', 'plo-a', 3, 11, 2, 0, 5, 0),
(7, 1, 'Understand the database applications starting from conceptual design using data models diagram (ERD), Process Model diagram (BPMN)', 'PLO-b', 3, 12, 0, 4, 0, 0),
(8, 1, 'Understand the database applications starting from conceptual design using data models diagram (ERD), Process Model diagram (BPMN)', 'PLO-b', 3, 13, 0, 4, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `course_outline_t`
--

CREATE TABLE `course_outline_t` (
  `courseOutlineID` int(11) NOT NULL,
  `sectionID` int(11) NOT NULL,
  `semester` varchar(30) NOT NULL,
  `courseDescription` mediumtext NOT NULL,
  `objective` mediumtext NOT NULL,
  `content` mediumtext NOT NULL,
  `refMaterials` mediumtext NOT NULL,
  `sectionNum` int(11) NOT NULL,
  `courseTitle` varchar(1000) NOT NULL,
  `prerequisiteCode` varchar(6) DEFAULT NULL,
  `creditValue` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course_outline_t`
--

INSERT INTO `course_outline_t` (`courseOutlineID`, `sectionID`, `semester`, `courseDescription`, `objective`, `content`, `refMaterials`, `sectionNum`, `courseTitle`, `prerequisiteCode`, `creditValue`) VALUES
(4, 10, 'spring, 2021', 'Conventional and database approaches. Basic concepts of DBMS. Hierarchical, network and relational data\r\nmodels. \r\nEntity-relationship modeling. Relational database designing: decomposition and normalization;\r\nfunctional dependencies. \r\nRelational algebra and calculus. Structured query language (SQL). \r\nQuery optimization. \r\nDatabase programming with SQL and PL/SQL. \r\nDatabase security and administration. Distributed databases.\r\nObject-oriented data modeling.\r\nSpecific database systems: oracle, MS SQL server, access.', 'In this course, students will get an overview of the following:\r\n\r\n1. Introduce the concept of database and its usages.\r\n\r\n2. Introduce the life cycle of a systems development project.\r\n\r\n3. Introduction to ER Diagram and database model designing.\r\n\r\n4. Introduce the ERD and Relation mapping.\r\n\r\n5. Understanding the Normalization Technique to optimize the database model.\r\n\r\n6. Introduction to SQL and Advanced SQL.\r\n\r\n7. Introduction to Physical system design: Input forms, Output reports and Architecture.\r\n\r\n8. Basic concepts of database administration.', 'Introduction: Concept of Database, DBMS:\r\n1. Students will be able to know each other\r\n2. Students will learn about the course policy\r\n3. Students will be able to plan for the exams\r\n4. Student will learn basic concept of Database.\r\n5. Students will learn about the reason of using database.\r\n6. Students will learn about different categories of applications that use databases.\r\nIntroduction: Database Development process, Database architecture; Database languages and Interfaces:\r\n1. Students will learn about the life cycle of a systems development project.\r\n2. Students will learn about the roles of individuals who design, implement, use, and administer\r\nDatabases.\r\n3. Students will learn about the differences among external, conceptual, and internal schema.\r\nAnalysis: Rich Picture:\r\n1. Introduction to real-time problem.\r\n2. Introduction to understand a real-time issue and draw that using Rich Picture.\r\nAnalysis: Six Elements Analysis:\r\n1. Understand the concept of Six elements Analysis.\r\n2. Perform six elements analysis to map the existing system.\r\nAnalysis: Process Diagram using BPMN 2.0:\r\n1. Identification of details of the processes involved in the system.\r\n2. Introduction to the business process diagram\r\n3. Introduction to BPMN 2.0.\r\n4. Perform process drawing using BMPN 2.0\r\nAnalysis: Process Diagram and Improvement Process:\r\n1. Students will be introduced to advanced features of BPMN 2.0.\r\n2. Students will be introduced to BPR and KPI to find the issues and perform analysis\r\nEntity Relationship Diagram Model:\r\n1. Students will learn about entities, relationships, and attributes.\r\n2. Students will be able to learn about degree of relationship.\r\n3. Students will be able to model E-R diagram considering different types of attributes, entities,\r\nrelationship, and cardinality constraints.\r\n4. Students will be able to differentiate different relationship types.\r\n5. Student will be able to identify the reason of different types of attributes.\r\n6. Students will be able to realize the need of relationship constrains.\r\nDesign: Enhanced ERD Model:\r\n1. Student will learn about subtype super-type relation.\r\n2. Student will learn completeness and disjoint type relations.\r\nDesign: ERD to Relations:\r\n1. Students will learn to convert the entity to relations.\r\n2. Students will learn to map attribute in the relations.\r\n3. Students will be able to design the relationship in terms of relations.\r\nDesign: Normalization 01:\r\n1. Students will be able to list five properties of relations.\r\n2. Students will be able to state two essential properties of a candidate key.\r\n3. Student will be introduced with the concept of normalization: first normal form, second normal\r\nform, and third normal form.\r\n4. Students will learn briefly about four problems that may arise when merging relations.\r\nDesign: Normalization 02, Data Dictionary:\r\n1. Students will be able to realize the need of normalization.\r\n2. Students will be able to perform normalization on any case study.\r\n3. Students will learn about Boyce-Codd normal form.\r\n4. Students will learn the physical database design process, its objectives, and its deliverables.\r\n5. Students will learn about storage formats for attributes from a logical data model.\r\n6. Students will learn how to select an appropriate file organization by balancing various important\r\ndesign factors.\r\n7. Students will be able to translate a relational data model into efficient database structures,\r\nincluding knowing when and how to de-normalize the logical data model.\r\nRelational Algebra:\r\n1. Students will learn about the formal notations.\r\n2. Students will learn how to add constraints to the set union, set intersections. Set difference and\r\nCartesian products.\r\n3. Students will learn how to implement and use them in database.\r\nSQL: DDL, DML, DCL:\r\n1. Students will learn to interpret the history and role of SQL in database development.\r\n2. Students will know how to define and use the data types and constrains in the database using DML.\r\nSQL: Retrieve Information:\r\n1. Students will learn how to fetch the data from the database using basic SQL command.\r\n2. Students will learn how to retrieve and manipulate that information from the database using SQL.\r\n3. Students will learn how to retrieve and manipulate that information from the database using SQL.\r\nAdvance SQL:\r\n1. Students will learn how to use union, join etc. using SQL.\r\n2. Students will be able to establish referential integrity using SQL.\r\n3. Students will learn how to use union, join etc. using SQL.\r\n4. Students will be able to establish referential integrity using SQL.\r\n5. Students will learn how to write sub-queries using SQL query.\r\n6. Students will learn how to establish referential integrity using SQL.\r\n7. Students will practice how to write sub-queries using SQL query.\r\n8. Students will practice how to establish referential integrity using SQL.\r\nInput Form and Output Reports Database Architecture, Database Administrations:\r\n1. Students will be able to explain the three components of client/server systems: data presentation\r\nservices, processing services, and storage services.\r\n2. Students will be able to distinguish between two-tier and three-tier architectures.\r\n3. Students will be able to describe the key components of a web application and the information flow\r\nbetween the various components.\r\n4. Students will learn why organizations needs data administration for.\r\n5. Students will be able to describe the three levels of data warehouse architecture from database\r\nadministrator point of view.\r\n6. Students will be able to develop the requirement for a data bank.', 'The course will be based mostly on the following books [some other books and journals may be\r\nreferred time to time]:\r\n1. Modern Database Management by Jeffrey A. Hoffer, Mary B. Prescott, Fred R. Mcfadden\r\n2. Database Management Systems, by Raghu Ramakrishnan and Johannes Gehrke\r\n3. Fundamentals of Database Systems, By RamezElmasri, Shamkant B. Navathe\r\n4. Microsoft MSDN, W3 School\r\n5. An Introduction to Database System by C. J. Date', 1, 'Introduction to programming', '', 3),
(11, 16, 'summer,2021', 'This course is prepared for the students (Major in MIS) with an introduction to trending technology, for instance,\r\nInternet of Things (IoT), Artificial Intelligence (AI), BlockChain, Fintech, Big Data and Business Intelligence (BI)\r\nas well as business problem solving orientation through various techniques. These usage in an increasingly\r\ncompetitive business world is really required. As a future manager/leader, one needs to be equipped with this\r\ntrending issues to make decisions concerning the planning, development and implementation of information\r\ntechnology resources to increase organizational effectiveness and create a strategic advantage.', 'This course is prepared for the students (Major in MIS) with an introduction to trending technology, for instance,\r\nInternet of Things (IoT), Artificial Intelligence (AI), BlockChain, Fintech, Big Data and Business Intelligence (BI)\r\nas well as business problem solving orientation through various techniques. These usage in an increasingly\r\ncompetitive business world is really required. As a future manager/leader, one needs to be equipped with this\r\ntrending issues to make decisions concerning the planning, development and implementation of information\r\ntechnology resources to increase organizational effectiveness and create a strategic advantage.', 'Upon completion of BBA in Management Information Systems (MIS) program, the individual should be able to:\r\n\r\nPLO1: Explain theories, knowledge, technologies and concepts related to Business and Management.\r\nPLO2: Apply relevant & sustainable computer applications, tools, techniques and skills required for decision\r\nmaking in different functions of management.\r\nPLO3: Analyze plans and requirements for implementing computer-based information systems and use\r\ntechnologies to solve business problems.\r\nPLO4: Apply interpersonal skills & communicate skillfully to work effectively in groups or individually to\r\nperform required tasks in a work environment.\r\nPLO5: Identify ethical considerations in relation to Business and Management.\r\nPLO6: Develop entrepreneurial and employability skills that can be applied in a work environment.\r\nPL07: Recognize the need for lifelong learning to acquire & to be skillful on emerging technologies as it evolves.\r\n\r\nCOURSE LEARNING OUTCOME (CLO):\r\n\r\nUpon completion of this course, individual should be able to: -\r\nCLO1: Identify and explain theories, knowledge, technologies and concepts related to IoT, Big Data, Machine\r\nlearning, Fin-tech etc.\r\nCLO2: Assess if the organizations are well prepared for implementing IoT, Block-Chain and integrate system into\r\na single hub.\r\nCLO3: Execute model-based simulation program to solve business problems/generate best possible solutions to\r\nthe business problem.\r\nCLO4: Identify ethical considerations and evaluate if data can be used for decision making or publicized to all\r\nstakeholders.\r\nCLO5: Measure the pre-performance analysis of given scenario from technical aspects.', 'Articles online.', 1, 'Computers in Business', '', 3),
(12, 13, 'spring,2021', 'aaaaaaaaaaaaaaaaa', 'bbbbbbbbbbbbbbbbb', 'bla bla bla', 'nai', 3, 'English Learning Skills', '', 3),
(13, 15, 'autumn,2021', 'Conventional and database approaches. Basic concepts of DBMS. Hierarchical, network and relational data models. Entity-relationship modeling. Relational database designing: decomposition and normalization; functional dependencies. Relational algebra and calculus. Structured query language (SQL). Query optimization. Database programming with SQL and PL/SQL. Database security and administration. Distributed databases. Object-oriented data modeling. Specific database systems: oracle, MS SQL server, access.\r\n', 'In this course, students will get an overview of the following:\r\n\r\nIntroduce the concept of database and its usages.\r\nIntroduce the life cycle of a systems development project.\r\nIntroduction to ER Diagram and database model designing. \r\nIntroduce the ERD and Relation mapping.\r\nUnderstanding the Normalization Technique to optimize the database model.\r\nIntroduction to SQL and Advanced SQL.\r\nIntroduction to Physical system design: Input forms, Output reports and Architecture. \r\nBasic concepts of database administration.\r\n\r\n', 'blah', 'gbrbr', 1, 'Introduction to programming', '', 3);

-- --------------------------------------------------------

--
-- Table structure for table `course_t`
--

CREATE TABLE `course_t` (
  `courseID` varchar(6) NOT NULL,
  `courseName` varchar(40) NOT NULL,
  `numOfCredits` int(11) NOT NULL,
  `courseType` varchar(10) NOT NULL,
  `programID` int(11) NOT NULL,
  `preReqID` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course_t`
--

INSERT INTO `course_t` (`courseID`, `courseName`, `numOfCredits`, `courseType`, `programID`, `preReqID`) VALUES
(' m', '', 0, '', 0, NULL),
(' xd', '', 0, '', 0, NULL),
('20', '', 0, '', 0, NULL),
('5630', '', 0, '', 0, NULL),
('axdm ', '', 0, '', 0, NULL),
('cdn', '', 0, '', 0, NULL),
('cs', '', 0, '', 0, NULL),
('CSC101', 'Introduction to Computer Science', 3, 'foundation', 13, NULL),
('dhcbj', '', 0, '', 0, NULL),
('EEE131', 'Electrical Circuit-I', 3, 'core', 9, NULL),
('EEE231', 'Signals & Systems', 3, 'core', 9, NULL),
('EEE233', 'Energy Conversion-I', 3, 'core', 9, NULL),
('ENG101', 'English Listening & Speaking Skills', 3, 'foundation', 20, NULL),
('jdcn', '', 0, '', 0, NULL),
('JJJJ', '', 0, '', 0, NULL),
('jkn', '', 0, '', 0, NULL),
('jskn ', '', 0, '', 0, NULL),
('KKL', '', 0, '', 0, NULL),
('kmn', '', 0, '', 0, NULL),
('lsm', '', 0, '', 0, NULL),
('MKT101', 'Introduction to Marketing', 3, 'core', 8, NULL),
('nhh', '', 0, '', 0, NULL),
('pppo', '', 0, '', 0, NULL),
('XAN ', '', 0, '', 0, NULL),
('xnjmk', '', 0, '', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `co_average`
--

CREATE TABLE `co_average` (
  `studentID` int(11) DEFAULT NULL,
  `courseID` varchar(191) DEFAULT NULL,
  `co1` int(10) DEFAULT NULL,
  `co2` int(10) DEFAULT NULL,
  `co3` int(10) DEFAULT NULL,
  `co4` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `co_average`
--

INSERT INTO `co_average` (`studentID`, `courseID`, `co1`, `co2`, `co3`, `co4`) VALUES
(234234, 'sder', 231, 231, 231, 231),
(234234, 'sder', 231, 231, 231, 231),
(2342, 'sdf', 34, 34, 34, 34),
(23421, 'sdf', 34, 34, 34, 34),
(852963, 'kkk', 14, 14, 14, 14),
(7895617, 'falling', 1000, 1000, 1000, 1000),
(7895617, 'falling', 1000, 1000, 1000, 1000),
(2147483647, 'IOIO', 65, 65, 65, 65),
(2147483647, 'IOIO', 65, 65, 65, 65),
(78789, 'IUIUU', 32, 32, 32, 32),
(78789, 'IUIUU', 32, 32, 32, 32),
(2030, 'win', 12, 12, 12, 12),
(2030, 'win', 12, 12, 12, 12),
(858585, 'iii', 14, 14, 14, 14),
(858585, 'iii', 14, 14, 14, 14),
(4567418, 'kkkk', 89, 89, 89, 89),
(4567418, 'kkkk', 89, 89, 89, 89),
(789, 'seojin', 78, 78, 78, 78),
(789, 'seojin', 78, 78, 78, 78),
(48965, 'uu', 85, 85, 85, 85),
(48965, 'uu', 85, 85, 85, 85),
(7878745, 'ppp', 96, 96, 96, 96),
(7878745, 'ppp', 96, 96, 96, 96),
(777, 'opop', 77, 77, 77, 77),
(777, 'opop', 77, 77, 77, 77),
(543, 'tte', 23, 23, 23, 23),
(543, 'tte', 23, 23, 23, 23),
(3535, 'jjj', 45, 45, 45, 45),
(3535, 'jjj', 45, 45, 45, 45),
(123112312, 'sdfsd', 32, 32, 32, 32),
(123112312, 'sdfsd', 32, 32, 32, 32),
(1236132, 'wserwe', 23, 23, 23, 23),
(1236132, 'wserwe', 23, 23, 23, 23),
(39023, 'wefe', 242, 242, 242, 242),
(39023, 'wefe', 242, 242, 242, 242),
(390232323, 'wefe', 242, 242, 242, 242),
(390232323, 'wefe', 242, 242, 242, 242);

-- --------------------------------------------------------

--
-- Table structure for table `co_t`
--

CREATE TABLE `co_t` (
  `coID` int(11) NOT NULL,
  `coNum` int(11) DEFAULT NULL,
  `courseID` varchar(6) NOT NULL,
  `ploID` varchar(5) NOT NULL,
  `poID` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `co_t`
--

INSERT INTO `co_t` (`coID`, `coNum`, `courseID`, `ploID`, `poID`) VALUES
(1, 1, 'CSC101', '43', '43'),
(2, 1, 'CSC101', '44', '44'),
(3, 1, 'CSC101', '45', '45'),
(4, 2, 'CSC101', '43', '43'),
(5, 1, 'EEE131', '22', '22'),
(6, 2, 'EEE131', '22', '22'),
(7, 3, 'EEE131', '23', '23'),
(8, 4, 'EEE131', '22', '22'),
(31, 5, 'CSC101', '58', '58'),
(32, 1, 'CSC101', '61', '61'),
(33, 5, 'CSC101', '62', '62'),
(34, 6, 'CSC101', '62', '62'),
(35, 2, 'CSC101', '45', '45'),
(36, 2, 'CSC101', '47', '47'),
(37, 2, 'CSC101', '49', '49'),
(38, 3, 'CSC101', '45', '45'),
(39, 3, 'CSC101', '46', '46'),
(40, 3, 'CSC101', '49', '49'),
(41, 4, 'CSC101', '44', '44'),
(42, 4, 'CSC101', '45', '45'),
(43, 4, 'CSC101', '46', '46'),
(44, 6, 'CSC101', '44', '44'),
(45, 6, 'CSC101', '45', '45'),
(46, 6, 'CSC101', '47', '47'),
(47, 6, 'CSC101', '48', '48'),
(48, 5, 'CSC101', '48', '48'),
(49, 1, 'EEE131', '23', '23'),
(50, 1, 'EEE131', '24', '24'),
(51, 1, 'EEE131', '28', '28'),
(52, 1, 'EEE131', '64', '64'),
(53, 3, 'EEE131', '25', '25'),
(54, 3, 'EEE131', '24', '24'),
(55, 3, 'EEE131', '28', '28'),
(56, 3, 'EEE131', '26', '26'),
(57, 3, 'EEE131', '27', '27'),
(58, 3, 'EEE131', '63', '63'),
(59, 3, 'EEE131', '65', '65'),
(60, 4, 'EEE131', '23', '23'),
(61, 5, 'EEE131', '23', '23'),
(62, 5, 'EEE131', '24', '24'),
(63, 5, 'EEE131', '25', '25'),
(64, 6, 'EEE131', '23', '23'),
(65, 6, 'EEE131', '24', '24'),
(66, 6, 'EEE131', '25', '25'),
(67, 7, 'EEE131', '22', '22'),
(68, 1, 'ENG101', '50', '50'),
(69, 3, 'ENG101', '50', '50'),
(70, 5, 'ENG101', '50', '50'),
(71, 6, 'ENG101', '50', '50'),
(72, 1, 'ENG101', '52', '52'),
(73, 2, 'ENG101', '52', '52'),
(74, 1, 'ENG101', '53', '53'),
(75, 1, 'ENG101', '54', '54'),
(76, 2, 'ENG101', '54', '54'),
(77, 3, 'ENG101', '54', '54'),
(78, 4, 'ENG101', '54', '54'),
(79, 1, 'ENG101', '55', '55'),
(80, 3, 'ENG101', '55', '55'),
(81, 5, 'ENG101', '55', '55'),
(82, 1, 'ENG101', '56', '56'),
(83, 3, 'ENG101', '56', '56'),
(84, 6, 'ENG101', '56', '56'),
(85, 4, 'ENG101', '68', '68'),
(86, 6, 'ENG101', '68', '68'),
(87, 4, 'ENG101', '69', '69'),
(88, 15, 'cmn', '75', '75'),
(101, 5, 'cmn500', '77', ''),
(102, 5, 'cmn500', '76', ''),
(103, 5, 'cmn500', '78', ''),
(104, 5, 'sadia', '79', ''),
(105, 5, 'sadia', '104', ''),
(106, 5, 'sv', '80', ''),
(107, 5, 'sv', '106', ''),
(108, 5, 'kkk', '81', ''),
(109, 5, 'kkk', '108', ''),
(110, 5, 'lll', '82', ''),
(111, 5, 'fallin', '83', ''),
(112, 5, 'IOIO', '84', ''),
(113, 5, 'IUIUU', '85', ''),
(114, 5, 'win', '86', ''),
(115, 5, 'iii', '87', ''),
(116, 5, 'kkkk', '88', ''),
(117, 5, 'seojin', '89', ''),
(118, 5, 'uu', '90', ''),
(119, 5, 'ppp', '91', ''),
(120, 5, 'opop', '92', ''),
(121, 5, 'tte', '93', ''),
(122, 5, 'jjj', '94', ''),
(123, 5, 'sdfsd', '95', ''),
(124, 5, 'wserwe', '96', ''),
(125, 5, 'wefe', '97', ''),
(126, 5, 'wefe', '98', ''),
(127, 5, 'sder', '99', ''),
(128, 5, 'sdf', '100', ''),
(129, 5, 'sdf', '101', '');

-- --------------------------------------------------------

--
-- Table structure for table `dean_t`
--

CREATE TABLE `dean_t` (
  `d_employeeID` int(11) NOT NULL,
  `schoolID` varchar(5) NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `departmenthead_t`
--

CREATE TABLE `departmenthead_t` (
  `h_employeeID` int(11) NOT NULL,
  `departmentID` varchar(3) NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `department_t`
--

CREATE TABLE `department_t` (
  `departmentID` varchar(3) NOT NULL,
  `departmentName` varchar(50) NOT NULL,
  `schoolID` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `department_t`
--

INSERT INTO `department_t` (`departmentID`, `departmentName`, `schoolID`) VALUES
('ACN', 'Accounting', 'SBE'),
('csc', '', '8'),
('CSE', 'Computer Science & Engineering', 'SETS'),
('ECO', 'Economics', 'SBE'),
('EEE', 'Electrical & Electronic Engineering', 'SETS'),
('ESM', 'Environmental Science & Management', 'SELS'),
('FIN', 'Finance', 'SBE'),
('GSG', 'Global Studies & Governance', 'SLASS'),
('HRM', 'Human Resource Management', 'SBE'),
('LAW', 'Law', 'SLASS'),
('LS', 'Life Sciences', 'SELS'),
('MC', 'Media and Communication', 'SLASS'),
('MGT', 'General Management', 'SBE'),
('MIS', 'Management Information Systems', 'SBE'),
('MKT', 'Marketing', 'SBE'),
('PH', 'Public Health', 'SPPH'),
('PHA', 'Pharmacy', 'SPPH'),
('PS', 'Physical Sciences', 'SETS'),
('SSH', 'Social Sciences and Humanities', 'SLASS');

-- --------------------------------------------------------

--
-- Table structure for table `employee_t`
--

CREATE TABLE `employee_t` (
  `employeeID` int(11) NOT NULL,
  `password` varchar(10) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_t`
--

INSERT INTO `employee_t` (`employeeID`, `password`, `firstName`, `lastName`) VALUES
(2259, '12345', 'Mainuddin', 'Chowdhury'),
(2344, '12345', 'Nadira Sultana', 'Mirza'),
(2483, '12345', 'Kazi Mubinul Hasan', 'Shanto'),
(2518, '12345', 'Mubash-Shera Karishma', 'Mobarok'),
(3251, '123', 'Farzana', 'Chowdhury'),
(3329, '12345', 'Abul Khair', 'Jyote'),
(3358, '12345', 'Iftekhar', 'Mahfuz'),
(3542, '12345', 'Md. Aminul ', 'Islam'),
(4161, '12345', 'Subrata Kumar', 'Dey'),
(4228, '12345', 'Habib Bin', 'Muzaffer'),
(4275, '12345', 'Tahsin F. Ara', 'Nayna'),
(4351, '12345', 'Nabila Rahman', 'Nodi'),
(4361, '12345', 'Shovasis Kumar', 'Biswas'),
(4408, '12345', 'Asif Bin', 'Khalid'),
(4416, '12345', 'Md Fahad', 'Monir'),
(4449, '12345', 'Sheikh', 'Abujar'),
(4453, '12345', 'Moumita', 'Asad'),
(4467, '12345', 'Nashid', 'Sultana'),
(4475, '12345', 'Sejuti', 'Rahman');

-- --------------------------------------------------------

--
-- Table structure for table `evaluation_strategy_t`
--

CREATE TABLE `evaluation_strategy_t` (
  `eSID` int(11) NOT NULL,
  `assessmentTool1` mediumtext DEFAULT NULL,
  `markDistribution1` int(11) DEFAULT NULL,
  `bloomsCategory1` mediumtext DEFAULT NULL,
  `courseOutlineID` int(11) DEFAULT NULL,
  `assessmentTool2` mediumtext DEFAULT NULL,
  `assessmentTool3` mediumtext DEFAULT NULL,
  `markDistribution2` int(11) DEFAULT NULL,
  `markDistribution3` int(11) DEFAULT NULL,
  `bloomsCategory2` mediumtext DEFAULT NULL,
  `bloomsCategory3` mediumtext DEFAULT NULL,
  `assessmentType` mediumtext DEFAULT NULL,
  `subTotal` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `evaluation_strategy_t`
--

INSERT INTO `evaluation_strategy_t` (`eSID`, `assessmentTool1`, `markDistribution1`, `bloomsCategory1`, `courseOutlineID`, `assessmentTool2`, `assessmentTool3`, `markDistribution2`, `markDistribution3`, `bloomsCategory2`, `bloomsCategory3`, `assessmentType`, `subTotal`) VALUES
(1, 'a', 1, 'a', 12, 'b', 'c', 2, 3, 'b', 'c', 'i dont know', 40),
(2, 'd', 4, 'd', 12, 'e', 'f', 5, 6, 'e', 'f', 'bleh', 60),
(3, 'Two Class Tests', 10, '', 4, 'One report & assignment\r\n\r\n', 'One Project & Presentation', 15, 15, 'Analyze, Develop', 'Demonstrate, Use', 'Continuous\r\nAssessment', 40),
(4, 'Midterm Examination', 25, 'Analyze, Use', 4, 'Final Term Examination', '', 35, NULL, 'Demonstrate, Model', '', 'Summative Assessment', 60),
(5, 'a', 1, 'a', 13, 'b', 'c', 2, 3, 'b', 'c', 'i dont know', 40);

-- --------------------------------------------------------

--
-- Table structure for table `exam_t`
--

CREATE TABLE `exam_t` (
  `examID` int(11) NOT NULL,
  `examName` varchar(30) NOT NULL,
  `sectionID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exam_t`
--

INSERT INTO `exam_t` (`examID`, `examName`, `sectionID`) VALUES
(1, 'CSC101FinalSpring2021', 10),
(2, 'EEE131FinalSpring2021', 1),
(3, 'EEE231FinalSummer2020', 4),
(4, 'EEE233FinalAutumn2021', 5),
(5, 'ENG101FinalSummer2021', 7),
(6, 'MKT101FinalSpring2020', 11),
(7, 'EEE131FinalAutumn2021', 3),
(9, 'CSC101FinalSummer2021', 14),
(10, 'CSC101FinalAutumn2021', 15),
(11, 'quiz-1', 10),
(12, 'midterm', 1),
(13, 'quiz-1', 3),
(14, 'quiz-1', 7),
(15, 'quiz-1', 19),
(16, 'quiz-2', 19);

-- --------------------------------------------------------

--
-- Table structure for table `faculty_t`
--

CREATE TABLE `faculty_t` (
  `f_employeeID` int(11) NOT NULL,
  `departmentID` varchar(3) NOT NULL,
  `rank` varchar(30) NOT NULL,
  `joinDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculty_t`
--

INSERT INTO `faculty_t` (`f_employeeID`, `departmentID`, `rank`, `joinDate`) VALUES
(2259, 'ENG', 'lecturer', '2014-08-13'),
(2344, 'ENG', 'lecturer', '2014-08-13'),
(2483, 'ENG', 'lecturer', '2014-08-13'),
(2518, 'ENG', 'lecturer', '2014-08-13'),
(3542, 'MIS', 'lecturer', '2012-10-10'),
(4275, 'EEE', 'Lecturer', '2012-11-02'),
(4351, 'EEE', 'lecturer', '2014-08-13'),
(4361, 'EEE', 'lecturer', '2014-08-13'),
(4449, 'CSE', 'lecturer', '2015-11-19');

-- --------------------------------------------------------

--
-- Table structure for table `lesson_plan_strategy_t`
--

CREATE TABLE `lesson_plan_strategy_t` (
  `lPSID` int(11) NOT NULL,
  `week` int(11) NOT NULL,
  `topic` mediumtext NOT NULL,
  `learningStrategy` mediumtext NOT NULL,
  `assessmentStrategy` mediumtext NOT NULL,
  `correspondingClo` varchar(10) NOT NULL,
  `courseOutlineID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lesson_plan_strategy_t`
--

INSERT INTO `lesson_plan_strategy_t` (`lPSID`, `week`, `topic`, `learningStrategy`, `assessmentStrategy`, `correspondingClo`, `courseOutlineID`) VALUES
(3, 1, 'Introduction: concept of database, DBMS Introduction: Database development process, Database architecture; Database languages and Interfaces', 'Lecture (3h)', 'Mid Exam Progressive Project', 'CLO1', 4),
(4, 2, 'Analysis: Rich Picture Analysis: Six Elements analysis', 'Lecture (3h)', 'Mid Exam Progressive Project', 'CLO1', 4),
(5, 3, 'Analysis: Process Diagram using BPMN 2.0 Analysis: Process Diagram and Improvement Process', 'Lecture (3h)', 'Mid Exam Progressive Project', 'CLO1', 4),
(6, 1, 'Introduction', 'Discussion', 'Quiz 1', 'CLO1', 11),
(7, 2, 'Internet of Things', 'Review presentations Classroom discussion', 'Quiz 2', 'CLO2', 11),
(8, 3, 'Artificial Intelligence (AI)', 'Review presentations Classroom discussion', 'Quiz 3', 'CLO3', 11),
(9, 1, 'Introduction', 'Discussion', 'Mid Exam Progressive Project', '2', 12),
(10, 1, 'Introduction', 'Lecture (3h)', 'Mid Exam Progressive Project', 'CLO1', 13);

-- --------------------------------------------------------

--
-- Table structure for table `plo_t`
--

CREATE TABLE `plo_t` (
  `ploID` int(11) NOT NULL,
  `ploNum` int(11) NOT NULL,
  `programID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `plo_t`
--

INSERT INTO `plo_t` (`ploID`, `ploNum`, `programID`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 5, 1),
(6, 6, 1),
(7, 7, 1),
(8, 1, 2),
(9, 2, 2),
(10, 3, 2),
(11, 4, 2),
(12, 5, 2),
(13, 6, 2),
(14, 7, 2),
(15, 1, 3),
(16, 2, 3),
(17, 3, 3),
(18, 4, 3),
(19, 5, 3),
(20, 6, 3),
(21, 7, 3),
(22, 1, 9),
(23, 2, 9),
(24, 3, 9),
(25, 4, 9),
(26, 5, 9),
(27, 6, 9),
(28, 7, 9),
(29, 1, 10),
(30, 2, 10),
(31, 3, 10),
(32, 4, 10),
(33, 5, 10),
(34, 6, 10),
(35, 7, 10),
(36, 1, 8),
(37, 2, 8),
(38, 3, 8),
(39, 4, 8),
(40, 5, 8),
(41, 6, 8),
(42, 7, 8),
(43, 1, 13),
(44, 2, 13),
(45, 3, 13),
(46, 4, 13),
(47, 5, 13),
(48, 6, 13),
(49, 7, 13),
(50, 1, 20),
(51, 2, 20),
(52, 3, 20),
(53, 4, 20),
(54, 5, 20),
(55, 6, 20),
(56, 7, 20),
(57, 8, 13),
(58, 9, 13),
(59, 10, 13),
(60, 11, 13),
(61, 12, 13),
(62, 13, 13),
(63, 9, 9),
(64, 11, 9),
(65, 12, 9),
(66, 8, 20),
(67, 9, 20),
(68, 10, 20),
(69, 11, 20),
(70, 12, 20),
(71, 13, 20),
(75, 75, 75),
(76, 2, 500),
(77, 1, 500),
(78, 5, 500),
(79, 5, 501),
(80, 5, 501),
(81, 5, 501),
(82, 5, 501),
(83, 5, 501),
(84, 5, 501),
(85, 5, 501),
(86, 5, 501),
(87, 5, 501),
(88, 5, 501),
(89, 5, 501),
(90, 5, 501),
(91, 5, 501),
(92, 5, 501),
(93, 5, 501),
(94, 5, 501),
(95, 5, 501),
(96, 5, 501),
(97, 5, 501),
(98, 5, 501),
(99, 5, 501),
(100, 5, 501),
(101, 5, 501);

-- --------------------------------------------------------

--
-- Table structure for table `po_t`
--

CREATE TABLE `po_t` (
  `poID` int(11) NOT NULL,
  `poNum` int(11) NOT NULL,
  `programID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `po_t`
--

INSERT INTO `po_t` (`poID`, `poNum`, `programID`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 5, 1),
(6, 6, 1),
(7, 7, 1),
(8, 1, 2),
(9, 2, 2),
(10, 3, 2),
(11, 4, 2),
(12, 5, 2),
(13, 6, 2),
(14, 7, 2),
(15, 1, 3),
(16, 2, 3),
(17, 3, 3),
(18, 4, 3),
(19, 5, 3),
(20, 6, 3),
(21, 7, 3),
(22, 1, 9),
(23, 2, 9),
(24, 3, 9),
(25, 4, 9),
(26, 5, 9),
(27, 6, 9),
(28, 7, 9),
(29, 1, 10),
(30, 2, 10),
(31, 3, 10),
(32, 4, 10),
(33, 5, 10),
(34, 6, 10),
(35, 7, 10),
(36, 1, 8),
(37, 2, 8),
(38, 3, 8),
(39, 4, 8),
(40, 5, 8),
(41, 6, 8),
(42, 7, 8),
(43, 1, 13),
(44, 2, 13),
(45, 3, 13),
(46, 4, 13),
(47, 5, 13),
(48, 6, 13),
(49, 7, 13),
(50, 1, 20),
(51, 2, 20),
(52, 3, 20),
(53, 4, 20),
(54, 5, 20),
(55, 6, 20),
(56, 7, 20),
(57, 8, 13),
(58, 9, 13),
(59, 10, 13),
(60, 11, 13),
(61, 12, 13),
(62, 13, 13),
(63, 9, 9),
(64, 11, 9),
(65, 12, 9),
(66, 8, 20),
(67, 9, 20),
(68, 10, 20),
(69, 11, 20),
(70, 12, 20),
(71, 13, 20);

-- --------------------------------------------------------

--
-- Table structure for table `pre_req_course_t`
--

CREATE TABLE `pre_req_course_t` (
  `preReqID` int(11) NOT NULL,
  `courseID` varchar(6) NOT NULL,
  `preReqCourseID` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `program_t`
--

CREATE TABLE `program_t` (
  `programID` int(11) NOT NULL,
  `programName` varchar(50) NOT NULL,
  `departmentID` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `program_t`
--

INSERT INTO `program_t` (`programID`, `programName`, `departmentID`) VALUES
(1, 'BBA in ACN', 'ACN'),
(2, 'BSc in ECO', 'ECO'),
(3, 'BBA in FIN', 'FIN'),
(4, 'BBA in MGT', 'MGT'),
(5, 'BBA in HRM', 'HRM'),
(6, 'BBA in IB', 'IB'),
(7, 'BBA in MIS', 'MIS'),
(8, 'BBA in MKT', 'MKT'),
(9, 'BSc in EEE', 'EEE'),
(10, 'BSc in ETE', 'EEE'),
(11, 'BSc in CEN', 'CSE'),
(12, 'BSc in CSC', 'CSE'),
(13, 'BSc in CSE', 'CSE'),
(14, 'BSc in PHY', 'PS'),
(15, 'BSc in MAT', 'PS'),
(16, 'BSc in BIOCHEM', 'LS'),
(17, 'BSc in MICROBIO', 'LS'),
(18, 'BSc in LWRM', 'ESM'),
(19, 'BSc in ENVMGT', 'ESM'),
(20, 'BA in ENG', 'ENG'),
(21, 'BA in ELT', 'ENG'),
(22, 'BA in GSS', 'GSG'),
(23, 'BA in LAW', 'LAW'),
(24, 'BA in MCM', 'MC'),
(25, 'BSs in ANT', 'SSH'),
(26, 'BSs in Sociology', 'SSH'),
(27, 'Bachelor of Pharmacy', 'PHA'),
(28, 'Master of Public Health', 'PH');

-- --------------------------------------------------------

--
-- Table structure for table `question_t`
--

CREATE TABLE `question_t` (
  `questionID` int(11) NOT NULL,
  `questionDetails` mediumtext NOT NULL,
  `markPerQuestion` int(11) NOT NULL,
  `questionNum` int(11) NOT NULL,
  `difficultyLevel` int(11) DEFAULT NULL,
  `examID` varchar(20) DEFAULT NULL,
  `courseID` varchar(6) DEFAULT NULL,
  `coNum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `question_t`
--

INSERT INTO `question_t` (`questionID`, `questionDetails`, `markPerQuestion`, `questionNum`, `difficultyLevel`, `examID`, `courseID`, `coNum`) VALUES
(79, 'add three things in your answer', 10, 1, 3, '11', 'CSC101', 1),
(80, 'state three things about the fundamentals of computer science', 10, 2, 5, '11', 'CSC101', 2),
(81, 'count the number of countries', 10, 3, 1, '11', 'CSC101', 3),
(82, 'what is the name of this course', 10, 1, 1, '12', 'EEE131', 1),
(83, 'define the meaning of this course', 10, 2, 1, '12', 'EEE131', 2),
(84, 'add three things in your answer', 10, 1, 3, '13', 'EEE131', 2),
(85, 'what is this course about', 10, 1, 0, '14', 'EEE131', 1),
(86, 'name three things', 10, 2, 1, '14', 'EEE131', 2),
(87, 'define the fundamentals of this course', 10, 3, 1, '14', 'EEE131', 3),
(88, 'what do you expect from this course', 10, 4, 0, '14', 'EEE131', 4),
(89, 'add three things in your answer', 10, 1, 3, '15', 'EEE131', 1),
(90, 'define the meaning of this course', 10, 2, 1, '15', 'EEE131', 2),
(91, 'define the fundamentals of this course', 10, 3, 1, '15', 'EEE131', 3),
(92, 'what do you expect from this course', 10, 4, 0, '15', 'EEE131', 4),
(93, 'what is the name of this course', 10, 1, 1, '16', 'EEE131', 2),
(94, 'define the meaning of this course', 10, 2, 1, '16', 'EEE131', 3),
(95, '', 10, 150, 1, '100', 'cmn', 15),
(96, '', 20, 15, 2, '15', 'cmn500', 5),
(97, '', 20, 75, NULL, '75', 'sadia', 5),
(98, '', 20, 75, NULL, '75', 'sadia', 5),
(99, '', 20, 75, NULL, '75', 'sadia', 5),
(100, '', 20, 75, NULL, '75', 'sv', 5),
(101, '', 20, 75, NULL, '75', 'kkk', 5),
(102, '', 20, 75, NULL, '75', 'lll', 5),
(103, '', 20, 75, NULL, '75', 'fallin', 5),
(104, '', 20, 75, NULL, '75', 'IOIO', 5),
(105, '', 20, 75, NULL, '75', 'IUIUU', 5),
(106, '', 20, 75, NULL, '75', 'win', 5),
(107, '', 20, 75, NULL, '75', 'iii', 5),
(108, '', 20, 75, NULL, '75', 'kkkk', 5),
(109, '', 20, 75, NULL, '75', 'seojin', 5),
(110, '', 20, 75, NULL, '75', 'uu', 5),
(111, '', 20, 75, NULL, '75', 'ppp', 5),
(112, '', 20, 75, NULL, '75', 'opop', 5),
(113, '', 20, 75, NULL, '75', 'tte', 5),
(114, '', 20, 75, NULL, '75', 'jjj', 5),
(115, '', 20, 75, NULL, '75', 'sdfsd', 5),
(116, '', 20, 75, NULL, '75', 'wserwe', 5),
(117, '', 20, 75, NULL, '75', 'wefe', 5),
(118, '', 20, 75, NULL, '75', 'wefe', 5),
(119, '', 20, 75, NULL, '75', 'sder', 5),
(120, '', 20, 75, NULL, '75', 'sdf', 5),
(121, '', 20, 75, NULL, '75', 'sdf', 5);

-- --------------------------------------------------------

--
-- Table structure for table `registration_t`
--

CREATE TABLE `registration_t` (
  `registrationID` int(11) NOT NULL,
  `sectionID` int(11) NOT NULL,
  `studentID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration_t`
--

INSERT INTO `registration_t` (`registrationID`, `sectionID`, `studentID`) VALUES
(1, 1, 1531176),
(2, 2, 1611001),
(3, 3, 1711409),
(4, 4, 1720718),
(5, 5, 1722021),
(6, 6, 1810471),
(7, 7, 1811135),
(8, 8, 1821772),
(9, 9, 1822089),
(10, 10, 1910876),
(11, 11, 2020076),
(12, 11, 1711411),
(13, 7, 1722021),
(14, 7, 1910876),
(15, 12, 1531176),
(16, 12, 1611001),
(17, 13, 1711409),
(18, 13, 1720718),
(19, 10, 1931160),
(20, 3, 1910876),
(21, 14, 1930095),
(22, 15, 1921498),
(23, 16, 2020076),
(24, 1, 1910876),
(25, 19, 2020076),
(56, 0, 6530921),
(57, 100, 7830921),
(70, 105, 1222),
(71, 0, 8954),
(72, 520, 5656),
(73, 120, 21320),
(74, 200, 4567854),
(75, 560, 1632031),
(76, 400, 4521676),
(77, 507, 7863732),
(78, 10256, 561085),
(79, 963, 357),
(80, 999, 5000),
(81, 1000, 6000),
(82, 8000, 70000);

-- --------------------------------------------------------

--
-- Table structure for table `school_t`
--

CREATE TABLE `school_t` (
  `schoolID` varchar(5) NOT NULL,
  `schoolName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `school_t`
--

INSERT INTO `school_t` (`schoolID`, `schoolName`) VALUES
('SBE', 'School Of Business & Entrepreneurship'),
('SELS', 'School Of Environment & Life Sciences'),
('SETS', 'School Of Engineering,Technology & Sciences'),
('SLASS', 'School Of Liberal Arts & Social Sciences'),
('SPPH', 'School Of Pharmacy & Public Health');

-- --------------------------------------------------------

--
-- Table structure for table `section_t`
--

CREATE TABLE `section_t` (
  `sectionID` int(11) NOT NULL,
  `sectionNum` int(11) NOT NULL,
  `semester` varchar(6) NOT NULL,
  `courseID` varchar(6) NOT NULL,
  `facultyID` int(11) NOT NULL,
  `year` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `section_t`
--

INSERT INTO `section_t` (`sectionID`, `sectionNum`, `semester`, `courseID`, `facultyID`, `year`) VALUES
(1, 1, 'summer', 'EEE131', 4275, 2021),
(2, 2, 'summer', 'EEE131', 4275, 2020),
(3, 2, 'autumn', 'EEE131', 4275, 2021),
(4, 1, 'summer', 'EEE231', 4361, 2020),
(5, 1, 'autumn', 'ENG101', 4351, 2021),
(6, 1, 'autumn', 'ENG101', 2518, 2020),
(7, 2, 'spring', 'EEE131', 4275, 2021),
(8, 3, 'spring', 'ENG101', 2259, 2020),
(9, 4, 'summer', 'ENG101', 2483, 2020),
(10, 1, 'spring', 'CSC101', 4449, 2021),
(11, 2, 'spring', 'MKT101', 3329, 2020),
(12, 1, 'summer', 'ENG101', 2259, 2021),
(13, 3, 'spring', 'ENG101', 2483, 2021),
(14, 1, 'summer', 'CSC101', 4449, 2021),
(15, 1, 'autumn', 'CSC101', 4449, 2021),
(16, 1, 'summer', 'MIS430', 3542, 2021),
(17, 1, 'spring', 'ENG101', 2259, 2021),
(18, 2, 'summer', 'ENG101', 2483, 2021),
(19, 1, 'autumn', 'EEE131', 4275, 2021),
(31, 0, 'NJKNJ', 'XAN ', 0, 0000),
(51, 0, 'JIJN', 'jkn', 0, 0000),
(100, 0, 'comak', 'xnjmk', 0, 0000),
(105, 0, 'ncka', 'cdn', 0, 0000),
(106, 0, 'mk ', '5630', 0, 2053),
(120, 0, 'hjb', 'kmn', 0, 0000),
(200, 0, 'hhh', 'dhcbj', 0, 0000),
(300, 0, 'nsc', 'lsm', 0, 0000),
(400, 0, 'dm', 'jskn ', 0, 0000),
(507, 0, 'cdm', 'axdm ', 0, 2012),
(520, 0, '520', '20', 0, 0000),
(560, 0, 'ml', 'nhh', 0, 0000),
(963, 0, 'kmkl', 'cs', 0, 0000),
(999, 0, 'pop', 'pppo', 0, 0000),
(1000, 0, 'popl', 'KKL', 0, 0000),
(5210, 0, 'jnk', ' m', 0, 0000),
(8000, 0, 'pop', 'JJJJ', 0, 0000),
(10256, 0, 'dnc', 'jdcn', 0, 2015);

-- --------------------------------------------------------

--
-- Table structure for table `student_course_performance_t`
--

CREATE TABLE `student_course_performance_t` (
  `scpID` int(11) NOT NULL,
  `registrationID` int(11) NOT NULL,
  `totalMarksObtained` int(11) NOT NULL,
  `gradePoint` float NOT NULL,
  `id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_course_performance_t`
--

INSERT INTO `student_course_performance_t` (`scpID`, `registrationID`, `totalMarksObtained`, `gradePoint`, `id`) VALUES
(1, 2, 80, 3.3, NULL),
(2, 3, 78, 3, NULL),
(3, 4, 87, 3.7, NULL),
(4, 5, 89, 3.7, NULL),
(5, 6, 86, 3.7, NULL),
(6, 7, 70, 2.7, NULL),
(7, 8, 92, 4, NULL),
(8, 9, 75, 3, NULL),
(9, 10, 93, 4, NULL),
(10, 11, 93, 4, NULL),
(11, 1, 66, 2.3, NULL),
(12, 12, 66, 2.3, NULL),
(13, 13, 60, 2, NULL),
(14, 14, 58, 1.7, NULL),
(15, 15, 72, 2.7, NULL),
(16, 16, 82, 3.3, NULL),
(17, 17, 66, 2.3, NULL),
(18, 18, 57, 1.7, NULL),
(19, 21, 69, 2.3, NULL),
(20, 23, 88, 3.7, NULL),
(21, 22, 80, 3.3, NULL),
(22, 0, 55, 0, NULL),
(23, 0, 99, 0, NULL),
(24, 0, 77, 0, NULL),
(25, 70, 42, 0, NULL),
(26, 0, 66, 0, NULL),
(27, 0, 0, 0, NULL),
(28, 72, 20, 0, NULL),
(29, 0, 45, 0, NULL),
(30, 0, 36, 0, NULL),
(31, 0, 100, 0, NULL),
(32, 0, 30, 0, NULL),
(33, 0, 75, 0, NULL),
(34, 0, 9, 0, 1),
(35, 0, 63, 0, 22),
(36, 78, 20, 0, NULL),
(37, 79, 56, 0, NULL),
(38, 0, 15, 0, NULL),
(39, 0, 45, 0, NULL),
(40, 0, 85, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_t`
--

CREATE TABLE `student_t` (
  `studentID` int(11) NOT NULL,
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `dateOfBirth` date NOT NULL,
  `gender` varchar(6) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `departmentID` varchar(3) NOT NULL,
  `programID` int(11) NOT NULL,
  `password` varchar(10) NOT NULL,
  `enrollmentSemester` varchar(10) NOT NULL,
  `enrollmentYear` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_t`
--

INSERT INTO `student_t` (`studentID`, `firstName`, `lastName`, `dateOfBirth`, `gender`, `email`, `phone`, `address`, `departmentID`, `programID`, `password`, `enrollmentSemester`, `enrollmentYear`) VALUES
(1, '', '', '0000-00-00', '', '', '', '', '', 0, '', 'jnk', '52103'),
(22, '', '', '0000-00-00', '', '', '', '', '', 0, '', 'nsc', '3020'),
(357, '', '', '0000-00-00', '', '', '', '', '', 0, '', 'kmkl', '963'),
(1222, '', '', '0000-00-00', '', '', '', '', '', 0, '', 'ncka', '105'),
(5000, '', '', '0000-00-00', '', '', '', '', '', 0, '', 'pop', '600'),
(5481, '', '', '0000-00-00', '', '', '', '', '', 0, '', 'JIJN', '5645'),
(5656, '', '', '0000-00-00', '', '', '', '', '', 0, '', '520', '520'),
(6000, '', '', '0000-00-00', '', '', '', '', '', 0, '', 'popl', '700'),
(7575, '', '', '0000-00-00', '', '', '', '', '', 0, '', '', ''),
(8585, '', '', '2023-04-01', '', '', '', '', 'csc', 500, '', '', ''),
(8954, '', '', '0000-00-00', '', '', '', '', '', 0, '', 'mk ', '53'),
(12123, '', '', '0000-00-00', '', '', '', '', '', 0, '', 'NJKNJ', '541'),
(21320, '', '', '0000-00-00', '', '', '', '', '', 0, '', 'hjb', '3221'),
(70000, '', '', '0000-00-00', '', '', '', '', '', 0, '', 'pop', '800'),
(456789, '', '', '0000-00-00', '', '', '', '', '', 0, '', 'knm', '5231'),
(561085, '', '', '0000-00-00', '', '', '', '', '', 0, '', 'dnc', '2015'),
(1531176, 'Md.Abdul Moin', 'Bhuiyan', '2013-11-05', 'male', '1531176@iub.edu.bd', '123446', 'R-49', 'EEE', 9, '12345', 'spring', '2021'),
(1611001, 'Iftekhairul Mohaimin', 'Alif', '2012-08-08', 'male', '1611001@iub.edu.bd', '128363', 'R-40', 'EEE', 9, '', 'spring', '2021'),
(1630921, '', '', '0000-00-00', '', '', '', '', 'sss', 88, '', 'winter', '55'),
(1632031, '', '', '0000-00-00', '', '', '', '', '', 0, '', 'ml', '10012'),
(1711409, 'Fahim', 'Fardin', '2012-08-07', 'male', '1711409@iub.edu.bd', '1234654', 'R-23', 'PS', 14, '', 'summer', '2021'),
(1711411, 'Asif', 'Hossain', '2013-08-06', 'male', 'asdvefv', '013432523', 'wfegtbr', 'GSG', 22, '', 'autumn', '2021'),
(1720718, 'Tashdid', 'Zaman', '2013-09-03', 'male', '1720718@iub.edu.bd', '12321', 'R-2', 'ACN', 1, '', 'autumn', '2021'),
(1722021, 'Md Talha Ibne', 'Anwar', '2012-08-07', 'male', '1722021@iub.edu.bd', '12312', 'R-2', 'ECO', 2, '', 'autumn', '2021'),
(1810471, 'Shahriar Alam', 'Fahim', '2012-08-09', 'male', '1810471@iub.edu.bd', '123446', 'R-49', 'FIN', 3, '', 'spring', '2020'),
(1811135, 'Soumitro', 'Roy', '2014-08-04', 'male', '1811135@iub.edu.bd', '1234', 'asdf', 'MGT', 4, '', 'summer', '2020'),
(1821772, 'jubayer Akhand', 'Udoy', '2012-08-09', 'male', '1821772@iub.edu.bd', '128363', 'R-40', 'HRM', 5, '', 'autumn', '2020'),
(1822089, 'Shamsad Sanzid', 'Ahmed', '2013-08-06', 'male', '1822089@iub.edu.bd', '123431', 'R-492', 'MIS', 7, '', 'summer', '2020'),
(1910876, 'Reza ', 'Al Hasan', '2014-09-10', 'male', '1910876@iub.edu.bd', '123477', 'R-12', 'CSE', 13, '1234567', 'summer', '2021'),
(1911065, 'Samuel', 'Planet', '2013-11-05', 'male', '1911065@iub.edu.bd', '123', 'dr21', 'ESM', 18, '', 'summer', '2021'),
(1920498, 'Mohammad Sufyan', 'Rahman', '2013-06-05', 'male', '1920498@iub.edu.bd', '12354', 'R-22', 'SSH', 25, '', 'summer', '2021'),
(1920729, 'Mohammed', 'Shahporan', '2013-11-05', 'male', 'ahspdnsgsj', '12296', 'R-231', 'CSE', 13, '', 'summer', '2020'),
(1921433, 'Alphy Shahrin', 'Sadma', '2013-11-05', 'female', 'ahspdnsgsj', '12296', 'R-231', 'CSE', 13, '', 'spring', '2020'),
(1921498, 'Kowshik', 'Dewan', '2013-11-05', 'male', 'ahspdnsgsj', '12296', 'R-231', 'CSE', 13, '', 'autumn', '2020'),
(1930095, 'Farhat Fatema', 'Jameni', '2013-11-05', 'female', 'ahspdnsgsj', '12296', 'R-231', 'CSE', 13, '', 'spring', '2020'),
(1930921, '', '', '0000-00-00', '', '', '', '', 'sss', 88, '', 'uuu', '921'),
(1931160, 'Syeda Abida', 'Sultana', '2013-11-05', 'female', 'ahspdnsgsj', '12296', 'R-231', 'CSE', 13, '', 'autumn', '2020'),
(2020001, '', 'Provi', '2013-11-05', 'female', 'ahspdnsgsj', '12296', 'R-231', 'MKT', 8, '', '', ''),
(2020076, 'Abdur Rahman', 'Ayon', '2012-11-07', 'male', 'ayonrahman48@yahoo.com', '01997642649', 'R-48', 'CSE', 11, '', '', ''),
(2020331, 'Mohammad Mahmudul', 'Islam', '2013-11-05', 'female', 'ahspdnsgsj', '12296', 'R-231', 'MKT', 8, '', '', ''),
(2020729, 'Sanjida', 'Afrin', '2013-11-05', 'female', 'ahspdnsgsj', '12296', 'R-231', 'MKT', 8, '', '', ''),
(2020760, 'Fahad', 'Zaman', '2013-11-05', 'female', 'ahspdnsgsj', '12296', 'R-231', 'MKT', 8, '', '', ''),
(2020780, 'Alvi', 'Noor', '2013-11-05', 'male', 'ahspdnsgsj', '12296', 'R-231', 'PHA', 27, '', '', ''),
(2020789, 'Newaz', 'Alam', '2013-11-05', 'male', 'ahspdnsgsj', '12296', 'R-231', 'PHA', 27, '', '', ''),
(2020952, 'Mysha', 'Samiha', '2013-11-05', 'female', 'ahspdnsgsj', '12296', 'R-231', 'LS', 17, '', '', ''),
(2022235, 'Morshada', 'Khanam', '2013-11-05', 'female', 'ahspdnsgsj', '12296', 'R-231', 'LS', 17, '', '', ''),
(2022350, 'Sumaiya', 'Nitu', '2013-11-05', 'female', 'ahspdnsgsj', '12296', 'R-231', 'LS', 17, '', '', ''),
(2022504, 'Zahidul', 'Islam', '2013-11-05', 'male', 'ahspdnsgsj', '12296', 'R-231', 'LS', 17, '', '', ''),
(2022759, 'Avhisak', 'Shikder', '2013-11-05', 'male', 'ahspdnsgsj', '12296', 'R-231', 'LS', 17, '', '', ''),
(2120016, '', '', '0000-00-00', '', '', '', '', 'sss', 88, '', 'autumn', '8585'),
(2130642, 'Nahian', 'Naja', '2013-11-05', 'male', 'ahspdnsgsj', '12296', 'R-231', 'LS', 17, '', '', ''),
(4521676, '', '', '0000-00-00', '', '', '', '', '', 0, '', 'dm', '2415'),
(4535345, '', '', '0000-00-00', '', '', '', '', 'sss', 88, '', '443', '324234'),
(4567418, '', '', '0000-00-00', '', '', '', '', 'sss', 88, '', 'ruru', '667'),
(4567854, '', '', '0000-00-00', '', '', '', '', '', 0, '', 'hhh', '203'),
(6530921, '', '', '0000-00-00', '', '', '', '', '', 0, '', 'ckn ', ' mm '),
(7830921, '', '', '0000-00-00', '', '', '', '', '', 0, '', 'comak', '2625'),
(7863732, '', '', '0000-00-00', '', '', '', '', '', 0, '', 'cdm', '12'),
(7878745, '', '', '0000-00-00', '', '', '', '', 'sss', 88, '', 'ooo', '45'),
(7895617, '', '', '0000-00-00', '', '', '', '', 'sss', 88, '', 'falling', '789'),
(12126132, '', '', '0000-00-00', '', '', '', '', 'sss', 88, '', '7', '232'),
(12126137, '', '', '0000-00-00', '', '', '', '', 'sss', 88, '', '7', '232'),
(12129137, '', '', '0000-00-00', '', '', '', '', 'sss', 88, '', '7', '232'),
(45454545, '', '', '0000-00-00', '', '', '', '', 'sss', 88, '', 'lll', '4545'),
(52309921, '', '', '0000-00-00', '', '', '', '', '', 0, '', 'autumn', '444'),
(85217959, '', '', '0000-00-00', '', '', '', '', 'sss', 88, '', 'YUYU', '23'),
(123112312, '', '', '0000-00-00', '', '', '', '', 'sss', 88, '', 'sadcsdff', '234234'),
(390232323, '', '', '0000-00-00', '', '', '', '', 'sss', 88, '', '3', '2'),
(2147483647, '', '', '0000-00-00', '', '', '', '', 'sss', 88, '', 'IOIO', '852');

-- --------------------------------------------------------

--
-- Table structure for table `vc_t`
--

CREATE TABLE `vc_t` (
  `v_employeeID` int(11) NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer_t`
--
ALTER TABLE `answer_t`
  ADD PRIMARY KEY (`answerID`);

--
-- Indexes for table `backlogdata`
--
ALTER TABLE `backlogdata`
  ADD PRIMARY KEY (`backlog_id`);

--
-- Indexes for table `clo_matrix_t`
--
ALTER TABLE `clo_matrix_t`
  ADD PRIMARY KEY (`clo_MatID`);

--
-- Indexes for table `course_outline_t`
--
ALTER TABLE `course_outline_t`
  ADD PRIMARY KEY (`courseOutlineID`);

--
-- Indexes for table `course_t`
--
ALTER TABLE `course_t`
  ADD PRIMARY KEY (`courseID`);

--
-- Indexes for table `co_t`
--
ALTER TABLE `co_t`
  ADD PRIMARY KEY (`coID`);

--
-- Indexes for table `dean_t`
--
ALTER TABLE `dean_t`
  ADD PRIMARY KEY (`d_employeeID`);

--
-- Indexes for table `departmenthead_t`
--
ALTER TABLE `departmenthead_t`
  ADD PRIMARY KEY (`h_employeeID`);

--
-- Indexes for table `department_t`
--
ALTER TABLE `department_t`
  ADD PRIMARY KEY (`departmentID`);

--
-- Indexes for table `employee_t`
--
ALTER TABLE `employee_t`
  ADD PRIMARY KEY (`employeeID`);

--
-- Indexes for table `evaluation_strategy_t`
--
ALTER TABLE `evaluation_strategy_t`
  ADD PRIMARY KEY (`eSID`);

--
-- Indexes for table `exam_t`
--
ALTER TABLE `exam_t`
  ADD PRIMARY KEY (`examID`);

--
-- Indexes for table `faculty_t`
--
ALTER TABLE `faculty_t`
  ADD PRIMARY KEY (`f_employeeID`);

--
-- Indexes for table `lesson_plan_strategy_t`
--
ALTER TABLE `lesson_plan_strategy_t`
  ADD PRIMARY KEY (`lPSID`);

--
-- Indexes for table `plo_t`
--
ALTER TABLE `plo_t`
  ADD PRIMARY KEY (`ploID`);

--
-- Indexes for table `po_t`
--
ALTER TABLE `po_t`
  ADD PRIMARY KEY (`poID`);

--
-- Indexes for table `pre_req_course_t`
--
ALTER TABLE `pre_req_course_t`
  ADD PRIMARY KEY (`preReqID`);

--
-- Indexes for table `program_t`
--
ALTER TABLE `program_t`
  ADD PRIMARY KEY (`programID`);

--
-- Indexes for table `question_t`
--
ALTER TABLE `question_t`
  ADD PRIMARY KEY (`questionID`);

--
-- Indexes for table `registration_t`
--
ALTER TABLE `registration_t`
  ADD PRIMARY KEY (`registrationID`);

--
-- Indexes for table `school_t`
--
ALTER TABLE `school_t`
  ADD PRIMARY KEY (`schoolID`);

--
-- Indexes for table `section_t`
--
ALTER TABLE `section_t`
  ADD PRIMARY KEY (`sectionID`);

--
-- Indexes for table `student_course_performance_t`
--
ALTER TABLE `student_course_performance_t`
  ADD PRIMARY KEY (`scpID`);

--
-- Indexes for table `student_t`
--
ALTER TABLE `student_t`
  ADD PRIMARY KEY (`studentID`);

--
-- Indexes for table `vc_t`
--
ALTER TABLE `vc_t`
  ADD PRIMARY KEY (`v_employeeID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answer_t`
--
ALTER TABLE `answer_t`
  MODIFY `answerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=175;

--
-- AUTO_INCREMENT for table `backlogdata`
--
ALTER TABLE `backlogdata`
  MODIFY `backlog_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `clo_matrix_t`
--
ALTER TABLE `clo_matrix_t`
  MODIFY `clo_MatID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `course_outline_t`
--
ALTER TABLE `course_outline_t`
  MODIFY `courseOutlineID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `co_t`
--
ALTER TABLE `co_t`
  MODIFY `coID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT for table `evaluation_strategy_t`
--
ALTER TABLE `evaluation_strategy_t`
  MODIFY `eSID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `exam_t`
--
ALTER TABLE `exam_t`
  MODIFY `examID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `lesson_plan_strategy_t`
--
ALTER TABLE `lesson_plan_strategy_t`
  MODIFY `lPSID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `plo_t`
--
ALTER TABLE `plo_t`
  MODIFY `ploID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `po_t`
--
ALTER TABLE `po_t`
  MODIFY `poID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `pre_req_course_t`
--
ALTER TABLE `pre_req_course_t`
  MODIFY `preReqID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `program_t`
--
ALTER TABLE `program_t`
  MODIFY `programID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `question_t`
--
ALTER TABLE `question_t`
  MODIFY `questionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `registration_t`
--
ALTER TABLE `registration_t`
  MODIFY `registrationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `section_t`
--
ALTER TABLE `section_t`
  MODIFY `sectionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10257;

--
-- AUTO_INCREMENT for table `student_course_performance_t`
--
ALTER TABLE `student_course_performance_t`
  MODIFY `scpID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
