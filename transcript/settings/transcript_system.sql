-- Adminer 4.2.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `lessons`;
CREATE TABLE `lessons` (
  `lesson_id` int(11) NOT NULL AUTO_INCREMENT,
  `lesson_title` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`lesson_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `lessons` (`lesson_id`, `lesson_title`) VALUES
(1,	'Mathematics'),
(2,	'Computer Science'),
(3,	'English'),
(4,	'History');

DROP TABLE IF EXISTS `ratings`;
CREATE TABLE `ratings` (
  `user_id` int(11) NOT NULL,
  `lesson_id` int(11) NOT NULL,
  `rating` enum('A+','A','A-','B+','B','B-','C+','C','C-','D+','D','E/F') COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `ratings` (`user_id`, `lesson_id`, `rating`, `date`) VALUES
(1,	1,	'D+',	'2015-01-13 23:06:39'),
(1,	2,	'A',	'2015-02-13 23:06:54'),
(1,	3,	'A-',	'2015-04-13 23:07:10'),
(1,	4,	'A+',	'2015-07-13 23:07:39'),
(2,	1,	'B+',	'2015-07-13 23:08:58'),
(2,	2,	'B',	'2015-07-13 23:09:08'),
(2,	3,	'B-',	'2015-07-13 23:09:12'),
(2,	4,	'C+',	'2015-07-13 23:09:20'),
(3,	1,	'C+',	'2015-07-13 23:09:38'),
(3,	2,	'C',	'2015-07-13 23:09:43'),
(3,	3,	'C-',	'2015-07-13 23:09:47'),
(3,	4,	'D+',	'2015-07-13 23:09:54');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `user_last_name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `users` (`user_id`, `user_name`, `user_last_name`) VALUES
(1,	'Rodion',	'Raskolnikov'),
(2,	'Nikola',	'Tesla'),
(3,	'Thomas',	'Edison');

-- 2015-07-16 21:32:13
