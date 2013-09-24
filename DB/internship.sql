-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- โฮสต์: localhost
-- เวลาในการสร้าง: 
-- รุ่นของเซิร์ฟเวอร์: 5.0.51
-- รุ่นของ PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- ฐานข้อมูล: `internship`
-- 

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `admin`
-- 

CREATE TABLE `admin` (
  `AdminID` varchar(15) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `Gender` varchar(5) NOT NULL,
  `Major` varchar(20) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `Status` varchar(20) NOT NULL COMMENT 'สถานะ admin',
  `ImgName` varchar(100) default NULL,
  PRIMARY KEY  (`AdminID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 
-- dump ตาราง `admin`
-- 

INSERT INTO `admin` VALUES ('kanokpong', '123456', 'kanokpong', 'aroonniyomsak', 'men', 'BIS', '104/6 หมู่ 123 ถ. ราษฏร์คนึง อ.เมือง จ.ขอนแก่น\r\n40000', '', '66850026579', 'Admin', 'img/profileimg/A-Beautiful-female-volunteer-services-in-the-Asian-Games-swimming-pool-1.jpg');
