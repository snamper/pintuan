<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `hhs_users`;");
E_C("CREATE TABLE `hhs_users` (
  `user_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `aite_id` text NOT NULL,
  `email` varchar(60) NOT NULL DEFAULT '',
  `user_name` varchar(60) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  `question` varchar(255) NOT NULL DEFAULT '',
  `answer` varchar(255) NOT NULL DEFAULT '',
  `sex` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `birthday` date NOT NULL DEFAULT '0000-00-00',
  `user_money` decimal(10,2) NOT NULL DEFAULT '0.00',
  `frozen_money` decimal(10,2) NOT NULL DEFAULT '0.00',
  `pay_points` int(10) unsigned NOT NULL DEFAULT '0',
  `rank_points` int(10) unsigned NOT NULL DEFAULT '0',
  `address_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `reg_time` int(10) unsigned NOT NULL DEFAULT '0',
  `last_login` int(11) unsigned NOT NULL DEFAULT '0',
  `last_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_ip` varchar(15) NOT NULL DEFAULT '',
  `visit_count` smallint(5) unsigned NOT NULL DEFAULT '0',
  `user_rank` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `is_special` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `ec_salt` varchar(10) DEFAULT NULL,
  `salt` varchar(10) NOT NULL DEFAULT '0',
  `parent_id` mediumint(9) NOT NULL DEFAULT '0',
  `flag` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `alias` varchar(60) NOT NULL,
  `msn` varchar(60) NOT NULL,
  `qq` varchar(20) NOT NULL,
  `office_phone` varchar(20) NOT NULL,
  `home_phone` varchar(20) NOT NULL,
  `mobile_phone` varchar(20) NOT NULL,
  `is_validated` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `credit_line` decimal(10,2) unsigned NOT NULL,
  `passwd_question` varchar(50) DEFAULT NULL,
  `passwd_answer` varchar(255) DEFAULT NULL,
  `wxid` char(28) NOT NULL,
  `wxch_bd` char(2) NOT NULL,
  `openid` varchar(50) NOT NULL,
  `headimgurl` varchar(255) NOT NULL,
  `lng` decimal(10,5) DEFAULT NULL,
  `lat` decimal(10,5) DEFAULT NULL,
  `uname` varchar(100) NOT NULL,
  `is_subscribe` tinyint(4) NOT NULL DEFAULT '0',
  `is_send` int(10) DEFAULT '0',
  `uid_1` int(10) DEFAULT '0' COMMENT '一级分销',
  `uid_2` int(10) DEFAULT '0' COMMENT '二级分销',
  `uid_3` int(10) DEFAULT '0' COMMENT '三级分销',
  `registration_time` varchar(15) NOT NULL DEFAULT '',
  `unionid` varchar(100) DEFAULT NULL,
  `app_openid` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_name` (`user_name`),
  KEY `email` (`email`),
  KEY `parent_id` (`parent_id`),
  KEY `flag` (`flag`),
  KEY `uid_1` (`uid_1`),
  KEY `uid_2` (`uid_2`),
  KEY `uid_3` (`uid_3`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `hhs_users` values('1','','','wx149','44b312a89c8254b5ceeb62662fc848e3','','','0','0000-00-00','0.00','0.00','0','0','0','1478218383','1478218589','0000-00-00 00:00:00','0.0.0.0','81','0','0',NULL,'0','0','0','','','','','','','0','0.00',NULL,NULL,'','','oFw1nxNp5N1igv5V1s2_41HbEzRo','',NULL,NULL,'','0','0','0','0','0','','',NULL);");

require("../../inc/footer.php");
?>