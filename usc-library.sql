-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2019 at 03:11 AM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `usc-library`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `ActivityID` int(11) NOT NULL,
  `AdminID` varchar(11) NOT NULL,
  `Activity` text NOT NULL,
  `BoldText` varchar(255) NOT NULL,
  `ActivityCode` enum('Add Student','Delete Student','Unblock Student','Add Admin','Change Admin Role','Edit Slider','Add Article','Edit Article','Delete Article','Approve Article','Block Student','Delete Report','Edit MenuBar','Add WebPage','Bin WebPage','Restore Webpage','Delete Webpage','Edit Webpage','Reactivate Admin','Deactivate Admin') NOT NULL,
  `DateDone` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`ActivityID`, `AdminID`, `Activity`, `BoldText`, `ActivityCode`, `DateDone`) VALUES
(87, '24', 'edited', 'the Slider', 'Edit Slider', '2019-04-24 07:25:43'),
(96, '24', 'deactivated admin', '14104952 - John  Tan', 'Deactivate Admin', '2019-04-24 09:05:35'),
(97, '19', 'reactivated admin', '14104952 - John  Tan', 'Reactivate Admin', '2019-04-24 09:05:47');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `AdminID` int(11) NOT NULL,
  `USCIDNo` int(11) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Position` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `SiteRole` enum('System Administrator','Editor','Author') NOT NULL,
  `Photo` varchar(255) NOT NULL,
  `ActiveStatus` enum('ACTIVE','DEACTIVATED') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`AdminID`, `USCIDNo`, `FirstName`, `LastName`, `Password`, `Position`, `Email`, `SiteRole`, `Photo`, `ActiveStatus`) VALUES
(19, 15104952, 'Joshua ', 'Jaluag', '6dc4e6f9483801c51e5bf76b529ce504', 'Administrator', 'jaluagjoshua@gmail.com', 'System Administrator', '../assets/img/adminusers-images/joshua.jpg', 'ACTIVE'),
(20, 15101222, 'Daniel Dane', 'Acero', '9b9bafd54b07524a37e5e2391d027bc5', 'Administrator', 'danieldaneacero@gmail.com', 'Author', '../assets/img/adminusers-images/dane.jpg', 'ACTIVE'),
(22, 15103162, 'Alyssa ', 'Quiobe', 'bef34de3640b22b591edb2e8932a1d78', 'Administrator', 'alyssaquiobe@gmail.com', 'Editor', '../assets/img/adminusers-images/alyssa.jpg', 'ACTIVE'),
(24, 15103504, 'Lance', 'Sasedor', 'c809a790ecc77345e213c41dfe64ee63', 'Administrator', 'lancesasedor@gmail.com', 'System Administrator', '../assets/img/adminusers-images/lance.jpg', 'ACTIVE'),
(25, 14104952, 'John ', 'Tan', '7deee6943f643da111e759453587fe2b', 'Janitor', 'johntan@gmail.com', 'Author', '../assets/img/adminusers-images/u5.jpg', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `ArticleID` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `FeaturePhoto` varchar(255) NOT NULL,
  `Content` text NOT NULL,
  `DateWritten` datetime NOT NULL,
  `DatePublished` datetime NOT NULL,
  `Status` enum('PUBLISHED','PENDING') NOT NULL,
  `AdminID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`ArticleID`, `Title`, `FeaturePhoto`, `Content`, `DateWritten`, `DatePublished`, `Status`, `AdminID`) VALUES
(1, 'Library Launches New System', '../assets/img/post-featureimages/main-campus.jpg', '<strong style=\"margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span>                                ', '2019-04-23 09:09:26', '2019-04-23 09:10:12', 'PUBLISHED', 24),
(2, '2nd Article Testing', '../assets/img/post-featureimages/bk-fr2121.jpg', '<strong style=\"margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span>                                ', '2019-04-23 09:11:28', '2019-04-23 09:11:59', 'PUBLISHED', 24),
(3, '3rd Article Testing', '../assets/img/post-featureimages/lnch212.jpg', '<strong style=\"margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span>                                ', '2019-04-23 09:11:46', '2019-04-23 09:11:56', 'PUBLISHED', 24);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `CommentID` int(11) NOT NULL,
  `Content` text NOT NULL,
  `Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ArticleID` int(11) NOT NULL,
  `StudentID` int(11) NOT NULL,
  `AdminID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`CommentID`, `Content`, `Date`, `ArticleID`, `StudentID`, `AdminID`) VALUES
(1, 'Hello', '2019-04-23 09:14:51', 3, 1, 0),
(2, 'Its me', '2019-04-23 09:14:56', 3, 1, 0),
(3, 'Chuya \r\n', '2019-04-23 09:15:26', 3, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `MenuItemID` int(11) NOT NULL,
  `ItemName` varchar(25) NOT NULL,
  `Position` int(6) NOT NULL,
  `Type` enum('Static','Dropdown') NOT NULL,
  `PageLink` text NOT NULL,
  `WebPageID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`MenuItemID`, `ItemName`, `Position`, `Type`, `PageLink`, `WebPageID`) VALUES
(1, 'Home', 1, 'Static', 'http://localhost/capstone-user/views/home.php', 0),
(2, 'Libraries', 2, 'Dropdown', '', 0),
(3, 'Our Services', 3, 'Dropdown', '', 0),
(4, 'Linkages', 4, 'Static', 'http://library.usc.edu.ph/contentpages.asp?loc=2', 0),
(10, 'Electronic Resources', 5, 'Dropdown', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `menu_dropdown`
--

CREATE TABLE `menu_dropdown` (
  `DropItemID` int(11) NOT NULL,
  `DropItemName` varchar(25) NOT NULL,
  `PageLink` text NOT NULL,
  `MenuID` int(11) NOT NULL,
  `WebPageID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_dropdown`
--

INSERT INTO `menu_dropdown` (`DropItemID`, `DropItemName`, `PageLink`, `MenuID`, `WebPageID`) VALUES
(16, 'Montessori Campus', 'http://localhost/capstone-user/views/webpage.php?viewID=1', 2, 1),
(36, ' Downtown Campus ', 'http://localhost/capstone-user/views/webpage.php?viewID=9', 2, 9),
(37, ' Talamban Campus ', 'http://localhost/capstone-user/views/webpage.php?viewID=8', 2, 8),
(38, 'Rules of Use', 'http://localhost/capstone-user/views/webpage.php?viewID=7', 3, 7),
(39, 'Caroliniana Collection', 'http://library.usc.edu.ph/Carolinian%20Collections/SemperParatus.html', 10, 0),
(40, 'Web OPAC', 'http://tlc.library.usc.edu.ph:8080/#section=home', 10, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `RatingID` int(11) NOT NULL,
  `Stars` int(5) NOT NULL,
  `Feedback` text NOT NULL,
  `StudentID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`RatingID`, `Stars`, `Feedback`, `StudentID`) VALUES
(8, 5, 'Very Nice', 1),
(11, 4, 'Awesome', 10);

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `reportID` int(11) NOT NULL,
  `ArticleID` int(11) NOT NULL,
  `Reason` text NOT NULL,
  `DateReported` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ReportedUser` int(11) NOT NULL,
  `ReporterID` int(11) NOT NULL,
  `CommentID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `SliderID` int(11) NOT NULL,
  `FirstSlideImage` varchar(255) NOT NULL,
  `FirstSlideTitle` varchar(50) NOT NULL,
  `FirstSlideDescription` text NOT NULL,
  `SecondSlideImage` varchar(255) NOT NULL,
  `SecondSlideTitle` varchar(50) NOT NULL,
  `SecondSlideDescription` text NOT NULL,
  `ThirdSlideImage` varchar(255) NOT NULL,
  `ThirdSlideTitle` varchar(50) NOT NULL,
  `ThirdSlideDescription` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`SliderID`, `FirstSlideImage`, `FirstSlideTitle`, `FirstSlideDescription`, `SecondSlideImage`, `SecondSlideTitle`, `SecondSlideDescription`, `ThirdSlideImage`, `ThirdSlideTitle`, `ThirdSlideDescription`) VALUES
(1, '../assets/img/slider/usc-jb-lrc.jpg', 'Yea.', ' This is the description of the first slide.    ', '../assets/img/slider/jumbotron-testeee.jpg', 'Computer', '  Welcome to the USC library system! ', '../assets/img/slider/usc-jb-lrc.jpg', 'Third Slide', 'This is the description of the third slide.    ');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `StudentID` int(11) NOT NULL,
  `USCIDNo` varchar(8) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Course` varchar(70) NOT NULL,
  `YearLevel` int(1) NOT NULL,
  `Status` enum('CLEARED','BLOCKED') NOT NULL,
  `Photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`StudentID`, `USCIDNo`, `FirstName`, `LastName`, `Password`, `Course`, `YearLevel`, `Status`, `Photo`) VALUES
(1, '15103504', 'Lance', 'Sasedor', '15103504', 'BS ICT', 4, 'BLOCKED', '../assets/img/studentusers-images/default-avatar.jpg'),
(2, '15104952', 'Joshua', 'Jaluag', '15104952', 'BS ICT ', 4, 'CLEARED', '../assets/img/studentusers-images/default-avatar.jpg'),
(9, '14102545', 'Very Not Jorge', 'S', '14102545', 'BA RF', 5, 'CLEARED', '../assets/img/studentusers-images/u6.jpg'),
(10, '14102535', 'Jorge', 'Santiago', '14102535', 'BS CS', 2, 'CLEARED', '../assets/img/studentusers-images/default-avatar.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `visitcounter`
--

CREATE TABLE `visitcounter` (
  `name` varchar(255) NOT NULL,
  `counter` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitcounter`
--

INSERT INTO `visitcounter` (`name`, `counter`) VALUES
('Visit Counter', 177);

-- --------------------------------------------------------

--
-- Table structure for table `webpages`
--

CREATE TABLE `webpages` (
  `WebPageID` int(11) NOT NULL,
  `PageTitle` varchar(150) NOT NULL,
  `Content` text NOT NULL,
  `FeaturePhoto` varchar(255) NOT NULL,
  `DateCreated` datetime NOT NULL,
  `Status` enum('ACTIVE','BIN') NOT NULL,
  `AdminID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `webpages`
--

INSERT INTO `webpages` (`WebPageID`, `PageTitle`, `Content`, `FeaturePhoto`, `DateCreated`, `Status`, `AdminID`) VALUES
(1, 'Montessori Campus', '                                                                                                                                                                                                                                                                                                <p><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" text-align:=\"\" justify;\"=\"\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></p><p><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" text-align:=\"\" justify;\"=\"\"><br></span></p><p><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" text-align:=\"\" justify;\"=\"\">\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"</span><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" text-align:=\"\" justify;\"=\"\"><br></span></p>                                                                                                                                                                                                                                                                ', '../assets/img/post-featureimages/jumbotron-testeee.jpg', '2019-03-25 16:47:43', 'ACTIVE', 14),
(4, 'Sample Page', '                                                                                                                                                <p><span style=\"font-family: \"Open Sans\", Arial, sans-serif; text-align: justify;\">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</span></p><p><span style=\"font-family: \"Open Sans\", Arial, sans-serif; text-align: justify;\"><br></span></p><p><span style=\"font-family: \"Open Sans\", Arial, sans-serif; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span><span style=\"font-family: \"Open Sans\", Arial, sans-serif; text-align: justify;\"><br></span>                                </p>                                                                                                                                ', '../assets/img/page-featureimages/jumbotron-testeee.jpg', '2019-03-25 22:48:31', 'ACTIVE', 14),
(6, 'Montessori Campus', '<div>The University of San Carlos Montessori Academy is a unit in Basic Education Department of the University of San Carlos. It subscribes to the philosophy and principles of Montessori Education inspired by the charism of the Society of the Divine Word (SVD) and guided by its vision and mission. The Academy upholds the Montessori philosophy and deeply respects children as unique individuals. The Academy believes that a child is not a vessel into which predetermined levels of knowledge are poured into, but a person who would develop and grow to her/his potential in every aspect in life. It views children as competent individuals who can be encouraged to make small and big decisions and teach other children the skills they already possess. They learn as they perform tasks which give them concrete experience of how things are done, move, and unfold. In keeping with the Montessori principles, the USC Montessori Academy upholds the right of children to take part in Montessori experience, regardless of cultural, physical, or intellectual differences, where the child can benefit from such an environment in an integrated and interdisciplinary way. The aim of Montessori education is the holistic development of a complete human being. The goal of the Montessori Academy is to provide and maintain a stimulating, safe and happy, child-centered environment which supports the full development of each child and nurtures her/his self-esteem as an independent learner.</div><div><br></div><div>CORE VALUES</div><div><br></div><div>The USC Montessori Academy embraces the core values of Justice, Peace, and Integrity of Creation.</div>                                ', '../assets/img/page-featureimages/montessori.jpg', '2019-04-23 03:16:29', 'ACTIVE', 24),
(7, 'Rules of Use', '<ul style=\"color: rgb(0, 0, 0); font-size: 9pt; font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: -webkit-left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">In order to perform its function to the satisfaction of all users, the University Library System needs cooperation by observing the following rules:<br><br><p style=\"color: rgb(0, 0, 0); font-size: 9pt;\" align=\"justify\"><b class=\"emphasis\" style=\"color: rgb(23, 113, 61); font-size: 10pt;\">A. General Rules</b><br></p><ol style=\"color: rgb(0, 0, 0); font-size: 9pt;\"><li style=\"color: rgb(0, 0, 0); font-size: 9pt;\">Idle conversation, loud laughter and other unnecessary noise disturb the clientele and must be avoided. Talking out of necessity must be done in subdued tones.<br><br></li><li style=\"color: rgb(0, 0, 0); font-size: 9pt;\">Eating, smoking and sleeping are not encouraged in any of the libraries and AV Halls.<br><br></li><li style=\"color: rgb(0, 0, 0); font-size: 9pt;\">Books in the reading areas should not be returned to their shelves but left on the tables (to avoid their being misplaced).<br><br></li><li style=\"color: rgb(0, 0, 0); font-size: 9pt;\">A properly validated ID must be presented at various counters wherever a library material is called for. The ID is not transferable. For any library material drawn upon it, the owner to whom it is made out will be held responsible.<br><br></li><li style=\"color: rgb(0, 0, 0); font-size: 9pt;\">Every library user/customer should wear his/her ID upon entrance and all throughout his/her stay in the library.<br><br></li><li style=\"color: rgb(0, 0, 0); font-size: 9pt;\">Upon leaving the library, every user/customer will be required to pass through the correct exit security portal. If oneâ€™s exit triggers the alarm, the user should follow these steps:<br><br><ul style=\"color: rgb(0, 0, 0); font-size: 9pt;\"><li style=\"color: rgb(0, 0, 0); font-size: 9pt;\">1st Alarm Ring - Step aside and pass through the security portal again<br><br></li><li style=\"color: rgb(0, 0, 0); font-size: 9pt;\">2nd Alarm Ring - Approach the circulation desk and verify if the material being brought out is properly checked out.<br><br>Wait for the library security guard or the librarian at the Information Desk to approach and check oneâ€™s handbag, briefcase, etc. for any materials that may have triggered the alarm.</li></ul><br></li><li style=\"color: rgb(0, 0, 0); font-size: 9pt;\">During brown-outs, users/customers must:<br><br><ul style=\"color: rgb(0, 0, 0); font-size: 9pt;\"><li style=\"color: rgb(0, 0, 0); font-size: 9pt;\">Open and show contents of bags, folders and/or envelopes<br><br></li><li style=\"color: rgb(0, 0, 0); font-size: 9pt;\">Show date due slips of every library material taken out to the exit checker</li></ul><br></li><li style=\"color: rgb(0, 0, 0); font-size: 9pt;\">Use of AV Facilities: Users should make the necessary booking and reservation at the AV Center of the Campus where the service is requested. Appropriate forms have to be processed and submitted to the AV Services Librarian/Coordinator.</li></ol><br><p style=\"color: rgb(0, 0, 0); font-size: 9pt;\" align=\"justify\"><b class=\"emphasis\" style=\"color: rgb(23, 113, 61); font-size: 10pt;\">B. Rules on Borrowing Materials</b><br></p><ol style=\"color: rgb(0, 0, 0); font-size: 9pt;\"><li style=\"color: rgb(0, 0, 0); font-size: 9pt;\">Reference books may be borrowed for two (2) weeks, renewable for another two (2) weeks, unless requested by another user.<br><br></li><li style=\"color: rgb(0, 0, 0); font-size: 9pt;\">Maximum of 10 books may be borrowed at one time.<br><br></li><li style=\"color: rgb(0, 0, 0); font-size: 9pt;\">Reserved books are issued for one hour at a time for use within the room only.<br><br></li><li style=\"color: rgb(0, 0, 0); font-size: 9pt;\">The following types of materials are read only in the library; they are not circulated for home use:<br><br><ul style=\"color: rgb(0, 0, 0); font-size: 9pt;\"><li style=\"color: rgb(0, 0, 0); font-size: 9pt;\">General Reference such as encyclopedias, dictionaries, atlases<br><br></li><li style=\"color: rgb(0, 0, 0); font-size: 9pt;\">Rare books and Rare Filipiniana<br><br></li><li style=\"color: rgb(0, 0, 0); font-size: 9pt;\">Theses/Dissertations, Periodicals, Cebuano and Filipiniana Collections<br><br></li><li style=\"color: rgb(0, 0, 0); font-size: 9pt;\">CD Roms and DVDs<br><br></li><li style=\"color: rgb(0, 0, 0); font-size: 9pt;\">World Bank Publications and American Corner Collections</li></ul><br></li><li style=\"color: rgb(0, 0, 0); font-size: 9pt;\">AV materials can be loaned out for classroom use.<br><br></li><li style=\"color: rgb(0, 0, 0); font-size: 9pt;\">The Library System complies with all the provisions of RA 8293: An Act Prescribing an â€œIntellectual Property Codeâ€ and strictly observes the countryâ€™s copyright law and Fair Use Guidelines</li></ol><br><p style=\"color: rgb(0, 0, 0); font-size: 9pt;\" align=\"justify\"><b class=\"emphasis\" style=\"color: rgb(23, 113, 61); font-size: 10pt;\">C. Fines and Other Penalties</b><br></p><ol style=\"color: rgb(0, 0, 0); font-size: 9pt;\"><li style=\"color: rgb(0, 0, 0); font-size: 9pt;\">For overdue books the following fines are imposed:<br><br><ul style=\"color: rgb(0, 0, 0); font-size: 9pt;\"><li style=\"color: rgb(0, 0, 0); font-size: 9pt;\">Reference books is Php 5.00 per day, per book excluding Sundays and Holidays<br><br></li><li style=\"color: rgb(0, 0, 0); font-size: 9pt;\">Reserved books, Php 2.00 for the first hour, Php 1.00 for the second hour and succeeding hours</li></ul><br></li><li style=\"color: rgb(0, 0, 0); font-size: 9pt;\">When a book is lost, the borrower should report the loss immediately to the librarian. Otherwise, the book becomes overdue and the borrower will pay the overdue fine incurred until the day the loss is reported, in addition to paying for the current replacement cost of the book.<br><br></li><li style=\"color: rgb(0, 0, 0); font-size: 9pt;\">The University ID will be confiscated from a student who fails to observe library regulations and procedures. Such a student will be referred to the Department Chair or the College Dean and the Head of the Office of Student Affairs.<br><br></li><li style=\"color: rgb(0, 0, 0); font-size: 9pt;\">Stealing and mutilating books are serious offenses and will be dealt with strictly<br><br><ul style=\"color: rgb(0, 0, 0); font-size: 9pt;\"><li style=\"color: rgb(0, 0, 0); font-size: 9pt;\">Anyone found guilty of stealing any library material will be held liable of a grave offense: thus, disciplinary action will be enforced. In addition, he/she will be made to pay a fine of Php 1,000.00 plus the current cost of acquiring a replacement<br><br></li><li style=\"color: rgb(0, 0, 0); font-size: 9pt;\">Anyone found guilty of mutilating any library material will be held liable for a grave offense; thus, disciplinary action will be meted out. In addition, he or she will be made to pay a fine of Php 500.00 plus the current cost of acquiring a replacement.</li></ul></li></ol></ul>', '../assets/img/page-featureimages/library.jpg', '2019-04-23 03:22:42', 'ACTIVE', 22),
(8, 'Talamban Campus', '<b style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\">The largest library in the country</b><span style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\">. The 16,000 square meter library, JB-LRC of the University of San Carlos, is located at Talamban Campus with a sprawling space that can accommodate 1,800 library users. The imposing library edifice, the one-stop knowledge hub of the university, blessed and officially inaugurated last March 8, 2012 is named in honor of the late Fr. Josef Baumgartner, SVD (1913-2011), known as the father of the USC Library.</span><br style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\"><br style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\"><a href=\"http://www.library.usc.edu.ph/jb-lrc/basement.html\" target=\"_blank\" style=\"color: rgb(102, 102, 102); text-decoration-line: underline; font-size: 12px; font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; text-align: justify; background-color: rgb(255, 255, 255);\"><b><font face=\"Charming\" color=\"yellowgreen\" size=\"5\">Basement</font></b></a><br style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\"><b class=\"emphasis\" style=\"color: rgb(23, 113, 61); font-size: 10pt; font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; text-align: justify;\">Bound Serials, Cataloging Section, Preservation and Conservation Room, Resources Stack Area</b><br style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\"><br style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\"><b style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\">Cataloging Section</b><span style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\">&nbsp;organizes the resources with the aim of assisting users locate a piece of information by providing a searching tool to the library collection.</span><br style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\"><br style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\"><a href=\"http://www.library.usc.edu.ph/jb-lrc/floor1.html\" target=\"_blank\" style=\"color: rgb(102, 102, 102); text-decoration-line: underline; font-size: 12px; font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; text-align: justify; background-color: rgb(255, 255, 255);\"><b><font face=\"Charming\" color=\"yellowgreen\" size=\"5\">Ground Floor</font></b></a><br style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\"><b class=\"emphasis\" style=\"color: rgb(23, 113, 61); font-size: 10pt; font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; text-align: justify;\">Department of Library and Information Science, Acquisitionsâ€™ Section, Circulation Section, General Reference Library, Information Desk, Knowledge Navigation Center, Virtual Training Room, and the Director of Librariesâ€™ Office</b><br style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\"><br style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\"><span style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\">The&nbsp;</span><b style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\">General Reference Library</b><span style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\">&nbsp;houses the materials for all fields of knowledge. Materials such as dictionaries, encyclopedias and atlases are available here.</span><br style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\"><br style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\"><span style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\">The&nbsp;</span><b style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\">Circulation Section</b><span style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\">&nbsp;is an area of the library where borrowing, returning and renewal of library materials are handled.</span><br style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\"><br style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\"><span style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\">The&nbsp;</span><b style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\">Acquisitions Section</b><span style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\">&nbsp;plays a vital role in the facilitation of the Faculty Book Recommendations to build up the print, non-print, electronic and online databases to support the curricular and research needs of the users.</span><br style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\"><br style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\"><b style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\">KNC</b><span style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\">&nbsp;allows the clientele to discover and explore CD Resources, Internet, Digital and Online Databases and other applications but more so to access the proper resources and subject specialists.</span><br style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\"><br style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\"><a href=\"http://www.library.usc.edu.ph/jb-lrc/floor1u.html\" target=\"_blank\" style=\"color: rgb(102, 102, 102); text-decoration-line: underline; font-size: 12px; font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; text-align: justify; background-color: rgb(255, 255, 255);\"><b><font face=\"Charming\" color=\"yellowgreen\" size=\"5\">Upper Ground Floor</font></b></a><br style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\"><b class=\"emphasis\" style=\"color: rgb(23, 113, 61); font-size: 10pt; font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; text-align: justify;\">C.A.L.M. Unit, Faculty Resource and Research Room, Main Distribution Facility and Perk Room</b><br style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\"><br style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\"><b style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\">Computer Application in Library Management</b><span style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\">&nbsp;(CALM) is the IT hub of the Library System.</span><br style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\"><br style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\"><b style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\">Perk Room</b><span style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\">&nbsp;is where students can answer phone calls, eat, rest, and do chit-chat with friends.&nbsp;</span><br style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\"><br style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\"><b style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\">Faculty Resource and Research Room</b><span style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\">&nbsp;is a place reserved for faculty in order for them to prepare and work on their researches or course related instructional materials.</span><br style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\"><br style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\"><a href=\"http://www.library.usc.edu.ph/jb-lrc/floor2.html\" target=\"_blank\" style=\"color: rgb(102, 102, 102); text-decoration-line: underline; font-size: 12px; font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; text-align: justify; background-color: rgb(255, 255, 255);\"><b><font face=\"Charming\" color=\"yellowgreen\" size=\"5\">Second Floor</font></b></a><br style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\"><b class=\"emphasis\" style=\"color: rgb(23, 113, 61); font-size: 10pt; font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; text-align: justify;\">Humanities Library</b><br style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\"><br style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\"><b style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\">Humanities Library</b><span style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\">&nbsp;houses materials that include Philosophy, Religion, Languages, Linguistics, Literature, Fine Arts, Architecture, and History.</span><br style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\"><br style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\"><a href=\"http://www.library.usc.edu.ph/jb-lrc/floor2u.html\" target=\"_blank\" style=\"color: rgb(102, 102, 102); text-decoration-line: underline; font-size: 12px; font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; text-align: justify; background-color: rgb(255, 255, 255);\"><b><font face=\"Charming\" color=\"yellowgreen\" size=\"5\">Upper Second Floor</font></b></a><br style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\"><b class=\"emphasis\" style=\"color: rgb(23, 113, 61); font-size: 10pt; font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; text-align: justify;\">Knowledge for Development Center, Cebuano Studies Center Library and Office and International Collections</b><br style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\"><br style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\"><b style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\">KDC</b><span style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\">&nbsp;houses diverse collections of development related literature of World Bank and other development institutions.</span><br style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\"><br style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\"><b style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\">Cebuano Studies Center Library</b><span style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\">&nbsp;stores information about Cebu, its people and places.</span><br style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\"><br style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\"><b style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\">International Collections</b><span style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\">&nbsp;such as Japanese, German and Russian are part of the vast collections of the Josef Baumgartner LRC.</span><br style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\"><br style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\"><a href=\"http://www.library.usc.edu.ph/jb-lrc/floor3.html\" target=\"_blank\" style=\"color: rgb(102, 102, 102); text-decoration-line: underline; font-size: 12px; font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; text-align: justify; background-color: rgb(255, 255, 255);\"><b><font face=\"Charming\" color=\"yellowgreen\" size=\"5\">Third Floor</font></b></a><br style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\"><b class=\"emphasis\" style=\"color: rgb(23, 113, 61); font-size: 10pt; font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; text-align: justify;\">Science and Technology Library, Serials Library and Dr. Jesus N. Alcordo Reading Corner</b><br style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\"><br style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\"><b style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\">Science and Technology Library</b><span style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\">&nbsp;references for the Natural Sciences, Health Sciences, and Engineering.</span><br style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\"><br style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\"><b style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\">Serials Library</b><span style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\">&nbsp;collections include local periodicals, newspapers and magazines of general coverage. Its special feature is the FREE ACCESS to newspapers on DVD format and the subscribed online databases.</span><br style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\"><br style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\"><b style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\">Dr. Jesus N. Alcordo Reading Corner</b><span style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\">&nbsp;provides Engineering students and practitioners wide range of references on Energy Management and its related fields.</span><br style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\"><br style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\"><a href=\"http://www.library.usc.edu.ph/jb-lrc/floor3u.html\" target=\"_blank\" style=\"color: rgb(102, 102, 102); text-decoration-line: underline; font-size: 12px; font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; text-align: justify; background-color: rgb(255, 255, 255);\"><b><font face=\"Charming\" color=\"yellowgreen\" size=\"5\">Upper Third Floor</font></b></a><br style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\"><b class=\"emphasis\" style=\"color: rgb(23, 113, 61); font-size: 10pt; font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; text-align: justify;\">Caroliniana Collection, Filipiniana Library and Rare Book Collection</b><br style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\"><br style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\"><b style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\">Filipiniana Library</b><span style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\">&nbsp;has been hailed as the repository of one of the richest Filipiniana collections in the country. This is a special library designed to be the first stop for research on all aspects pertaining to the Philippines.</span><br style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\"><br style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\"><b style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\">Caroliniana Collection</b><span style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\">&nbsp;talks about the history of the university. Part of the collection are the Caroliniana Thesis, Graduate Journal, InfoGateways, Philippine Scientist, Philippine Quarterly of Culture and Society, Semper Fidelis and University Bulletin.</span><br style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\"><br style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\"><a href=\"http://www.library.usc.edu.ph/jb-lrc/floor4.html\" target=\"_blank\" style=\"color: rgb(102, 102, 102); text-decoration-line: underline; font-size: 12px; font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; text-align: justify; background-color: rgb(255, 255, 255);\"><b><font face=\"Charming\" color=\"yellowgreen\" size=\"5\">Fourth Floor</font></b></a><br style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\"><b class=\"emphasis\" style=\"color: rgb(23, 113, 61); font-size: 10pt; font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; text-align: justify;\">Social Sciences</b><br style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\"><br style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\"><b style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\">Social Sciences Library</b><span style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\">&nbsp;houses references on the areas of Anthropology, Library Science, Psychology, Sociology, Economics, and Political Science.</span><br style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\"><br style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\"><br style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\"><br style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\"><b class=\"emphasis\" style=\"color: rgb(23, 113, 61); font-size: 10pt; font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; text-align: justify;\">For more information about the Josef Baumgartner LRC Contact:</b><br style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\"><br style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\"><b style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\">Maxie Doreen L. Cabarron</b><br style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\"><span style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: 12px; text-align: justify;\">Director of Libraries</span>', '../assets/img/page-featureimages/jb-lrc2.jpg', '2019-04-23 03:27:21', 'ACTIVE', 19),
(9, 'Downtown Campus', '                                    <b style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: medium;\"><center><font face=\"Monotype Corsiva\" color=\"darkgreen\" size=\"6.9\">Law and Governance Library</font></center></b><span style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: medium;\"></span><div align=\"center\" style=\"font-family: arial, geneva, verdana, tahoma, helvetica, sans-serif; font-size: medium;\"><img src=\"http://library.usc.edu.ph/uploads/law.jpg\" border=\"0\" align=\"center\" <=\"\" div=\"\"><p style=\"font-size: 9pt;\">The Law Library was established with the founding of the Law School in 1937. The library was one of the recipients of the Model Centennial Law Library Award given by the Supreme Court of the Philippines during its centennial celebration in 2001.<br><br><b class=\"emphasis\" style=\"color: rgb(23, 113, 61); font-size: 10pt;\">Physical Set-Up</b><br><br>The Law Library, located on the 5th floor of the Law and Graduate Business Building, Main Campus, has a total seating capacity of 250 including individual Study Carrels. The area has three divisions namely:<i>Â Knowledge Navigation Center (KNC), Reading Area, and Perk Room/ Discussion Room.</i><br><br><b class=\"emphasis\" style=\"color: rgb(23, 113, 61); font-size: 10pt;\">Reading Area</b><br></p><div align=\"left\"><img src=\"http://library.usc.edu.ph/uploads/law%20RA.jpg\" border=\"0\" align=\"left\" <=\"\" div=\"\"><p style=\"font-size: 9pt;\">Houses the Circulation Counter/ Reserve book section, On-line Public Access Catalog (OPAC), Card Catalog, Periodical Index, Vertical File, Stacks. Books which has the 1980 copyright are found on the shelves located on the sides of the Atrium, while books with 1979 copyright and below are shelved separately. The bound volumes of 35 Philippine and Foreign Periodicals and Journals, the Filipiniana , Small size Collection as well as the General Reference Collection are also found here.<br>There are over 13,000 volumes and over 4,000 titles of books found in this room. New Books are displayed at the lounge area, while current journals and magazines are available at the Circulation counter.<br><br>Library services include Library Access (Book Borrowing, Book Reservation, and Stack Service), Reprography (Photocopy, CD & OPAC Printing), Reference & Information , Internet Searching, desktop composing at the KNC and Librarian Mediated Internet Service (LIBMIS).<br><br><b class=\"emphasis\" style=\"color: rgb(23, 113, 61); font-size: 10pt;\">Perk/Discussion Room</b></p><div align=\"left\"><img src=\"http://library.usc.edu.ph/uploads/law%20perk.jpg\" border=\"0\" align=\"right\" <=\"\" div=\"\"><p style=\"font-size: 9pt;\">Room is primarily for individual reading, small group discussion, meeting, consultation, and special faculty Library Orientation and Instruction. It also serves as discussion room where students can talk and discuss at length lessons and cases without disturbing other library users. It has a seating capacity of 30.<br><br><b class=\"emphasis\" style=\"color: rgb(23, 113, 61); font-size: 10pt;\">Knowledge Navigation Center(KNC)</b><br><br>serves the need to do Lex Libris Searching, CD searching, Web searching, desktop composing, printing, scanning and photocopying. It houses 16 computers with flat screen.<br><br><b class=\"emphasis\" style=\"color: rgb(23, 113, 61); font-size: 10pt;\">Library HoursÂ </b><br><strong>Regular Semesters</strong><br>8:00 A.M. - 8:00 P.M. (Monday - Saturday)<br><br><strong>Summer</strong><br>8:00 A.M. - 6:30 P.M. (Monday - Saturday)<br><br><strong>Summer Break</strong><br>8:00 A.M. - 12:00 NN and 1:30 P.M - 5:30 P.M (Monday - Saturday)<br><br><strong>Examination Days</strong><br>8:00 A.M.- 11:00 P.M (Monday - Saturday) and 9:00 A.M.- 5:00 P.M (Sunday)<br><br><strong>Semestral Breaks</strong><br>8:00 A.M. - 12:00 P.M. and 1:30 P.M. - 5:30 P.M. (Monday - Saturday)<br><br></p><p style=\"font-size: 9pt;\"><b class=\"emphasis\" style=\"color: rgb(23, 113, 61); font-size: 10pt;\">Library Permit</b><br><br>Alumni and non-USC clients may obtain library permits issued by Law Library<br><br><b class=\"emphasis\" style=\"color: rgb(23, 113, 61); font-size: 10pt;\"><a href=\"http://www.cdasia.com.ph/\" target=\"_blank\" style=\"color: rgb(102, 102, 102); text-decoration-line: underline; font-size: 9pt;\">Lex Libris Online</a></b><br>These are the titles of the Lex Libris Series:</p><ul style=\"font-size: 9pt;\"><li style=\"font-size: 9pt;\">Volume I : Laws (Philippine Edition)<br></li><li style=\"font-size: 9pt;\">Volume II : Taxation (Philippine Edition)</li><li style=\"font-size: 9pt;\">Volume III : Jurisprudence (The Philippine Supreme Court Reports)</li><li style=\"font-size: 9pt;\">Volume IV : Department of Justice (Options of the Secretary)</li><li style=\"font-size: 9pt;\">Volume V : Local Autonomy and Local Government</li><li style=\"font-size: 9pt;\">Volume VI : Environment and Natural Resources</li><li style=\"font-size: 9pt;\">Volume VII : Labor and Social Legislation</li><li style=\"font-size: 9pt;\">Volume VIII : Elections</li><li style=\"font-size: 9pt;\">Volume IX : Trade, Commerce and Industry</li><li style=\"font-size: 9pt;\">Volume X : Securities and Exchange Commission</li><li style=\"font-size: 9pt;\">Volume XI : Family Law</li></ul><p style=\"font-size: 9pt;\"><b class=\"emphasis\" style=\"color: rgb(23, 113, 61); font-size: 10pt;\">Special Titles:</b></p><li style=\"font-size: 9pt;\">Bangko Sentral ng Pilipinas</li><li style=\"font-size: 9pt;\">Compendium of Philippine Customs Laws and Regulations</li><li style=\"font-size: 9pt;\">Bureau of Internal Revenue Legal Information System</li><li style=\"font-size: 9pt;\">The National Administrative Register (1990 - 2003)</li><li style=\"font-size: 9pt;\">Proceedings of the 1986 Constitutional Convention</li><li style=\"font-size: 9pt;\">Impeachment Proceedings Against Pres. Joseph Estrada</li><li style=\"font-size: 9pt;\">Department of Agrarian Reform Legal Information System</li><p style=\"font-size: 9pt;\"><b class=\"emphasis\" style=\"color: rgb(23, 113, 61); font-size: 10pt;\">Other Titles:</b></p><li style=\"font-size: 9pt;\">Current Legal Resources</li><li style=\"font-size: 9pt;\">Legal Issues affecting Students</li><li style=\"font-size: 9pt;\">Education law and the Private School</li><li style=\"font-size: 9pt;\">Philippine Legal Forms</li><li style=\"font-size: 9pt;\">Trademarks in the Philippines</li><li style=\"font-size: 9pt;\">Supreme Court Decision 2004; companion of Rex Case Digest</li><li style=\"font-size: 9pt;\">Capacity Building for environmental law in the Asian and Pacific Region</li><li style=\"font-size: 9pt;\">Managing Stress</li><li style=\"font-size: 9pt;\">Civil Interviewing and Investigating for Paralegals (J.G.McMaster)</li><li style=\"font-size: 9pt;\">Government Procurement Tool Kit</li><li style=\"font-size: 9pt;\">IBP: Raising the bar competence</li><li style=\"font-size: 9pt;\">Remedial Law Lectures 1987 & 2005 (Dean Inigo)</li><li style=\"font-size: 9pt;\">Association of Law Schools in the Philippines (ASLP)<ul style=\"font-size: 9pt;\">Family Code<br>Labor law<br>Civil law<br>Criminal law<br>Corporation/Negotiable Instruments/Insurance<br>Civil/Special Proceedings/Electronic Evidence<br>Code of Professional Responsibility<br>Constitutional law</ul><p style=\"font-size: 9pt;\"><b class=\"emphasis\" style=\"color: rgb(23, 113, 61); font-size: 10pt;\">Weblink:</b><br><br><b class=\"emphasis\" style=\"color: rgb(23, 113, 61); font-size: 10pt;\"><a href=\"http://www.supremecourt.gov.ph/\" target=\"_blank\" style=\"color: rgb(102, 102, 102); text-decoration-line: underline; font-size: 9pt;\">Supremecourt</a></b>Â <b class=\"emphasis\" style=\"color: rgb(23, 113, 61); font-size: 10pt;\"><a href=\"http://www.chanrobles.com.ph/\" target=\"_blank\" style=\"color: rgb(102, 102, 102); text-decoration-line: underline; font-size: 9pt;\">Chanrobles</a></b>Â <b class=\"emphasis\" style=\"color: rgb(23, 113, 61); font-size: 10pt;\"><a href=\"http://www.congress.gov.ph/\" target=\"_blank\" style=\"color: rgb(102, 102, 102); text-decoration-line: underline; font-size: 9pt;\">Congress</a></b>Â <b class=\"emphasis\" style=\"color: rgb(23, 113, 61); font-size: 10pt;\"><a href=\"http://www.senate.gov.ph/\" target=\"_blank\" style=\"color: rgb(102, 102, 102); text-decoration-line: underline; font-size: 9pt;\">Senate</a></b></p><p style=\"font-size: 9pt;\">Tel. No.: 253-1000 local 123<br><a href=\"mailto:lawlib@usc.edu.ph\" style=\"color: rgb(102, 102, 102); text-decoration-line: underline; font-size: 9pt;\">lawlib@usc.edu.ph</a></p></li></div></div></div>                                                                ', '../assets/img/post-featureimages/main-campus.jpg', '2019-04-23 03:30:15', 'ACTIVE', 24);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`ActivityID`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`AdminID`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`ArticleID`),
  ADD KEY `AdminID` (`AdminID`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`CommentID`),
  ADD KEY `comments_ibfk_1` (`ArticleID`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`MenuItemID`);

--
-- Indexes for table `menu_dropdown`
--
ALTER TABLE `menu_dropdown`
  ADD PRIMARY KEY (`DropItemID`),
  ADD KEY `WebPageID` (`WebPageID`),
  ADD KEY `menu_dropdown_ibfk_1` (`MenuID`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`RatingID`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`reportID`),
  ADD KEY `CommentID` (`CommentID`),
  ADD KEY `ArticleID` (`ArticleID`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`SliderID`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`StudentID`);

--
-- Indexes for table `webpages`
--
ALTER TABLE `webpages`
  ADD PRIMARY KEY (`WebPageID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `ActivityID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;
--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `AdminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `ArticleID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `CommentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `MenuItemID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `menu_dropdown`
--
ALTER TABLE `menu_dropdown`
  MODIFY `DropItemID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `RatingID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `reportID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `SliderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `StudentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `webpages`
--
ALTER TABLE `webpages`
  MODIFY `WebPageID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`AdminID`) REFERENCES `admins` (`AdminID`) ON UPDATE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`ArticleID`) REFERENCES `articles` (`ArticleID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu_dropdown`
--
ALTER TABLE `menu_dropdown`
  ADD CONSTRAINT `menu_dropdown_ibfk_1` FOREIGN KEY (`MenuID`) REFERENCES `menu` (`MenuItemID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reports`
--
ALTER TABLE `reports`
  ADD CONSTRAINT `reports_ibfk_1` FOREIGN KEY (`CommentID`) REFERENCES `comments` (`CommentID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reports_ibfk_2` FOREIGN KEY (`ArticleID`) REFERENCES `articles` (`ArticleID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
