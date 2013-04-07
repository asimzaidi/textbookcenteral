/*
Navicat MySQL Data Transfer

Source Server         : mysql
Source Server Version : 50524
Source Host           : localhost:3306
Source Database       : textbookcenteral

Target Server Type    : MYSQL
Target Server Version : 50524
File Encoding         : 65001

Date: 2013-04-07 10:04:26
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `books`
-- ----------------------------
DROP TABLE IF EXISTS `books`;
CREATE TABLE `books` (
  `id` int(50) NOT NULL,
  `book_title` varchar(50) DEFAULT NULL,
  `book_authur` varchar(50) DEFAULT NULL,
  `book_language` varchar(50) DEFAULT NULL,
  `book_isbn` varchar(50) DEFAULT NULL,
  `book_revision` varchar(50) DEFAULT NULL,
  `book_published_date` varchar(50) DEFAULT NULL,
  `book_publisher` varchar(50) DEFAULT NULL,
  `book_summary` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of books
-- ----------------------------
INSERT INTO `books` VALUES ('0', 'Mathematics Part 1', 'Asim Z', 'English', '1292-0832-8239', '2', '2012-10-01', 'Paramount Books', 'This book is focused on Mathematics and especially on Algebra.');

-- ----------------------------
-- Table structure for `scans`
-- ----------------------------
DROP TABLE IF EXISTS `scans`;
CREATE TABLE `scans` (
  `id` bigint(255) NOT NULL AUTO_INCREMENT,
  `book_id` int(55) DEFAULT NULL,
  `page_number` int(55) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of scans
-- ----------------------------
INSERT INTO `scans` VALUES ('1', '0', '1');

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `school_name` varchar(50) DEFAULT NULL,
  `graduation_year` varchar(50) DEFAULT NULL,
  `user_name` varchar(50) DEFAULT NULL,
  `user_password` varchar(50) DEFAULT NULL,
  `user_date_registered` datetime DEFAULT NULL,
  `record_update_date` date DEFAULT NULL,
  `user_designation` varchar(255) DEFAULT NULL COMMENT 'either a student or teacher?',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'Anna', 'Morrow', 'Roosevelt High School', '2013', 'ros_ammorrow', '12345', '2012-11-12 00:32:00', '2012-11-12', 'Student');
