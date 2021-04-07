<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `zmb_ecms_infoclass_info`;");
E_C("CREATE TABLE `zmb_ecms_infoclass_info` (
  `classid` int(10) unsigned NOT NULL DEFAULT '0',
  `zz_title` text NOT NULL,
  `z_title` varchar(255) NOT NULL DEFAULT '',
  `qz_title` varchar(255) NOT NULL DEFAULT '',
  `save_title` varchar(10) NOT NULL DEFAULT '',
  `zz_titlepic` text NOT NULL,
  `z_titlepic` varchar(255) NOT NULL DEFAULT '',
  `qz_titlepic` varchar(255) NOT NULL DEFAULT '',
  `save_titlepic` varchar(10) NOT NULL DEFAULT '',
  `zz_newstime` text NOT NULL,
  `z_newstime` varchar(255) NOT NULL DEFAULT '',
  `qz_newstime` varchar(255) NOT NULL DEFAULT '',
  `save_newstime` varchar(10) NOT NULL DEFAULT '',
  `zz_smalltext` text NOT NULL,
  `z_smalltext` varchar(255) NOT NULL DEFAULT '',
  `qz_smalltext` varchar(255) NOT NULL DEFAULT '',
  `save_smalltext` varchar(10) NOT NULL DEFAULT '',
  `zz_myarea` text NOT NULL,
  `z_myarea` varchar(255) NOT NULL DEFAULT '',
  `qz_myarea` varchar(255) NOT NULL DEFAULT '',
  `save_myarea` varchar(10) NOT NULL DEFAULT '',
  `zz_QQ` text NOT NULL,
  `z_QQ` varchar(255) NOT NULL,
  `qz_QQ` varchar(255) NOT NULL,
  `save_QQ` varchar(10) NOT NULL,
  `zz_tebie` text NOT NULL,
  `z_tebie` varchar(255) NOT NULL,
  `qz_tebie` varchar(255) NOT NULL,
  `save_tebie` varchar(10) NOT NULL,
  `zz_zhong` text NOT NULL,
  `z_zhong` varchar(255) NOT NULL,
  `qz_zhong` varchar(255) NOT NULL,
  `save_zhong` varchar(10) NOT NULL,
  `zz_url` text NOT NULL,
  `z_url` varchar(255) NOT NULL,
  `qz_url` varchar(255) NOT NULL,
  `save_url` varchar(10) NOT NULL,
  `zz_namefu` text NOT NULL,
  `z_namefu` varchar(255) NOT NULL,
  `qz_namefu` varchar(255) NOT NULL,
  `save_namefu` varchar(10) NOT NULL,
  `zz_ico` text NOT NULL,
  `z_ico` varchar(255) NOT NULL,
  `qz_ico` varchar(255) NOT NULL,
  `save_ico` varchar(10) NOT NULL,
  PRIMARY KEY (`classid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

@include("../../inc/footer.php");
?>