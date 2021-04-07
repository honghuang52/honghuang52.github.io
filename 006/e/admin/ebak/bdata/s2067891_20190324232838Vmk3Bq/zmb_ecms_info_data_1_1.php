<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `zmb_ecms_info_data_1`;");
E_C("CREATE TABLE `zmb_ecms_info_data_1` (
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `keyid` varchar(255) NOT NULL DEFAULT '',
  `dokey` tinyint(1) NOT NULL DEFAULT '0',
  `newstempid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `closepl` tinyint(1) NOT NULL DEFAULT '0',
  `haveaddfen` tinyint(1) NOT NULL DEFAULT '0',
  `infotags` varchar(80) NOT NULL DEFAULT '',
  `QQ` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `zmb_ecms_info_data_1` values('4','9',0x3134302c3131372c3135,'0','0','0','0','','');");
E_D("replace into `zmb_ecms_info_data_1` values('5','9',0x36302c3432,'0','0','0','0','','');");
E_D("replace into `zmb_ecms_info_data_1` values('6','9',0x3135,'0','0','0','0','',0xe69caae79fa5);");
E_D("replace into `zmb_ecms_info_data_1` values('7','9',0x3134302c3131392c36302c31332c31352c34,'0','0','0','0','',0xe69caae79fa5);");
E_D("replace into `zmb_ecms_info_data_1` values('8','9',0x3134302c31352c34,'0','0','0','0','','');");
E_D("replace into `zmb_ecms_info_data_1` values('9','3',0x39372c38382c34342c33352c33332c33322c32352c32342c32312c3138,'0','0','0','0','',0x31373337313932373530);");
E_D("replace into `zmb_ecms_info_data_1` values('10','3','','0','0','0','0','','');");
E_D("replace into `zmb_ecms_info_data_1` values('11','3',0x392c382c34,'0','0','0','0','',0x383931353132343438);");
E_D("replace into `zmb_ecms_info_data_1` values('12','18',0x3630,'0','0','0','0','','');");
E_D("replace into `zmb_ecms_info_data_1` values('14','3','','0','0','0','0','',0xe69caae79fa5);");
E_D("replace into `zmb_ecms_info_data_1` values('15','9','','0','0','0','0','','');");
E_D("replace into `zmb_ecms_info_data_1` values('16','3','','0','0','0','0','',0xe69caae79fa5);");
E_D("replace into `zmb_ecms_info_data_1` values('17','3',0x31352c31312c392c382c34,'0','0','0','0','',0x3838353333343235);");
E_D("replace into `zmb_ecms_info_data_1` values('18','3',0x3135,'0','0','0','0','',0x31383336323232393838);");
E_D("replace into `zmb_ecms_info_data_1` values('19','9','','0','0','0','0','',0x32323238393939383838);");
E_D("replace into `zmb_ecms_info_data_1` values('20','9',0x31392c31352c31302c36,'0','0','0','0','',0xe69caae79fa5);");
E_D("replace into `zmb_ecms_info_data_1` values('21','3',0x3135,'0','0','0','0','',0x363335323638373933);");
E_D("replace into `zmb_ecms_info_data_1` values('22','3',0x3135,'0','0','0','0','',0x31383035323138383831);");
E_D("replace into `zmb_ecms_info_data_1` values('23','3',0x34302c3135,'0','0','0','0','',0x33313733373533313537);");
E_D("replace into `zmb_ecms_info_data_1` values('24','3',0x32332c3135,'0','0','0','0','',0x32313036303031373030);");
E_D("replace into `zmb_ecms_info_data_1` values('25','3',0x3134352c3134302c3133342c3132342c3131342c3130352c3130332c39372c38382c3434,'0','0','0','0','',0x35383234313139);");
E_D("replace into `zmb_ecms_info_data_1` values('26','4',0x33312c33302c32382c3133,'0','0','0','0','',0xe69caae79fa5);");
E_D("replace into `zmb_ecms_info_data_1` values('27','4','','0','0','0','0','',0xe69caae79fa5);");
E_D("replace into `zmb_ecms_info_data_1` values('28','4',0x3133,'0','0','0','0','',0xe69caae79fa5);");
E_D("replace into `zmb_ecms_info_data_1` values('29','4','','0','0','0','0','',0xe69caae79fa5);");
E_D("replace into `zmb_ecms_info_data_1` values('30','4',0x3133,'0','0','0','0','',0xe69caae79fa5);");
E_D("replace into `zmb_ecms_info_data_1` values('31','4','','0','0','0','0','',0xe69caae79fa5);");
E_D("replace into `zmb_ecms_info_data_1` values('32','3',0x32352c32342c32312c31382c31372c31352c31312c392c382c34,'0','0','0','0','',0xe69caae79fa5);");
E_D("replace into `zmb_ecms_info_data_1` values('33','9',0x3135,'0','0','0','0','',0x33303132303735373437);");
E_D("replace into `zmb_ecms_info_data_1` values('34','9',0x3133382c3133372c3133362c3133352c3133302c3132382c3132372c3132332c3132312c313136,'0','0','0','0','',0x3937353936343631);");
E_D("replace into `zmb_ecms_info_data_1` values('35','3','','0','0','0','0','',0x32393832333637373532);");
E_D("replace into `zmb_ecms_info_data_1` values('36','4','','0','0','0','0','',0x35313133323934);");
E_D("replace into `zmb_ecms_info_data_1` values('37','10','','0','0','0','0','',0xe69caae79fa5);");
E_D("replace into `zmb_ecms_info_data_1` values('38','9','','0','0','0','0','',0xe69caae79fa5);");
E_D("replace into `zmb_ecms_info_data_1` values('39','9',0x3432,'0','0','0','0','',0xe69caae79fa5);");
E_D("replace into `zmb_ecms_info_data_1` values('40','9',0x3231,'0','0','0','0','',0x3838353233313934);");
E_D("replace into `zmb_ecms_info_data_1` values('153','3','','0','0','0','0','','');");
E_D("replace into `zmb_ecms_info_data_1` values('151','3','','0','0','0','0','',0x3430353039373533);");
E_D("replace into `zmb_ecms_info_data_1` values('42','3',0x3135,'0','0','0','0','',0x333238353531393831);");
E_D("replace into `zmb_ecms_info_data_1` values('43','17',0x3134302c31352c34,'0','0','0','0','','');");
E_D("replace into `zmb_ecms_info_data_1` values('44','9',0x3132342c3132322c3131342c3130332c39372c38382c33352c33332c33322c3235,'0','0','0','0','',0x323534393035353237);");
E_D("replace into `zmb_ecms_info_data_1` values('46','8','','0','0','0','0','',0xe69caae79fa5);");
E_D("replace into `zmb_ecms_info_data_1` values('47','8','','0','0','0','0','',0xe69caae79fa5);");
E_D("replace into `zmb_ecms_info_data_1` values('48','8','','0','0','0','0','',0xe69caae79fa5);");
E_D("replace into `zmb_ecms_info_data_1` values('49','8','','0','0','0','0','',0xe69caae79fa5);");
E_D("replace into `zmb_ecms_info_data_1` values('50','8','','0','0','0','0','',0xe69caae79fa5);");
E_D("replace into `zmb_ecms_info_data_1` values('51','8','','0','0','0','0','',0xe69caae79fa5);");
E_D("replace into `zmb_ecms_info_data_1` values('52','8','','0','0','0','0','',0xe69caae79fa5);");
E_D("replace into `zmb_ecms_info_data_1` values('54','5','','0','0','0','0','',0xe69caae79fa5);");
E_D("replace into `zmb_ecms_info_data_1` values('55','5','','0','0','0','0','',0xe69caae79fa5);");
E_D("replace into `zmb_ecms_info_data_1` values('56','5','','0','0','0','0','',0xe69caae79fa5);");
E_D("replace into `zmb_ecms_info_data_1` values('57','5',0x35352c3533,'0','0','0','0','',0xe69caae79fa5);");
E_D("replace into `zmb_ecms_info_data_1` values('58','5',0x3539,'0','0','0','0','',0xe69caae79fa5);");
E_D("replace into `zmb_ecms_info_data_1` values('59','5',0x3538,'0','0','0','0','',0xe69caae79fa5);");
E_D("replace into `zmb_ecms_info_data_1` values('60','3','','0','0','0','0','',0x31313630393739393236);");
E_D("replace into `zmb_ecms_info_data_1` values('61','17',0x34342c33352c33332c33322c32352c32342c32312c31382c31372c3136,'0','0','0','0','',0xe69caae79fa5);");
E_D("replace into `zmb_ecms_info_data_1` values('62','17',0x33312c33302c3238,'0','0','0','0','',0xe69caae79fa5);");
E_D("replace into `zmb_ecms_info_data_1` values('63','17','','0','0','0','0','',0xe69caae79fa5);");
E_D("replace into `zmb_ecms_info_data_1` values('64','17','','0','0','0','0','',0xe69caae79fa5);");
E_D("replace into `zmb_ecms_info_data_1` values('65','17',0x3634,'0','0','0','0','',0xe69caae79fa5);");
E_D("replace into `zmb_ecms_info_data_1` values('66','17',0x31332c33312c33302c3238,'0','0','0','0','',0xe69caae79fa5);");
E_D("replace into `zmb_ecms_info_data_1` values('67','11','','0','0','0','0','',0xe69caae79fa5);");
E_D("replace into `zmb_ecms_info_data_1` values('68','11','','0','0','0','0','',0xe69caae79fa5);");
E_D("replace into `zmb_ecms_info_data_1` values('69','11',0x36382c3637,'0','0','0','0','',0xe69caae79fa5);");
E_D("replace into `zmb_ecms_info_data_1` values('70','11',0x36392c3637,'0','0','0','0','',0xe69caae79fa5);");
E_D("replace into `zmb_ecms_info_data_1` values('71','11','','0','0','0','0','',0xe69caae79fa5);");
E_D("replace into `zmb_ecms_info_data_1` values('72','11','','0','0','0','0','',0xe69caae79fa5);");
E_D("replace into `zmb_ecms_info_data_1` values('73','11',0x3338,'0','0','0','0','',0xe69caae79fa5);");
E_D("replace into `zmb_ecms_info_data_1` values('74','12','','0','0','0','0','',0xe69caae79fa5);");
E_D("replace into `zmb_ecms_info_data_1` values('75','12',0x3734,'0','0','0','0','',0xe69caae79fa5);");
E_D("replace into `zmb_ecms_info_data_1` values('76','12',0x3734,'0','0','0','0','',0xe69caae79fa5);");
E_D("replace into `zmb_ecms_info_data_1` values('77','12','','0','0','0','0','',0xe69caae79fa5);");
E_D("replace into `zmb_ecms_info_data_1` values('78','12','','0','0','0','0','',0xe69caae79fa5);");
E_D("replace into `zmb_ecms_info_data_1` values('79','12','','0','0','0','0','',0xe69caae79fa5);");
E_D("replace into `zmb_ecms_info_data_1` values('80','12','','0','0','0','0','',0xe69caae79fa5);");
E_D("replace into `zmb_ecms_info_data_1` values('81','15','','0','0','0','0','',0xe69caae79fa5);");
E_D("replace into `zmb_ecms_info_data_1` values('82','15','','0','0','0','0','',0xe69caae79fa5);");
E_D("replace into `zmb_ecms_info_data_1` values('83','15','','0','0','0','0','',0xe69caae79fa5);");
E_D("replace into `zmb_ecms_info_data_1` values('84','15','','0','0','0','0','',0xe69caae79fa5);");
E_D("replace into `zmb_ecms_info_data_1` values('85','15','','0','0','0','0','',0xe69caae79fa5);");
E_D("replace into `zmb_ecms_info_data_1` values('86','15','','0','0','0','0','',0xe69caae79fa5);");
E_D("replace into `zmb_ecms_info_data_1` values('87','15','','0','0','0','0','',0xe69caae79fa5);");
E_D("replace into `zmb_ecms_info_data_1` values('88','9',0x34312c32302c31352c31302c36,'0','0','0','0','',0x393338373730323739);");
E_D("replace into `zmb_ecms_info_data_1` values('89','4','','0','0','0','0','',0xe69caae79fa5);");
E_D("replace into `zmb_ecms_info_data_1` values('90','21',0x3134302c3133342c3132342c3131342c3130332c39372c38382c34342c34332c3133,'0','0','0','0','',0xe69caae79fa5);");
E_D("replace into `zmb_ecms_info_data_1` values('91','10',0x3134302c36302c33392c32322c31352c34,'0','0','0','0','','');");
E_D("replace into `zmb_ecms_info_data_1` values('92','3','','0','0','0','0','',0x32363232333336363836);");
E_D("replace into `zmb_ecms_info_data_1` values('93','4','','0','0','0','0','',0xe69caae79fa5);");
E_D("replace into `zmb_ecms_info_data_1` values('94','21','','0','0','0','0','',0x363736343738313934);");
E_D("replace into `zmb_ecms_info_data_1` values('95','9',0x39322c34312c32302c31302c36,'0','0','0','0','',0x363931303933313134);");
E_D("replace into `zmb_ecms_info_data_1` values('96','9','','0','0','0','0','',0x3138333337333733333736);");
E_D("replace into `zmb_ecms_info_data_1` values('97','3','','0','0','0','0','',0x32393131393839383236);");
E_D("replace into `zmb_ecms_info_data_1` values('98','21','','0','0','0','0','',0x333136373837343130);");
E_D("replace into `zmb_ecms_info_data_1` values('99','3',0x3135,'0','0','0','0','',0x363532343930303930);");
E_D("replace into `zmb_ecms_info_data_1` values('100','3',0x3135,'0','0','0','0','',0x343838383536333837);");
E_D("replace into `zmb_ecms_info_data_1` values('101','10','','0','0','0','0','',0x32303134343433303732);");
E_D("replace into `zmb_ecms_info_data_1` values('102','3',0x3630,'0','0','0','0','',0x3134323033383831);");
E_D("replace into `zmb_ecms_info_data_1` values('103','3',0x34302c32332c3135,'0','0','0','0','',0x31373433313932383032);");
E_D("replace into `zmb_ecms_info_data_1` values('104','9','','0','0','0','0','',0x31393630393132343631);");
E_D("replace into `zmb_ecms_info_data_1` values('105','7',0x3134312c3134302c3133382c3133372c3133362c3133352c3133302c3132382c3132372c313233,'0','0','0','0','',0xe69caae79fa5);");
E_D("replace into `zmb_ecms_info_data_1` values('106','7',0x3132322c34302c3233,'0','0','0','0','',0xe69caae79fa5);");
E_D("replace into `zmb_ecms_info_data_1` values('107','7',0x3134312c3134302c3133382c3133372c3133362c3133352c3133302c3132382c3132372c313233,'0','0','0','0','',0xe69caae79fa5);");
E_D("replace into `zmb_ecms_info_data_1` values('108','7','','0','0','0','0','',0xe69caae79fa5);");
E_D("replace into `zmb_ecms_info_data_1` values('109','19','','0','0','0','0','',0x3437383837323835);");
E_D("replace into `zmb_ecms_info_data_1` values('110','19',0x3135,'0','0','0','0','',0x393330363036333337);");
E_D("replace into `zmb_ecms_info_data_1` values('111','19',0x3135,'0','0','0','0','',0xe69caae79fa5);");
E_D("replace into `zmb_ecms_info_data_1` values('112','19',0x3130392c3130332c39372c38382c36302c34342c33352c33332c33322c3235,'0','0','0','0','',0x31383339353737353539);");
E_D("replace into `zmb_ecms_info_data_1` values('113','3',0x3130332c39372c38382c34342c33352c33332c33322c32352c32342c3231,'0','0','0','0','',0x31353932393830373631);");
E_D("replace into `zmb_ecms_info_data_1` values('114','3',0x3131352c3131332c3131302c3130342c3130322c39392c39362c39352c39322c3431,'0','0','0','0','',0x3236343932353035);");
E_D("replace into `zmb_ecms_info_data_1` values('115','3',0x3131342c3130332c39372c38382c34342c33352c33332c33322c32352c3234,'0','0','0','0','',0x3536323530323237);");
E_D("replace into `zmb_ecms_info_data_1` values('116','3',0x3134302c3132322c3131392c3131322c3130392c34302c32332c31352c34,'0','0','0','0','','');");
E_D("replace into `zmb_ecms_info_data_1` values('118','19',0x3131342c3131322c3130392c3130332c39372c38382c36302c34342c33352c3333,'0','0','0','0','',0x393338373730323739);");
E_D("replace into `zmb_ecms_info_data_1` values('119','9','','0','0','0','0','','');");
E_D("replace into `zmb_ecms_info_data_1` values('120','21','','0','0','0','0','',0x373931323036323738);");
E_D("replace into `zmb_ecms_info_data_1` values('121','3',0x3334,'0','0','0','0','',0x323131393131333139);");
E_D("replace into `zmb_ecms_info_data_1` values('123','3',0x3132312c3131362c3131352c3131332c3131302c3130342c3130322c39392c39362c3935,'0','0','0','0','',0x31363935393630373537);");
E_D("replace into `zmb_ecms_info_data_1` values('124','3',0x36302c34302c32332c3135,'0','0','0','0','',0x36383231353139);");
E_D("replace into `zmb_ecms_info_data_1` values('125','21','','0','0','0','0','',0x3637393532313130);");
E_D("replace into `zmb_ecms_info_data_1` values('127','9',0x3132332c3132312c3131362c3131352c3131332c3131302c3130342c3130322c39392c3936,'0','0','0','0','',0x31333332393833353436);");
E_D("replace into `zmb_ecms_info_data_1` values('128','3',0x36302c31352c35,'0','0','0','0','',0x31383730343533353831);");
E_D("replace into `zmb_ecms_info_data_1` values('129','19','','0','0','0','0','',0x36343739313330);");
E_D("replace into `zmb_ecms_info_data_1` values('130','3',0x3135,'0','0','0','0','',0x393139333739);");
E_D("replace into `zmb_ecms_info_data_1` values('131','20','','0','0','0','0','',0x31353934383337343537);");
E_D("replace into `zmb_ecms_info_data_1` values('132','12',0x3134302c3133342c3132342c3131342c3131322c3130392c3130332c39372c38382c3630,'0','0','0','0','',0x3335363731303831);");
E_D("replace into `zmb_ecms_info_data_1` values('133','19','','0','0','0','0','',0x32313236323435353231);");
E_D("replace into `zmb_ecms_info_data_1` values('134','9','','0','0','0','0','',0x32343436363836323830);");
E_D("replace into `zmb_ecms_info_data_1` values('135','3','','0','0','0','0','',0x363532333134373934);");
E_D("replace into `zmb_ecms_info_data_1` values('136','9',0x33322c32312c3135,'0','0','0','0','',0x33343032373932393931);");
E_D("replace into `zmb_ecms_info_data_1` values('137','3',0x3133342c3132342c3131342c3130332c39372c38382c34342c33352c33332c3332,'0','0','0','0','',0x31323735353339353938);");
E_D("replace into `zmb_ecms_info_data_1` values('138','3','','0','0','0','0','',0x31333236343634353337);");
E_D("replace into `zmb_ecms_info_data_1` values('139','4','','0','0','0','0','',0x373535353632393531);");
E_D("replace into `zmb_ecms_info_data_1` values('140','19',0x3131372c3135,'0','0','0','0','','');");
E_D("replace into `zmb_ecms_info_data_1` values('141','3',0x3134302c3133382c3133372c3133362c3133352c3133342c3133302c3132382c3132372c313234,'0','0','0','0','',0x32363937373338343437);");
E_D("replace into `zmb_ecms_info_data_1` values('142','4','','0','0','0','0','','');");
E_D("replace into `zmb_ecms_info_data_1` values('143','15','','0','0','0','0','',0x3335363731303831);");
E_D("replace into `zmb_ecms_info_data_1` values('145','3',0x3132,'0','0','0','0','',0x31333733383430363035);");
E_D("replace into `zmb_ecms_info_data_1` values('146','3',0x3134312c3134302c3133382c3133372c3133362c3133352c3133302c3132382c3132372c313233,'0','0','0','0','',0xe69caae79fa5);");
E_D("replace into `zmb_ecms_info_data_1` values('147','3',0x3132322c34302c3233,'0','0','0','0','',0xe69caae79fa5);");
E_D("replace into `zmb_ecms_info_data_1` values('148','3',0x3134302c31352c34,'0','0','0','0','','');");
E_D("replace into `zmb_ecms_info_data_1` values('149','3',0x3134312c3134302c3133382c3133372c3133362c3133352c3133302c3132382c3132372c313233,'0','0','0','0','',0xe69caae79fa5);");

@include("../../inc/footer.php");
?>