-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2020 at 10:31 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rpunitpoly`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminemail`
--

CREATE TABLE `adminemail` (
  `id` varchar(120) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminemail`
--

INSERT INTO `adminemail` (`id`, `email`) VALUES
('rafat', 'rafat.zone07@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `password`) VALUES
('rafat', 'rafat1');

-- --------------------------------------------------------

--
-- Table structure for table `agencies`
--

CREATE TABLE `agencies` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `year` varchar(20) NOT NULL,
  `nori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `awards`
--

CREATE TABLE `awards` (
  `id` int(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `year` int(4) NOT NULL,
  `awardingagency` varchar(100) NOT NULL,
  `nori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bookswithisbn`
--

CREATE TABLE `bookswithisbn` (
  `id` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `author` varchar(200) NOT NULL,
  `year` int(4) NOT NULL,
  `publisher` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chaptersinbooks`
--

CREATE TABLE `chaptersinbooks` (
  `id` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `author` varchar(200) NOT NULL,
  `year` int(4) NOT NULL,
  `publisher` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `committeesboard`
--

CREATE TABLE `committeesboard` (
  `id` int(10) NOT NULL,
  `name` varchar(500) NOT NULL,
  `yearofserving` varchar(20) NOT NULL,
  `nori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `committeesboard`
--

INSERT INTO `committeesboard` (`id`, `name`, `yearofserving`, `nori`) VALUES
(17143, 'Indian Leather Technologist Association', 'since 2009', 'National');

-- --------------------------------------------------------

--
-- Table structure for table `conference`
--

CREATE TABLE `conference` (
  `id` int(10) NOT NULL,
  `nori` varchar(50) NOT NULL DEFAULT 'National',
  `aoro` varchar(50) NOT NULL DEFAULT 'Attended',
  `name` varchar(200) NOT NULL,
  `place` varchar(200) NOT NULL,
  `dates` varchar(50) NOT NULL,
  `year` int(4) NOT NULL,
  `sponsoringagent` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `conference`
--

INSERT INTO `conference` (`id`, `nori`, `aoro`, `name`, `place`, `dates`, `year`, `sponsoringagent`) VALUES
(17143, 'National', 'Attended', 'C33.	Tyagi P.K. and Basu S.K. (2011). Occupational Health hazardous from footwear industry. ', 'Presented at Maya Devi Educational foundation, Dehraddun, conference of Green Chemistry, published by Maya Devi Org', '', 2011, ''),
(17143, 'National', 'Attended', 'C44.	Basu S.K. and Tyagi P.K. (2010).Water footprint and footwear industry: A review', 'Proceeding of advances in mechanical engineering NCAME 2010.', '', 2010, '');

-- --------------------------------------------------------

--
-- Table structure for table `consulties`
--

CREATE TABLE `consulties` (
  `id` int(10) NOT NULL,
  `name` varchar(500) NOT NULL,
  `year` varchar(20) NOT NULL,
  `amount` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `corporate`
--

CREATE TABLE `corporate` (
  `id` int(10) NOT NULL,
  `coluniinstt` varchar(500) NOT NULL,
  `cocurri` varchar(500) NOT NULL,
  `campuslife` varchar(500) NOT NULL,
  `studwelfare` varchar(500) NOT NULL,
  `bodcommedu` varchar(500) NOT NULL,
  `proforgteacher` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `coursestaught`
--

CREATE TABLE `coursestaught` (
  `id` int(10) NOT NULL,
  `coursestaught` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coursestaught`
--

INSERT INTO `coursestaught` (`id`, `coursestaught`) VALUES
(17143, 'UG');

-- --------------------------------------------------------

--
-- Table structure for table `editedbooks`
--

CREATE TABLE `editedbooks` (
  `id` int(10) NOT NULL,
  `title` varchar(200) NOT NULL,
  `author` varchar(200) NOT NULL,
  `year` int(4) NOT NULL,
  `publisher` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employmentdetails`
--

CREATE TABLE `employmentdetails` (
  `id` int(11) NOT NULL,
  `dateof1contappt` varchar(20) DEFAULT NULL,
  `dateofjoiningonpresent` varchar(20) NOT NULL,
  `lienonthepost` varchar(40) DEFAULT NULL,
  `presentdesignation` varchar(50) NOT NULL,
  `natureofappt` varchar(40) DEFAULT NULL,
  `natureofpost` varchar(40) NOT NULL,
  `yearofretirement` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employmentdetails`
--

INSERT INTO `employmentdetails` (`id`, `dateof1contappt`, `dateofjoiningonpresent`, `lienonthepost`, `presentdesignation`, `natureofappt`, `natureofpost`, `yearofretirement`) VALUES
(17143, '2006-09-04', '2006-09-04', 'Assistant Professor', 'Assistant Professor S-2', 'Confirmed', 'Permanent', 2046);

-- --------------------------------------------------------

--
-- Table structure for table `examscleared`
--

CREATE TABLE `examscleared` (
  `id` int(15) NOT NULL,
  `yearofclearing` int(5) NOT NULL,
  `nameofexam` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `externalwork`
--

CREATE TABLE `externalwork` (
  `id` int(10) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `year` varchar(20) NOT NULL,
  `place` varchar(50) NOT NULL,
  `groupbenefitted` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `innovations`
--

CREATE TABLE `innovations` (
  `id` int(15) NOT NULL,
  `revdesign` varchar(1000) NOT NULL,
  `teachingmethods` varchar(1000) NOT NULL,
  `labexp` varchar(1000) NOT NULL,
  `evalmethods` varchar(1000) NOT NULL,
  `resourcemat` varchar(1000) NOT NULL,
  `remtorstudcounselling` varchar(1000) NOT NULL,
  `other` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `latestteachersdata`
--

CREATE TABLE `latestteachersdata` (
  `name` varchar(29) DEFAULT NULL,
  `faculty` varchar(49) DEFAULT NULL,
  `department` varchar(37) DEFAULT NULL,
  `id` varchar(5) DEFAULT NULL,
  `qualification` varchar(8) DEFAULT NULL,
  `yearofbirth` varchar(4) DEFAULT NULL,
  `yearofphp` varchar(4) DEFAULT NULL,
  `netsletjrf` varchar(3) DEFAULT NULL,
  `nameofexam` varchar(4) DEFAULT NULL,
  `yearofclearing` varchar(4) DEFAULT NULL,
  `dateofbirth` varchar(10) DEFAULT NULL,
  `dateof1contappt` varchar(10) DEFAULT NULL,
  `dateofjoiningonpresent` varchar(10) DEFAULT NULL,
  `lienonthepost` varchar(19) DEFAULT NULL,
  `yearofretirement` varchar(4) DEFAULT NULL,
  `presentdesignation` varchar(24) DEFAULT NULL,
  `natureofappt` varchar(24) DEFAULT NULL,
  `natureofpost` varchar(54) DEFAULT NULL,
  `panno` varchar(10) DEFAULT NULL,
  `adharno` varchar(14) DEFAULT NULL,
  `gender` varchar(1) DEFAULT NULL,
  `religion` varchar(1) DEFAULT NULL,
  `category` varchar(3) DEFAULT NULL,
  `homestate` varchar(11) DEFAULT NULL,
  `specialisation` varchar(57) DEFAULT NULL,
  `coursestaught` varchar(2) DEFAULT NULL,
  `researchguidance` varchar(4) DEFAULT NULL,
  ` projects ongoingorcompleted` varchar(4) DEFAULT NULL,
  `projects title` varchar(4) DEFAULT NULL,
  `projects  nameoffunding` varchar(4) DEFAULT NULL,
  `national` varchar(4) DEFAULT NULL,
  `International` varchar(4) DEFAULT NULL,
  `projects year` varchar(10) DEFAULT NULL,
  `projects grannt` varchar(4) DEFAULT NULL,
  `patent nori` varchar(10) DEFAULT NULL,
  `patent year` varchar(4) DEFAULT NULL,
  `patent name` varchar(23) DEFAULT NULL,
  `consulties amount` varchar(10) DEFAULT NULL,
  `consulties year` varchar(10) DEFAULT NULL,
  `consulties name` varchar(4) DEFAULT NULL,
  `publicationsnumber paperspublished` varchar(9) DEFAULT NULL,
  `publicationsnumber Monographs` varchar(4) DEFAULT NULL,
  `publicationsnumber ChaptersinBooks` varchar(4) DEFAULT NULL,
  `publicationsnumber EditedBooks` varchar(4) DEFAULT NULL,
  `publicationsnumber BookswithISBN` varchar(4) DEFAULT NULL,
  `publicationsnumber CitationIndexrange` varchar(28) DEFAULT NULL,
  `publicationsnumber SNIP` varchar(11) DEFAULT NULL,
  `publicationsnumber SJR` varchar(10) DEFAULT NULL,
  `paper impactfactor` varchar(10) DEFAULT NULL,
  `paper citationagency` varchar(10) DEFAULT NULL,
  `paper publisher` varchar(116) DEFAULT NULL,
  `paper year` varchar(5) DEFAULT NULL,
  `paper author` varchar(52) DEFAULT NULL,
  `paper title` varchar(4000) DEFAULT NULL,
  `Conference name` varchar(4000) DEFAULT NULL,
  `conference nori` varchar(10) DEFAULT NULL,
  `conference  aoro` varchar(10) DEFAULT NULL,
  `conference Sponsoring Agency` varchar(41) DEFAULT NULL,
  `conference dates` varchar(10) DEFAULT NULL,
  `conference place` varchar(346) DEFAULT NULL,
  `Agency year` varchar(10) DEFAULT NULL,
  `Agency name` varchar(4) DEFAULT NULL,
  `Agency nori` varchar(10) DEFAULT NULL,
  `externalwork groupbenefitted` varchar(10) DEFAULT NULL,
  `externalwork year` varchar(10) DEFAULT NULL,
  `externalwork name` varchar(34) DEFAULT NULL,
  `award name` varchar(79) DEFAULT NULL,
  `award year` varchar(10) DEFAULT NULL,
  `award awardingagency` varchar(10) DEFAULT NULL,
  `award nori` varchar(10) DEFAULT NULL,
  `committeesboard nori` varchar(4) DEFAULT NULL,
  `committeesboard yearofserving` varchar(4) DEFAULT NULL,
  `committeesboard name` varchar(638) DEFAULT NULL,
  `innovation revdesign` varchar(63) DEFAULT NULL,
  `innovation teachingmethods` varchar(3) DEFAULT NULL,
  `innovation labexp` varchar(87) DEFAULT NULL,
  `innovation evalmethods` varchar(3) DEFAULT NULL,
  `innovation resourcemat` varchar(3) DEFAULT NULL,
  `innovation remtorstudcounselling` varchar(53) DEFAULT NULL,
  `innovation other` varchar(25) DEFAULT NULL,
  `recharging name` varchar(3) DEFAULT NULL,
  `recharging  year` varchar(10) DEFAULT NULL,
  `recharging  duration` varchar(10) DEFAULT NULL,
  `recharging  placeoragency` varchar(10) DEFAULT NULL,
  `recharging  aoro` varchar(3) DEFAULT NULL,
  `corporate coluniinstt` varchar(206) DEFAULT NULL,
  `corporate cocurri` varchar(2) DEFAULT NULL,
  `corporate campuslife` varchar(3) DEFAULT NULL,
  `corporate studwelfare` varchar(3) DEFAULT NULL,
  `corporate bodcommedu` varchar(239) DEFAULT NULL,
  `proforgteacher` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `latestteachersdata`
--

INSERT INTO `latestteachersdata` (`name`, `faculty`, `department`, `id`, `qualification`, `yearofbirth`, `yearofphp`, `netsletjrf`, `nameofexam`, `yearofclearing`, `dateofbirth`, `dateof1contappt`, `dateofjoiningonpresent`, `lienonthepost`, `yearofretirement`, `presentdesignation`, `natureofappt`, `natureofpost`, `panno`, `adharno`, `gender`, `religion`, `category`, `homestate`, `specialisation`, `coursestaught`, `researchguidance`, ` projects ongoingorcompleted`, `projects title`, `projects  nameoffunding`, `national`, `International`, `projects year`, `projects grannt`, `patent nori`, `patent year`, `patent name`, `consulties amount`, `consulties year`, `consulties name`, `publicationsnumber paperspublished`, `publicationsnumber Monographs`, `publicationsnumber ChaptersinBooks`, `publicationsnumber EditedBooks`, `publicationsnumber BookswithISBN`, `publicationsnumber CitationIndexrange`, `publicationsnumber SNIP`, `publicationsnumber SJR`, `paper impactfactor`, `paper citationagency`, `paper publisher`, `paper year`, `paper author`, `paper title`, `Conference name`, `conference nori`, `conference  aoro`, `conference Sponsoring Agency`, `conference dates`, `conference place`, `Agency year`, `Agency name`, `Agency nori`, `externalwork groupbenefitted`, `externalwork year`, `externalwork name`, `award name`, `award year`, `award awardingagency`, `award nori`, `committeesboard nori`, `committeesboard yearofserving`, `committeesboard name`, `innovation revdesign`, `innovation teachingmethods`, `innovation labexp`, `innovation evalmethods`, `innovation resourcemat`, `innovation remtorstudcounselling`, `innovation other`, `recharging name`, `recharging  year`, `recharging  duration`, `recharging  placeoragency`, `recharging  aoro`, `corporate coluniinstt`, `corporate cocurri`, `corporate campuslife`, `corporate studwelfare`, `corporate bodcommedu`, `proforgteacher`) VALUES
('Mr. Pankaj Kumar\nTyagi', 'Engineering & Technology (University Polytechnic)', 'Leather & Footwear Technology Section', '17143', 'PG', '1981', '2013', '', '', '', '02.05.81', '04.09.2006', '4-Sep-12', 'Assistant Professor', '2046', 'Assistant Professor S-2', 'Confirmed', 'X Plan ', 'AEOPT0284M', '2.84978E+11', 'M', 'H', 'NO', 'U.P.', 'Footwear and Leather goods technology /Leather Tanning', 'UG', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', '', 'NONE', '', '', 'NONE', '', '', 'NONE', '9', 'NONE', 'NONE', 'NONE', 'NONE', '', '', '', '', '', '', '', '', '1-Tyagi, 2(11):, IJESMR November, 2015. 2-Tyagi et.al. JSLTC, May-June,2014. 3-Tyagi et.al. IJRAMR, July,2014. 4- Tyagi PK Photon 127 (2013) 189-193. 5-Tyagi PK Leather Age Dec. (2016) 11-16.', '', '', '', '', '', '', '', 'NONE', '', '', '', '', 'NONE', '', '', '', '', '', '', 'YES', 'YES', 'YES', 'YES', 'YES', 'YES', '', 'YES', '', '', '', 'YES', '', '', '', 'YES', 'YES', '');

-- --------------------------------------------------------

--
-- Table structure for table `monographs`
--

CREATE TABLE `monographs` (
  `id` int(10) NOT NULL,
  `title` varchar(250) NOT NULL,
  `author` varchar(200) NOT NULL,
  `year` int(4) NOT NULL,
  `publisher` varchar(100) NOT NULL,
  `citationagency` varchar(200) NOT NULL,
  `impactfactor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `my_log`
--

CREATE TABLE `my_log` (
  `log_id` int(11) NOT NULL,
  `faculty_id` varchar(9) NOT NULL DEFAULT '',
  `message` varchar(50) NOT NULL,
  `log_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `papers`
--

CREATE TABLE `papers` (
  `id` int(10) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `author` varchar(400) NOT NULL,
  `month` int(2) NOT NULL DEFAULT 1,
  `year` int(4) NOT NULL,
  `publisher` varchar(500) NOT NULL,
  `citationagency` varchar(300) NOT NULL,
  `impactfactor` varchar(50) NOT NULL,
  `nori` varchar(15) DEFAULT 'International',
  `conforjournal` varchar(20) NOT NULL DEFAULT 'Journal'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `papers`
--

INSERT INTO `papers` (`id`, `title`, `author`, `month`, `year`, `publisher`, `citationagency`, `impactfactor`, `nori`, `conforjournal`) VALUES
(17143, 'Study of potentiality of coal fly ash for the removal of cr(vi) from industrial wastewater: equilibrium and kinetic studies', 'Pankaj Kumar Tyagi', 8, 2017, 'INTERNATIONAL JOURNAL OF ENGINEERING TECHNOLOGY SCIENCE AND RESEARCH (IJETSR)', 'ICI', '', 'International', 'Journal'),
(17143, 'A combined effect of melamine-formaldehyde resin and regenerative fat on mechanical properties of skin', 'Pankaj Kumar Tyagi', 7, 2017, 'INTERNATIONAL JOURNAL OF ENGINEERING TECHNOLOGY SCIENCE AND RESEARCH (IJETSR)', 'ICI', '', 'International', 'Journal'),
(17143, 'EFFECT OF ACRYLIC AND MELAMINE-FORMALDEHYDE BASED SYNTANS, IN THERMO-MECHANICAL AND HYDRODYNAMIC BEHAVIOR OF CHROME\n\nTANNED BOVINE LEATHER- A COMPARATIVE ASSESSMENT, ', '*Pankaj Kumar Tyagi, Pijush Kanti Chatopadhyay, Goutam Mukherjee, ', 1, 2015, 'International Journal OF Engineering Sciences & Management Research (2015), ISSN 2349-6193', '', '2.243', 'International', 'Journal'),
(17143, 'Glutaraldehyde Retannage-a Review and Assessment of the Properties', 'Pankaj K. Tyagi, Pijush K. Chatopadhyay and Goutam Mukherjee', 1, 2014, 'Journal of Society of Leather Technologists and Chemists (JSLTC), Vol. 98, May-June 2014, Number-3, 99-107, ISSN 0144-0322.', '', '', 'National', 'Journal'),
(17143, 'ROLE OF ACRYLIC AND MELAMINE-FORMALDEHYDE BASED SYNTHETIC TANNING AGENT IN\n\nTHERMO-MECHANICAL AND HYDRODYNAMIC BEHAVIOR TANNED COLLAGEN', 'Pankaj Kumar Tyagi, Pijush Kanti Chatopadhyay and *Goutam Mukherjee, ', 1, 2014, 'International Journal of Recent Advances in Multidisciplinary Research, Vol. 01, Issue 01, pp.003-009, July 2014', '', '', 'International', 'Journal'),
(17143, 'Carbon footprint accountability of leather processing industry towards environment: An estimation on the basis of mass and protein balance ', 'Pankaj Kumar Tyagi, Goutam Mukherjee', 1, 2013, 'The Journal of Energy and Environmental Science. Photon 127 (2013) 189-193', '', '', 'National', 'Journal'),
(17143, 'Carbon footprint accountability of leather processing industry towards environment: An estimation on the basis of mass and protein balance. ', 'Pankaj Kumar Tyagi, Goutam Mukherjee ', 1, 2013, 'The Journal of Energy and Environmental Science. Photon 127, 189-193', '', '', 'National', 'Journal'),
(17143, 'Accountability and estimation of carbon footprint in producing leather from tanneries', 'Tyagi P.K and Mukherjee G. ', 1, 2012, 'JILTA (Vol. LXII no.1), 17-26', '', '', 'National', 'Journal'),
(17143, 'Nature and activities of different microorganism on raw hide/skin and their plant based preservation approach.', 'Tyagi P.K, Anwar M., and Mukherjee G ', 1, 2012, 'JILTA (Vol. LXII no.4), 319-328. Leather Age, December 2012, 11-16. ', '', '', 'National', 'Journal'),
(17143, 'C44.	Basu S.K. and Tyagi P.K. (2010).Water footprint and footwear industry: A review', '', 1, 2010, 'Proceeding of advances in mechanical engineering NCAME 2010.', '', '', 'National', 'conference');

-- --------------------------------------------------------

--
-- Table structure for table `patents`
--

CREATE TABLE `patents` (
  `id` int(10) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `year` int(4) NOT NULL,
  `nori` varchar(50) NOT NULL,
  `filedorawarded` varchar(20) NOT NULL DEFAULT 'awarded'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(10) NOT NULL,
  `ongoingorcompleted` varchar(15) NOT NULL,
  `title` varchar(500) NOT NULL,
  `nameoffunding` varchar(300) NOT NULL,
  `nori` varchar(50) NOT NULL,
  `grannt` varchar(15) NOT NULL,
  `year` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `publicationsnumber`
--

CREATE TABLE `publicationsnumber` (
  `id` int(9) NOT NULL,
  `paperspublished` int(3) NOT NULL,
  `Monographs` int(3) NOT NULL,
  `ChaptersinBooks` int(3) NOT NULL,
  `EditedBooks` int(3) NOT NULL,
  `BookswithISBN` int(3) NOT NULL,
  `CitationIndexrange` int(3) NOT NULL,
  `SNIP` int(3) NOT NULL,
  `SJR` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `recharging`
--

CREATE TABLE `recharging` (
  `id` int(10) NOT NULL,
  `aoro` varchar(20) NOT NULL,
  `name` varchar(400) NOT NULL,
  `year` int(4) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `placeoragency` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recharging`
--

INSERT INTO `recharging` (`id`, `aoro`, `name`, `year`, `duration`, `placeoragency`) VALUES
(17143, 'Attended', 'XYZ', 2018, '3 weeks', 'UGC Delhi');

-- --------------------------------------------------------

--
-- Table structure for table `researchguidance`
--

CREATE TABLE `researchguidance` (
  `id` int(10) NOT NULL,
  `mtechlevel` int(3) NOT NULL DEFAULT 0,
  `phdlevel` int(3) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teacherlogin`
--

CREATE TABLE `teacherlogin` (
  `id` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacherlogin`
--

INSERT INTO `teacherlogin` (`id`, `password`) VALUES
('17143', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `teacherpersonal`
--

CREATE TABLE `teacherpersonal` (
  `id` int(10) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `faculty` varchar(50) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `qualification` varchar(25) DEFAULT NULL,
  `yearofbirth` int(4) DEFAULT NULL,
  `dateofbirth` varchar(10) DEFAULT NULL,
  `panno` varchar(30) DEFAULT NULL,
  `adharno` varchar(30) DEFAULT NULL,
  `yearofphp` int(5) NOT NULL,
  `netsletjrf` varchar(3) NOT NULL DEFAULT 'NO',
  `gender` varchar(10) DEFAULT NULL,
  `religion` varchar(15) DEFAULT NULL,
  `category` varchar(10) DEFAULT NULL,
  `homestate` varchar(30) DEFAULT NULL,
  `specialisation` varchar(25) NOT NULL DEFAULT 'NO',
  `email` varchar(120) NOT NULL,
  `mobile` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacherpersonal`
--

INSERT INTO `teacherpersonal` (`id`, `name`, `faculty`, `department`, `qualification`, `yearofbirth`, `dateofbirth`, `panno`, `adharno`, `yearofphp`, `netsletjrf`, `gender`, `religion`, `category`, `homestate`, `specialisation`, `email`, `mobile`) VALUES
(17143, 'Mr. Pankaj KumarTyagi', 'Engineering & Technology (University Polytechnic)', 'Leather & Footwear Technology Section', 'M.Tech', 1981, '1981-05-02', '', '', 2013, 'NO', 'male', 'H', 'Gen', 'U.P.', 'Leather', 'rafat.zone07@gmail.com', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `conference`
--
ALTER TABLE `conference`
  ADD UNIQUE KEY `idx_name` (`id`,`name`,`dates`);

--
-- Indexes for table `examscleared`
--
ALTER TABLE `examscleared`
  ADD UNIQUE KEY `exam_unique` (`id`,`yearofclearing`,`nameofexam`);

--
-- Indexes for table `my_log`
--
ALTER TABLE `my_log`
  ADD PRIMARY KEY (`log_id`),
  ADD UNIQUE KEY `log_unique` (`faculty_id`,`message`,`log_date`);

--
-- Indexes for table `papers`
--
ALTER TABLE `papers`
  ADD UNIQUE KEY `idx_name1` (`id`,`title`(700),`author`,`year`);

--
-- Indexes for table `researchguidance`
--
ALTER TABLE `researchguidance`
  ADD UNIQUE KEY `r_unique` (`id`,`mtechlevel`,`phdlevel`);

--
-- Indexes for table `teacherpersonal`
--
ALTER TABLE `teacherpersonal`
  ADD UNIQUE KEY `idx_name` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `my_log`
--
ALTER TABLE `my_log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
