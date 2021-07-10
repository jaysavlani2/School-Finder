-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2020 at 08:27 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `applynow`
--

CREATE TABLE `applynow` (
  `full_name` varchar(50) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `s_class` varchar(15) NOT NULL,
  `city` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applynow`
--

INSERT INTO `applynow` (`full_name`, `contact`, `email`, `s_class`, `city`) VALUES
('Jay Savlani', '8320793369', 'jaysavlani2@gmail.com', '2nd', 'Rajkot'),
('Yash Patel', '6353929192', 'yp@gmail.com', '8th', 'Diu'),
('Jay Savlani', '8320793369', 'jaysavlani2@gmail.com', '6th', 'Rajkot');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `country` varchar(15) NOT NULL,
  `feedback` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`first_name`, `last_name`, `email`, `country`, `feedback`) VALUES
('Goral', 'Gajera', 'goga@gmail.com', 'china', 'Design and overall is good'),
('Goral', 'Gajera', 'goga@gmail.com', 'australia', 'Hiii');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(50) NOT NULL,
  `u_name` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `school_name` varchar(100) NOT NULL,
  `city_name` varchar(100) NOT NULL,
  `state_name` varchar(100) NOT NULL,
  `founding_year` varchar(4) NOT NULL,
  `board` varchar(10) NOT NULL,
  `about_school` varchar(5000) NOT NULL,
  `facilites` varchar(1000) NOT NULL,
  `location` varchar(1000) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`school_name`, `city_name`, `state_name`, `founding_year`, `board`, `about_school`, `facilites`, `location`, `img`) VALUES
('Arya School', 'Rajkot', 'Gujarat', '2004', 'CBSE', 'An Identity For Learners, where creativity and innovation is a constant process, A new generation of thinkers coming together, for presenting an environment that brings collective efforts towards Training Learners. Our efforts are towards Training Learners, cultivating the ability to learn, to question, and to craft influenced learner, who identify their capabilities for learning. For this change to be effective, it must be accompanied by an ability to be creative. At Arya Schools, creativity and innovation is a constant processess', 'AC,Computer Lab,Parking,Play Ground,Medical,', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14768.628111753582!2d70.7877031!3d22.2720408!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x774fd1ad446bb5cf!2sArya%20Schools!5e0!3m2!1sen!2sin!4v1602268395827!5m2!1sen!2sin', 'Aryaschool.PNG'),
('Atmiya School', 'Rajkot', 'Gujarat', '1999', 'GSEB', 'ATMIYA Group of Institutions is hub of Education in Saurashtra (Gujarat) and puts forward education from KG to PG by devoting its vigor to ensure the versatile development of formative years all the way through education.\r\n\r\nATMIYA Group of Institution Where the children are received with reverence educated with love & prepared to go child is given the opportunity to enjoy his childhood.', 'AC,WIFI,Computer Lab,Sports,Parking,Smart Classroom,Labs,Projectors,Auditorium,Medical,', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14767.489158518762!2d70.759341699722!3d22.28282706531943!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959ca3399b9f4af%3A0x943f8b0b2cebf799!2sATMIYA%20School!5e0!3m2!1sen!2sin!4v1602315213010!5m2!1sen!2sin', 'atmiya.jpg'),
('Dholakiya School', 'Rajkot', 'Gujarat', '2013', 'CBSE', 'Education is an energetic force for the enlightenment of mankind. With the conception of this motto, Dholakiya Group of Schools has been concentrating on quality education for the last 44 years to fulfil the demand of knowledge society.\r\n\r\nThe visionary expertise of management differentiates the consistent performance of our students at National and International Level including Board Results, Science Fairs, IIT, IIM, CA CS, and many renowned institutes for higher studies. The throughout support of our parents and children have always made us No.1 in every field.', 'AC,Canteen,WIFI,Computer Lab,Sports,Parking,Library,Play Ground,Smart Classroom,Cafeteria,Labs,Projectors,Auditorium,Yoga,Medical,', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14768.836199949134!2d70.7764209!3d22.2700696!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x465f8352e4162461!2sShri%20K%20G%20Dholakiya%20School!5e0!3m2!1sen!2sin!4v1602267268102!5m2!1sen!2sin', 'dholakiya.jpg'),
('Innovative School', 'Rajkot', 'Gujarat', '2007', 'CBSE', 'The Innovative International school was established in an endeavor to create a safe, nurturing environment where children thrive & grow. it is a co-educational school imparting distinctive educational upbringing that enables young minds to grow not only their intellectual capacities but to bloom in all aspects of their lives. In a nutshell, The Innovative International School is a \"Playground of Education\" which provides a vibrant and fun-filled learning experience for children who we believe are \"The Makers of Tomorrow\".', 'AC,WIFI,Sports,Library,Labs,Projectors,Medical,', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14767.11200947778!2d70.7671884!3d22.2863977!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3f8a9218d04a893f!2sINNOVATIVE%20SCHOOLS!5e0!3m2!1sen!2sin!4v1602269422474!5m2!1sen!2sin', 'innovative school.PNG'),
('Rajkot Public School', 'Rajkot', 'Gujarat', '2007', 'GSEB', 'RAJKOT PUBLIC SCHOOL - an ISO 9001:2015 Certified School - is a K-12 school with world-class infrastructure. Operational from JUNE 12th 2014 it shall offer classes from Pre-Primary Section to 8, 9, 10 & 11, 12 (SCIENCE & COMMERCE). RPS is affiliated to Gujarat Secondary and Higher Secondary Education Board (GSEB).\r\n\r\nRAJKOT PUBLIC SCHOOL is an English/Gujarati medium co-educational school committed to excellence in the areas of education and the pursuit of learning as a lifelong experience with world-class infrastructure and facilities. Reflecting critical stages in the life of a child, our school structure includes Pre-Primary Section (Babysitting, Playhouse, Nursery, LKG & HKG) , Lower Primary School (1-5), Upper Primary School (6-8), Secondary School (9-10) & Higher Secondary School (11-12) as distinct communities of learning, relationship and care. School follows CBSE curriculum for Pre-Primary Section to Std. 8 and GSEB curriculum for Std. 9 to Std. 12.', 'AC,Canteen,WIFI,Computer Lab,Sports,Parking,Library,Play Ground,Smart Classroom,Cafeteria,Labs,Projectors,Auditorium,Yoga,Medical,', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14770.128442271527!2d70.7651468!3d22.2578246!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb91853af532a8395!2sRajkot%20Public%20School!5e0!3m2!1sen!2sin!4v1602272222637!5m2!1sen!2sin', 'rajkotpublicschool.PNG'),
('Masoom School', 'Rajkot', 'Gujarat', '2004', 'CBSE', 'Masum Vidhyalay School located at Rajkot.It is one of the popular schools in India.This School is counted among the top-rated Schools in Gujarat with an excellent academic track record. If you\'re looking for more details regarding admission/application forms, syllabus, results or examinations schedule, kindly get in touch with the relevant department of the school.', 'AC,Canteen,WIFI,Computer Lab,Sports,Parking,Library,Play Ground,Smart Classroom,Cafeteria,Labs,Projectors,Auditorium,Yoga,Medical', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29534.358766331054!2d70.75902754644832!3d22.28575988370699!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x65ccaeb811b69c68!2zTWFzb29tIFNjaG9vbCAtIOCqruCqvuCquOCrguCqriDgqrjgq43gqpXgq4LgqrI!5e0!3m2!1sen!2sin!4v1602315397577!5m2!1sen!2sin', 'masoom.jpg'),
('Sarvodaya School', 'Rajkot', 'Gujarat', '1995', 'CBSE', 'SARVODAYA EDUCATION NETWORK, launched in June 1995, is run by Shree Sarvodaya Education and Charitable Trust. This trust has truly earned the faith and confidence of the people of Rajkot because of their valuable contribution to the profession of teaching over the years.\r\n\r\nIn contemporary education system students are not only force to lift heavy bags but also they are burdened with lot of mental stress about studies. To remove these hindrances sarvodaya has come up with worksheet system which caters to the needs of: Class work, Practices book, Science Journals, Map Work, Self Study Book and Note Books. The weight of all these books has been reduced and it is supplemented by subject wise and chapter wise worksheets, which are very easy to carry.\r\n\r\nTo offer integrated and holistic education to equip our students with the relevant skills, knowledge and self assurance, this will provide them with an effective platform for; the enhancement of their employability and for the future success in their career and personal life to become pride of the society and nation.', 'AC,Computer Lab,Smart Classroom,Labs,Auditorium,Yoga,Medical,', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59078.89456245735!2d70.76108054051704!3d22.261661097848126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x13d9930f2953e8c1!2sSarvodaya%20School!5e0!3m2!1sen!2sin!4v1602315589351!5m2!1sen!2sin', 'sarvodaya.PNG'),
('S N Kansagra School', 'Rajkot', 'Gujarat', '2000', 'ICSE', 'S.N. Kansagra School located at University Road Rajkot is one of the popular schools in India.The School has been recognized by Council for Indian School Certificate Examinations since a long time. This School is counted among the top-rated Schools in Gujarat with an excellent academic track record. If you\'re looking for more details regarding admission/application forms, syllabus, results or examinations schedule, kindly get in touch with the relevant department of the school.', 'AC,Canteen,WIFI,Computer Lab,Sports,Parking,Library,Play Ground,Smart Classroom,Cafeteria,Labs,Projectors,Auditorium,Yoga,Medical', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.750170413936!2d70.7581457149545!3d22.287451585330196!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959cbd2705ef3e5%3A0x37c4a3780b5efb6f!2sTGES%20-%20S%20N%20Kansagra%20School!5e0!3m2!1sen!2sin!4v1602316126361!5m2!1sen!2sin', 'snkansagra.jpg'),
('Saint Marys School', 'Rajkot', 'Gujarat', '1957', 'CBSE', 'St. Mary’s School is a Christian minority; self financed, co-educational English medium School, affiliated to Gujarat Education Board, managed by the St Mary’s Orthodox Syrian Church (Public Trust) Ahmedabad and has emerged as one of the best institutions in the city of Ahmedabad focusing on a value-based education with all modern facilities.\r\n\r\nSt.Mary’s School, is situated at Ognaj in the fast growing western suburb of Ahmedabad City. The foundation stone of this Institution was laid by His Grace Dr. Stephanos Mar Theodosius in the spacious land of about 10,000 Sq.ft area on 20th January 2002. It was inaugurated on 03.07.2002 with a handful of students in Nursery class. Recognized by the Government of Gujarat, we run classes from Nursery to Std XII(Science & Commerce streams).', 'AC,Computer Lab,Sports,Parking,Play Ground,Smart Classroom,Projectors,Medical,', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.744917543009!2d70.77167101495442!3d22.287650485330225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959ca31d68495e9%3A0xb125f3cf6b87ad20!2sSaint%20Mary&#39;s%20School!5e0!3m2!1sen!2sin!4v1602315952038!5m2!1sen!2sin', 'stmarrysschool.jpg'),
('Saint Pauls School', 'Rajkot', 'Gujarat', '2000', 'CBSE', 'Saint Paul\'s School, Rajkot, is a Co-educational institution established in 2000 and run by the Catholic minority community. It is managed by the Congregation of Carmelites of Mary Immaculate (CMI) through a registered body,CMI Kelavani Mandal. The School is affiliated to the Council of Indian School Certificate Examinations (ICSE), New Delhi,  and the School Code is GU024.\r\nBeginning the year on a wonderful note\r\n\r\nOn the 21st of June, the staff and students of Saint Paul’s School ushered in the new academic year with a prayer service. The program began with the lighting of the lamp and a prayer dance gracefully performed by the students of grade XII. The scriptures readings from the holy books of various faiths and the offertory procession accompanied by a hymn beautifully signified entrusting the year to come into the hands of God.', 'AC,Computer Lab,Sports,Parking,Play Ground,Smart Classroom,Cafeteria,Projectors,Auditorium,Medical', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14766.606992602281!2d70.71560139972604!3d22.291178065249884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959cbfdc7fa958d%3A0x2e5bfce74c5797ed!2sSt.%20Paul&#39;s%20English%20Medium%20School!5e0!3m2!1sen!2sin!4v1602315799233!5m2!1sen!2sin', 'stpaul.png'),
('Virani High School', 'Rajkot', 'Gujarat', '1946', 'GSEB', 'This is best school in rajkot', 'AC,Sports,Labs,Yoga,', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d118136.35254113299!2d70.72096129928369!3d22.287040877323225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959ca17b2615d5d%3A0x596902b801718787!2sVirani%20High%20School%20Rajkot!5e0!3m2!1sen!2sin!4v1607056644442!5m2!1sen!2sin', 'virani School.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'jaysavlani2', '$2y$10$pwqhU25Rd/rhGn3jWzxUe.yp15ChRBUMO9SeYUkTcwGu9xNB9RoB2'),
(2, 'yashpatel', '$2y$10$taJ.OqVNlXkZGFuzrhOrNu8M6AbJbjXrV/Lo5wWSvSz3.zP45zgUi'),
(5, 'goralgajera', '$2y$10$aTj3HfqdE7gha8P24vi/y.2MxqQEfhyyCyw7jL5Qgo.OvfyZ.Stfy'),
(6, 'jaysavlani', '$2y$10$vof4JnPPw.GPs1TWK6VBsOjmzwVlykEa.U2LO.aWrBA51Z7PBwERu'),
(7, '123', '$2y$10$ziBbCGrVOQZK5MwJ6wgdH.2sUu1RJCdZILOnZ0p5pAH5d8m4BSajy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
