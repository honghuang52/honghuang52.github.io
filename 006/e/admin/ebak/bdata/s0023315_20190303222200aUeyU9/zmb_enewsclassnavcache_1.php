<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `zmb_enewsclassnavcache`;");
E_C("CREATE TABLE `zmb_enewsclassnavcache` (
  `navtype` char(16) NOT NULL DEFAULT '',
  `userid` int(10) unsigned NOT NULL DEFAULT '0',
  `modid` smallint(5) unsigned NOT NULL DEFAULT '0',
  KEY `navtype` (`navtype`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `zmb_enewsclassnavcache` values(0x6d6f64636c617373,'0','8');");
E_D("replace into `zmb_enewsclassnavcache` values(0x6a73636c617373,'0','0');");
E_D("replace into `zmb_enewsclassnavcache` values(0x6c697374656e657773,'0','0');");
E_D("replace into `zmb_enewsclassnavcache` values(0x6c697374636c617373,'0','0');");

@include("../../inc/footer.php");
?>