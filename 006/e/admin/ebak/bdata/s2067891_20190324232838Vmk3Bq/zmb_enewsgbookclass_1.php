<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `zmb_enewsgbookclass`;");
E_C("CREATE TABLE `zmb_enewsgbookclass` (
  `bid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `bname` varchar(60) NOT NULL DEFAULT '',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `groupid` smallint(6) NOT NULL DEFAULT '0',
  PRIMARY KEY (`bid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `zmb_enewsgbookclass` values('1',0xe9bb98e8aea4e79599e8a880e58886e7b1bb,'0','0');");
E_D("replace into `zmb_enewsgbookclass` values('2',0xe5afbce888aae68f90e4baa4,'1','0');");

@include("../../inc/footer.php");
?>