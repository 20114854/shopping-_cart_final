-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 04, 2022 at 02:20 PM
-- Server version: 8.0.28
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

DROP TABLE IF EXISTS `tbladmin`;
CREATE TABLE IF NOT EXISTS `tbladmin` (
  `AdminID` int NOT NULL AUTO_INCREMENT,
  `AdminName` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `APassword` varchar(8) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `AConfirmPassword` varchar(8) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Aemail` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`AdminID`),
  UNIQUE KEY `UniquePasswordAdmin` (`APassword`) USING BTREE,
  UNIQUE KEY `UniqueEmailAdmin` (`Aemail`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`AdminID`, `AdminName`, `APassword`, `AConfirmPassword`, `Aemail`) VALUES
(1, 'Charlton Hodge', 'GuseWord', 'GuseWord', 'CharltonHodge@gmail.com'),
(2, 'Kallum Bain', 'TioNEXag', 'TioNEXag', 'Kallum55@gmail.com'),
(3, 'Danielle Matthams', 'oMoNoRSE', 'oMoNoRSE', 'Matthams@gmail.com'),
(4, 'Carly Pena', 'IchIgaSt', 'IchIgaSt', 'CarlyPena420@gmail.com'),
(5, 'Selena Haynes', 'tHutCHYg', 'tHutCHYg', 'SelenaHay69@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tblaorder`
--

DROP TABLE IF EXISTS `tblaorder`;
CREATE TABLE IF NOT EXISTS `tblaorder` (
  `OrderID` int NOT NULL AUTO_INCREMENT,
  `StudNum` int NOT NULL,
  `BookID` varchar(10) NOT NULL,
  `BookName` varchar(50) NOT NULL,
  `Price` decimal(10,0) NOT NULL,
  PRIMARY KEY (`OrderID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tblaorder`
--

INSERT INTO `tblaorder` (`OrderID`, `StudNum`, `BookID`, `BookName`, `Price`) VALUES
(1, 0, 'IT311', 'Beginning Microsoft SQL Server 2012 Programming', '500'),
(2, 0, 'IT312', 'PHP Programming with MySql // Second edition', '600'),
(3, 0, 'IT313', 'Principles of  Information Security', '550'),
(4, 0, 'BS311', 'Successful Project Management', '400'),
(5, 0, 'BS312', 'Effective Business Communication in Organizations', '700');

-- --------------------------------------------------------

--
-- Table structure for table `tblbooks`
--

DROP TABLE IF EXISTS `tblbooks`;
CREATE TABLE IF NOT EXISTS `tblbooks` (
  `BookID` varchar(10) NOT NULL,
  `BookName` varchar(50) NOT NULL,
  `Price` decimal(10,0) NOT NULL,
  `AuthorName` varchar(50) NOT NULL,
  `ISBN` varchar(50) NOT NULL,
  `Bavailability` varchar(3) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Bcontent` varchar(500) NOT NULL,
  `book_image` varchar(90) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`BookID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tblbooks`
--

INSERT INTO `tblbooks` (`BookID`, `BookName`, `Price`, `AuthorName`, `ISBN`, `Bavailability`, `Bcontent`, `book_image`) VALUES
('BS311', 'Successful Project Management', '400', 'J.GIDO, J.P.Clements, N.Harinarain', '978-1-4737-5129-3', 'Yes', 'Project management is more than merely parceling out work assignments to individuals and hoping that they will somehow accomplish a desired result. In fact, projects that could have been successful often fail because of such take -it-for-granted approaches.\r\n', 'img/Successful project management.jpg'),
('BS312', 'Effective Business Communication in Organizations', '700', 'Michael Fielding, Franzel du Plooy-Cilliers', '978-0-70219-782-6', 'No', 'The Focus on business communication, rather than on communication alone, gives the book a far shaper focus on what student of business communication need to know and do, as they prepare for the world of work.', 'img/Effective Business Communication in Organizations.jfif'),
('IT311', 'Beginning Microsoft SQL Server 2012 Programming', '500', 'Paul Atkinson, Robert Vierira', '978-1-118-10228-2', 'Yes', 'Out of every ending comes the beginning of something new. This title has been Rob Vieira\'s for many years, and now he\'s wrapping up that chapter of his life while I begin a new chapter of my own-and the first chapter of his text. Likewise, you as a reader, are also entering something of a transaction.', 'img/Beginning Microsoft SQL Server 2012 Programming.jfif'),
('IT312', 'PHP Programming with MySql // Second edition', '600', 'Don Gosselin, Diana Kokoska, Robert Easterbrooks ', '978-0-538-74584-0', 'Yes', 'PHP: Hypertext Preprocessor, is an open source programming language that is used for developing interactive Web site. More specifically, PHP is a scripting language that is executed from a web. More specifically, PHP is a scripting language that is executed from a web server.\r\n', 'img/PHP Programming with MySql.jfif'),
('IT313', 'Principles of  Information Security', '550', 'Michael E. Whitman, Herbert J. Mattord', '978-1-337-10206-3', 'No', 'As global networks expand, the interconnection of the world\'s information systems and devices of every description becomes vital, as does the smooth operation of the communication, computing, and automation solutions. However, ever-evolving threats such as malware and phishing attackers illustrate the weaknesses.', 'img/Principles of  Information Security.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

DROP TABLE IF EXISTS `tbluser`;
CREATE TABLE IF NOT EXISTS `tbluser` (
  `StudNum` int NOT NULL,
  `StudName` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `SPassword` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `SConfirmPassword` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Semail` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`StudNum`),
  UNIQUE KEY `UniquePasswordStudent` (`SPassword`) USING BTREE,
  UNIQUE KEY `UniqueEmailStudent` (`Semail`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`StudNum`, `StudName`, `SPassword`, `SConfirmPassword`, `Semail`) VALUES
(52365436, 'marc', 'wasd123', 'wasd123', 'marc@gmail.com'),
(52388488, 'Kaede De Klerk', 'KD08102008', 'KD08102008', 'KaedeDKlerk@gmail.com'),
(55905106, 'Phil Lahm', 'W2014CHAMP', 'W2014CHAMP', 'Lahm2014@gmail.com'),
(64783654, 'Test', 'test123', 'test123', 'nbvjhdjv'),
(64834655, 'Michael Crosby', 'IamGreat69', 'IamGreat69', 'MikeCrsby@gmail.com'),
(64864367, 'marsha', 'marsh123', 'marsh123', 'marsha@gmail.com'),
(64864369, 'keith', 'keith123', 'keith123', 'ihfiegf'),
(75639567, 'Keagan', 'kendall', 'kendall', 'keagan@gmail.com'),
(78573483, 'John', 'john123', 'john123', 'john@gmail.com'),
(78573485, 'shan', 'shan123', 'shan123', 'shan@gmail.com'),
(89448316, 'Alan Pardew', 'Socr33t33s', 'Socr33t33s', 'AlanPardsCP@gmail.com'),
(92536786, 'Ridwaan', '1234rid', '1234rid', 'ridwaan@gmail.com'),
(95071845, 'Apollo Herman', 'CatsR2COOL', 'CatsR2COOL', 'SleepyApollo@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
