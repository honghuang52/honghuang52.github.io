<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `zmb_enewslog`;");
E_C("CREATE TABLE `zmb_enewslog` (
  `loginid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL DEFAULT '',
  `logintime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `loginip` varchar(20) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `password` varchar(30) NOT NULL DEFAULT '',
  `loginauth` tinyint(1) NOT NULL DEFAULT '0',
  `ipport` varchar(6) NOT NULL DEFAULT '',
  PRIMARY KEY (`loginid`),
  KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=99 DEFAULT CHARSET=utf8");
E_D("replace into `zmb_enewslog` values('1',0x323534393035353237,'2018-12-18 12:50:22',0x312e3139322e32312e38,'1','','0',0x3431303835);");
E_D("replace into `zmb_enewslog` values('2',0x323534393035353237,'2018-12-18 18:45:18',0x312e3139322e32312e38,'1','','0',0x3430313435);");
E_D("replace into `zmb_enewslog` values('3',0x323534393035353237,'2018-12-18 22:42:37',0x312e3139322e32312e38,'1','','0',0x3430343931);");
E_D("replace into `zmb_enewslog` values('4',0x323534393035353237,'2018-12-19 10:03:46',0x3137312e382e34322e3737,'1','','0',0x3439323837);");
E_D("replace into `zmb_enewslog` values('5',0x323534393035353237,'2018-12-19 10:06:33',0x3231382e32382e3137392e313938,'1','','0',0x3439323838);");
E_D("replace into `zmb_enewslog` values('6',0x323534393035353237,'2018-12-19 11:15:07',0x3137312e382e34322e3737,'1','','0',0x3530343633);");
E_D("replace into `zmb_enewslog` values('7',0x323534393035353237,'2018-12-19 11:52:25',0x312e3139322e32312e38,'1','','0',0x3430393337);");
E_D("replace into `zmb_enewslog` values('8',0x323534393035353237,'2018-12-19 11:57:34',0x312e3139322e32312e38,'1','','0',0x3430353331);");
E_D("replace into `zmb_enewslog` values('9',0x323534393035353237,'2018-12-19 12:55:54',0x312e3139322e32312e38,'1','','0',0x3431343633);");
E_D("replace into `zmb_enewslog` values('10',0x323534393035353237,'2018-12-19 13:11:14',0x312e3139322e32312e38,'1','','0',0x3431303038);");
E_D("replace into `zmb_enewslog` values('11',0x323534393035353237,'2018-12-19 15:22:19',0x312e3139322e32312e38,'1','','0',0x3431303731);");
E_D("replace into `zmb_enewslog` values('12',0x323534393035353237,'2018-12-19 19:38:29',0x312e3139322e32312e38,'1','','0',0x3430373038);");
E_D("replace into `zmb_enewslog` values('13',0x323534393035353237,'2018-12-20 10:11:42',0x3131372e3135382e3232302e32,'1','','0',0x31333833);");
E_D("replace into `zmb_enewslog` values('14',0x323534393035353237,'2018-12-20 12:09:48',0x312e3139322e32312e38,'1','','0',0x3430353736);");
E_D("replace into `zmb_enewslog` values('15',0x323534393035353237,'2018-12-20 15:56:57',0x312e3139322e32312e38,'1','','0',0x3430343639);");
E_D("replace into `zmb_enewslog` values('16',0x323534393035353237,'2018-12-20 17:02:11',0x312e3139322e32312e38,'1','','0',0x3430353338);");
E_D("replace into `zmb_enewslog` values('17',0x323534393035353237,'2018-12-21 10:58:19',0x3131372e3135382e3232302e32,'1','','0',0x32303035);");
E_D("replace into `zmb_enewslog` values('18',0x323534393035353237,'2018-12-21 12:16:36',0x312e3139322e32312e323232,'1','','0',0x31313630);");
E_D("replace into `zmb_enewslog` values('19',0x323534393035353237,'2018-12-21 13:02:43',0x312e3139322e32312e323232,'1','','0',0x31323930);");
E_D("replace into `zmb_enewslog` values('20',0x323534393035353237,'2018-12-21 15:57:53',0x312e3139322e32312e323232,'1','','0',0x32393830);");
E_D("replace into `zmb_enewslog` values('21',0x323534393035353237,'2018-12-21 18:32:34',0x312e3139322e32312e323232,'1','','0',0x31363439);");
E_D("replace into `zmb_enewslog` values('22',0x323534393035353237,'2018-12-22 14:00:10',0x312e3139322e32312e323232,'1','','0',0x31303734);");
E_D("replace into `zmb_enewslog` values('23',0x323534393035353237,'2018-12-22 16:54:22',0x312e3139322e32312e323232,'1','','0',0x31363731);");
E_D("replace into `zmb_enewslog` values('24',0x323534393035353237,'2018-12-22 19:07:58',0x312e3139322e32312e323232,'1','','0',0x32343132);");
E_D("replace into `zmb_enewslog` values('25',0x323534393035353237,'2018-12-23 12:47:25',0x312e3139322e32312e323232,'1','','0',0x31363235);");
E_D("replace into `zmb_enewslog` values('26',0x323534393035353237,'2018-12-23 14:01:01',0x312e3139322e32312e323232,'1','','0',0x32363734);");
E_D("replace into `zmb_enewslog` values('27',0x323534393035353237,'2018-12-23 16:07:48',0x312e3139322e32312e323232,'1','','0',0x32323133);");
E_D("replace into `zmb_enewslog` values('28',0x323534393035353237,'2018-12-23 18:14:21',0x312e3139322e32312e323232,'1','','0',0x32313535);");
E_D("replace into `zmb_enewslog` values('29',0x323534393035353237,'2018-12-25 17:55:01',0x3132332e3134392e3234322e3238,'1','','0',0x3232333931);");
E_D("replace into `zmb_enewslog` values('30',0x323534393035353237,'2018-12-28 17:03:01',0x3132332e3134392e3234322e3536,'1','','0',0x3132363531);");
E_D("replace into `zmb_enewslog` values('31',0x323534393035353237,'2018-12-30 13:35:38',0x3137312e382e3234332e3331,'1','','0',0x36323438);");
E_D("replace into `zmb_enewslog` values('32',0x323534393035353237,'2019-01-02 14:17:49',0x3132332e3134392e3234322e313130,'1','','0',0x3337333539);");
E_D("replace into `zmb_enewslog` values('33',0x323534393035353237,'2019-01-02 18:30:44',0x3132332e3134392e3234322e313130,'1','','0',0x3336373338);");
E_D("replace into `zmb_enewslog` values('34',0x323534393035353237,'2019-01-03 12:32:20',0x3132332e3134392e3234322e313130,'1','','0',0x3336393931);");
E_D("replace into `zmb_enewslog` values('35',0x323534393035353237,'2019-01-04 12:49:23',0x312e3139322e32312e313636,'1','','0',0x3331303632);");
E_D("replace into `zmb_enewslog` values('36',0x323534393035353237,'2019-01-05 16:19:22',0x312e3139322e32312e313636,'1','','0',0x3331313234);");
E_D("replace into `zmb_enewslog` values('37',0x323534393035353237,'2019-01-05 16:59:00',0x312e3139322e32312e313636,'1','','0',0x3239393936);");
E_D("replace into `zmb_enewslog` values('38',0x323534393035353237,'2019-01-05 17:13:43',0x312e3139322e32312e313636,'1','','0',0x3330373538);");
E_D("replace into `zmb_enewslog` values('39',0x323534393035353237,'2019-01-05 23:49:49',0x312e3139322e32312e313636,'1','','0',0x3331373133);");
E_D("replace into `zmb_enewslog` values('40',0x323534393035353237,'2019-01-06 11:27:54',0x312e3139322e32312e313636,'1','','0',0x3331353932);");
E_D("replace into `zmb_enewslog` values('41',0x323534393035353237,'2019-01-06 15:20:41',0x312e3139322e32312e313636,'1','','0',0x3239383434);");
E_D("replace into `zmb_enewslog` values('42',0x323534393035353237,'2019-01-06 19:15:56',0x312e3139322e32312e313636,'1','','0',0x3330313434);");
E_D("replace into `zmb_enewslog` values('43',0x323534393035353237,'2019-01-06 20:29:03',0x312e3139322e32312e313636,'1','','0',0x3331343832);");
E_D("replace into `zmb_enewslog` values('44',0x323534393035353237,'2019-01-07 13:14:56',0x312e3139322e32312e323434,'1','','0',0x33303234);");
E_D("replace into `zmb_enewslog` values('45',0x323534393035353237,'2019-01-09 08:24:26',0x3137312e382e34322e3737,'1','','0',0x31373134);");
E_D("replace into `zmb_enewslog` values('46',0x323534393035353237,'2019-01-10 21:20:50',0x312e3139322e32312e3531,'1','','0',0x3132303239);");
E_D("replace into `zmb_enewslog` values('47',0x323534393035353237,'2019-01-12 13:32:33',0x312e3139322e32302e313839,'1','','0',0x34383435);");
E_D("replace into `zmb_enewslog` values('48',0x323534393035353237,'2019-01-13 12:07:48',0x312e3139322e32302e313839,'1','','0',0x34353534);");
E_D("replace into `zmb_enewslog` values('49',0x323534393035353237,'2019-01-14 15:41:13',0x3132332e3134392e3234322e323133,'1','','0',0x3438363937);");
E_D("replace into `zmb_enewslog` values('50',0x323534393035353237,'2019-01-16 09:21:30',0x3132332e3134392e3234322e323133,'1','','0',0x3439303633);");
E_D("replace into `zmb_enewslog` values('51',0x323534393035353237,'2019-01-17 19:25:28',0x3232332e39312e3139352e313734,'1','','0',0x3333323636);");
E_D("replace into `zmb_enewslog` values('52',0x323534393035353237,'2019-01-18 13:18:46',0x3232332e39312e3139352e313734,'1','','0',0x3333383138);");
E_D("replace into `zmb_enewslog` values('53',0x323534393035353237,'2019-01-20 10:46:58',0x3232332e39312e3139352e313939,'1','','0',0x3439353230);");
E_D("replace into `zmb_enewslog` values('54',0x323534393035353237,'2019-01-21 10:31:42',0x3232332e39312e3139352e3239,'1','','0',0x3630313737);");
E_D("replace into `zmb_enewslog` values('55',0x323534393035353237,'2019-01-22 22:28:04',0x3232332e39312e3139352e3239,'1','','0',0x3539363532);");
E_D("replace into `zmb_enewslog` values('56',0x323534393035353237,'2019-01-24 10:46:30',0x3232332e39312e3139352e3239,'1','','0',0x3539333933);");
E_D("replace into `zmb_enewslog` values('57',0x323534393035353237,'2019-01-25 19:51:50',0x3232332e39312e3139362e3836,'1','','0',0x3534383937);");
E_D("replace into `zmb_enewslog` values('58',0x323534393035353237,'2019-01-26 15:49:23',0x3232332e39312e3139362e3836,'1','','0',0x3535323738);");
E_D("replace into `zmb_enewslog` values('59',0x323534393035353237,'2019-01-26 20:27:42',0x3232332e39312e3139352e3231,'1','','0',0x3530353134);");
E_D("replace into `zmb_enewslog` values('60',0x323534393035353237,'2019-01-26 20:35:47',0x3232332e39312e3139352e3231,'1','','0',0x3530383639);");
E_D("replace into `zmb_enewslog` values('61',0x323534393035353237,'2019-01-27 16:32:26',0x3232332e39312e3139352e313734,'1','','0',0x3131393539);");
E_D("replace into `zmb_enewslog` values('62',0x323534393035353237,'2019-01-28 12:39:25',0x3232332e39312e3139352e313734,'0','','0',0x3131383031);");
E_D("replace into `zmb_enewslog` values('63',0x323534393035353237,'2019-01-28 12:39:35',0x3232332e39312e3139352e313734,'1','','0',0x3131383031);");
E_D("replace into `zmb_enewslog` values('64',0x323534393035353237,'2019-01-29 18:44:09',0x3232332e39312e3139352e3934,'0','','0',0x3436393132);");
E_D("replace into `zmb_enewslog` values('65',0x323534393035353237,'2019-01-29 18:44:19',0x3232332e39312e3139352e3934,'1','','0',0x3436393132);");
E_D("replace into `zmb_enewslog` values('66',0x323534393035353237,'2019-01-30 11:34:18',0x3232332e39312e3139352e3934,'1','','0',0x3436333032);");
E_D("replace into `zmb_enewslog` values('67',0x323534393035353237,'2019-02-01 13:13:12',0x3232332e39312e3139362e313639,'0','','0',0x35313436);");
E_D("replace into `zmb_enewslog` values('68',0x323534393035353237,'2019-02-01 13:13:21',0x3232332e39312e3139362e313639,'1','','0',0x35313436);");
E_D("replace into `zmb_enewslog` values('69',0x323534393035353237,'2019-02-01 19:40:31',0x3232332e39312e3139362e313639,'1','','0',0x35393633);");
E_D("replace into `zmb_enewslog` values('70',0x323534393035353237,'2019-02-03 11:10:10',0x3232332e39312e3139362e313536,'0','','0',0x3436363432);");
E_D("replace into `zmb_enewslog` values('71',0x323534393035353237,'2019-02-03 11:10:20',0x3232332e39312e3139362e313536,'0','','0',0x3436363432);");
E_D("replace into `zmb_enewslog` values('72',0x323534393035353237,'2019-02-03 11:10:31',0x3232332e39312e3139362e313536,'1','','0',0x3436363432);");
E_D("replace into `zmb_enewslog` values('73',0x323534393035353237,'2019-02-03 12:23:31',0x3232332e39312e3139362e313536,'1','','0',0x3437313232);");
E_D("replace into `zmb_enewslog` values('74',0x323534393035353237,'2019-02-07 13:01:53',0x3232332e39312e3139352e323036,'1','','0',0x31323130);");
E_D("replace into `zmb_enewslog` values('75',0x323534393035353237,'2019-02-14 19:22:24',0x3232332e39312e3139352e323432,'1','','0',0x3338373838);");
E_D("replace into `zmb_enewslog` values('76',0x323534393035353237,'2019-02-16 11:34:40',0x3232332e39312e3139352e313530,'1','','0',0x3130383735);");
E_D("replace into `zmb_enewslog` values('77',0x323534393035353237,'2019-02-16 12:38:49',0x3232332e39312e3139352e313530,'1','','0',0x3130343932);");
E_D("replace into `zmb_enewslog` values('78',0x323534393035353237,'2019-02-16 14:05:31',0x3232332e39312e3139352e313530,'1','','0',0x3130363734);");
E_D("replace into `zmb_enewslog` values('79',0x323534393035353237,'2019-02-16 18:16:35',0x3232332e39312e3139352e313530,'1','','0',0x3130373939);");
E_D("replace into `zmb_enewslog` values('80',0x323534393035353237,'2019-02-18 18:38:47',0x3232332e39312e3139352e3730,'1','','0',0x3539353633);");
E_D("replace into `zmb_enewslog` values('81',0x323534393035353237,'2019-02-20 11:39:28',0x3232332e39312e3139352e3730,'1','','0',0x3539333733);");
E_D("replace into `zmb_enewslog` values('82',0x323534393035353237,'2019-02-20 18:25:26',0x3232332e39312e3139352e3730,'1','','0',0x3539383235);");
E_D("replace into `zmb_enewslog` values('83',0x323534393035353237,'2019-02-21 14:09:14',0x3232332e39312e3139362e3831,'1','','0',0x3338363636);");
E_D("replace into `zmb_enewslog` values('84',0x323534393035353237,'2019-02-21 18:26:01',0x3232332e39312e3139362e3831,'1','','0',0x3339313239);");
E_D("replace into `zmb_enewslog` values('85',0x323534393035353237,'2019-02-22 10:49:53',0x3232332e39312e3139362e3831,'1','','0',0x3338373131);");
E_D("replace into `zmb_enewslog` values('86',0x323534393035353237,'2019-02-22 12:51:56',0x3232332e39312e3139362e3831,'1','','0',0x3338373638);");
E_D("replace into `zmb_enewslog` values('87',0x323534393035353237,'2019-02-24 20:09:14',0x3132332e3134392e3234322e3537,'1','','0',0x3237313235);");
E_D("replace into `zmb_enewslog` values('88',0x323534393035353237,'2019-02-26 12:41:55',0x312e3139322e32312e3935,'1','','0',0x3537313037);");
E_D("replace into `zmb_enewslog` values('89',0x323534393035353237,'2019-02-26 14:42:01',0x312e3139322e32312e3935,'1','','0',0x3538323439);");
E_D("replace into `zmb_enewslog` values('90',0x323534393035353237,'2019-02-26 20:28:04',0x312e3139322e32312e3935,'1','','0',0x3538313734);");
E_D("replace into `zmb_enewslog` values('91',0x323534393035353237,'2019-02-28 12:37:46',0x312e3139322e32312e3935,'1','','0',0x3537373833);");
E_D("replace into `zmb_enewslog` values('92',0x323534393035353237,'2019-02-28 15:55:34',0x312e3139322e32302e3736,'1','','0',0x3333323233);");
E_D("replace into `zmb_enewslog` values('93',0x323534393035353237,'2019-02-28 16:07:52',0x312e3139322e32302e3736,'1','','0',0x3332373534);");
E_D("replace into `zmb_enewslog` values('94',0x323534393035353237,'2019-02-28 19:15:45',0x312e3139322e32302e3736,'1','','0',0x3332383831);");
E_D("replace into `zmb_enewslog` values('95',0x323534393035353237,'2019-03-01 12:07:36',0x312e3139322e32302e3736,'1','','0',0x3332363434);");
E_D("replace into `zmb_enewslog` values('96',0x323534393035353237,'2019-03-01 18:32:10',0x312e3139322e32302e3736,'1','','0',0x3333373834);");
E_D("replace into `zmb_enewslog` values('97',0x323534393035353237,'2019-03-02 12:53:35',0x312e3139322e32302e3736,'1','','0',0x3333373036);");
E_D("replace into `zmb_enewslog` values('98',0x323534393035353237,'2019-03-03 22:21:45',0x312e3139322e32302e313738,'1','','0',0x3239373532);");

@include("../../inc/footer.php");
?>