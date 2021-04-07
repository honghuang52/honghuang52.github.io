<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `zmb_ecms_info_index`;");
E_C("CREATE TABLE `zmb_ecms_info_index` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `newstime` int(10) unsigned NOT NULL DEFAULT '0',
  `truetime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastdotime` int(10) unsigned NOT NULL DEFAULT '0',
  `havehtml` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`),
  KEY `checked` (`checked`),
  KEY `newstime` (`newstime`),
  KEY `truetime` (`truetime`,`id`),
  KEY `havehtml` (`classid`,`truetime`,`havehtml`,`checked`,`id`)
) ENGINE=MyISAM AUTO_INCREMENT=154 DEFAULT CHARSET=utf8");
E_D("replace into `zmb_ecms_info_index` values('5','9','1','1545117377','1545117472','1552083763','1');");
E_D("replace into `zmb_ecms_info_index` values('6','9','1','1545117630','1545117765','1546676378','1');");
E_D("replace into `zmb_ecms_info_index` values('4','9','1','1545117317','1545117367','1552081998','1');");
E_D("replace into `zmb_ecms_info_index` values('7','9','1','1545118395','1545118544','1552083205','1');");
E_D("replace into `zmb_ecms_info_index` values('8','9','1','1545118547','1545118724','1552083527','1');");
E_D("replace into `zmb_ecms_info_index` values('9','3','1','1545120326','1545120435','1546414396','1');");
E_D("replace into `zmb_ecms_info_index` values('10','3','1','1545120438','1545121259','1552083390','1');");
E_D("replace into `zmb_ecms_info_index` values('11','3','1','1545121262','1545121406','1545121406','1');");
E_D("replace into `zmb_ecms_info_index` values('12','18','1','1545121408','1545121535','1552084034','1');");
E_D("replace into `zmb_ecms_info_index` values('146','3','1','1546676643','1546676735','1546676735','1');");
E_D("replace into `zmb_ecms_info_index` values('14','3','1','1545121986','1545122089','1545122089','1');");
E_D("replace into `zmb_ecms_info_index` values('15','9','1','1545122121','1545122201','1545122222','1');");
E_D("replace into `zmb_ecms_info_index` values('16','3','1','1545122269','1545122348','1545135379','1');");
E_D("replace into `zmb_ecms_info_index` values('17','3','1','1545122465','1545122531','1545122531','1');");
E_D("replace into `zmb_ecms_info_index` values('18','3','1','1545122534','1545122649','1545122729','1');");
E_D("replace into `zmb_ecms_info_index` values('19','9','1','1545122753','1545122844','1545381209','1');");
E_D("replace into `zmb_ecms_info_index` values('20','9','1','1545122847','1545122953','1545122953','1');");
E_D("replace into `zmb_ecms_info_index` values('21','3','1','1545129977','1545130059','1545130059','1');");
E_D("replace into `zmb_ecms_info_index` values('22','3','1','1545130062','1545130177','1545130177','1');");
E_D("replace into `zmb_ecms_info_index` values('23','3','1','1545130180','1545130319','1546409887','1');");
E_D("replace into `zmb_ecms_info_index` values('24','3','1','1545130322','1545130451','1545130451','1');");
E_D("replace into `zmb_ecms_info_index` values('25','3','1','1545130455','1545130587','1552133033','1');");
E_D("replace into `zmb_ecms_info_index` values('26','4','1','1545132703','1545132821','1545145261','1');");
E_D("replace into `zmb_ecms_info_index` values('27','4','1','1545132823','1545133011','1545133107','1');");
E_D("replace into `zmb_ecms_info_index` values('28','4','1','1545133164','1545133257','1545133257','1');");
E_D("replace into `zmb_ecms_info_index` values('29','4','1','1545133259','1545133359','1545145205','1');");
E_D("replace into `zmb_ecms_info_index` values('30','4','1','1545133362','1545133455','1545133455','1');");
E_D("replace into `zmb_ecms_info_index` values('31','4','1','1545135652','1545136000','1545136000','1');");
E_D("replace into `zmb_ecms_info_index` values('32','3','1','1545136152','1545136313','1545136313','1');");
E_D("replace into `zmb_ecms_info_index` values('33','9','1','1545136784','1545136889','1545136889','1');");
E_D("replace into `zmb_ecms_info_index` values('34','9','1','1545137176','1545137255','1552082574','1');");
E_D("replace into `zmb_ecms_info_index` values('35','3','1','1545144246','1545144374','1545144374','1');");
E_D("replace into `zmb_ecms_info_index` values('36','4','1','1545144941','1545145083','1545145083','1');");
E_D("replace into `zmb_ecms_info_index` values('37','10','1','1545185314','1545185530','1545185710','1');");
E_D("replace into `zmb_ecms_info_index` values('38','9','1','1545189341','1545189515','1545189515','1');");
E_D("replace into `zmb_ecms_info_index` values('39','9','1','1545189517','1545189965','1545207020','1');");
E_D("replace into `zmb_ecms_info_index` values('40','9','1','1545193252','1545193345','1545193345','1');");
E_D("replace into `zmb_ecms_info_index` values('151','3','1','1553429949','1553430033','1553430033','1');");
E_D("replace into `zmb_ecms_info_index` values('42','3','1','1545195362','1545195433','1545195433','1');");
E_D("replace into `zmb_ecms_info_index` values('43','17','1','1545204148','1545204240','1552133432','1');");
E_D("replace into `zmb_ecms_info_index` values('44','9','1','1545208208','1545208278','1550297646','1');");
E_D("replace into `zmb_ecms_info_index` values('46','8','1','1545380233','1545380313','1545380313','1');");
E_D("replace into `zmb_ecms_info_index` values('47','8','1','1545380336','1545380420','1545380420','1');");
E_D("replace into `zmb_ecms_info_index` values('48','8','1','1545380423','1545380528','1545380528','1');");
E_D("replace into `zmb_ecms_info_index` values('49','8','1','1545380531','1545380602','1545380602','1');");
E_D("replace into `zmb_ecms_info_index` values('50','8','1','1545380605','1545380728','1545380728','1');");
E_D("replace into `zmb_ecms_info_index` values('51','8','1','1545380730','1545380805','1545380805','1');");
E_D("replace into `zmb_ecms_info_index` values('52','8','1','1545380808','1545380904','1545380904','1');");
E_D("replace into `zmb_ecms_info_index` values('153','3','1','1553430787','1553431048','1553431186','1');");
E_D("replace into `zmb_ecms_info_index` values('54','5','1','1545459436','1545459662','1545459662','1');");
E_D("replace into `zmb_ecms_info_index` values('55','5','1','1545459665','1545459754','1545459754','1');");
E_D("replace into `zmb_ecms_info_index` values('56','5','1','1545459757','1545459838','1545459838','1');");
E_D("replace into `zmb_ecms_info_index` values('57','5','1','1545459841','1545459988','1545459988','1');");
E_D("replace into `zmb_ecms_info_index` values('58','5','1','1545459991','1545460063','1545460328','1');");
E_D("replace into `zmb_ecms_info_index` values('59','5','1','1545460066','1545460141','1545460141','1');");
E_D("replace into `zmb_ecms_info_index` values('60','3','1','1545461290','1545461390','1545461390','1');");
E_D("replace into `zmb_ecms_info_index` values('61','17','1','1545463706','1545463806','1545463806','1');");
E_D("replace into `zmb_ecms_info_index` values('62','17','1','1545463809','1545463888','1545463888','1');");
E_D("replace into `zmb_ecms_info_index` values('63','17','1','1545463899','1545463968','1545463968','1');");
E_D("replace into `zmb_ecms_info_index` values('64','17','1','1545463984','1545464032','1545464032','1');");
E_D("replace into `zmb_ecms_info_index` values('65','17','1','1545464035','1545464092','1545464092','1');");
E_D("replace into `zmb_ecms_info_index` values('66','17','1','1545464096','1545464196','1545464196','1');");
E_D("replace into `zmb_ecms_info_index` values('67','11','1','1545540685','1545540782','1545540782','1');");
E_D("replace into `zmb_ecms_info_index` values('68','11','1','1545540784','1545540883','1545540883','1');");
E_D("replace into `zmb_ecms_info_index` values('69','11','1','1545540886','1545541003','1545541003','1');");
E_D("replace into `zmb_ecms_info_index` values('70','11','1','1545541006','1545541151','1545541151','1');");
E_D("replace into `zmb_ecms_info_index` values('71','11','1','1545541154','1545541356','1545541356','1');");
E_D("replace into `zmb_ecms_info_index` values('72','11','1','1545541359','1545541452','1545541452','1');");
E_D("replace into `zmb_ecms_info_index` values('73','11','1','1545541486','1545541568','1545541568','1');");
E_D("replace into `zmb_ecms_info_index` values('74','12','1','1545541890','1545542026','1545542026','1');");
E_D("replace into `zmb_ecms_info_index` values('75','12','1','1545542028','1545542345','1545542345','1');");
E_D("replace into `zmb_ecms_info_index` values('76','12','1','1545542348','1545542438','1545542438','1');");
E_D("replace into `zmb_ecms_info_index` values('77','12','1','1545542441','1545542526','1545542526','1');");
E_D("replace into `zmb_ecms_info_index` values('78','12','1','1545542529','1545542623','1545544916','1');");
E_D("replace into `zmb_ecms_info_index` values('79','12','1','1545542626','1545542713','1545542713','1');");
E_D("replace into `zmb_ecms_info_index` values('80','12','1','1545544978','1545545108','1545545108','1');");
E_D("replace into `zmb_ecms_info_index` values('81','15','1','1545545190','1545545304','1545545304','1');");
E_D("replace into `zmb_ecms_info_index` values('82','15','1','1545545307','1545545414','1545545414','1');");
E_D("replace into `zmb_ecms_info_index` values('83','15','1','1545545417','1545545492','1545545492','1');");
E_D("replace into `zmb_ecms_info_index` values('84','15','1','1545545495','1545545573','1545545573','1');");
E_D("replace into `zmb_ecms_info_index` values('85','15','1','1545545576','1545545701','1545545701','1');");
E_D("replace into `zmb_ecms_info_index` values('86','15','1','1545545704','1545545769','1545545769','1');");
E_D("replace into `zmb_ecms_info_index` values('87','15','1','1545545853','1545545918','1545545918','1');");
E_D("replace into `zmb_ecms_info_index` values('88','9','1','1545995358','1545995433','1545995433','1');");
E_D("replace into `zmb_ecms_info_index` values('89','4','1','1546409948','1546410037','1546410230','1');");
E_D("replace into `zmb_ecms_info_index` values('90','21','1','1546410628','1546410721','1552084545','1');");
E_D("replace into `zmb_ecms_info_index` values('91','10','1','1546411097','1546411193','1552083289','1');");
E_D("replace into `zmb_ecms_info_index` values('92','3','1','1546412948','1546413044','1546413044','1');");
E_D("replace into `zmb_ecms_info_index` values('93','4','1','1546413081','1546413152','1546413152','1');");
E_D("replace into `zmb_ecms_info_index` values('94','21','1','1546413172','1546413297','1546413297','1');");
E_D("replace into `zmb_ecms_info_index` values('95','9','1','1546413347','1546413477','1546413477','1');");
E_D("replace into `zmb_ecms_info_index` values('96','9','1','1546413480','1546413567','1550297575','1');");
E_D("replace into `zmb_ecms_info_index` values('97','3','1','1546413716','1546413793','1546413793','1');");
E_D("replace into `zmb_ecms_info_index` values('98','21','1','1546413919','1546414018','1546414018','1');");
E_D("replace into `zmb_ecms_info_index` values('99','3','1','1546414083','1546414182','1546414182','1');");
E_D("replace into `zmb_ecms_info_index` values('100','3','1','1546425545','1546425635','1546425635','1');");
E_D("replace into `zmb_ecms_info_index` values('101','10','1','1546425690','1546425774','1546425774','1');");
E_D("replace into `zmb_ecms_info_index` values('102','3','1','1546490277','1546490345','1546490470','1');");
E_D("replace into `zmb_ecms_info_index` values('103','3','1','1546490348','1546490438','1546490438','1');");
E_D("replace into `zmb_ecms_info_index` values('104','9','1','1546676442','1546676543','1546676543','1');");
E_D("replace into `zmb_ecms_info_index` values('105','7','1','1546676643','1546676735','1552133402','1');");
E_D("replace into `zmb_ecms_info_index` values('106','7','1','1546676738','1546676809','1552133421','1');");
E_D("replace into `zmb_ecms_info_index` values('107','7','1','1546676812','1546676880','1552133455','1');");
E_D("replace into `zmb_ecms_info_index` values('108','7','1','1546676884','1546676949','1546678786','1');");
E_D("replace into `zmb_ecms_info_index` values('109','19','1','1546679663','1546679713','1546679713','1');");
E_D("replace into `zmb_ecms_info_index` values('110','19','1','1546679716','1546679791','1546679791','1');");
E_D("replace into `zmb_ecms_info_index` values('111','19','1','1546679794','1546679867','1546679867','1');");
E_D("replace into `zmb_ecms_info_index` values('112','19','1','1546679870','1546679939','1546679939','1');");
E_D("replace into `zmb_ecms_info_index` values('113','3','1','1546759273','1546759348','1546759348','1');");
E_D("replace into `zmb_ecms_info_index` values('114','3','1','1547451705','1547451787','1547724452','1');");
E_D("replace into `zmb_ecms_info_index` values('115','3','1','1547601739','1547601820','1547601820','1');");
E_D("replace into `zmb_ecms_info_index` values('116','3','1','1547952573','1547952683','1552082331','1');");
E_D("replace into `zmb_ecms_info_index` values('118','19','1','1548298135','1548298223','1548298223','1');");
E_D("replace into `zmb_ecms_info_index` values('119','9','1','1548298418','1548298507','1552082453','1');");
E_D("replace into `zmb_ecms_info_index` values('120','21','1','1548298548','1548298852','1548298969','1');");
E_D("replace into `zmb_ecms_info_index` values('121','3','1','1548299621','1548299759','1548299759','1');");
E_D("replace into `zmb_ecms_info_index` values('123','3','1','1548650420','1548650485','1548650485','1');");
E_D("replace into `zmb_ecms_info_index` values('124','3','1','1548819311','1548819403','1548819509','1');");
E_D("replace into `zmb_ecms_info_index` values('125','21','1','1551340905','1548998246','1552133130','1');");
E_D("replace into `zmb_ecms_info_index` values('127','9','1','1550288126','1550288221','1550288221','1');");
E_D("replace into `zmb_ecms_info_index` values('128','3','1','1550297137','1550297224','1550297224','1');");
E_D("replace into `zmb_ecms_info_index` values('129','19','1','1551502556','1550298067','1551502563','1');");
E_D("replace into `zmb_ecms_info_index` values('130','3','1','1550312246','1550312389','1550312389','1');");
E_D("replace into `zmb_ecms_info_index` values('131','20','1','1550805643','1550805774','1550805774','1');");
E_D("replace into `zmb_ecms_info_index` values('132','12','1','1551184098','1551184225','1552081515','1');");
E_D("replace into `zmb_ecms_info_index` values('133','19','1','1551340613','1551340719','1551340719','1');");
E_D("replace into `zmb_ecms_info_index` values('134','9','1','1551341327','1551341407','1551341407','1');");
E_D("replace into `zmb_ecms_info_index` values('135','3','1','1551414570','1551414665','1551414665','1');");
E_D("replace into `zmb_ecms_info_index` values('136','9','1','1551416630','1551417867','1551417867','1');");
E_D("replace into `zmb_ecms_info_index` values('137','3','1','1551527393','1551527478','1551527478','1');");
E_D("replace into `zmb_ecms_info_index` values('138','3','1','1551527563','1551527644','1551527644','1');");
E_D("replace into `zmb_ecms_info_index` values('139','4','1','1551527670','1551527955','1551527955','1');");
E_D("replace into `zmb_ecms_info_index` values('140','19','1','1552076637','1552076794','1552081728','1');");
E_D("replace into `zmb_ecms_info_index` values('141','3','1','1552131588','1552131697','1552131697','1');");
E_D("replace into `zmb_ecms_info_index` values('142','4','1','1552131812','1552131909','1552131909','1');");
E_D("replace into `zmb_ecms_info_index` values('143','15','1','1552131939','1552132018','1552133293','1');");
E_D("replace into `zmb_ecms_info_index` values('145','3','1','1552132703','1552132802','1552132861','1');");
E_D("replace into `zmb_ecms_info_index` values('147','3','1','1546676738','1546676809','1546676809','1');");
E_D("replace into `zmb_ecms_info_index` values('148','3','1','1545204148','1545204240','1545204240','1');");
E_D("replace into `zmb_ecms_info_index` values('149','3','1','1546676812','1546676880','1546676880','1');");

@include("../../inc/footer.php");
?>