-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2019 at 12:04 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stoogle`
--

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `cat` varchar(200) NOT NULL,
  `address` varchar(255) NOT NULL,
  `rating` float NOT NULL,
  `logo` varchar(255) NOT NULL,
  `desc` varchar(2000) NOT NULL,
  `courses` varchar(2000) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `eimg` varchar(200) NOT NULL,
  `cimg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`id`, `name`, `cat`, `address`, `rating`, `logo`, `desc`, `courses`, `phone`, `eimg`, `cimg`) VALUES
(1, 'Apeejay College of Fine Arts       	', 'Commerce', 'Bhagwan Mahavir Marg, New Jawahar Nagar, Jalandhar, Punjab', 3.3, 'apeejaylogo.jpg', 'https://acfa.apeejay.edu\r\n', '1. B.A./B.SC. (ECONOMICS)\r\n2.BACHELOR OF PHYSIOTHERAPY (B.P.T.)\r\n3.BACHELOR OF COMPUTER APPLICATIONS (B.C.A)\r\n4. B.VOC.(SOUND TECHNOLOGY/THEATRE/E-COMMERCE AND DIGITAL MARKETING/CONTEMPORARY DANCE)\r\n5. B.SC.(INTERNET & MOBILE TECHNOLOGIES)B.SC.(INTERNET & MOBILE TECHNOLOGIES)\r\n6. B.COM./B.COM. (HONOURS)\r\n7. BACHELOR OF DESIGN- MULTIMEDIA\r\n8. B.F.A (APPLIED ART)\r\n9. B.B.A.\r\n10. BACHELOR OF DESIGN INTERIOR/FASHION/TEXTILE\r\n', '+91-181-2452181', '', 'apeejay.jpg'),
(2, 'Apeejay Institute of Management', 'Engineering', 'Rama Mandi-Hoshiarpur Road, Jalandhar, Punjab', 4.1, 'amlogo.jpg', 'https://aimtc.apeejay.edu/', ' 1. B.Tech (Computer Science & Engineering)  2. B.Tech (Electronics & Communication Engineering)  3. Master’s in Business Administration (MBA) 4. Bachelor in Business Administration (BBA)	 5. B.Com. Professional [B.Com(P)] 6. Masters in Computer Applications (MCA)	 7. Bachelor of Computer Applications (BCA)', '+91-181-2410263', '', 'am.jpg'),
(4, 'CT Institute of Engineering & Technology ', 'Engineering', 'Village Shahpur, Jalandhar\r\n', 3.5, 'ctlogo.png', 'http://www.ctgroup.in', '1. MBA     2. MCA           3.B.Tech.      4.M.Tech                  5. B.ARCH       6. B.CoM     ', '+91-181-2895967', '', 'ct.jpg'),
(5, 'DAV Institute of Engineering & Technology ', 'Engineering', 'Kabir Nagar, Jalandhar, Punjab\r\n', 3.7, 'davietlogo.jpg', 'http://www.davietjal.org', '1. BACHELOR OF TECHNOLOGY [B.TECH]   2. MASTER OF BUSINESS ADMINISTRATION [MBA]3. MASTER OF TECHNOLOGY [M.TECH]4. MASTER OF COMPUTER APPLICATIONS [M.C.A]5. MASTER OF TECHNOLOGY [M.TECH]6. BACHELOR OF BUSINESS ADMINISTRATION [BBA]7. BACHELOR OF COMPUTER APPLICATIONS [BCA]', '+91-181-2202004', '', 'daviet.jpeg'),
(7, 'Dayanand Ayurvedic College Hospital & Pharmacy', 'Medical', 'Mahatama Hans Raj Marg, Jalandhar, Punjab\r\n', 3.5, '', 'http://davayurveda.com', '1. Bachelor of Ayurvedic Medicine and Surgery ', '+91-181-2253571', '', 'dayanand.jpeg'),
(8, 'Doaba College ', 'Commerce', 'Oppposite Devi Talab Mandir, Tanda Road,Mandir Marg, Jalandhar, Punjab ', 3.7, 'doabalogo.jpg', 'http://doabacollege.net', '1.BACHELOR OF SCIENCE [B.SC] 2.BACHELOR OF ARTS [BA]3.BACHELOR OF ARTS [B.A] + BACHELOR OF EDUCATION [B.ED]4.BACHELOR OF BUSINESS ADMINISTRATION [BBA]5.BACHELOR OF TOURISM AND HOTEL MANAGEMENT [BTHM]6.BACHELOR OF COMMERCE [B.COM]7.BACHELOR OF COMPUTER APPLICATION [BCA]8.BACHELOR OF SCIENCE [B.SC] + BACHELOR OF EDUCATION [B.ED]9.BACHELOR OF VOCATIONAL STUDIES [B.VOC]10.MASTER OF ARTS [M.A]11.MASTER OF SCIENCE [M.SC]12.POST GRADUATE DIPLOMA IN COMPUTER APPLICATIONS [PGDCA]13.', '+91-181-2291837', '', 'doaba.jpeg'),
(9, 'Dr. B R Ambedkaer National Institute of Technology', 'Engineering', 'G T Road, Jalandhar, Punjab  ', 4.1, 'nitlogo.png', 'http://www.nitj.ac.in', '1.BACHELOR OF TECHNOLOGY [B.TECH]  2.MASTER OF BUSINESS ADMINISTRATION [MBA]3.MASTER OF TECHNOLOGY [M.TECH]4.MASTER OF SCIENCE [M.SC]5.PH.D', '+91-181-2690301', '', 'nit.jpg'),
(10, 'Government Polytechnic for Women	', 'Engineering', 'Ladowali Road, Jalandhar, Punjab \r\n', 4, 'govtlogo.jpg', 'http://www.gpcgjal.com/', '1.Architecture Assistantship ( Diploma ) 2.Chemical Engineering ( Diploma ) 3.Computer Engineering ( Diploma ) 4.Electronics And Communication Engineering ( Diploma ) 5.Information Technology ( Diploma ) 6.Library And Information Science ( Diploma ) 7.Modern Office Practice ( Diploma ) 8.Pharmacy ( Diploma )', '+91-181-2457192', '', 'govt.png'),
(11, 'DAV college', 'Commerce', 'Mahatma Hans Raj Marg, Dayanand Nagar, Jalandhar, Punjab ', 4.1, 'davclglogo.png', 'http://www.davjalandhar.com', '1. MASTER OF COMMERCE [M.COM] (ACCOUNTING AND FINANCE)2. POST GRADUATE DIPLOMA IN COMPUTER APPLICATIONS [PGDCA]3. POST GRADUATE DIPLOMA FINANCIAL SERVICES4. MASTER OF ARTS [M.A]5. BACHELOR OF JOURNALISM AND MASS COMMUNICATION [B.J.M.C.]6. BACHELOR OF COMPUTER APPLICATION [BCA]', ' +91-181-2253710', '', 'dav1.jpg'),
(12, 'Hans Raj Mahila Maha Vidyalaya ', 'Commerce', 'Mahatma Hans Raj Marg, Jalandhar, Punjab ', 4.3, 'hmvlogo.png', 'https://www.hrmmv.org', '1. B.A. / B.Sc. (Economics)    2. BPES (Bachelor of Physical Edu. & Sports)3. B.A / B.Sc. with Vocational Subjects:-• Computer Application• Journalism & Mass Communication• Fashion Designing & Garment Construction• Cosmetology• Mass Communication & Video Production4.B.Sc. (Med./Non-Med. )5.B.Sc. (Biotechnology)6.B.Sc. (Med. with Biotechnology)7.B.Sc. (Med./Non Med. With Bioinformatics)8.B.Sc. (Computer Science)9.Postgraduate Level:-M.Sc. (Botany)M.Sc. (Bioinformatics)M.Sc. (Chemistry)M.Sc. (Mathematics)10. BCA11. B.Sc. (IT)12. M.Sc. (IT)13. BD (Bachelor of Design)14. BFA (Bachelor of Fine Arts)', ' +91-181-2253710', '', 'hmv.jpg'),
(13, 'Kanya Maha Vidyalaya', 'Commerce', 'Vidyalaya Marg,Near Pathankot By Pass, Jalandhar, Punjab ', 4.1, 'kmvlogo.png', 'http://www.kmvjla.org', '1. M.A. Hindi        2. B.A with Hindi subject3. M.A. English4. B.A. (Hons) English (Three Year Degree Program)5. B.Sc. Eco6. B.Sc. Economics with Banking as an Option7. M.A Punjabi8. B.A. with ELECTIVE PUNJABI as a subject9. P.G Deploma in Fashion Makeover(interdisciplinary innovative course)10. B.A. with Cosmetology as a Subject11. Diploma in Cosmetology', ' +91-181-2291741', '', 'kmv.jpg'),
(14, 'Lyallpur Khalsa College ', 'Commerce', 'G. T. Road, Near Bus Stand, Jalandhar, Punjab', 4.1, 'lkclogo.png', 'http://lkc.ac.in', '1. BACHELOR OF SCIENCE [B.SC]      2. BACHELOR OF ARTS [BA]             3. BACHELOR OF PHYSIOTHERAPY [BPT]4. BACHELOR OF BUSINESS ADMINISTRATION [BBA]5. BACHELOR OF COMPUTER APPLICATION [BCA]6. MASTER OF ARTS [M.A]7. MASTER OF COMMERCE [M.COM]8. POST GRADUATE DIPLOMA IN MANAGEMENT [PGDM]', '+91-181-2241466', '', 'lkc.jpg'),
(15, 'Mehr Chand Polytechnic College	', 'Engineering', 'Dayanand Nagar,Jalandhar, Punjab ', 4.3, 'mcpclogo.jpg', 'http://www.mcpolyjal.com', 'DIPLOMA:-1.Civil Engg. 2.Electrical .Engg. 3.Mechanical .Engg. 4.Electronics & Commn. .Engg. 5.Computer Engineering 6.Automobile Engineering Architectural Assistantship    (Apply For Closure)     7.Pharmacy', ' +91-181-2250184', '', 'mcpc.jpg'),
(17, 'Sant Baba Bhag Singh Institute of Engineering', 'Engineering', 'Village Khiala P.O Padhiana , Jalandhar, Punjab ', 3.8, 'sbbslogo.jpg', 'https://sbbsuniversity.ac.in', '1. BCA 2. BSC.(IT)  3. BBA	4. B.Tech in any Department5. M.Tech in any Department6. M.Sc. (IT)		7. MCA8. M.Sc Hotel Management	9. MBA10.PhD ', '+91-181-2718888', '', 'sbbs.jpg'),
(18, 'St. Soldier Management And Technical Institute ', 'Engineering', 'Master Gurbanta Singh Marg Kapurthala Road, Jalandhar, Punjab ', 3.1, 'ssimtlogo.png', 'http://www.ssmti.in', '1. BBA 2. B.Com (Prof.)                                                      3. B.Sc Eco.4. MBA	5. M.Com (Prof.)', ' +91-181-2470250', '', 'ssimt.png'),
(19, 'Punjab Technical University', 'Engineering', ' Kapurthala Highway,Kapurthala Road, Hardev Nagar, Jalandhar - 144601', 4.3, 'ptulogo.png', 'https://ptu.ac.in', '1. B.Tech 3D Animation and Graphics Engineering       2. Automation and Robotics Engineering(3rd - 8th Sem)3.Aerospace Engineering 4.Aeronautical Engineering 5.Computer Science & Engineering6.Electronics & Communication Engineering7.Bio-Medical8.B.Sc. Honours (Aircraft Maintenance)9.Bachelor of Business Administration (Business Economics)10. B.Sc Hotel Management & Catering Technology11. Post Graduation Diploma in Science in Airlines Tourism & Hospital Management', '094789 06231', '', 'ptu.jpg'),
(20, 'Lovely Professional University', 'Engineering', 'Jalandhar - Delhi G.T. Road, Phagwara, Punjab 144411', 4.2, 'lpulogo.png', 'https://www.lpu.in', '1. B.A.2. M.A.              3. B.A.+ B.ED4. Master Of Fine Arts(M.F.A)5. Ph.D6. Diploma in Music7. Post Graduate Diploma in guidance and Counselling8. B.Tech.9. M.Tech.10. B.tech.+MBA11. B.Tech+M.Tech12. Diploma In pharmacy13. Diploma in Business Administration14. BBA15. MBA ', '1800 102 4431', '', 'lpu.jpg'),
(21, 'DAV University', 'Engineering', 'Sarmastpur, Pathankot Road, Jalandhar - 144301', 4, 'davunlogo.png', 'https://davuniversity.org', '1. B.Tech 2. Bio Chemistry 3. Bio Technology   4. Botany  5. Chemical Engineering6. CSE 7. ECE8. Microbiology9. VLSI 10. Zoology11. Psychology ', '0181 270 8845', '', 'davun.jpg'),
(22, 'Punjab Institute of Medical Sciences', 'medical', 'Garha Road, Jalandhar, Punjab 144006\r\n\r\n\r\n\r\n', 3.8, 'pimslogo.jpg', 'http://pimsj.com', 'MBBS ', '0181 660 6000', '', 'pims.jpg'),
(23, 'Mahatma hans raj DAV Institute Of Nursing', 'Medical', 'Gulab Devi Rd, Gulab Devi Hospital, Arya Nagar, Jalandhar, Punjab 144001', 3.7, '', 'http://www.mhrdavconj.org', '1. M.Sc in Nursing                 2. B.Sc in Nursing  ', '0181 225 9266', '', 'davnurse.jpg'),
(24, 'Prem Chand S.D. College For Women', 'Engineering', 'Nehru Garden Rd, Prem Nagar, Gobind Garh, Arjun Nagar, Jalandhar, Punjab 144004 ', 3.7, 'sdlogo.jpg', 'https://pcmsdcollege.com', '1. BA/B.Ed   2. B.Sc.(Comp.Sc.)     3. B.Sc. (Non-Med)4. B.Sc. (Fashion Designing)5. BCA6. M.Sc.(Comp. Sc.)	7. M.Sc.(IT)8. Diploma in Computer Applications9. Computer Aided product Design10. Beauty and Body Fitness', '0181 245 5122', '', 'sdlogo.jpg'),
(25, 'CT Institute of Pharmacy', 'Medical', 'Village Shahpur, Jalandhar', 3.5, '', 'www.ctgroup.in', '', '0181 5055127', 'ct.jpg', 'ct.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `employer`
--

CREATE TABLE `employer` (
  `cname` varchar(2000) NOT NULL,
  `id` int(11) NOT NULL,
  `name` varchar(2000) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `mobile` int(255) NOT NULL,
  `gst` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employer`
--

INSERT INTO `employer` (`cname`, `id`, `name`, `email`, `password`, `mobile`, `gst`) VALUES
('', 1, 'Radhika kapoor', 'kapoorradhika05@gmail.com', 'afasfasf', 2147483647, 0),
('', 2, 'Ritanshu madaan', 'kapoasdasdsadorradhika05@gmail.com', 'vdv', 1, 0),
('', 9, 'Harmanrpeet ', 'h@gmail.com', '12345', 2147483647, 240932),
('', 10, 'rohit', 'r@gmail.com', 'qazxsw', 9, 0),
('', 11, 'Ritanshu madaan', 'kapoorvdvradhika05@gmail.com', 'fsgfbdc', 1, 0),
('', 12, 'Nimit', 'n@gmail.com', 'nimora', 2147483647, 2147483647),
('', 13, 'Radhika kapoor', 'kap0909809809oorradhika05@gmail.com', '987654WE4567890', 2147483647, 2147483647),
('', 14, 'harman', 'hs@gmail.com', 'h', 2147483647, 0),
('', 15, 'qwert', 'q@gmail.com', 'q', 2147483647, 0),
('', 16, 'Radhika kapoor', 'f@gmaafawil.com', 'dawdawd', 2147483647, 0),
('', 17, 'sajan', 'sajan@gmail.com', 'sajan', 12345678, 11),
('', 20, 'Rubal', 'rubal123@gmail.com', 'rubal', 2147483647, 11),
('', 21, 'aka', 'akankshajan2001@gmail.com', '123', 2147483647, 11);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `name` varchar(2000) NOT NULL,
  `sal` varchar(255) NOT NULL,
  `address` varchar(2000) NOT NULL,
  `exp` varchar(200) NOT NULL,
  `category` varchar(200) NOT NULL,
  `qual` varchar(2000) NOT NULL,
  `jtype` varchar(2000) NOT NULL,
  `date` varchar(200) NOT NULL,
  `cname` varchar(2000) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `name`, `sal`, `address`, `exp`, `category`, `qual`, `jtype`, `date`, `cname`, `email`) VALUES
(1, '', '20,000-30,000/month', 'Jalandhar,Punjab', '3-4 years', 'CSE', ' B.Tech./BE/B.Sc./BCA or experience related field', 'Full-Time', '23/02/19', 'Intelligent Outsourcing ', ''),
(2, '', 'Not Disclosed', 'Ludhiana,Punjab', '.net- 1 year\r\nWork- 1 Year', 'CSE', 'Secondary(10th Pass) ', 'Full-Tme', '23/02/19', 'JSR Technologies Pvt. Ltd', ''),
(3, '', '10,000 - 40,000/month ', 'Jalandhar, Punjab', 'Wordpress: 1 year ', 'CSE', 'Bachelor\'s', 'Full-Time', '23/02/19', 'Tech Webers ', ''),
(4, '', '20,000/month', 'Jalandhar, Punjab', 'Android development: 1 year \r\nwork: 1 year \r\n\r\n', 'CSE', 'Bachelor\'s \r\n', 'Full-Time', '23/02/19', 'Enrage Tech ', ''),
(5, '', 'Not Disclosed', 'Mohali,Punjab', '1 - 5 years', 'CSE', 'PHD in Computer Science', 'Full-Time', '24/02/19', 'Chandigarh Group Of Colleges', ''),
(6, '', '10,000 - 15,000/month', 'Mohali, Punjab', 'work: 1 year', 'CSE', 'Secondary(10th Pass) ', 'Full-Time', '24/02/19', 'Xploreseo Mohali ', ''),
(7, '', '60,000 - 1,00,000 a month ', 'Rajpura, Punjab', '0-20 years', 'CSE', 'PH.d in CSE', 'Full-time', '24/02/19', 'Chitkara University', ''),
(8, '', '2,52,000 a year', 'Ludhiana, Punjab', '0-6 months', 'Civil', 'Graduate Engineer from Civil, Electrical or Electronics ', 'Full-Time', '24/02/19', 'Digione Technologies ', ''),
(9, '', '10,000 - 15,000/month', 'Ludhiana, Punjab\r\n', 'work: 3 years ', 'Civil', 'Diploma in Civil and degree in Civil', 'Full-Time', '24/02/19', 'Life Solutions Company', ''),
(10, '', '7,000 - 10,000/month', 'Amritsar,Punjab', 'Civil Engineering work: 2 years ', 'Civil', 'Diploma in civil engineering', 'Full-time', '24/02/19', 'Sehdev Jewellers ', ''),
(11, '', '1,41,001 a year', 'Ludhiana,Punjab', '1-5 Years', 'Civil', 'B.Tech/Diploma in civil engineering', 'Full-TIme', '24/02/19', 'Bhatia Consultancy Services ', ''),
(12, '', '35,000/month', 'Mohali,Punjab', '2 to 5 Years', 'Civil', 'Civil Diploma or B.Tech', 'Full-Time', '25/02/19', 'Chandigarh Recruiters ', ''),
(13, '', '25,000 - 30,000/month ', 'Ludhiana, Punjab', 'Civil Engineering: 4 years \r\nSite Engineer: 4 years \r\n', 'Civil', 'Bachelor\'s ', 'Full-Time', '25/02/19', 'Jobs Guru The Placement Consultants ', ''),
(14, '', '25,000 - 30,000/month', 'Mohali, Punjab', 'work: 5 years ', 'ME', 'Diploma', 'Full-Time', '25/02/19', 'Allena Auto Industries', ''),
(15, '', '15,000 - 18,000/month', 'Ludhiana, Punjab', 'maintenance mechanic: 2 years\r\nwork: 4 years ', 'ME', 'Diploma/ Btech Mech', 'Full-time', '25/02/19', 'Diploma/ Btech Mech', ''),
(16, '', '25,000 - 30,000/Month ', 'Ludhiana,punjab', 'mechanical engineering: 1 year \r\nwork: 1 year \r\n', 'ME', 'B.Tech Mechanical or Diploma', 'Full-Time', '25/02/19', 'vacancy india.com - Ludhiana, Punjab', ''),
(17, '', '22,000 - 27,000 a month', 'Ludhiana, Punjab', '3-5 years', 'ME', 'B.Tech / Diploma', 'Full-time', '25/02/19', 'Life Solutions Company', ''),
(18, '', '2,00,000 - 3,00,000 a year', 'Mohali, Punjab', '0- 1 yr ', 'ME', 'BE/ B.tech Mech. Engg', 'Full-TIme', '25/02/19', 'ANDEL EQUIPMENT PVT LTD ', ''),
(19, '', 'Not Disclosed', 'Ludhiana, Punjab\r\n', '4+years of experience in machine tool industry ', 'ME', 'BE/ Diploma in Mechanical from a recognized university', 'Full-Time', '25/02/19', 'Electronica HiTech Machine Tools ', ''),
(20, '', 'NOt Disclosed', 'Mohali, Punjab', 'work: 1 year ', 'ECE', 'M.E- ECE', 'Full-Time', '25/02/19', 'Chandigarh University', ''),
(21, '', '10,000 - 15,000 a month', 'Mohali,Punajab', '1-2 Years', 'ECE', 'Diploma/B.tech. (ECE/EE/IC)', 'Full-Time', '25/02/19', 'Apex Institute of Robotics and Automation ', ''),
(22, '', '10,000 - 15,000 a month', 'Mohali, Punjab', ' Freshers (Must be done 6 Months Training', 'ECE', 'Any Graduate /B.Tech / M.Tech ( CS,IT,ECE )MCA/BCA,Bsc/Msc', 'Full-Time', '25/02/19', 'Unipro Soft Solutions ', ''),
(23, '', '10,000 - 15,000 a month', 'Patiala,Punjab', '0 - 2 yr(s).', 'ECE', 'Bachelor\'s ', 'Full-Time', '25/02/19', 'SAKROBOTIX LAB', ''),
(24, '', '1,50,000 - 3,00,000/year', 'Delhi, Delhi', '0 yrs', 'CSE', 'Bachelor\'s', 'Full-time', '25/02/19', 'HMS Industries ', ''),
(25, '', 'Not Disclosed', ' Delhi, Delhi', '0 yrs', 'CSE', 'Any Graduate', 'Full-Time', '27/02/19', 'Matrix Technical Services P LTD -', ''),
(26, '', '10,000 - 12,000/month', 'Coimbatore, Tamil Nadu', '0 yrs', 'CSE', 'All IT ,Cse discipline.', 'Full-Time', '27/02/19', 'Interface infosyss ', ''),
(27, '', 'not disclosed', 'Kolkata, West Bengal', '0 yrs, fresher', 'CSE', 'Bachelor\'s', 'Part Time', '27/02/19', 'Webfly Software ', ''),
(28, '', 'Not Disclosed', 'Mumbai, Maharashtra', 'testing work- 1 Year', 'CSE', ' B.Tech/B.E. CSE/ECE/EEE, BSC', 'Full-Time', '27/02/19', 'Valuefy Solutions', ''),
(29, '', '1,20,000 - 2,40,000 a year', ' Pune, Maharashtra', ' 0.6-3 years', 'CSE', ' B.E(CSE/ IT), BCS / MCS(CS/IT)/MCA', 'Full-Time', '27/02/19', 'JYS Infotech Private Limited \r\n', ''),
(30, '', 'Not disclosed', 'Noida, Uttar Pradesh', 'work: 1 year (Preferred)\r\n', 'CSE', 'Education:\r\n\r\nMaster\'s ', 'Part-Time,Temporary', '27/02/19', 'CFA Academy', ''),
(31, '', 'Not Disclosed', 'Delhi, Delhi', '0.5-3 years as Back end developer', 'CSE', 'B.Tech(CSE,IT) / MCA', 'Full-Time', '27/02/19', '75way Technologies ', ''),
(32, '', '8,000 - 10,000 a month', ' Chennai, Tamil Nadu', '0 yrs(fresher)', 'CSE', 'Bachelor\'s', 'Full-Time', '27/02/19', 'Iwiz Android Robo Pvt Ltd ', ''),
(33, '', 'not Disclosed', 'pune,Maharashtra', '2-5 Years\r\n', 'CSE', 'B.E./B.Tech in CSE or related fields', 'Full-Time', '27/02/19', 'Exioms Theory (P) Ltd', ''),
(35, '', '20,00,000 a year', 'Chennai, Tamil Nadu\r\n', '2-5 years', 'CSE', 'Bachelor\'s', 'Full-Time', '27/02/19', 'Flintobox ', ''),
(36, '', 'depend On interview', 'Chennai,Tamil nadu', '1-2 years', 'CSE', 'BE, BTECH, IT ( ECE, EEE, CSE) BCA, MCA, BSC, MSC , DIPLOMA', 'Part-Time', '1/03/19', 'Gainers Infotech ', ''),
(37, '', '20,000 - 50,000 a month', 'Gurgaon, Haryana', '1 year (Preferred)', 'CSE', 'Master\'s (Required)', 'Full-Time', '1/03/19', '\r\nGITM', ''),
(38, '', '60,000 - 70,000 a month', 'Bengaluru, Karnataka', '1 year (Preferred)', 'CSE', 'B. Tech / M. Tech in Computer Science and engineering (Preferred)', 'Full-Time', '1/03/19', 'Duruper - Bengaluru, Karnataka', ''),
(39, '', 'Not disclosed', ' Indore, Madhya Pradesh', 'Release Management: 2 years (Required)\r\nwork: 1 year (Required)\r\n', 'CSE', 'Bachelor\'s (Required)', 'Full-Time', '1/03/19', 'Expert Service Solutions, Inc. ', ''),
(40, '', '18,000 - 26,000 a month', ' Pune, Maharashtra', ' Fresher', 'Civil', ' BE/B Tech (Civil)', 'Full-Time', '1/03/19', 'AMM Services Pvt Ltd. ', ''),
(41, '', '10,000 - 12,000 a month', 'Pune, Maharashtra\r\n', 'work: 1 year (Preferred)\r\n', 'Civil', 'Diploma (Required)', 'Full-Time', '1/03/19', 'Titanic Marine Services Pvt. Ltd. ', ''),
(42, '', '2,00,000 - 6,00,000 a year', 'Delhi, Delhi\r\n', '1-5 years', 'Civil', 'UG: Diploma - Any Specialization, B.Tech/B.E. - Any Specialization, Civil ', 'Full-Time', '1/03/19', 'BUILDING CONSTRUCTION LIMITED', ''),
(43, '', 'As per industry norms', 'Chennai, Tamil Nadu', '0-1 yrs', 'Civil', 'Diploma ', 'Full-time', '1/03/19', 'CADD SCHOOL PVT LTD\r\n', ''),
(44, '', '\r\n15,000 - 17,000 a month', ' Kolkata, West Bengal', '3/4 yrs Experience in Byke Technician.', 'Auto', 'Diploma', 'Full-Time', '1/03/19', 'Career Options ', ''),
(45, '', '\r\n14,000 - 18,000 a month', 'Nagpur, Maharashtra', 'Metal Fabrication: 2 years (Required)', 'ME', 'B.E. or Diploma in Mech. Engg.', 'Full-Time', '1/03/19', 'Navratna Industries', ''),
(46, '', '1,75,000 - 5,50,000 a year\r\n', 'Delhi, Delhi', '0 - 3 years', 'ME', ' B.Tech (Mechanical ,Electrical, ECE)', 'Full-Time', '1/03/19', 'Rashi Technical Hire \r\n', ''),
(47, '', '18,000 - 25,000 a month\r\n', 'Pune, Maharashtra', ' minimum 2 years of experience in automobile industry.', 'Auto', 'Diploma(Automobile)', 'Full-TIme', '1/03/19', 'Fleek Motors Pvt Ltd \r\n', ''),
(48, '', '23,400 a month\r\n', 'Delhi, Delhi\r\n', '1-3 Years', 'Auto', 'Diploma(Automobile)', 'Full-Time', '2/03/19', 'GOODS INTERNATIONAL LIMITED ', ''),
(49, '', 'not disclosed', 'Chennai, Tamil Nadu\r\n', 'fresher', 'ME', 'Bachelor\'s (Preferred)', 'Full-time, Part-time, Temporary, Contract, Internship, Volunteer, Fresher, Walk-In\r\n', '2/03/19', 'Galexon Engineering Industries - ', ''),
(50, '', '12,000 - 15,000 a month', ' Hubli, Karnataka\r\n', 'work: 2 years (Required)\r\n\r\n', 'Auto', 'Bachelor\'s (Required)', 'Full-Time', '2/03/19', 'Able Design Engineering Services Pvt. Ltd', ''),
(51, '', 'not Disclosed', ' Pune, Maharashtra\r\n', 'work: 3 years (Preferred)', 'ME', 'Post Graduate in Mechanical/Automobile/E&Tc/Computer( Ph.d Optional)', 'Part-time, Temporary', '2/03/19', 'Nutan College of Engineering and Research (NCER)', ''),
(52, '', 'Not Disclosed', 'Avadi, Chennai, Tamil Nadu\r\n', 'Design: 1 year (Preferred)\r\nwork: 1 year (Preferred)\r\nAuto CAD: 1 year (Preferred)', 'ME', ' B.E Mechanical / DME', 'Full-time, Part-time, Fresher, Walk-In', '2/03/19', 'cadd school ', ''),
(53, '', '35,000 - 40,000 a month', 'Pune, Maharashtra', '3 Yrs To 10 Yrs', 'ME', 'BE Mech / DME', 'Full-Time', '2/03/19', 'Shree Services\r\n', ''),
(54, '', '5,00,000 a year', ' Goa, Goa\r\n', 'work: 3 years (Required)', 'Auto', ' BE/Diploma (Mechanical/Automobile)*', 'Full-Time', '2/03/19', 'Able Design Engineering Services Pvt. Ltd', ''),
(55, '', '3,00,000 - 6,00,000 a year - ', ' Delhi, Delhi', 'work: 1 year (Preferred)\r\n', 'Civil', 'Diploma (Preferred)', 'Full-time, Fresher, Walk-In', '2/03/19', 'MAYA CONSTRUCTION GROUP \r\n', ''),
(56, '', '15,000 - 25,000 a month', 'Sonipat, Haryana\r\n', 'Quality Control / Maintenance: 1 year \r\nwork: 1 year \r\nIndustrial Construction: 1 year ', 'Civil', 'Diploma', 'Full-Time', '2/03/19', 'Sidhartha job Placement ', ''),
(57, '', '20,000 - 40,000 a month', 'Ranchi Ho., Bihar\r\n', 'Road Construction NHAI: 3 years \r\nQuality Control / Maintenance: 4 years \r\nwork: 1 year ', 'Civil', 'B.Tech/ M.Tech in Civil Engineering', 'Full-Time', '4/03/19', 'BHANU CONSTRUCTION ', ''),
(58, '', '10,000 - 14,000 a month', ' Mysore, Karnataka', 'work: 1 year', 'Civil', 'diploma/BE', 'Full-Time', '4/03/19', 'Motherland Ventures ', ''),
(59, '', 'Not Disclosed', 'Kolhapur, Maharashtra', '3+ years', 'Civil', 'BE (Civil)/ DCE', 'Full-Time', '4/03/19', 'Mahalaxmi Infraprojects Limited', ''),
(60, '', ' 200,000.00 to 300,000.00 /month', ' Kolkata, West Bengal', 'Quality Control / Maintenance: 2 years\r\nwork: 2 years \r\nIndustrial Construction: 2 years \r\n\r\n\r\n', 'Civil', 'Diploma (Preferred)', 'Full-Time', '4/03/19', 'Naveen Merico Engineering Co. Pvt. Ltd. ', ''),
(61, '', '3,00,000 Per year', 'Ghaziabad, Uttar Pradesh', '1 to 2 Years\r\n', 'Civil', 'B.Tech/B.E.', 'Full-Time', '4/03/19', 'Khoj Consultants ', ''),
(62, '', 'Not Disclosed', ' New Delhi, NCT', '8 to 25 Years', 'Civil', 'B.Tech/B.E.\r\n\r\n', 'Full-Time', '4/03/19', 'Angelique Intl. Ltd ', ''),
(63, '', 'As per Interview', 'Vadodara,Gujarat', '0 to 3 Years', 'Civil', 'B.Sc, B.Tech/B.E., M.Sc', 'Full-Time', '4/03/19', 'Computer Associates ', ''),
(64, '', 'not disclosed', ' Chandigarh, Chandigarh', ' 2 to 5 Years', 'CSE', 'BCA, B.Tech/B.E., MCA', 'Full-Time', '4/03/19', 'Cosmo Ferrites Ltd', ''),
(65, '', 'as per interview', 'Hyderabad, Telangana', '1 to 4 Years', 'CSE', 'B.Tech/B.E., M.Tech, MCA', 'Full-Time', '4/03/19', 'ICat Consulting ', ''),
(67, '', '10000 - 50000 Per Month', 'Bangalore(Indiranagar )\r\n', 'Freshers', 'CSE', 'BE/B.Tech', 'Full-Time', '6/03/19', 'HomeLane\r\n', ''),
(68, '', ' 10,000.00 - 15,000.00/Month', ' Noida, Uttar Pradesh', '0 yr(Fresher)', 'Elect', 'B.E/B.Tech/Diploma in EE/ECE/ICE/ME/EIE/EEE', 'Full-Time', '6/03/19', 'Innovic India Pvt. ltd. ', ''),
(69, '', '2,00,000 - 5,50,000 a year', ' Delhi, Delhi', '4 Years', 'Elect', 'Any Graduate - Any Specialization, B.Tech/B.E. - Electrical, Diploma - Electrical', 'Full-Time', '6/03/19', 'My Aim Vision ', ''),
(70, '', '3,50,000 - 6,00,000 a year', 'Mumbai, Maharashtra', '5-6 years', 'Elect', 'B.Tech/B.E. - Electrical, Diploma\r\nM.Tech - Electrical', 'Full-Time', '6/03/19', 'A.N.S. Electricals ', ''),
(71, '', '25,000 a month', 'Kandi, West Bengal\r\n', 'Electrical Engineering: 1 year (Preferred)\r\nwork: 1 year \r\n\r\n', 'Elect', 'Diploma (Preferred)', 'Full-Time', '6/03/19', 'optimumcontractsprivatelimited', ''),
(72, '', '13,000 - 15,000 a month', 'Pune, Maharashtra\r\n', '2 Years in Maintenance', 'Elect', 'ITI Electrician or Diploma', 'Full-Time', '6/03/19', 'BTSL AUTOMOTIVE INDIA PVT LTD ', ''),
(73, '', '25,000 a month', 'Bhadreswar, West Bengal', 'Electrical Design: 1 year (Preferred)\r\nwork: 1 year (Preferred)', 'Elect', 'Diploma (Preferred)', 'Full-Time', '6/03/19', 'optimumcontractsprivatelimited ', ''),
(74, '', '\r\nNot Disclosed', 'Ludhiana, Punjab', 'work: 1 year (Preferred)\r\n\r\n\r\n', 'Elect', 'Bachelor\'s (Preferred)', 'Full-Time', '7/03/19', 'PCTE Group of Institutes ', ''),
(75, '', '10,000 - 25,000 a month', 'Ludhiana, Punjab', 'work: 1 year\r\n\r\n', 'Elect', 'Bachelor\'s', 'Full-Time', '7/03/19', 'THE LUMINAR\'S \r\n', ''),
(76, '', '10,000 - 15,000 a month', ' Jalandhar, Punjab\r\n', '0 yrs (Freshers)', 'Elect', 'Diploma ', 'Full-Time', '7/03/19', 'Relcon Systems ', ''),
(77, '', '8,000 - 12,000 a month', 'Hyderabad, Telangana', 'work: 1 year (Preferred)', 'Elect', 'Diploma/BTECH - Electrical Freshers.', 'Full-Time', '7/03/19', 'Sachu Technologies\r\n', ''),
(78, '', '15,000 - 20,000 a month ', 'Mumbai, Maharashtra', 'work: 1 year (Preferred)\r\n', 'Elect', 'Diploma', 'Full-time, Part-time, Fresher', '7/03/19', 'Karvy Data Management Services Ltd', ''),
(79, '', '15,000 - 20,000 a month', ' Delhi, Delhi\r\n', 'work: 4 years (Required)\r\n\r\n', 'Elect', 'Bachelor\'s (Required)', 'Full-Time', '7/03/19', 'HORIZON ELECTRIC CORPORATION ', ''),
(80, '', '25,000 a month ', 'Delhi, Delhi', '0 years (Fresher)', 'Elect', 'UG: B.Tech/B.E. - Any Specialization, Electrical, Electronics/Telecommunication \r\nPG: M.Tech - Any Specialization, Electrical, Electronics/Telecommunication', 'Full-Time', '7/03/19', 'Max Enterprise P Ltd. \r\n', ''),
(81, '', 'Not Disclosed', 'Noida, Uttar Pradesh', 'work: 2 years', 'Elect', 'B. Tech/Diploma(Mechanical/Electrical)', 'Full-Time', '8/03/19', 'MICRONTECH ENGINEERS PVT. LTD. ', ''),
(82, '', '2,25,000 - 4,50,000 a year ', 'Bengaluru, Karnataka\r\n', '0 years(Fresher)', 'Elect', '(UG - Diploma - Electrical, B.Tech/B.E. - Electrical) AND (PG- M.Tech - Electrical) AND (Doctorate- Doctorate Not Required)', 'Full-Time', '8/03/19', 'Danpire Infotech ', ''),
(83, '', '18,000 - 32,000 a month', 'Delhi, Delhi', 'work: 1 year (Preferred) \r\n\r\n\r\n', 'ME', 'Diploma (Preferred) ', 'Full-Time', '8/03/19', 'CAREER ZONE SOLUTION \r\n', ''),
(84, '', '2,50,000 a year ', 'Noida, Uttar Pradesh\r\n', '(0-4 years)Fresher\r\n', 'ME', 'B.Tech Diploma', 'Full-Time', '8/03/19', 'Keva Technology Pvt. Ltd.', ''),
(85, '', '24,000 - 37,000 a month', 'Delhi, Delhi\r\n', 'Production: 1 year (Preferred) \r\nwork: 1 year (Preferred)\r\n', 'ME', 'Bachelor\'s (Preferred)', 'Full-Time', '8/03/19', 'CAREER ZONE SOLUTION ', ''),
(86, '', '10,000 - 15,000 a month', 'Asansol, West Bengal', 'work: 1 year (Preferred)', 'ECE', 'B.Tech (EE, EEE, ECE, EIE)\r\nDiploma (EE, EEE, ECE, EIE)', 'Full-time', '9/03/19', 'Aika India Infra Technology Pvt. Ltd \r\n', ''),
(87, '', 'Not DIsclosed', ' Mohali Sas Nagar, Chandigarh', '1 year', 'ECE', 'Diplom/B Tech. in ECE', 'Full-Time', '9/03/19', 'V-Con Integrated Solutions Pvt. Ltd.', ''),
(88, '', '10,000 - 12,000 a month', 'Chennai, Tamil Nadu\r\n', '\r\n\r\nFreshers can apply / Experience minimum 1 or 2 years', 'ECE', 'Diploma EEE/ ECE', 'Full-Time', '9/03/19', 'Atrium Medical Technologies ', ''),
(89, '', '10,000 - 15,000 a month -', ' Delhi, Delhi\r\n', 'work: 1 year (Preferred)', 'ECE', ' B.E/B.Tech in EEE/EEE/ECE/ICE/EIE Fresher Engineer', ' Full-time', '9/03/19', 'Innovic India Pvt. ltd. ', ''),
(90, '', '7,000 - 10,000 a month\r\n', 'Chennai, Tamil Nadu', '0 years(Freshers)', 'ECE', 'Diploma/BE/ -EEE/ECE/Medical Electronics', 'Full-Time', '9/03/19', 'Bharat Medical Systems - ', ''),
(91, '', 'Not Disclosed', ' Delhi, Delhi', '0-1 year ', 'ECE', 'Dip/BE/B.TECH - EE, EEE, ECE, EIE', 'Full-time', '9/03/19', 'Right Step Consulting ', ''),
(92, '', '1,50,000 - 2,00,000 a year', 'Hyderabad, Telangana\r\n', 'work: 1 year (Preferred)\r\n\r\n', 'ECE', 'Diploma (Preferred)', 'Full-Time', '9/03/19', 'NOVI ONLINE SERVICES ', ''),
(93, '', 'not Disclosed', ' Delhi, Delhi', '0 to 1 year (Only Freshers) ', 'ECE', 'Diploma - Electronics/Telecommunication, B.Sc - Electronics ', 'Full-Time', '10/03/19', 'Keva Technology Pvt. Ltd. ', ''),
(94, '', '5,00,000 - 8,00,000 a year', 'Delhi, Delhi\r\n', 'Automotive Industry: 7 years (Preferred)\r\nwork: 5 years (Preferred)\r\nproject management: 7 years (Preferred)', 'Auto', 'B.Tech / Diploma in Automobile / Mechanical / Electrical Engineering', 'full-Time', '10/03/19', 'Maswer Automotive India Private Limited ', ''),
(95, '', '2,00,000 - 4,50,000 a year', 'Delhi, Delhi\r\n', '1-2 Years', 'Auto', 'UG - Diploma - Mechanical, B.Tech/B.E. - Automobile, Mechanical) AND (PG- M.Tech - Automobile, Mechanical)', 'Full-time', '10/03/19', 'JAY BHARAT MARUTI ', ''),
(96, '', '5,00,000 a year', ' Goa, Goa\r\n', 'work: 3 years (Required)', 'Auto', ' BE/Diploma (Mechanical/Automobile)*', 'Full-tIME', '10/03/19', 'Able Design Engineering Services Pvt. Ltd', ''),
(97, '', 'Not Disclosed', 'Salem, Tamil Nadu', '0 years(Fresher)', 'Auto', 'Bachelor\'s in Mechanical / Automobile engineering', 'full-time', '10/03/19', 'VR Suzuki (Thrive automobile Pvt Ltd)', ''),
(98, '', '10,000 - 12,000 a month', 'Nuvem, Goa', 'automotive: 1 year (Preferred)\r\nwork: 1 year (Preferred)', 'Auto', ' Diploma in Mechanical/Automobile Engineering', 'Full-Time', '10/03/19', 'Goa Rajee Auto Pvt Ltd \r\n', ''),
(99, '', '2,00,000 - 5,00,000 a year', 'Delhi, Delhi\r\n', '1-2 years', 'Auto', 'UG: B.Tech/B.E. - Automobile, Mechanical \r\nPG: M.Tech - Automobile, Mechanical \r\n', 'Full-time', '10/03/19', 'Matrix Technical Services P LTD', ''),
(100, '', '20,000 - 30,000 a month', ' Pune, Maharashtra', '3 years ', 'Auto', 'DME/BE/B.Tech', 'full-Time', '17/03/19', 'Fleek Motors Pvt Ltd -', ''),
(109, 'Java Developer', '10000', 'Model Town ,Jalandhar', '2', 'CSE', 'Diploma', 'Part-Time', '18/03/19', 'Developer Site', ''),
(110, 'trainee engineer', '30000', 'delhi', '2', 'CIVIL', 'Diploma', 'Part-Time', '18/03/19', 'abc company', ''),
(115, 'Php Developer', '10000', 'Jalandhar', '1', 'ECE', 'Diploma', 'Part-Time', '18/03/19', 'abc company', ''),
(116, 'UX/UI designer', '20,000-30,000/month', 'Urban Estate Phase 2', '1', 'CSE', 'Diploma', 'Part-Time', '04/04/19', 'HM Designs', 'h3891207@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` bigint(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `resume` varchar(2000) NOT NULL,
  `qual` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`name`, `email`, `mobile`, `gender`, `resume`, `qual`) VALUES
('Akanksha', 'ak1223@gmail.com', 987654321, 'female', 'images/lpulogo.png', '12th'),
('Harman', 'h@gmail.com', 9898989079, 'male', 'images/qwert.docx', '12th'),
('ravi paul', 'ravipaul027@gmail.com', 8284897010, 'male', 'images/', 'Diploma'),
('sajan', 'sa@gmail.com', 1234567890, 'male', 'images/qwert.docx', '12th'),
('sajan', 'sajhjjhan@gmail.com', 9098098098, 'male', 'images/NIMIT.docx', 'Degree');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` bigint(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `eligibility` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `email`, `password`, `mobile`, `city`, `eligibility`) VALUES
('Angel', 'a@gmail.com', 'a', 9876467484, 'Tahiti', 'Matriculation'),
('Brack', 'b@gmail.com', 'b', 9876467484, 'American Samoa', 'Degree'),
('Harman', 'h@gmail.com', 'h', 9987654234, 'India', 'Diploma'),
('Manpreet', 'm@gmail.com', 'm', 8699799181, 'India', 'Diploma'),
('Pooja', 'p@gmail.com', 'po', 9876534443, 'India', 'Diploma'),
('Angel Priya', 'priya@gmail.com', 'p', 9876656757, 'Bahamas', '12th'),
('Rubal', 'r@gmail.com', 'r', 9876534445, 'India', 'Diploma'),
('Mr.Stark', 't@gmail.com', 't', 0, '', ''),
('Harry ', 'y@gmail.com', 'y', 9485454354, 'India', '12th');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employer`
--
ALTER TABLE `employer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `college`
--
ALTER TABLE `college`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `employer`
--
ALTER TABLE `employer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
