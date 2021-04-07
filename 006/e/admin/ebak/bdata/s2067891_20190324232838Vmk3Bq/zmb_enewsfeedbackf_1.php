<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `zmb_enewsfeedbackf`;");
E_C("CREATE TABLE `zmb_enewsfeedbackf` (
  `fid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `f` varchar(30) NOT NULL DEFAULT '',
  `fname` varchar(30) NOT NULL DEFAULT '',
  `fform` varchar(20) NOT NULL DEFAULT '',
  `fzs` varchar(255) NOT NULL DEFAULT '',
  `myorder` smallint(6) NOT NULL DEFAULT '0',
  `ftype` varchar(30) NOT NULL DEFAULT '',
  `flen` varchar(20) NOT NULL DEFAULT '',
  `fformsize` varchar(12) NOT NULL DEFAULT '',
  `fvalue` text NOT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8");
E_D("replace into `zmb_enewsfeedbackf` values('1',0x7469746c65,0xe7bd91e7ab99e5908de7a7b0,0x74657874,'','7',0x56415243484152,0x313230,'','');");
E_D("replace into `zmb_enewsfeedbackf` values('2',0x73617974657874,0xe7ab99e995bfe79599e8a880,0x7465787461726561,'','8',0x54455854,'','','');");
E_D("replace into `zmb_enewsfeedbackf` values('4',0x656d61696c,0xe7ab99e995bfe982aee7aeb1,0x74657874,'','3',0x56415243484152,0x3830,'','');");
E_D("replace into `zmb_enewsfeedbackf` values('6',0x686f6d6570616765,0xe7bd91e7ab99e59cb0e59d80,0x74657874,'','5',0x56415243484152,0x313630,'','');");

@include("../../inc/footer.php");
?>