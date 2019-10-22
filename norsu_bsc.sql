-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2019 at 06:58 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `norsu_bsc`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(10) NOT NULL,
  `fullname` text NOT NULL,
  `designation` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `fullname`, `designation`, `username`, `password`, `created_at`) VALUES
(1, 'Lynford A. Lagondi', 'Staff', 'ford', 'ford', '2019-09-26 06:29:17');

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `id` int(10) NOT NULL,
  `familyname` text NOT NULL,
  `firstname` text NOT NULL,
  `middlename` text NOT NULL,
  `degree` text NOT NULL,
  `age` varchar(255) NOT NULL,
  `nationality` text NOT NULL,
  `status` text NOT NULL,
  `year_graduated` text NOT NULL,
  `present_address` text NOT NULL,
  `present_employment` text NOT NULL,
  `employment_status` text NOT NULL,
  `office_address` text NOT NULL,
  `contact_number` text NOT NULL,
  `email` text NOT NULL,
  `facebook` text NOT NULL,
  `name_of_classmate` text NOT NULL,
  `classmate_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`id`, `familyname`, `firstname`, `middlename`, `degree`, `age`, `nationality`, `status`, `year_graduated`, `present_address`, `present_employment`, `employment_status`, `office_address`, `contact_number`, `email`, `facebook`, `name_of_classmate`, `classmate_address`) VALUES
(1, 'Braza', 'Ramgie', 'Male', 'BSIT', '34', 'Filipino', 'Single', '2011', 'Villareal Bayawan City', 'NORSU', 'Contractual', 'Bayawan Sta. Catalina Campus Bayawan City', '09977569153', 'ramgiebraza@gmail.com', 'https://www.facebook.com/sohelpmegodplease', 'Jonathan Agupasa', 'Dumaguete City'),
(2, 'Bisabis', 'Lara Eve', 'Tenefrancia', '', '28', 'Filipino', 'married', '2016', 'Bayawan City', 'Assistant Clerk/ Instructor', 'N/a', 'Bayawan City', '09557893260', 'evebisabis1229@gmail.com', 'Lara Eve Bisabis', 'Johann Kate Lawrence Viola', 'Bayawan City'),
(3, 'Bisabis', 'Paul', 'Quindo', '', '31', 'Filipino', 'married', '2011', 'Bayawan City', 'NORSU', 'N/a', 'Bayawan Sta. Catalina Campus Bayawan City', '09557893260', 'chingbisabis1229@gmail.com', 'Ching Quindo Bisabis', 'Rabbie Ortega', 'Bayawan City'),
(4, 'Mandap', 'Janine', 'Cacas', '', '25', 'Filipino', 'Single', '2016', 'Sta. Catalina', 'NORSU', 'Contractual', 'Bayawan Sta. Catalina Campus Bayawan City', '09066756095', 'janinemandap1813@gmail.com', 'xhanine@yahoo.com', 'Sheena Bahande', 'Sta. Catalina'),
(5, 'Bito-on', 'Oligario Jr.', 'None', '', '39', 'Filipino', 'Married', '1997', 'Barangay Villareal Bayawan City', 'Bantay Bata(Seabased-Seaferer)', 'Contractual', '4th floor atlantis Beacon Tower Ermita Manila', '09292243881', 'jhunostar_0110@yahoo.com', 'none', 'Mariza Estorco', 'Bayawan City'),
(6, 'Retes', 'Michael', 'Esugon', '', '37', 'Filipino', 'Single', '2008', 'Sta. Catalina', 'NORSU', 'Contractual', 'Bayawan Sta. Catalina Campus Bayawan City', '09676933658', 'mikelretes@yahoo.com', 'none', 'Ramil Embores', 'Bayawan City'),
(7, 'Lajot', 'April Catherine', 'Banay', '', '31', 'Filipino', 'married', '2008', 'Villareal Bayawan City', 'NORSU', 'Contractual', 'Bayawan Sta. Catalina Campus Bayawan City', '09178900449', 'aprilcatherineb@gmail.com', 'aprilcatherine.batadlan', 'Michelle Atay', 'Bayawan City'),
(8, 'COTIMAR', 'JOHN CARLO', 'BANOGON', '', '27', 'FILIPINO', 'SINGLE', '2014', 'VILLAREAL, BAYAWAN CITY NEGROS ORIENTAL', 'NORSU-BSC', 'CONTRACTUAL', 'SAS OFFICE', '09759657797', 'cotimarj@yahoo.com', '09759657797', 'RENE BOY BARING', 'AMIO STA. CATALINA NEG.OR'),
(9, 'TORRES', 'PAUL JR.', 'N/A', '', '26', 'FILIPINO', 'SINGLE', '2015', 'BRGY. TINAGO, BAYAWAN CITY', 'NORSU-BSC', 'CONTRACTUAL', 'Bayawan Sta. Catalina Campus Bayawan City', '09358732585', 'apoltorres54@gmail.com', 'paul_snakers93@yahoo.com', 'ARTHUR LIRAZAN', 'MANILA'),
(10, 'De La Cerna', 'April Faye', 'Toralde', '', '28', 'FILIPINO', 'married', '2011', 'Brgy. Actin, Basay Negros Oriental', 'NORSU-BSC', 'Contractual', 'Bayawan Sta. Catalina Campus Bayawan City', '09655322635', 'atoralde@yahoo.com', 'april faye toralde', 'Helen Bucita', 'Poblacion, Sta. Catalina'),
(11, 'Estorco', 'Mariza', 'Beloy', '', '39', 'Filipino', 'Single', '1997/2001', 'Bayawan City', 'NORSU-BSC', 'N/a', 'Bayawan Sta. Catalina Campus Bayawan City', '09974530293', 'marizaestorco28@gmail.com', 'Mariza Estorco', 'Julie Espares', 'Bayawan City'),
(12, 'EGE', 'ALLAN', 'HILARDE', '', '29', 'FILIPINO', 'Married', '2011', 'SIPALAY CITY', 'FACULTY', 'PERMANENT', 'Bayawan Sta. Catalina Campus Bayawan City', '09067335865', 'ege_allan@yahoo.com', 'lanzege@gmail.com', 'JANE MARY SATUR', 'SIPALAY CITY'),
(13, 'Yurfo', 'Arnel', 'Moreno', '', '29', 'Filipino', 'Single', '2010', 'Nato, Narra, Bayawan City', 'NORSU-BSC', 'PERMANENT', 'Bayawan Sta. Catalina Campus Bayawan City', '09052175877', 'mathematicsrocks@yahoo.com', 'Arnel Moreno Yurfo', 'Jesus Sarita', 'Lico-lico, Fatima, Sta. Catalina'),
(14, 'Calingacion', 'Nezel', 'Rendon', '', '30', 'Filipino', 'Married', '2010', 'Banga, Bayawan City Negros Oriental', 'LGU-Bayawan', 'Casual', 'City Accounting Office', '09356259112', 'calingacionnezel@gmail.com', 'nel_cay@yahoo.com', 'James Kieth Tio', 'Brgy. Nagbalaye, Sta. Catalina Negros Oriental'),
(15, 'Limbaga', 'June Anne', 'Tubesa', '', '29', 'FILIPINO', 'Single', '2016', 'Villareal Bayawan City', 'NORSU-BSC', 'N/a', 'n/a', '09068363645', 'j.limbaga26@gmail.com', 'ann2z_lim@yahoo.com', 'Cristy Abugan', 'Sta. Catalina'),
(16, 'Cotimar', 'Ricardo', 'E', '', '60', 'Filipino', 'Married', '1983', 'Bayawan City', 'NORSU', 'Regular', 'Bayawan City', '09754442413', 'none', 'none', 'Eduardo C. Vasquez', 'Villareal Bayawan City'),
(17, 'Labe', 'Lorna', 'Armenia', '', '56', 'Filipino', 'Married', '1981', 'Sta. Catalina', 'NORSU', 'Regular', 'Bayawan City', '09267868888', 'None', 'jesielabe@yahoo.com', 'Ramon Carbo', 'Bayawan City'),
(18, 'Vasquez', 'Eduardo', 'Cayo', '', '60', 'Filipino', 'Married', '1983', 'Villareal Bayawan City', 'NORSU', 'Regular', 'Bayawan City', '09263806069', 'vasquezeduardo774@gmail.com', 'vasquezeduardo774@yahoo.com', 'Ricardo Cotimar', 'Bayawan City'),
(19, 'Armenia', 'Wendhel', 'B', 'N/A', '29', 'Filipino', '', '2014', 'Sta Catalina', 'Dep Ed Bayawan', '', 'Bayawan City', 'none', 'none', 'none', 'Weldie Lagradilla', 'Santa Catalina'),
(20, 'Armenia', 'Ferlyn', 'B', 'N/A', '23', 'Filipino', 'Single', '2017', 'Sta. Catalina', 'LGU Sta. Catalina', '', 'Sta. Catalina Neg. Or.', 'none', 'none', 'none', 'none', 'none'),
(21, 'Samillano', 'Neil', 'Darias', '', '37', 'Filipino', 'Married', '2002', 'Sta. Catalina', 'NORSU-BSC', 'CONTRACTUAL', 'Bayawan Sta. Catalina Campus Bayawan City', '09261201332', 'neilsamillano1@gmail.com', 'none', 'Catherine Tuvalles', 'Villareal Bayawan City'),
(23, 'BAYOGUIÃ‘A', 'EMELYN JOY', 'OCCEÃ‘A', 'BSOSM', '30', 'FILIPINO', 'Maried', '2009', 'VILLAREAL, BAYAWAN CITY NEGROS ORIENTAL', 'LGU-Bayawan', 'Employed', 'Bayawan City', '09069533322', 'eobayoguina_08@yahoo.com', 'none', 'Restituto BayoguiÃ±a', 'Villareal Bayawan City'),
(24, 'Tiapes', 'Vanessa', 'Melano', 'BEED', '23', 'Filipino', 'Single', '2019', 'Cansig-id, Banga', 'none', 'Self-Employed', 'none', '09552142688', 'vanessatiapes@yahoo.com', 'Vanessa Melano Tiapes', 'Karen Ramirez', 'Alangilan, Santa Catalina'),
(25, 'CaÃ±ela', 'Democrito', 'Bornea', 'BSED', '30', 'Filipino', 'Single', '2016', 'Bayawan', 'NORSU-BSC', 'Employed', 'Bayawan', '09265872970', 'matetcaÃ±ela@yahoo.com', 'none', 'MJ Tulayba', 'Brgy Suba'),
(26, 'Sosa', 'Ariel', 'Boltiador', 'BSED', '27', 'Filipino', 'Single', '2018', 'Bayawan', 'NORSU-BSC', 'Employed', 'Bayawan', '09059089622', 'none', 'none', 'none', 'none'),
(27, 'Berongan', 'Lito', 'Taborada', 'BSED', '23', 'Filipino', 'Single', '2018', 'Basay', 'NORSU-BSC', 'Employed', 'Bayawan City', '09978542547', 'litoberongan@rockmail.com', 'none', 'none', 'none'),
(28, 'Ortega', 'Kenaier', 'None', 'BSED', '22', 'Filipino', 'Single', '2017', 'Bayawan', 'NORSU-BSC', 'Employed', 'Bayawan City', '09056854080', 'kenaierortega@gmail.com', 'None', 'None', 'None'),
(29, 'Bendal', 'Almira', 'Caballero', 'BSED', '23', 'Filipino', 'Single', '2016', 'Bayawan', 'NORSU-BSC', 'Employed', 'Bayawan City', '09352377466', 'none', 'None', 'None', 'None'),
(30, 'Gador', 'Cesar Ian', 'Dela Banda', 'BSED', '24', 'Filipino', 'Single', '2018', 'Bayawan City', 'NORSU-BSC', 'Employed', 'Bayawan City', '09759647415', 'None', 'None', 'None', 'None'),
(31, 'Adapon', 'Joshua', 'None', 'BSED', '21', 'Filipino', 'Single', '2018', 'Bayawan City', 'NORSU-BSC', 'Employed', 'Bayawan City', '09754323948', 'none', 'none', 'none', 'none'),
(32, 'Valenzona', 'Andy', 'Sabico', 'BSED', '22', 'Filipino', 'Single', '22', 'Sta. Catalina', 'NORSU-BSC', 'Employed', 'Bayawan City', '09159571499', 'andysablina@gmail.com', 'none', 'none', 'none'),
(33, 'Gajardo', 'Leyva Mae', 'Escobar', 'BSED', '26', 'Filipino', 'Single', '2014', 'Sta. Catalina', 'NORSU-BSC', 'Employed', 'Bayawan City', '09552137045', 'leyva28june@gmail.com', 'none', 'none', 'none'),
(34, 'Quindo', 'Jan Marlo', 'None', 'BSED', '27', 'Filipino', 'Single', '2019', 'Bayawan City', 'NORSU-BSC', 'Employed', 'Bayawan City', '09069518536', 'quindojanmarlo@gmail.com', 'None', 'None', 'NONE'),
(35, 'Lachica', 'Elmerio', 'B', 'BSA', '60', 'Filipino', 'Maried', '1987', 'Bayawan City', 'NORSU-BSC', 'Employed', 'Bayawan City', '00', 'none', 'none', 'Eduardo C. Vasquez', 'Bayawan City'),
(36, 'Verbosidad', 'Ann Beverly', 'Corona', 'BSED', '35', 'Filipino', 'Maried', '2011', 'Sta. Catalina', 'NORSU-BSC', 'Employed', 'Bayawan City', '09750180318', 'abcoronaverbo@gmail.com', 'none', 'none', 'none'),
(37, 'Lagarde', 'Roger', 'Rote', 'ABA', '28', 'Filipino', 'Single', '2012', 'Sta. Catalina', 'NORSU-BSC', 'Employed', 'Bayawan City', '09361896986', 'lagarderaj2018@gmail.com', 'none', 'none', 'none'),
(38, 'Lagradilla', 'Weldie', 'Encontro', 'BSINT', '30', 'Filipino', 'Single', '2017', 'Sta. Catalina', 'NORSU-BSC', 'Employed', 'Bayawan City', '09553204460', 'weldie_04@yahoo.com', 'none', 'none', 'none'),
(39, 'Andulana', 'Randy', 'Deocades', 'BSCS', '31', 'Filipino', 'Maried', '2009', 'Sta. Catalina', 'Dep. Ed.', 'Employed', 'Bayawan City', '00', 'None', 'None', 'None', 'None'),
(40, 'Chua', 'Ronnel', 'Nalam', 'BSINT', '31', 'Filipino', 'Single', '2016', 'Sta. Catalina', 'NORSU-BSC', 'Employed', 'Bayawan City', '09751801425', 'ronelchua27@yahoo.com', 'none', 'none', 'none'),
(41, 'Macapanas', 'June', 'Nario', 'BSOSM', '27', 'Filipino', 'Single', '2013', 'Bayawan', 'NORSU-BSC', 'Employed', 'Bayawan City', '09653915265', 'jmacapanas@yahoo.com', 'none', 'none', 'none'),
(42, 'EspaÃ±ola', 'An-gie', 'Abrasaldo', 'BSBA', '25', 'Filipino', 'Single', '2014', 'Bayawan City', 'NORSU-BSC', 'Employed', 'Bayawan City', '09758574552', 'espaÃ±ola@gmail.com', 'none', 'none', 'none'),
(43, 'Teves', 'Sheila Mary', 'Aungon', 'BSHM', '25', 'Filipino', 'Married', '2015', 'Bayawan City', 'NORSU-BSC', 'Employed', 'Bayawan City', '09268305182', 'xheilah.mary@gmail.com', 'none', 'none', 'none'),
(44, 'Bajade', 'Christine Jon', 'Lerazan', 'BSHM', '26', 'Filipino', 'Single', '2014', 'Bayawan City', 'NORSU-BSC', 'Employed', 'Bayawan City', '09157535272', 'christinejoylerazan@gmail.com', 'none', 'none', 'none'),
(45, 'Manguilimotan', 'Seth Antonette', 'Oracion', 'BSBA', '31', 'Filipino', 'Maried', '2010', 'Bayawan City', 'NORSU-BSC', 'Employed', 'Bayawan City', '09477791587', 'oracionseth@gmail.com', 'none', 'none', 'none'),
(46, 'Catid', 'Golda Marie', 'Sara', 'BSBA', '24', 'Filipino', 'Single', '2016', 'Bayawan City', 'NORSU-BSC', 'Employed', 'Bayawan City', '09974792951', 'goldcat131@gmail.com', 'none', 'none', 'none'),
(47, 'MoleÃ±o', 'Bea Marie', 'Sara', 'BSBA', '26', 'Filipino', 'Single', '2014', 'Bayawan City', 'NORSU-BSC', 'Employed', 'Bayawan City', '09652052276', 'none', 'none', 'none', 'none'),
(48, 'Tranco', 'Danilo', 'Panaguiton', 'BSIT', '37', 'Filipino', 'Maried', '2007', 'Sta. Catalina', 'NORSU-BSC', 'Employed', 'Bayawan City', '09364624053', 'none', 'none', 'none', 'none'),
(49, 'Pabol', 'Eugene', 'Sumaria', 'BSCS', '29', 'Filipino', 'Single', '2013', 'Sta. Catalina', 'NORSU-BSC', 'Employed', 'Bayawan City', '09269204268', 'eugenepabol.mail@gmail.com', 'none', 'none', 'none'),
(50, 'Ilalim', 'Venna', 'Jangas', 'BSINT', '29', 'Filipino', 'Single', '2015', 'Bayawan City', 'NORSU-BSC', 'Employed', 'Bayawan City', '09759409617', 'ilalimvenna@gmail.com', 'none', 'none', 'none'),
(51, 'Osorio', 'Emie Rose', 'Policarpio', 'BSOSM', '25', 'Filipino', 'Single', '2014', 'Bayawan City', 'NORSU-BSC', 'Employed', 'Bayawan City', '09265711755', 'emieroseosorio@yahoo.com', 'none', 'none', 'none'),
(52, 'Abugan', 'Junafe', 'Adalim', 'BSED', '24', 'Filipino', 'Single', '2016', 'Sta. Catalina', 'NORSU-BSC', 'Employed', 'Bayawan City', '00', 'none', 'none', 'none', 'none'),
(53, 'Bacor', 'Erl Francis', 'Morados', 'BSBA', '26', 'Filipino', 'Single', '2016', 'Bayawan City', 'NWTF Inc.', 'Employed', 'Bayawan City', '09559335935', 'none', 'none', 'none', 'none'),
(54, 'Bacor', 'Marshly Gay', 'MoleÃ±o', 'BSED', '23', 'Filipino', 'Single', '2016', 'Sta. Catalina', 'LGU-Bayawan', 'Employed', 'Bayawan City', '09553968599', 'none', 'none', 'none', 'none'),
(55, 'Igos', 'Cristy Jin', 'Pajares', 'BSBA', '26', 'Filipino', 'Single', '2016', 'Cavite', 'Pamphil Company', 'Employed', 'Cavite', '00', 'none', 'none', 'none', 'none'),
(56, 'Abadiano', 'Cristine', 'Golez', 'AMDNA', '27', 'Filipino', 'Single', '2012', 'Bayawan City', 'OFW', 'Employed', 'None', '00', 'none', 'none', 'none', 'none'),
(57, 'Naval', 'Robina', 'Teves', 'BEED', '28', 'Filipino', 'Single', '2017', 'Cebu City', 'PCSO', 'Employed', 'Cebu City', '0', 'n', 'n', 'n', 'n'),
(58, 'Gripon', 'Nickmar', 'NA', 'BEED', '29', 'Filipino', 'Single', '2017', 'Cebu City', 'PCSO', 'Employed', 'Cebu City', '0', 'NA', 'NA', 'NA', 'NA'),
(59, 'Rabanes', 'Nazarine', 'Jabagat', 'BEED', '30', 'Filipino', 'Maried', '2017', 'Bayawan City', 'Pure Gold Corp', 'Employed', 'Bayawan City', '0', 'NA', 'NA', 'NA', 'NA'),
(60, 'Bacor', 'Yvonne Dawn', 'Sevilla', 'BSBA', '23', 'Filipino', 'Maried', '2017', 'Bayawan City', 'Self Employed', 'Self-Employed', 'Bayawan City', '0', 'NA', 'NA', 'NA', 'NA'),
(61, 'Fausto', 'Kersty Joy', 'NA', 'BSBA', '27', 'Filipino', 'Maried', '2017', 'Bayawan City', 'Self Employed', 'Self-Employed', 'Bayawan City', '0', 'NA', 'NA', 'NA', 'NA'),
(62, 'Coronia', 'Cristina', 'Acabal', 'AMDNA', '28', 'Filipino', 'Single', '2012', 'Taipei', 'Factory Worker', 'Employed', 'Taiwan Taipei', '0', 'NA', 'NA', 'NA', 'NA'),
(63, 'CADELIÃ‘A', 'JANICE', 'IGOS', 'BSA', '33', 'Filipino', 'Maried', '2018', 'Bayawan City', 'Self Employed', 'Employed', 'Bayawan City', '0', 'NA', 'NA', 'NA', 'NA'),
(64, 'QUNIQUITO', 'AGUSTINE', 'NA', 'BEED', '34', 'Filipino', 'Maried', '2014', 'Bayawan City', 'DEP ED', 'Employed', 'Bayawan City', '0', 'NA', 'NA', 'NA', 'NA'),
(65, 'TIZON', 'FEMIA NADINE', 'NA', 'BEED', '25', 'Filipino', 'Maried', '2015', 'Bayawan City', 'DEP ED', 'Employed', 'Bayawan City', '0', 'NA', 'NA', 'NA', 'NA'),
(66, 'TAPANG', 'JENNIBETH', 'NA', 'BSED', '28', 'Filipino', 'Maried', '2014', 'Bayawan City', 'DEP ED', 'Employed', 'Bayawan City', '0', 'NA', 'NA', 'NA', 'NA'),
(67, 'ALIMODIAN', 'ANGELIE', 'NA', 'BSED', '28', 'Filipino', 'Maried', '2011', 'KITCHENER ONTARIO', 'CHECKER', 'Employed', 'NA', '0', 'NA', 'NA', 'NA', 'NA'),
(68, 'MELENDRES', 'MARY ANNE', 'EGE', 'BSA', '35', 'Filipino', 'Maried', '2012', 'KITCHENER ONTARIO', 'CHECKER', 'CHECKER', 'NA', '0', 'NA', 'NA', 'NA', 'NA'),
(69, 'LUDVIGSEN', 'JHIDALYN', 'PILAR', 'AMDNA', '29', 'Filipino', 'Maried', '2012', 'SUFLAND NORWAY', 'Self Employed', 'Self-Employed', 'NA', '0', 'NA', 'NA', 'NA', 'NA'),
(70, 'QUIMADA', 'DAISY MAE', 'NA', 'AMDNA', '30', 'Filipino', 'Single', '2012', 'Sta. Catalina', 'BHW', 'Employed', 'Sta. Catalina Neg. Or.', '0', 'NA', 'NA', 'NA', 'NA'),
(71, 'NUIQUE', 'JOBELLE', 'MEDIADO', 'BSBA', '30', 'Filipino', 'Single', '2012', 'Sta. Catalina', 'Self Employed', 'Self-Employed', 'Sta. Catalina Neg. Or.', '0', 'NA', 'NA', 'NA', 'NA'),
(72, 'GAVAN', 'KEITH', 'NA', 'BSHM', '27', 'Filipino', 'Single', '2017', 'Bayawan City', 'MLHUILLIER TELLER', 'Employed', 'Bayawan City', '0', 'NA', 'NA', 'NA', 'NA'),
(73, 'YBAÃ‘EZ', 'KATRINA', 'LEDESMA', 'BEED', '27', 'Filipino', 'Single', '2017', 'Bayawan City', 'DSWD-NHTS', 'Employed', 'Bayawan City', '0', 'NA', 'NA', 'NA', 'NA'),
(74, 'GIRASOL', 'JANELL', 'NA', 'BEED', '30', 'Filipino', 'Single', '2017', 'Bayawan City', 'DWD-NHTS', 'Employed', 'Bayawan City', '0', 'NA', 'NA', 'NA', 'NA'),
(75, 'OBANG', 'MA. LUISA', 'GERIAN', 'BSBA', '26', 'Filipino', 'Single', '2012', 'Bayawan City', 'PNP', 'Employed', 'Bayawan City', '0', 'NA', 'NA', 'NA', 'NA'),
(76, 'TRIBAJO', 'MARICEL', 'YAESO', 'BSBA', '27', 'Filipino', 'Single', '2012', 'Bayawan City', 'BCC', 'Employed', 'Bayawan City', '0', 'NA', 'NA', 'NA', 'NA'),
(77, 'DUHAYLUNGSOD', 'RICKY', 'CAGAS', 'BSIT', '29', 'Filipino', 'Single', '2012', 'Bayawan City', 'GNP COLLECTOR', 'Employed', 'DUMAGUETE CITY', '0', 'NA', 'NA', 'NA', 'NA'),
(78, 'ENIOSAN', 'DILLY', 'NA', 'AMDNA', '26', 'Filipino', 'Single', '2017', 'Bayawan City', 'DU EK SAM', 'Employed', 'Bayawan City', '0', 'NA', 'NA', 'NA', 'NA'),
(79, 'MIRADOR', 'VENICE MIRADOR', 'NA', 'AMDNA', '27', 'Filipino', 'Single', '2012', 'Bayawan City', 'CITY HEALTH', 'Employed', 'Bayawan City', '0', 'NA', 'NA', 'NA', 'NA'),
(80, 'BIADA', 'DIESIREE', 'NA', 'AMDNA', '36', 'Filipino', 'Single', '2012', 'HONGKONG', 'OFW', 'Employed', 'HONGKONG', '0', 'NA', 'NA', 'N', 'NA'),
(81, 'TOMIAS', 'RENA', 'NA', 'AMDNA', '27', 'Filipino', 'Maried', '2012', 'PRIVATE CAREGIVER', 'STA CATALINA', 'Employed', 'Sta. Catalina Neg. Or.', '0', 'NA', 'NA', 'NA', 'NA'),
(82, 'TERENAL', 'CHIZA MARY', 'NA', 'AMDNA', '27', 'Filipino', 'Single', '2012', 'Bayawan City', 'BDH', 'Employed', 'Bayawan City', '0', 'NA', 'NA', 'NA', 'NA'),
(83, 'Palama', 'Ronalin', 'Caballero', 'bscs', '32', 'Filipino', 'Single', '2017', 'Caranoche, Sta. Catalina', 'NORSU-BSC', 'Employed', 'Bayawan Sta. Catalina Negros Oriental', '095326356', 'wisheart09_frozenrhon@yahoo.com', 'Ronalin Caballero', 'Jesmine Panaligan', 'Bayawan City');

-- --------------------------------------------------------

--
-- Table structure for table `travel_order`
--

CREATE TABLE `travel_order` (
  `id` int(10) NOT NULL,
  `date_request` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `travel_order_number` varchar(255) NOT NULL,
  `from_date_of_travel` varchar(255) NOT NULL,
  `to_date_of_travel` varchar(255) NOT NULL,
  `employee_name` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `purpose` text NOT NULL,
  `time` time NOT NULL,
  `remarks` text NOT NULL,
  `number_of_days` int(10) NOT NULL,
  `prepared_by` varchar(255) NOT NULL,
  `year` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `travel_order`
--

INSERT INTO `travel_order` (`id`, `date_request`, `travel_order_number`, `from_date_of_travel`, `to_date_of_travel`, `employee_name`, `destination`, `purpose`, `time`, `remarks`, `number_of_days`, `prepared_by`, `year`) VALUES
(6, '2019-10-01 05:19:59', '475-19-10', '2019-10-02', '2019-10-02', 'Nathan Seniels', 'NORSU Main Campus I, Dumaguete City', 'To Serve P.O and submit documents to COA in accounting office', '06:00:00', 'OB', 1, 'Lynford Lagondi', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `lastname` text NOT NULL,
  `firstname` text NOT NULL,
  `middlename` text NOT NULL,
  `fullname` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `lastname`, `firstname`, `middlename`, `fullname`, `username`, `password`, `created_at`) VALUES
(1, 'Braza', 'Ramgie', 'M', 'Ramgie M. Braza', 'admin', 'admin', '2019-10-01 00:12:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `travel_order`
--
ALTER TABLE `travel_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `travel_order`
--
ALTER TABLE `travel_order`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
