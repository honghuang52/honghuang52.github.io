<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `zmb_enewsinfovote`;");
E_C("CREATE TABLE `zmb_enewsinfovote` (
  `pubid` bigint(16) unsigned NOT NULL DEFAULT '0',
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `title` varchar(120) NOT NULL DEFAULT '',
  `votenum` int(10) unsigned NOT NULL DEFAULT '0',
  `voteip` mediumtext NOT NULL,
  `votetext` text NOT NULL,
  `voteclass` tinyint(1) NOT NULL DEFAULT '0',
  `doip` tinyint(1) NOT NULL DEFAULT '0',
  `dotime` date NOT NULL DEFAULT '0000-00-00',
  `tempid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `width` int(10) unsigned NOT NULL DEFAULT '0',
  `height` int(10) unsigned NOT NULL DEFAULT '0',
  `diyotherlink` tinyint(1) NOT NULL DEFAULT '0',
  `infouptime` int(10) unsigned NOT NULL DEFAULT '0',
  `infodowntime` int(10) unsigned NOT NULL DEFAULT '0',
  `copyids` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`pubid`),
  KEY `id` (`id`,`classid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `zmb_enewsinfovote` values('1000080000000146','146','3','','0','','','0','0','0000-00-00','0','0','0','0','0','0',0x31);");
E_D("replace into `zmb_enewsinfovote` values('1000080000000105','105','7','','0','','','0','0','0000-00-00','0','0','0','0','0','0',0x2c3134362c);");
E_D("replace into `zmb_enewsinfovote` values('1000080000000147','147','3','','0','','','0','0','0000-00-00','0','0','0','0','0','0',0x31);");
E_D("replace into `zmb_enewsinfovote` values('1000080000000106','106','7','','0','','','0','0','0000-00-00','0','0','0','0','0','0',0x2c3134372c);");
E_D("replace into `zmb_enewsinfovote` values('1000080000000148','148','3','','0','','','0','0','0000-00-00','0','0','0','0','0','0',0x31);");
E_D("replace into `zmb_enewsinfovote` values('1000080000000043','43','17','','0','','','0','0','0000-00-00','0','0','0','0','0','0',0x2c3134382c);");
E_D("replace into `zmb_enewsinfovote` values('1000080000000149','149','3','','0','','','0','0','0000-00-00','0','0','0','0','0','0',0x31);");
E_D("replace into `zmb_enewsinfovote` values('1000080000000107','107','7','','0','','','0','0','0000-00-00','0','0','0','0','0','0',0x2c3134392c);");

@include("../../inc/footer.php");
?>