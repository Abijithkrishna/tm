-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2015 at 11:30 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT = @@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS = @@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION = @@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `transport`
--

-- --------------------------------------------------------

--
-- Table structure for table `hs_hr_employee`
--

CREATE TABLE IF NOT EXISTS `hs_hr_employee` (
  `emp_number`            INT(7)       NOT NULL DEFAULT '0',
  `employee_id`           VARCHAR(50)           DEFAULT NULL,
  `institution_id`        INT(11)      NOT NULL,
  `emp_email`             VARCHAR(150) NOT NULL,
  `emp_lastname`          VARCHAR(100) NOT NULL DEFAULT '',
  `emp_firstname`         VARCHAR(100) NOT NULL DEFAULT '',
  `emp_middle_name`       VARCHAR(100) NOT NULL DEFAULT '',
  `emp_nick_name`         VARCHAR(100)          DEFAULT '',
  `emp_smoker`            SMALLINT(6)           DEFAULT '0',
  `ethnic_race_code`      VARCHAR(13)           DEFAULT NULL,
  `emp_birthday`          DATE                  DEFAULT NULL,
  `nation_code`           INT(4)                DEFAULT NULL,
  `emp_gender`            SMALLINT(6)           DEFAULT NULL,
  `emp_marital_status`    VARCHAR(20)           DEFAULT NULL,
  `emp_ssn_num`           VARCHAR(100)
                          CHARACTER SET latin1  DEFAULT '',
  `emp_sin_num`           VARCHAR(100)          DEFAULT '',
  `emp_other_id`          VARCHAR(100)          DEFAULT '',
  `emp_dri_lice_num`      VARCHAR(100)          DEFAULT '',
  `emp_dri_lice_exp_date` DATE                  DEFAULT NULL,
  `emp_military_service`  VARCHAR(100)          DEFAULT '',
  `emp_status`            INT(13)               DEFAULT NULL,
  `job_title_code`        INT(7)                DEFAULT NULL,
  `eeo_cat_code`          INT(11)               DEFAULT NULL,
  `work_station`          INT(6)                DEFAULT NULL,
  `emp_street1`           VARCHAR(100)          DEFAULT '',
  `emp_street2`           VARCHAR(100)          DEFAULT '',
  `city_code`             VARCHAR(100)          DEFAULT '',
  `coun_code`             VARCHAR(100)          DEFAULT '',
  `provin_code`           VARCHAR(100)          DEFAULT '',
  `emp_zipcode`           VARCHAR(20)           DEFAULT NULL,
  `emp_hm_telephone`      VARCHAR(50)           DEFAULT NULL,
  `emp_mobile`            VARCHAR(50)           DEFAULT NULL,
  `emp_work_telephone`    VARCHAR(50)           DEFAULT NULL,
  `emp_work_email`        VARCHAR(50)           DEFAULT NULL,
  `sal_grd_code`          VARCHAR(13)           DEFAULT NULL,
  `joined_date`           DATE                  DEFAULT NULL,
  `emp_oth_email`         VARCHAR(50)           DEFAULT NULL,
  `termination_id`        INT(4)                DEFAULT NULL,
  `custom1`               VARCHAR(250)          DEFAULT NULL,
  `custom2`               VARCHAR(250)          DEFAULT NULL,
  `custom3`               VARCHAR(250)          DEFAULT NULL,
  `custom4`               VARCHAR(250)          DEFAULT NULL,
  `custom5`               VARCHAR(250)          DEFAULT NULL,
  `custom6`               VARCHAR(250)          DEFAULT NULL,
  `custom7`               VARCHAR(250)          DEFAULT NULL,
  `custom8`               VARCHAR(250)          DEFAULT NULL,
  `custom9`               VARCHAR(250)          DEFAULT NULL,
  `custom10`              VARCHAR(250)          DEFAULT NULL,
  PRIMARY KEY (`emp_number`),
  KEY `work_station` (`work_station`),
  KEY `nation_code` (`nation_code`),
  KEY `job_title_code` (`job_title_code`),
  KEY `emp_status` (`emp_status`),
  KEY `eeo_cat_code` (`eeo_cat_code`),
  KEY `termination_id` (`termination_id`)
)
  ENGINE = InnoDB
  DEFAULT CHARSET = utf8;

--
-- Dumping data for table `hs_hr_employee`
--

INSERT INTO `hs_hr_employee` (`emp_number`, `employee_id`, `institution_id`, `emp_email`, `emp_lastname`, `emp_firstname`, `emp_middle_name`, `emp_nick_name`, `emp_smoker`, `ethnic_race_code`, `emp_birthday`, `nation_code`, `emp_gender`, `emp_marital_status`, `emp_ssn_num`, `emp_sin_num`, `emp_other_id`, `emp_dri_lice_num`, `emp_dri_lice_exp_date`, `emp_military_service`, `emp_status`, `job_title_code`, `eeo_cat_code`, `work_station`, `emp_street1`, `emp_street2`, `city_code`, `coun_code`, `provin_code`, `emp_zipcode`, `emp_hm_telephone`, `emp_mobile`, `emp_work_telephone`, `emp_work_email`, `sal_grd_code`, `joined_date`, `emp_oth_email`, `termination_id`, `custom1`, `custom2`, `custom3`, `custom4`, `custom5`, `custom6`, `custom7`, `custom8`, `custom9`, `custom10`)
VALUES
  (1, '0001', 0, '', 's', 'praveen', 'kumar', '', 0, NULL, '1994-11-10', NULL, NULL, '', '', '', '', '', '2013-11-15',
   '', NULL, NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL,
   NULL, NULL, NULL, NULL, NULL, NULL, NULL),
  (2, '0002', 0, '', 'Raja', 'Boopathi', 'K', '', 0, NULL, '1986-07-27', 82, NULL, 'Single', '', '', '', '123456789', '2025-11-14', '', NULL, NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
  (3, '0003', 5, '', 'sambandam', 'Nandha', 'kumar', 'nandha', 1, NULL, '1991-01-12', 82, 1, 'Single', '111111', '1234567', '333333', 'TN54G2008000134', '2014-09-12', 'Major(2008-2012)', NULL, 19, NULL, NULL, 'No:12', 'old new road', 'chennai', 'IN', 'Tn', '600041', '044123654', '9667452011', '4425225200', 'sample@test.com', NULL, '2006-06-16', 'sampl1@mail.com', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
  (33, '0033', 0, '', 'ewrtewr', 'ewr', 'tewrt', '', 0, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, '', NULL, NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
  (34, '0034', 0, '', 'werq', 'qwer', 'qewrqwer', '', 0, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, '', NULL, NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
  (35, '0035', 0, '', 'thisysdf', 'thisysdf', 'thisysdf', '', 0, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, '', NULL, NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
  (36, '0036', 0, '', 'wertwe', 'wert', 'wertwe', '', 0, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, '', NULL, NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
  (37, '0037', 0, '', 'ewrtwer', 'ewrt', 'wret', '', 0, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, '', NULL, NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
  (39, '0038', 0, '', 'yertye', 'retyery', 'eryery', '', 0, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, '', NULL, NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
  (40, '0040', 2, '', 'urtyu', 'rtyurty', 'rtyurtyurtt', '', 0, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, '', NULL, NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
  (42, '0042', 2, '', 'kumar', 'testname', 'test', '', 1, NULL, '2014-05-09', NULL, NULL, '', '', '', '', '', NULL, '', NULL, 7, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
  (47, '0046', 0, '', 'ewrtw', 'ewrt', 'ewrte', '', 0, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, '', NULL, NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
  (48, '0048', 2, '', 'kumar', 'Jacob', 'shafeer', '', 0, NULL, NULL, NULL, NULL, '', '', '', '', '', NULL, '', NULL, 41, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
  (49, '0049', 5, '', 'asdd', 'vineet', 'sdsd', '', 0, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, '', NULL, 19, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
  (52, '0052', 5, '', 'jacob', 'sam', '', '', 0, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, '', NULL, 18, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
  (53, '0053', 2, '', 'ewrt', 'erwt', 'rewtewr', '', 0, NULL, NULL, NULL, NULL, '', '', '', '', '', NULL, '', NULL, NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
  (54, '0054', 5, '', 'dfsgdfs', 'dfgsfg', '', '', 0, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, '', NULL, 42, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
  (78, '0078', 5, 'sara200@mail.com', 'kumar', 'saranew', 'm', '', 0, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, '', NULL, 42, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
  (80, '0080', 5, 'newpraveen@mail.com', 'Kumar', 'Praveen', 'K', '', 0, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, '', NULL, 19, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
  (81, '0081', 5, 'arunp@mail.com', 'Kumar', 'Arun', 'p', '', 0, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, '', NULL, 18, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
  (82, '0082', 5, 'hi@sdfsd.sdf', 'ln', 'fn', '', '', 0, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, '', NULL, 42, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
  (83, '0083', 5, 'asw@aaaa.sss', 'fast', 'staff23', '', '', 0, NULL, NULL, NULL, NULL, '', '', '', '', '', NULL, '',
   NULL, 18, 34, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2014-04-16', NULL, NULL, NULL, NULL,
   NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
  (84, '0084', 5, 'dzsfsdaf@sdgf.fgh', 'sadfgdfasg', 'dasfrsdag', '', '', 0, NULL, NULL, NULL, NULL, NULL, '', '', '',
   '', NULL, '', NULL, 42, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL,
   NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
  (85, '0085', 5, 'dsgfdsh@dsfgh.hhh', 'dfsg', 'dfg', 'dsfg', '', 0, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL,
   '', NULL, 20, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL,
   NULL, NULL, NULL, NULL, NULL, NULL, NULL),
  (87, '0087', 2, 'wertwer@erter.rtyr', 'tewrte', 'ertewr newer', 'tewrtewr', '', 0, NULL, NULL, NULL, NULL, NULL, '',
   '', '', '', NULL, '', NULL, NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL,
   NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
  (89, '88', 5, '', 'dane', 'gnan', 'sam', '', 0, NULL, '1987-08-26', 82, 1, NULL, '', '', '5', 'tn27000128',
   '2016-06-12', '', NULL, NULL, NULL, NULL, 'plot-12', 'united colony', 'chennai', 'IN', 'TN', '600310', '4492546754',
   '8621056331', '354555', 'dane@gmail.com', NULL, NULL, 'daniel123@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL,
   NULL, NULL, NULL, NULL, NULL),
  (90, '0090', 2, 'employee@crescent.com', 'employee', 'crescent', '', '', 0, NULL, NULL, NULL, NULL, NULL, '', '', '',
   '', NULL, '', NULL, NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL,
   NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
  (91, '0091', 5, 'nit@psg.in', 'krishna', 'nithish', '', '', 0, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, '',
   NULL, NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL,
   NULL, NULL, NULL, NULL, NULL, NULL, NULL),
  (93, '', 5, '', 'Candidate', 'New', '', '', 0, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, '', NULL, 42, NULL,
   NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'new@candidate.com', NULL, NULL, NULL, NULL,
   NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE IF NOT EXISTS `schools` (
  `id`                 INT(11)              NOT NULL AUTO_INCREMENT,
  `syear`              DOUBLE(4, 0)         NOT NULL,
  `status`             ENUM('0', '1')       NOT NULL,
  `name`               VARCHAR(100)         NOT NULL,
  `username`           VARCHAR(100)         NOT NULL,
  `role`               VARCHAR(100)         NOT NULL,
  `ins_id`             INT(11)              NOT NULL,
  `institutes_email`   VARCHAR(155)         NOT NULL,
  `password`           VARCHAR(155)         NOT NULL,
  `title`              CHAR(100)                     DEFAULT NULL,
  `about_us`           TEXT                 NOT NULL,
  `description`        TEXT                 NOT NULL,
  `address`            CHAR(100)                     DEFAULT NULL,
  `country`            VARCHAR(100)         NOT NULL,
  `city`               CHAR(100)                     DEFAULT NULL,
  `zipcode`            CHAR(10)                      DEFAULT NULL,
  `principal`          CHAR(100)                     DEFAULT NULL,
  `profile_image`      VARCHAR(100)
                       CHARACTER SET latin1 NOT NULL,
  `district`           CHAR(255)                     DEFAULT NULL,
  `fax`                VARCHAR(100)         NOT NULL,
  `phone`              CHAR(30)                      DEFAULT NULL,
  `mobile`             VARCHAR(25)
                       CHARACTER SET latin1 NOT NULL,
  `state`              CHAR(50)                      DEFAULT NULL,
  `www_address`        CHAR(100)                     DEFAULT NULL,
  `facebook_page_link` VARCHAR(255)         NOT NULL,
  `school_number`      CHAR(50)                      DEFAULT NULL,
  `sau_number`         CHAR(3)                       DEFAULT NULL,
  `institution_rigts`  VARCHAR(100)         NOT NULL,
  `district_number`    CHAR(3)                       DEFAULT NULL,
  `reporting_gp_scale` DOUBLE(10, 3)                 DEFAULT NULL,
  `short_name`         CHAR(25)                      DEFAULT NULL,
  `creation_date`      VARCHAR(100)         NOT NULL,
  PRIMARY KEY (`id`),
  KEY `schools_ind1` (`syear`)
)
  ENGINE = InnoDB
  DEFAULT CHARSET = utf8
  AUTO_INCREMENT = 17;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`id`, `syear`, `status`, `name`, `username`, `role`, `ins_id`, `institutes_email`, `password`, `title`, `about_us`, `description`, `address`, `country`, `city`, `zipcode`, `principal`, `profile_image`, `district`, `fax`, `phone`, `mobile`, `state`, `www_address`, `facebook_page_link`, `school_number`, `sau_number`, `institution_rigts`, `district_number`, `reporting_gp_scale`, `short_name`, `creation_date`)
VALUES
  (1, 2013, '1', '', '', '', 0, 'boopathidot@gmail.com', '9ec40a55f718533e6fcb77f46ea9c79c', 'Default School', '', '',
   '500 North St.', '', 'Springfield', '62704', 'Mr. James Principal', '', NULL, '3453453 345', '23423423423', '',
   'Springfiel', 'http://centresis.org', '', NULL, NULL, '3,4,7', NULL, 4.000, 'Default', ''),
  (2, 2013, '1', '', '', '', 0, 'shashafeer@gmail.com', '9ec40a55f718533e6fcb77f46ea9c79c', 'crescent Engg', 'test aboutusw', 'test descriptionw', '123', '103', 'Elsa', '78543', 'Boopathi', '372139029034198.jpeg', NULL, '3456456', '9629321947', '', 'Elsa', 'www.dotinfotech.in', '', '154', NULL, '2,3,4,6,7', NULL, 0.000, 'MFSe', ''),
  (3, 2014, '1', '', '', '', 0, 'praveenkhwertwerumar.p@gmail.com', '9ec40a55f718533e6fcb77f46ea9c79c', 'SRM ertwert', '', '', 'ewrtwer', '', 'Chennai', '600034', NULL, '', NULL, '34534', '345345', '', 'Chennai', 'www.http://etwer.ewrt', '', NULL, NULL, '3,4,7', NULL, NULL, 'ert rtyrty', ''),
  (4, 2014, '1', '', '', '', 0, 'rathansgood@gmail.com', '9ec40a55f718533e6fcb77f46ea9c79c', 'St.Peters ert', '', '', '345345', 'India', 'Chennai', '600010', 'Prem', '399139166633651.jpg', NULL, '9874561230', '345345', '', 'Chennai', 'twertewr', '', NULL, NULL, '2,3,4,7', NULL, NULL, 'rtwerw wre', ''),
  (5, 2013, '1', '', '', '', 0, 'nandha@email.com', '9ec40a55f718533e6fcb77f46ea9c79c', 'PSG Technology', '<p>\r\n	Provide world-class Engineering Education, Foster Research and Development. Evolve <strong>innovative</strong> applications of Technology. <em>Encourage Entrepreneurship</em>. Ultimately mould young men and women capable of assuming leadership of the society for the betterment of the Country.</p>\r\n', '<p>\r\n	At PSG, individuals can make a difference, and we seek those who share our values to support our mission. If you have a strong work ethic, a passion to work for a vibrant student community and are dedicated to providing top-notch service, we invite you to join us at PSG. we offers excellent employment opportunities and a conducive work atmosphere whether you join us as a faculty or as a prospective staff.</p>\r\n', 'kochi high road', 'India', 'Coimbatore', '650024', 'Prem', '254139773065945.jpg', 'cbe', '25252525', '04285613852', '9876358145', 'Thamizhl Nadu', 'www.psg-tech.in', 'www.facebook.com/psgtech', '9', NULL, '2,3,4,7,8,10', NULL, 4.500, 'PSG', ''),
  (10, 2014, '1', '', 'rathankumar', 'subadmin', 2, 'rathan@gmail.com', '9ec40a55f718533e6fcb77f46ea9c79c', 'Crescent Engineering', '', '', NULL, '', NULL, NULL, NULL, '', NULL, '', NULL, '', NULL, NULL, '', NULL, NULL, '3,4,7', NULL, NULL, NULL, '2014-04-09 15:16:09'),
  (11, 2014, '1', '', 'mohinder', 'subadmin', 2, 'mohi@gmail.com', '9ec40a55f718533e6fcb77f46ea9c79c', 'Crescent Engineering', '', '', NULL, '', NULL, NULL, NULL, '', NULL, '', NULL, '', NULL, NULL, '', NULL, NULL, '3,4', NULL, NULL, NULL, '2014-04-09 17:21:54'),
  (12, 2014, '1', '', '', '', 0, 'werqwer@wer.wer', '9ec40a55f718533e6fcb77f46ea9c79c', 'qwerq', 'ewrtwert', 'ewrtewr', '', '14', 'wertwert', '34534', NULL, '', NULL, 'ewrtwert', '345345', '', 'tamil nadu', 'ewrt', '', NULL, NULL, '', NULL, NULL, 'werqwer', '2014-04-16 11:57:32'),
  (13, 2014, '1', '', '', '', 0, 'cit@gmail.com', '9ec40a55f718533e6fcb77f46ea9c79c', 'coimbatore institute of technology', 'tewrt', 'ewrtwer', '', '4', 'ewrt', '345', NULL, '', NULL, 'ewrtewrt', '52354243', '', 'ewrt', 'ewr', '', NULL, NULL, '3,4,7,8', NULL, NULL, 'Avinashi', '2014-04-18 15:02:14'),
  (14, 2014, '1', '', '', '', 0, 'college@gmail.com', '9ec40a55f718533e6fcb77f46ea9c79c', 'Thiyagaraja Engineering Colllege', 'We are providing education service since 1968. We are proud to be an excellent education institute and one of top ten rank holder all over country. Making perfect professionals is our mission. ', 'Lorem ipsum is simply dummy text.', '', '103', 'Thuttukudi', '654002', NULL, '', NULL, '044927943248', '9852018898', '', 'Thamizh Na', 'hhtp://www.thiyagaraja.edu', '', NULL, NULL, '2,3,4,7', NULL, NULL, '044-848964654', '2014-04-19 11:11:36'),
  (15, 2014, '1', '', 'ashwin', 'subadmin', 5, 'subadmin@psg.com', '9ec40a55f718533e6fcb77f46ea9c79c', 'PSG Technology', '', '', NULL, '', NULL, NULL, NULL, '', NULL, '', NULL, '', NULL, NULL, '', NULL, NULL, '3,4,7', NULL, NULL, NULL, '2014-05-23 12:13:21'),
  (16, 2014, '1', '', 'syed', 'subadmin', 2, 'syed@gmail.com', '9ec40a55f718533e6fcb77f46ea9c79c', 'crescent Engg',
   'tewrt', 'etwert', 'wr', 'wetwretw', 'wert', '345', 'we', '520140230480175.jpeg', NULL, '', NULL, '', NULL, NULL, '',
   NULL, NULL, '3,4', NULL, NULL, NULL, '2014-06-06 12:19:59');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `student_id`            INT(11)              NOT NULL AUTO_INCREMENT,
  `dept_id`               INT(11)              NOT NULL,
  `grade`                 VARCHAR(50)          NOT NULL,
  `section`               VARCHAR(50)          NOT NULL,
  `roll_no`               VARCHAR(50)          NOT NULL,
  `year`                  INT(11)              NOT NULL,
  `school_id`             INT(11)              NOT NULL,
  `last_name`             CHAR(50)             NOT NULL,
  `first_name`            CHAR(50)             NOT NULL,
  `middle_name`           CHAR(50)                      DEFAULT NULL,
  `name_suffix`           CHAR(3)                       DEFAULT NULL,
  `nickname`              CHAR(50)                      DEFAULT NULL,
  `soc_sec_no`            CHAR(9)                       DEFAULT NULL,
  `gender`                CHAR(1)                       DEFAULT NULL,
  `birth_date`            DATE                          DEFAULT NULL,
  `religion`              VARCHAR(50)          NOT NULL,
  `birth_place`           CHAR(25)                      DEFAULT NULL,
  `birth_city`            CHAR(25)                      DEFAULT NULL,
  `birth_state`           CHAR(25)                      DEFAULT NULL,
  `birth_country`         CHAR(25)                      DEFAULT NULL,
  `mobile`                VARCHAR(30)          NOT NULL,
  `phone1`                VARCHAR(30)          NOT NULL,
  `address`               TEXT                 NOT NULL,
  `zipcode`               VARCHAR(30)          NOT NULL,
  `fax`                   VARCHAR(30)          NOT NULL,
  `language`              CHAR(100)                     DEFAULT NULL,
  `ethnicity`             CHAR(100)                     DEFAULT NULL,
  `physician`             CHAR(100)                     DEFAULT NULL,
  `physician_phone`       CHAR(20)                      DEFAULT NULL,
  `hospital`              CHAR(100)                     DEFAULT NULL,
  `medical_comments`      LONGTEXT,
  `doctors_note`          CHAR(1)                       DEFAULT NULL,
  `doctors_note_comments` LONGTEXT,
  `username`              CHAR(100)                     DEFAULT NULL,
  `email_id`              VARCHAR(200)         NOT NULL,
  `password`              CHAR(100)                     DEFAULT NULL,
  `profile_image`         VARCHAR(100)
                          CHARACTER SET latin1 NOT NULL,
  `custom_200000000`      CHAR(255)                     DEFAULT NULL,
  `custom_200000001`      CHAR(255)                     DEFAULT NULL,
  `custom_200000002`      CHAR(255)                     DEFAULT NULL,
  `custom_200000005`      CHAR(255)                     DEFAULT NULL,
  `custom_200000006`      CHAR(255)                     DEFAULT NULL,
  `custom_200000007`      CHAR(255)                     DEFAULT NULL,
  `custom_200000008`      CHAR(255)                     DEFAULT NULL,
  `custom_200000009`      LONGTEXT,
  `custom_200000010`      CHAR(1)                       DEFAULT NULL,
  `custom_200000011`      LONGTEXT,
  `last_login`            TIMESTAMP            NULL     DEFAULT NULL,
  `failed_login`          DOUBLE                        DEFAULT NULL,
  `custom_200000004`      DATE                          DEFAULT NULL,
  `moodle_id`             INT(11)                       DEFAULT NULL,
  `suspended_flg`         CHAR(1)              NOT NULL,
  `admin_flg`             CHAR(1)              NOT NULL,
  `circ_flg`              CHAR(1)              NOT NULL,
  `circ_mbr_flg`          CHAR(1)              NOT NULL,
  `catalog_flg`           CHAR(1)              NOT NULL,
  `reports_flg`           CHAR(1)              NOT NULL,
  `status`                INT(11)              NOT NULL,
  PRIMARY KEY (`student_id`),
  KEY `ethnic` (`ethnicity`),
  KEY `name` (`middle_name`, `first_name`, `last_name`),
  KEY `sex` (`gender`),
  KEY `ssn` (`soc_sec_no`),
  KEY `students_ind4` (`username`)
)
  ENGINE = InnoDB
  DEFAULT CHARSET = utf8
  AUTO_INCREMENT = 57;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `dept_id`, `grade`, `section`, `roll_no`, `year`, `school_id`, `last_name`, `first_name`, `middle_name`, `name_suffix`, `nickname`, `soc_sec_no`, `gender`, `birth_date`, `religion`, `birth_place`, `birth_city`, `birth_state`, `birth_country`, `mobile`, `phone1`, `address`, `zipcode`, `fax`, `language`, `ethnicity`, `physician`, `physician_phone`, `hospital`, `medical_comments`, `doctors_note`, `doctors_note_comments`, `username`, `email_id`, `password`, `profile_image`, `custom_200000000`, `custom_200000001`, `custom_200000002`, `custom_200000005`, `custom_200000006`, `custom_200000007`, `custom_200000008`, `custom_200000009`, `custom_200000010`, `custom_200000011`, `last_login`, `failed_login`, `custom_200000004`, `moodle_id`, `suspended_flg`, `admin_flg`, `circ_flg`, `circ_mbr_flg`, `catalog_flg`, `reports_flg`, `status`)
VALUES
  (1, 2, '', '', '', 2, 1, 'Raja', 'Boopathi', 'K', 'Sr', NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '', '',
   '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'boopathidot', 'stu1@mail.com',
   'e10adc3949ba59abbe56e057f20f883e', '', 'Male', 'Asian or Pacific Islander', 'Boopathi', 'English', NULL, NULL, NULL,
   NULL, NULL, NULL, '2014-02-19 05:59:06', 6, '1993-07-27', NULL, '', '', '', '', '', '', 0),
  (2, 2, '', '', '', 2, 1, 'ravi', 'kumar', 'K', 'Sr', NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'stu2@mail.com', 'e10adc3949ba59abbe56e057f20f883e', '', 'Male', 'Asian or Pacific Islander', 'Boopathi', 'English', NULL, NULL, NULL, NULL, NULL, NULL, '2014-03-27 12:00:46', NULL, '1993-06-02', NULL, '', '', '', '', '', '', 1),
  (3, 13, '3', '', '', 1, 5, 'nadal', 'chandel', 'K', 'Sr', NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'praveen@mail.com', 'e10adc3949ba59abbe56e057f20f883e', '', 'Male', 'Asian or Pacific Islander', 'Boopathi', 'Spanish', NULL, NULL, NULL, NULL, NULL, NULL, '2014-05-02 09:03:31', NULL, NULL, NULL, '', '', '', '', '', '', 1),
  (5, 18, '', '', '', 2, 5, 'K', 'Raja', 'K', 'II', NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'rajak', 'raja@email.com', 'e10adc3949ba59abbe56e057f20f883e', '', 'Male', 'Asian or Pacific Islander', 'raja', 'English', NULL, NULL, NULL, NULL, NULL, NULL, '2014-05-02 09:06:58', NULL, '1993-01-01', NULL, '', '', '', '', '', '', 1),
  (6, 18, '', '', '', 1, 5, 'selva', 'senthilsf', 'K', 'Jr', NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'stu5@mail.com', 'e10adc3949ba59abbe56e057f20f883e', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2014-05-02 09:06:58', NULL, NULL, NULL, '', '', '', '', '', '', 1),
  (14, 10, '2', '', '123456', 2, 5, 'kumar', 'nanda', 'asdf', NULL, NULL, NULL, 'm', '1991-04-12', '', NULL, 'salem', 'Tamil Nadu', '103', '67', '567', 'dgfh', '2354524', '3534', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'user@student.com', 'nandhakumarhemweb@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '464142622499886.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-04-02 06:04:07', NULL, NULL, NULL, '', '', '', '', '', '', 1),
  (15, 12, '1', '', '', 1, 5, 'gopi', 'nath', 'K', NULL, NULL, NULL, 'm', NULL, '', NULL, 'chennai', 'tamil nadu', '', '99841251236', '541125412', 'ok ok', '600031', '88994115', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'praveen@test.com', 'e10adc3949ba59abbe56e057f20f883e', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2014-02-28 11:25:21', NULL, NULL, NULL, '', '', '', '', '', '', 1),
  (17, 12, '4', '', '', 1, 5, 'john', 'stive', 'M', NULL, 'Prva', NULL, 'm', NULL, '', NULL, '', '', '103', '998412547', '558122514', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'praveen007@mail.com', 'e10adc3949ba59abbe56e057f20f883e', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2014-02-28 11:25:21', NULL, NULL, NULL, '', '', '', '', '', '', 1),
  (21, 10, '1', 'B', '5822254', 2, 5, 'Kumar', 'Praveen', 'K', NULL, NULL, NULL, 'm', '2014-10-12', 'Christian', NULL, 'chennai', 'tamil nadu', '98', '99841251236', '541125412', '123 nancy st', '6002517', '889941157', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'praveenkhumar.p@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '392139272618251.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', 1),
  (22, 19, '2', 'A', '101', 1, 5, 'Raja', 'Boopathi', 'K', NULL, NULL, NULL, 'm', '1987-05-25', 'Hindu', NULL, 'Chennai', 'TN', '103', '46456', '456456', '4356456', '600034', '9629321947', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'boopathidot@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '541139394029063.jpeg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2014-02-28 11:25:46', NULL, NULL, NULL, '', '', '', '', '', '', 1),
  (31, 10, '3', 'B', '58222588', 2, 5, 'jon', 'stev', 'K', NULL, NULL, NULL, 'm', '2005-10-20', 'Christian', NULL, 'chennai', 'tamil nadu', '103', '', '', '', '6002512', '88994115', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'praveen109@mail.com', 'e10adc3949ba59abbe56e057f20f883e', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2014-02-28 11:32:02', NULL, NULL, NULL, '', '', '', '', '', '', 1),
  (42, 10, 'A', 'B', '8554', 2, 5, 'Jebaraj', 'Joseph', 'J', NULL, NULL, NULL, 'm', '2010-05-05', 'Christian', NULL, 'chennai', 'tamil nadu', '103', '938453599', '34534534', 'rtyrety', '6002512', '7844515', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'joseph@mail.com', 'e10adc3949ba59abbe56e057f20f883e', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', 1),
  (43, 10, '', '', '', 2, 5, 'yurtyu', 'ytut', 'rtyu', NULL, NULL, NULL, 'f', '0000-00-00', 'ewrtwer', NULL, '', '', '14', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'rtyurytu@ewr.wer', 'e10adc3949ba59abbe56e057f20f883e', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', 1),
  (44, 9, 'A', 'B', '123456', 1, 5, 'Jeba', 'Augustion', 'J', NULL, NULL, NULL, 'm', '2014-10-12', 'Christian', NULL, 'chennai', 'tamil nadu', '103', '', '', '', '6522125', '7844515', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'augustion@mail.com', 'e10adc3949ba59abbe56e057f20f883e', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', 1),
  (45, 10, 'wertwert', 'ewrtewrt', '34534', 1, 5, 'wertwert', 'erwtwert', 'wertert', NULL, NULL, NULL, 'm', '0000-00-00', 'weerwer', NULL, 'wetert', 'tertert', '14', '', '', '', '345345', '34534', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'werwerw@wer.wer', 'e10adc3949ba59abbe56e057f20f883e', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', 1),
  (46, 9, 'A', 'B', '554415', 2, 5, 'Kumarw', 'Josephk', 'K', NULL, NULL, NULL, 'm', '2010-05-05', 'Christian', NULL, 'chennai', 'tamil nadu', '103', '', '', '', '6002517', '88994115', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'joekumar@mail.com', 'e10adc3949ba59abbe56e057f20f883e', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', 1),
  (47, 8, 'A', 'G', '103', 1, 2, 'Raja', 'Boopathy', 'K', NULL, NULL, NULL, 'm', '1987-07-25', 'Hindu', NULL, 'Chennai', 'TN', '103', '9629321947', '9629321947', '123', '600034', '9629321947', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'boopathidot@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '700139635119315.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', 1),
  (48, 11, '12', 'A', '101', 2, 5, 'Kumar', 'Rathina', 'P', NULL, NULL, NULL, 'm', '1988-05-25', 'Hindu', NULL, 'Chennai', 'TN', '103', '9874561230', '3214567980', '123', '600010', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'rathansgood@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '205139643885841.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', 1),
  (49, 10, '', '', '', 1, 5, 'mark', 'hendricks', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'mark@gmail.com', 'mark@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2014-04-28 07:25:11', NULL, NULL, NULL, '', '', '', '', '', '', 0),
  (50, 1, 'dsfg', 'dsfgsdf', '', 1, 2, 'nazzzerer', 'jefer', 'jasd', NULL, NULL, NULL, 'm', '1985-02-03', 'ewrtwert', NULL, 'sdfgdsf', 'dg', '103', '', '', '', 'gdsfgds', 'fgdsfgdsf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'nazzereqwer@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', 1),
  (51, 0, '', '', '', 0, 0, 'pko', 'j@gamil.com', 'gfgf', NULL, NULL, NULL, 'm', '0000-00-00', 'dsfgdh', NULL, '', '', '3', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'trttt@ymail.com', 'e0ec043b3f9e198ec09041687e4d4e8d', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', 1),
  (52, 0, '', '', '', 0, 0, 'gfsg', 'tgfg', 'gfgf', NULL, NULL, NULL, 'm', '1985-02-17', 'dsfgdh', NULL, '', '', '4',
   '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'trttt@ymail.edu',
   '196f9dcf090012cfd9669829fad60ff6', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL,
   NULL, '', '', '', '', '', '', 1),
  (53, 0, '', '', '', 0, 13, 'yyyy', 'yyyy', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '', '', '',
   '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'anna@gmail.com', 'anna@gmail.com',
   'ef024b95dea866c1812c27ed23f73849', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL,
   NULL, '', '', '', '', '', '', 0),
  (54, 5, '2', '1', '555', 1, 2, 'm', 'salman', 'Farzee', NULL, NULL, NULL, 'm', '1991-05-22', 'muslim', NULL,
   'chennai', 'tamil nadu', '103', '9976666', '6786786', 'tyuui', '600114', '', NULL, NULL, NULL, NULL, NULL, NULL,
   NULL, NULL, NULL, 'salman@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '550140352622844.jpg', NULL, NULL, NULL,
   NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2014-06-23 09:27:51', NULL, NULL, NULL, '', '', '', '', '', '', 1),
  (55, 0, '', '', '', 0, 5, 'ahamed', 'shafeer', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '', '',
   '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sster@ert.ert', 'sster@ert.ert',
   'e10adc3949ba59abbe56e057f20f883e', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL,
   NULL, '', '', '', '', '', '', 0),
  (56, 2, '', '', '', 2, 2, 'seco', 'second user', 'seco', NULL, NULL, NULL, 'm', '1998-12-12', 'hghg', NULL, '', '',
   '103', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'user@student.com',
   'e10adc3949ba59abbe56e057f20f883e', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL,
   NULL, '', '', '', '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tm_bus_route`
--

CREATE TABLE IF NOT EXISTS `tm_bus_route` (
  `institute_id`   INT(11) NOT NULL,
  `route_number`   INT(11) NOT NULL DEFAULT '0',
  `start_location` TEXT,
  `end_location`   TEXT,
  `start_time`     TIME             DEFAULT NULL,
  PRIMARY KEY (`institute_id`, `route_number`)
)
  ENGINE = InnoDB
  DEFAULT CHARSET = latin1;

--
-- Dumping data for table `tm_bus_route`
--

INSERT INTO `tm_bus_route` (`institute_id`, `route_number`, `start_location`, `end_location`, `start_time`) VALUES
  (0, 1, '1', '20', '00:00:00'),
  (0, 2, '1', '20', '00:00:00'),
  (0, 3, '3', '4', '00:00:00'),
  (0, 5, '1', '1', '00:00:00'),
  (0, 6, '1', '1', '00:00:00'),
  (1, 1, '3', '2', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tm_bus_stop`
--

CREATE TABLE IF NOT EXISTS `tm_bus_stop` (
  `institute_id`   INT(11) NOT NULL,
  `name`           TEXT,
  `id`             INT(11) NOT NULL,
  `route`          INT(11)    DEFAULT NULL,
  `distance`       BIGINT(20) DEFAULT NULL,
  `estimated_time` TIME       DEFAULT NULL,
  PRIMARY KEY (`institute_id`, `id`),
  KEY `id` (`id`)
)
  ENGINE = InnoDB
  DEFAULT CHARSET = latin1;

--
-- Dumping data for table `tm_bus_stop`
--

INSERT INTO `tm_bus_stop` (`institute_id`, `name`, `id`, `route`, `distance`, `estimated_time`) VALUES
  (0, 'sf', 3, 1, 34, '00:00:00'),
  (0, 'aff3', 23, 6, 454, '00:00:00'),
  (0, 'sdaf', 33, 5, 44, '00:00:00'),
  (0, 'sdaf', 333, 5, 44, '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tm_employee`
--

CREATE TABLE IF NOT EXISTS `tm_employee` (
  `institute_id`    INT(11) NOT NULL,
  `id`              INT(11) NOT NULL,
  `role`            TEXT,
  `name`            TEXT,
  `license_number`  TEXT,
  `expiry`          DATE DEFAULT NULL,
  `employee_status` TEXT,
  `verification`    TEXT,
  `vehicle`         TEXT,
  PRIMARY KEY (`institute_id`, `id`)
)
  ENGINE = InnoDB
  DEFAULT CHARSET = latin1;

--
-- Dumping data for table `tm_employee`
--

INSERT INTO `tm_employee` (`institute_id`, `id`, `role`, `name`, `license_number`, `expiry`, `employee_status`, `verification`, `vehicle`)
VALUES
  (0, 33, 'driver', 'ewr', '', '0000-00-00', '', '', 'tn'),
  (23, 1, 'driver', 'praveen', '', '2013-11-15', '', '', NULL),
  (33, 2, 'dirverconductor', 'Boopathi', '123456789', '2025-11-14', '', '', NULL),
  (33, 3, 'driver', 'Nandha', 'TN54G2008000134', '2014-09-12', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tm_passengers`
--

CREATE TABLE IF NOT EXISTS `tm_passengers` (
  `institute_id` INT(11)     NOT NULL,
  `id`           INT(11)     NOT NULL,
  `route`        INT(11) DEFAULT NULL,
  `stop`         INT(11) DEFAULT NULL,
  `type`         VARCHAR(15) NOT NULL,
  PRIMARY KEY (`institute_id`, `id`)
)
  ENGINE = InnoDB
  DEFAULT CHARSET = latin1;

--
-- Dumping data for table `tm_passengers`
--

INSERT INTO `tm_passengers` (`institute_id`, `id`, `route`, `stop`, `type`) VALUES
  (0, 3, 1, 3, 'student'),
  (0, 4, 5, 333, 'student'),
  (1, 2, 1, 1, 'student');

-- --------------------------------------------------------

--
-- Table structure for table `tm_vehicle_details`
--

CREATE TABLE IF NOT EXISTS `tm_vehicle_details` (
  `institute_id`      INT(11)     NOT NULL,
  `number`            VARCHAR(20) NOT NULL DEFAULT '',
  `type`              TEXT,
  `capacity`          INT(11)              DEFAULT NULL,
  `vehicle_condition` TEXT,
  `vehicle_status`    TEXT,
  `route`             INT(11)              DEFAULT '0',
  `driver`            INT(11)              DEFAULT NULL,
  `conductor`         INT(11)              DEFAULT NULL,
  PRIMARY KEY (`institute_id`, `number`)
)
  ENGINE = InnoDB
  DEFAULT CHARSET = latin1;

--
-- Dumping data for table `tm_vehicle_details`
--

INSERT INTO `tm_vehicle_details` (`institute_id`, `number`, `type`, `capacity`, `vehicle_condition`, `vehicle_status`, `route`, `driver`, `conductor`)
VALUES
  (0, 'dkl', '1', 34, '', '', 0, NULL, NULL),
  (0, 'tn', '1', 55, '', '', 0, 33, NULL),
  (1, '3423', '1', 343, '', '', 0, NULL, NULL),
  (23, 'tm', '1', 44, '', '', 0, NULL, NULL),
  (33, 'tm', '1', 33, '', '', 0, NULL, NULL),
  (33, 'TNopapap', '1', 88, 'good', 'ok', 0, NULL, NULL),
  (44, '9999999999', '1', 97, '', '', 0, NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT = @OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS = @OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION = @OLD_COLLATION_CONNECTION */;
