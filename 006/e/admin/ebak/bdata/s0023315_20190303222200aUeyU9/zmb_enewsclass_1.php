<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `zmb_enewsclass`;");
E_C("CREATE TABLE `zmb_enewsclass` (
  `classid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `bclassid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `classname` varchar(50) NOT NULL DEFAULT '',
  `sonclass` text NOT NULL,
  `is_zt` tinyint(1) NOT NULL DEFAULT '0',
  `lencord` smallint(6) NOT NULL DEFAULT '0',
  `link_num` tinyint(4) NOT NULL DEFAULT '0',
  `newstempid` smallint(6) NOT NULL DEFAULT '0',
  `onclick` int(11) NOT NULL DEFAULT '0',
  `listtempid` smallint(6) NOT NULL DEFAULT '0',
  `featherclass` text NOT NULL,
  `islast` tinyint(1) NOT NULL DEFAULT '0',
  `classpath` text NOT NULL,
  `classtype` varchar(10) NOT NULL DEFAULT '',
  `newspath` varchar(20) NOT NULL DEFAULT '',
  `filename` tinyint(1) NOT NULL DEFAULT '0',
  `filetype` varchar(10) NOT NULL DEFAULT '',
  `openpl` tinyint(1) NOT NULL DEFAULT '0',
  `openadd` tinyint(1) NOT NULL DEFAULT '0',
  `newline` int(11) NOT NULL DEFAULT '0',
  `hotline` int(11) NOT NULL DEFAULT '0',
  `goodline` int(11) NOT NULL DEFAULT '0',
  `classurl` varchar(200) NOT NULL DEFAULT '',
  `groupid` smallint(6) NOT NULL DEFAULT '0',
  `myorder` smallint(6) NOT NULL DEFAULT '0',
  `filename_qz` varchar(20) NOT NULL DEFAULT '',
  `hotplline` tinyint(4) NOT NULL DEFAULT '0',
  `modid` smallint(6) NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `firstline` tinyint(4) NOT NULL DEFAULT '0',
  `bname` varchar(50) NOT NULL DEFAULT '',
  `islist` tinyint(1) NOT NULL DEFAULT '0',
  `searchtempid` smallint(6) NOT NULL DEFAULT '0',
  `tid` smallint(6) NOT NULL DEFAULT '0',
  `tbname` varchar(60) NOT NULL DEFAULT '',
  `maxnum` int(11) NOT NULL DEFAULT '0',
  `checkpl` tinyint(1) NOT NULL DEFAULT '0',
  `down_num` tinyint(4) NOT NULL DEFAULT '0',
  `online_num` tinyint(4) NOT NULL DEFAULT '0',
  `listorder` varchar(50) NOT NULL DEFAULT '',
  `reorder` varchar(50) NOT NULL DEFAULT '',
  `intro` text NOT NULL,
  `classimg` varchar(255) NOT NULL DEFAULT '',
  `jstempid` smallint(6) NOT NULL DEFAULT '0',
  `addinfofen` int(11) NOT NULL DEFAULT '0',
  `listdt` tinyint(1) NOT NULL DEFAULT '0',
  `showclass` tinyint(1) NOT NULL DEFAULT '0',
  `showdt` tinyint(1) NOT NULL DEFAULT '0',
  `checkqadd` tinyint(1) NOT NULL DEFAULT '0',
  `qaddlist` tinyint(1) NOT NULL DEFAULT '0',
  `qaddgroupid` text NOT NULL,
  `qaddshowkey` tinyint(1) NOT NULL DEFAULT '0',
  `adminqinfo` tinyint(1) NOT NULL DEFAULT '0',
  `doctime` smallint(6) NOT NULL DEFAULT '0',
  `classpagekey` varchar(255) NOT NULL DEFAULT '',
  `dtlisttempid` smallint(6) NOT NULL DEFAULT '0',
  `classtempid` smallint(6) NOT NULL DEFAULT '0',
  `nreclass` tinyint(1) NOT NULL DEFAULT '0',
  `nreinfo` tinyint(1) NOT NULL DEFAULT '0',
  `nrejs` tinyint(1) NOT NULL DEFAULT '0',
  `nottobq` tinyint(1) NOT NULL DEFAULT '0',
  `ipath` varchar(255) NOT NULL DEFAULT '',
  `addreinfo` tinyint(1) NOT NULL DEFAULT '0',
  `haddlist` tinyint(4) NOT NULL DEFAULT '0',
  `sametitle` tinyint(1) NOT NULL DEFAULT '0',
  `definfovoteid` smallint(6) NOT NULL DEFAULT '0',
  `wburl` varchar(255) NOT NULL DEFAULT '',
  `qeditchecked` tinyint(1) NOT NULL DEFAULT '0',
  `wapstyleid` smallint(6) NOT NULL DEFAULT '0',
  `repreinfo` tinyint(1) NOT NULL DEFAULT '0',
  `pltempid` smallint(6) NOT NULL DEFAULT '0',
  `cgroupid` text NOT NULL,
  `yhid` smallint(6) NOT NULL DEFAULT '0',
  `wfid` smallint(6) NOT NULL DEFAULT '0',
  `cgtoinfo` tinyint(1) NOT NULL DEFAULT '0',
  `bdinfoid` varchar(25) NOT NULL DEFAULT '',
  `repagenum` smallint(5) unsigned NOT NULL DEFAULT '0',
  `keycid` smallint(6) NOT NULL DEFAULT '0',
  `allinfos` int(10) unsigned NOT NULL DEFAULT '0',
  `infos` int(10) unsigned NOT NULL DEFAULT '0',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `oneinfo` tinyint(1) NOT NULL DEFAULT '0',
  `addsql` varchar(255) NOT NULL DEFAULT '',
  `wapislist` tinyint(1) NOT NULL DEFAULT '0',
  `fclast` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`classid`),
  KEY `bclassid` (`bclassid`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8");
E_D("replace into `zmb_enewsclass` values('1','0',0xe68a80e69cafe5afbce888aa,0x7c337c347c357c367c377c387c397c31307c31317c31327c31337c31347c31357c31367c31377c31387c31397c32307c32317c,'0','25','10','9','0','8','','0',0x75726c,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','1','10','10','10','','0','0','','10','8','1','10',0xe68a80e69cafe5afbce888aa,'0','0','8',0x696e666f,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','8','1','0','0','0','0','','1','0','0','0','','0','2','0','1','','0','0','0','','0','0','0','0','1545109431','0','','0','1545109431');");
E_D("replace into `zmb_enewsclass` values('3','1',0x5151e69599e7a88b,'','0','9','10','9','0','8',0x7c317c,'1',0x75726c2f6a69616f6368656e67,0x2e68746d6c,'','0',0x2e68746d6c,'0','1','10','10','10','','0','0','','10','8','1','10',0x5151e69599e7a88b,'0','1','8',0x696e666f,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','8','2','0','0','0','0','','1','0','0','0','','0','2','0','0','','0','0','0','','0','0','35','35','1545116059','0','','0','1546776125');");
E_D("replace into `zmb_enewsclass` values('4','1',0xe5bdb1e8a786e7bd91e7ab99,'','0','9','10','9','0','8',0x7c317c,'1',0x75726c2f79696e67736869,0x2e68746d6c,'','0',0x2e68746d6c,'0','1','10','10','10','','0','0','','10','8','1','10',0xe5bdb1e8a786e7bd91e7ab99,'0','0','8',0x696e666f,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','8','2','0','0','0','0','','1','0','0','0','','0','2','0','0','','0','0','0','','0','0','11','11','1545116114','0','','0','1545116114');");
E_D("replace into `zmb_enewsclass` values('5','1',0xe4b8aae680a7e7bd91e7ab99,'','0','9','10','9','0','8',0x7c317c,'1',0x75726c2f676578696e67,0x2e68746d6c,'','0',0x2e68746d6c,'0','1','10','10','10','','0','0','','10','8','1','10',0xe4b8aae680a7e7bd91e7ab99,'0','0','8',0x696e666f,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','0','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','7','7','1545116138','0','','0','1545116382');");
E_D("replace into `zmb_enewsclass` values('9','1',0x5151e68a80e69caf,'','0','9','10','9','0','8',0x7c317c,'1',0x75726c2f6a69736875,0x2e68746d6c,'','0',0x2e68746d6c,'0','1','10','10','10','','0','0','','10','8','1','10',0x5151e68a80e69caf,'0','0','8',0x696e666f,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','8','2','0','0','0','0','','1','0','0','0','','0','2','0','0','','0','0','0','','0','0','23','23','1545117307','0','','0','1545117307');");
E_D("replace into `zmb_enewsclass` values('6','1',0xe7bd91e6b8b8e7bd91e7ab99,'','0','9','10','9','0','8',0x7c317c,'1',0x75726c2f77616e67796f75,0x2e68746d6c,'','0',0x2e68746d6c,'0','1','10','10','10','','0','0','','10','8','1','10',0xe7bd91e6b8b8e7bd91e7ab99,'0','0','8',0x696e666f,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','8','1','0','0','0','0','','1','0','0','0','','0','0','0','1','','0','0','0','','0','0','0','0','1545116230','0','','0','1545116230');");
E_D("replace into `zmb_enewsclass` values('7','1',0xe6898be6b8b8e7bd91e7ab99,'','0','9','10','9','0','8',0x7c317c,'1',0x75726c2f73686f75796f75,0x2e68746d6c,'','0',0x2e68746d6c,'0','1','10','10','10','','0','0','','10','8','1','10',0xe6898be6b8b8e7bd91e7ab99,'0','0','8',0x696e666f,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','8','2','0','0','0','0','','1','0','0','0','','0','2','0','0','','0','0','0','','0','0','4','4','1545116282','0','','0','1545116282');");
E_D("replace into `zmb_enewsclass` values('8','1',0xe6a8a1e69dbfe7bd91e7ab99,'','0','9','10','9','0','8',0x7c317c,'1',0x75726c2f6d6f62616e,0x2e68746d6c,'','0',0x2e68746d6c,'0','1','10','10','10','','0','0','','10','8','1','10',0xe6a8a1e69dbfe7bd91e7ab99,'0','0','8',0x696e666f,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','8','2','0','0','0','0','','1','0','0','0','','0','2','0','0','','0','0','0','','0','0','7','7','1545116317','0','','0','1545116317');");
E_D("replace into `zmb_enewsclass` values('10','1',0xe58d9ae5aea2e4b98be5aeb6,'','0','9','10','9','0','8',0x7c317c,'1',0x75726c2f626f6b65,0x2e68746d6c,'','0',0x2e68746d6c,'0','1','10','10','10','','0','0','','10','8','1','10',0xe58d9ae5aea2e4b98be5aeb6,'0','1','8',0x696e666f,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','8','2','0','0','0','0','','1','0','0','0','','0','2','0','0','','0','0','0','','0','0','4','4','1545185228','0','','0','1545185228');");
E_D("replace into `zmb_enewsclass` values('11','1',0xe887aae5ada6e7bd91e7ab99,'','0','9','10','9','0','8',0x7c317c,'1',0x75726c2f7a69787565,0x2e68746d6c,'','0',0x2e68746d6c,'0','1','10','10','10','','0','0','','10','8','1','10',0xe887aae5ada6e7bd91e7ab99,'0','1','8',0x696e666f,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','8','2','0','0','0','0','','1','0','0','0','','0','2','0','0','','0','0','0','','0','0','7','7','1545196298','0','','0','1545196298');");
E_D("replace into `zmb_enewsclass` values('12','1',0x576562e7bd91e7ab99,'','0','9','10','9','0','8',0x7c317c,'1',0x75726c2f776562,0x2e68746d6c,'','0',0x2e68746d6c,'0','1','10','10','10','','0','0','','10','8','1','10',0x576562e7bd91e7ab99,'0','1','8',0x696e666f,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','8','2','0','0','0','0','','1','0','0','0','','0','2','0','0','','0','0','0','','0','0','8','8','1545196341','0','','0','1545196341');");
E_D("replace into `zmb_enewsclass` values('13','1',0xe5aea1e7be8ee7bd91e7ab99,'','0','9','10','9','0','8',0x7c317c,'1',0x75726c2f7368656e6d6569,0x2e68746d6c,'','0',0x2e68746d6c,'0','1','10','10','10','','0','0','','10','8','1','10',0xe5aea1e7be8ee7bd91e7ab99,'0','1','8',0x696e666f,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','8','2','0','0','0','0','','1','0','0','0','','0','2','0','0','','0','0','0','','0','0','0','0','1545196359','0','','0','1545196359');");
E_D("replace into `zmb_enewsclass` values('14','1',0xe9858de889b2e7bd91e7ab99,'','0','9','10','9','0','8',0x7c317c,'1',0x75726c2f7065697365,0x2e68746d6c,'','0',0x2e68746d6c,'0','1','10','10','10','','0','0','','10','8','1','10',0xe9858de889b2e7bd91e7ab99,'0','1','8',0x696e666f,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','8','2','0','0','0','0','','1','0','0','0','','0','2','0','0','','0','0','0','','0','0','0','0','1545196377','0','','0','1545196377');");
E_D("replace into `zmb_enewsclass` values('15','1',0x494443e7bd91e7ab99,'','0','9','10','9','0','8',0x7c317c,'1',0x75726c2f696463,0x2e68746d6c,'','0',0x2e68746d6c,'0','1','10','10','10','','0','0','','10','8','1','10',0x494443e7bd91e7ab99,'0','1','8',0x696e666f,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','8','2','0','0','0','0','','1','0','0','0','','0','2','0','0','','0','0','0','','0','0','7','7','1545196402','0','','0','1545196402');");
E_D("replace into `zmb_enewsclass` values('16','1',0xe7a791e68a80e7bd91e7ab99,'','0','9','10','9','0','8',0x7c317c,'1',0x75726c2f6b656a69,0x2e68746d6c,'','0',0x2e68746d6c,'0','1','10','10','10','','0','0','','10','8','1','10',0xe7a791e68a80e7bd91e7ab99,'0','1','8',0x696e666f,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','8','2','0','0','0','0','','1','0','0','0','','0','2','0','0','','0','0','0','','0','0','0','0','1545196420','0','','0','1545196420');");
E_D("replace into `zmb_enewsclass` values('17','1',0xe696b0e997bbe7bd91e7ab99,'','0','9','10','9','0','8',0x7c317c,'1',0x75726c2f6e657773,0x2e68746d6c,'','0',0x2e68746d6c,'0','1','10','10','10','','0','0','','10','8','1','10',0xe696b0e997bbe7bd91e7ab99,'0','1','8',0x696e666f,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','8','2','0','0','0','0','','1','0','0','0','','0','2','0','0','','0','0','0','','0','0','7','7','1545196442','0','','0','1545196442');");
E_D("replace into `zmb_enewsclass` values('18','1',0xe8b4ade789a9e7bd91e7ab99,'','0','9','10','9','0','8',0x7c317c,'1',0x75726c2f676f757775,0x2e68746d6c,'','0',0x2e68746d6c,'0','1','10','10','10','','0','0','','10','8','1','10',0xe8b4ade789a9e7bd91e7ab99,'0','1','8',0x696e666f,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','8','2','0','0','0','0','','1','0','0','0','','0','2','0','0','','0','0','0','','0','0','1','1','1545196492','0','','0','1545196492');");
E_D("replace into `zmb_enewsclass` values('19','1',0xe5afbce888aae7bd91e7ab99,'','0','9','10','9','0','8',0x7c317c,'1',0x75726c2f64616f68616e67,0x2e68746d6c,'','0',0x2e68746d6c,'0','1','10','10','10','','0','0','','10','8','1','10',0xe5afbce888aae7bd91e7ab99,'0','1','8',0x696e666f,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','8','2','0','0','0','0','','1','0','0','0','','0','2','0','0','','0','0','0','','0','0','7','7','1545196851','0','','0','1545196851');");
E_D("replace into `zmb_enewsclass` values('20','1',0xe8aebae59d9be7bd91e7ab99,'','0','9','10','9','0','8',0x7c317c,'1',0x75726c2f6c756e74616e,0x2e68746d6c,'','0',0x2e68746d6c,'0','1','10','10','10','','0','0','','10','8','1','10',0xe8aebae59d9be7bd91e7ab99,'0','1','8',0x696e666f,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','8','2','0','0','0','0','','1','0','0','0','','0','2','0','0','','0','0','0','','0','0','3','3','1545196870','0','','0','1545196870');");
E_D("replace into `zmb_enewsclass` values('21','1',0xe585b6e4bb96e7bd91e7ab99,'','0','9','10','9','0','8',0x7c317c,'1',0x75726c2f71697461,0x2e68746d6c,'','0',0x2e68746d6c,'0','1','10','10','10','','0','0','','10','8','1','10',0xe585b6e4bb96e7bd91e7ab99,'0','1','8',0x696e666f,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','8','2','0','0','0','0','','1','0','0','0','','0','2','0','0','','0','0','0','','0','0','5','5','1545196890','0','','0','1545196890');");

@include("../../inc/footer.php");
?>