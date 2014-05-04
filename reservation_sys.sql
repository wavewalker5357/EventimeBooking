-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Počítač: localhost
-- Vygenerováno: Ned 04. kvě 2014, 21:57
-- Verze serveru: 5.6.12-log
-- Verze PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databáze: `reservation_sys`
--
CREATE DATABASE IF NOT EXISTS `reservation_sys` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `reservation_sys`;

-- --------------------------------------------------------

--
-- Struktura tabulky `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `event_id` int(10) NOT NULL,
  `event_title` varchar(100) NOT NULL,
  `event_contact_name` varchar(50) NOT NULL,
  `event_contact_surname` varchar(50) NOT NULL,
  `event_company` varchar(50) NOT NULL,
  `event_type` int(10) NOT NULL,
  `event_description` text NOT NULL,
  `event_price` int(10) NOT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Vypisuji data pro tabulku `events`
--

INSERT INTO `events` (`event_id`, `event_title`, `event_contact_name`, `event_contact_surname`, `event_company`, `event_type`, `event_description`, `event_price`) VALUES
(0, 'Led Zeppelin The Celebration Day', 'John', 'Smith', 'Eventim', 2, 'Led Zeppelin will com with their new reunited band and show tonight.', 100),
(1, 'Rolling Stones 50 Tour 2014', 'Bob', 'Roger', 'Unitednation', 2, 'The 50 Anniversary Celebration of Rock n Roll.', 200),
(2, 'Coldplay', 'Johny', 'Wood', 'Wood Inc', 2, 'Coldplay are a British rock band formed in 1996 by lead vocalist Chris Martin and lead guitarist Jonny Buckland at University College London (UCL).[3] After they formed under the name Pectoralz, Guy Berryman joined the group as a bassist and they changed their name to Starfish.', 80),
(3, 'NO MAN''S LAND AND WAITING FOR GODOT', 'Patrik', 'Doherty', 'PDC', 1, 'This fall, four great actors return to Broadway in two great plays, performed in repertory. IAN McKELLEN, PATRICK STEWART, BILLY CRUDUP and SHULER HENSLEY star in Harold Pinter’s comedy NO MAN’S LAND and Samuel Beckett’s classic WAITING FOR GODOT. Sean Mathias'' productions present a startling new look at these two theatrical masterpieces.\r\nIn NO MAN’S LAND, two elderly writers, having met in a London pub, continue drinking and talking into the night. ', 50),
(4, 'The Human Body Exhibition', 'Eventime', 'Jackie', 'Nio', 3, 'he one thing we have in common with people the world over, no matter what else defines and divides us, is the intricate and beautiful human body we inhabit.\r\n\r\nThe Human Body Exhibition takes us on a life-changing journey through our most important possession—our endlessly fascinating body.\r\n\r\nUnder our skins, a series of intricate systems and their related organs cooperate, second by second, to keep us alive and well. The Human Body Exhibition provides a three dimensional look deep inside those systems—skin to bones, head to toe—all with a focus on helping us make more informed decisions about healthcare and lifestyle.', 32),
(5, 'Manchaster United - Liverpool', 'Premier', 'League', 'Premier League', 0, 'The Premier League is an English professional league for men''s association football clubs. At the top of the English football league system, it is the country''s primary football competition. Contested by 20 clubs, it operates on a system of promotion and relegation with the Football League. Besides English clubs, some of the Welsh clubs can also qualify to play, and participation by some Scottish or Irish clubs has also been mooted.', 14);

-- --------------------------------------------------------

--
-- Struktura tabulky `event_show`
--

CREATE TABLE IF NOT EXISTS `event_show` (
  `event_show_id` int(10) NOT NULL,
  `event_show_date` date NOT NULL,
  `event_show_seats` int(4) NOT NULL,
  `event_show_place` varchar(50) NOT NULL,
  `event_show_events_id` int(10) NOT NULL,
  PRIMARY KEY (`event_show_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Vypisuji data pro tabulku `event_show`
--

INSERT INTO `event_show` (`event_show_id`, `event_show_date`, `event_show_seats`, `event_show_place`, `event_show_events_id`) VALUES
(0, '2014-04-30', 500, 'Prague', 0),
(1, '2014-07-10', 499, 'Paris', 0),
(2, '2014-12-23', 1000, 'Rome', 1),
(3, '2014-05-31', 12000, 'Sydney', 2),
(4, '2014-08-01', 450, 'New York', 3),
(5, '2014-08-04', 450, 'New York', 3),
(6, '2015-02-01', 40000, 'Barcelona', 4),
(7, '2014-10-16', 14999, 'London', 5);

-- --------------------------------------------------------

--
-- Struktura tabulky `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `member_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'auto incrementing member_id of each member, unique index',
  `member_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'member''s name, unique',
  `member_password` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'member''s password in salted and hashed format',
  `member_email` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'member''s email, unique',
  `member_first_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `member_last_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `member_home_address` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `member_mobile_telephone` int(20) DEFAULT NULL,
  `member_telephone` int(20) DEFAULT NULL,
  `member_birth` date DEFAULT NULL,
  PRIMARY KEY (`member_id`),
  UNIQUE KEY `user_name` (`member_name`),
  UNIQUE KEY `user_email` (`member_email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='user data' AUTO_INCREMENT=17 ;

--
-- Vypisuji data pro tabulku `members`
--

INSERT INTO `members` (`member_id`, `member_name`, `member_password`, `member_email`, `member_first_name`, `member_last_name`, `member_home_address`, `member_mobile_telephone`, `member_telephone`, `member_birth`) VALUES
(1, 'admin', 'password', 'admin@eventime.com', 'Patrik', 'Vlnas', 'Prostred', 775432534, 342567322, '1991-01-07');

-- --------------------------------------------------------

--
-- Struktura tabulky `reservations`
--

CREATE TABLE IF NOT EXISTS `reservations` (
  `reservation_id` int(10) NOT NULL AUTO_INCREMENT,
  `reservation_made_time` datetime DEFAULT NULL,
  `reservation_price` float DEFAULT NULL,
  `reservation_member_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reservation_reserved_seats` int(5) DEFAULT NULL,
  `reservation_event_id` int(11) DEFAULT NULL,
  `reservation_event_show_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`reservation_id`),
  KEY `reservation_type_id` (`reservation_event_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=103 ;

-- --------------------------------------------------------

--
-- Struktura tabulky `types`
--

CREATE TABLE IF NOT EXISTS `types` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(255) NOT NULL COMMENT 'Jméno typu',
  PRIMARY KEY (`type_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Tabulka typů rezervací';

--
-- Vypisuji data pro tabulku `types`
--

INSERT INTO `types` (`type_id`, `type_name`) VALUES
(0, 'Sport'),
(1, 'Theatre'),
(2, 'Concert'),
(3, 'Exhibition');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
