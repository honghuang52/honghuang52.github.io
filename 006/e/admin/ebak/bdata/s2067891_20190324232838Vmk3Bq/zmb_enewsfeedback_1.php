<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `zmb_enewsfeedback`;");
E_C("CREATE TABLE `zmb_enewsfeedback` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `bid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `title` varchar(120) NOT NULL DEFAULT '',
  `saytext` text NOT NULL,
  `email` varchar(80) NOT NULL DEFAULT '',
  `homepage` varchar(160) NOT NULL DEFAULT '',
  `saytime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip` varchar(20) NOT NULL DEFAULT '',
  `filepath` varchar(20) NOT NULL DEFAULT '',
  `filename` text NOT NULL,
  `userid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `username` varchar(20) NOT NULL DEFAULT '',
  `haveread` tinyint(1) NOT NULL DEFAULT '0',
  `eipport` varchar(6) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `bid` (`bid`),
  KEY `haveread` (`haveread`)
) ENGINE=MyISAM AUTO_INCREMENT=94 DEFAULT CHARSET=utf8");
E_D("replace into `zmb_enewsfeedback` values('12','1',0x5151e68a80e69cafe7899b,0x5151e68a80e69cafe7899b,0x313136303937393932364071712e636f6d,0x7777772e71716a736e2e636f6d,'2018-12-22 14:46:18',0x3131382e37372e3131322e323233,'','','0','','1',0x3537303739);");
E_D("replace into `zmb_enewsfeedback` values('13','1',0xe4b8abe4b8abe4b990e4baab,0xe5b88ce69c9be694b6e5bd95,0x67756972656e6368656e6740666f786d61696c2e636f6d,0x687474703a2f2f7777772e796179616c657869616e672e636f6d,'2018-12-23 18:28:47',0x3231392e3134312e3130362e3736,'','','0','','1',0x3632303731);");
E_D("replace into `zmb_enewsfeedback` values('14','1',0xe9808de981a5e5a8b1e4b990e7bd91,0xe9808de981a5e5a8b1e4b990e7bd91202d20e4b893e6b3a8e58886e4baabe585a8e7bd91e4bc98e683a0e7a68fe588a92ce5ae9ee794a8e8bdafe4bbb62ce7bd91e7ab99e6ba90e7a0812ce68a80e69cafe69599e7a88be7ad89e7bd91e7bb9ce8b584e6ba90,0x3933383737303237394071712e636f6d,0x68747470733a2f2f7777772e7869616f79616f2e6c61,'2018-12-27 18:46:38',0x3132332e3134392e3234322e3232,'','','0','','1',0x3233393337);");
E_D("replace into `zmb_enewsfeedback` values('15','1',0xe9ad94e98097e794b5e5bdb1e5a4a9e5a082,0xe4bda0e5b885,0x626f6f6d766f644071712e636f6d,0x7777772e626f6f6d766f642e636f6d,'2018-12-30 22:21:00',0x3232332e36362e3231302e3631,'','','0','','1',0x3135373530);");
E_D("replace into `zmb_enewsfeedback` values('16','1',0xe69893e985b7e8b584e6ba90e7bd91,0x31e38081e799bee5baa6e69d83e9878d31e4bba5e4b88aefbc8ce697a5e6b581e9878f313030304950e4bba5e4b88a0d0a32e38081e6ada3e8a784e7bd91e7ab99efbc8ce4b88de8bf9de58f8de6b395e5be8be79a840d0a33e38081e5b7b2e5b086e79fa5e5908de590a7e5afbce888aa287777772e7a68696d696e6762612e636f6d29e6b7bbe58aa0e58f8be993bee79a840d0a34e38081e4b88de883bde698afe696b0e7bd91e7ab99efbc8ce7bd91e7ab99e58685e5aeb9e4b99fe4b88de883bde4b88de5ae8ce596840d0a35e38081e689bfe8aea4e887aae5b7b1e6b2a1e69c89e7ab99e995bfe5b885e79a840d0a36e38081e79e8ee5a1abe880852ce79bb4e68ea5e5b0814950e6aeb52ce8afb7e8aea4e79c9fe5a1abe58699e58685e5aeb9,0x323632323333363638364071712e636f6d,0x68747470733a2f2f7777772e79696b757a792e636f6d2f,'2019-01-02 14:50:25',0x3131312e31382e34352e313935,'','','0','','1',0x3130323131);");
E_D("replace into `zmb_enewsfeedback` values('17','1',0xe788b1e79c8be5bdb1e999a2,0x31313131313131313131,0x6671796c774071712e636f6d,0x687474703a2f2f7777772e326b79732e636e2f,'2019-01-02 14:52:43',0x3131302e38312e3137362e313032,'','','0','','1',0x3138393032);");
E_D("replace into `zmb_enewsfeedback` values('18','1',0xe788b1e79c8be5bdb1e999a2,0x31313131313131313131,0x6671796c774071712e636f6d,0x687474703a2f2f7777772e326b79732e636e2f,'2019-01-02 14:52:59',0x3131302e38312e3137362e313032,'','','0','','1',0x3138303039);");
E_D("replace into `zmb_enewsfeedback` values('19','1',0xe79a87e5bc9fe7958ce59586e59f8e,0xe69da5e4b880e4b8aa,0x3637363437383139344071712e636f6d,0x687474703a2f2f7777772e7869616e67676f752e776f726b,'2019-01-02 15:06:19',0x3134302e3234302e35372e323133,'','','0','','1',0x3535343733);");
E_D("replace into `zmb_enewsfeedback` values('20','1',0x5151e68a80e69cafe7899b,0xe6849fe8b0a2e6af8fe4b880e4b8aae588b0e69da5e79a84e8b584e6ba90e788b1e5a5bde88085efbc8c5151e68a80e69cafe7899be59ca832303139e5b9b4e4bc9ae7bba7e7bbade58aaae58a9befbc8ce4ba89e58f96e5819ae4b880e4b8aae8aea9e59084e4bd8de6bba1e6848fe79a84e7bd91e7ab99,0x313136303937393932364071712e636f6d,0x7777772e71716a736e2e636f6d,'2019-01-02 15:07:03',0x3131372e3133362e39312e3434,'','','0','','1',0x3330313538);");
E_D("replace into `zmb_enewsfeedback` values('21','1',0xe5b08fe4ba94e8b584e6ba90e7bd91,0xe6af8fe5a4a9e69bb4e696b0e5a4a7e9878fe8b584e6ba90efbc8ce8aeb0e5be97e6af8fe5a4a9e983bde69da5e8aebfe997aee4b880e4b88be593a6efbc81,0x3639313039333131344071712e636f6d,0x7777772e7869616f77757a792e636f6d,'2019-01-02 15:07:04',0x3137352e34332e3130342e313539,'','','0','','1',0x35333736);");
E_D("replace into `zmb_enewsfeedback` values('22','1',0xe4bc98e5889be8b584e6ba90e7bd91,0xe585a8e7bd91e69c80e5a4a7e79a84e7a0b4e8a7a3e8b584e6ba90e7bd91efbc8ce5ae89e58d93e7a0b4e8a7a3e8bdafe4bbb6efbc8ce88bb9e69e9c494f53e7a0b4e8a7a3e8bdafe4bbb6efbc8ce7babfe68aa5e89685e7be8ae6af9befbc8ce8af9de8b4b9e6b581e9878fe5858de8b4b9e9a286efbc8ce5beaee4bfa1e8b584e6ba90efbc8ce68a80e69cafe69599e7a88befbc8c5053e69599e7a88befbc8c504446e8bdafe4bbb6efbc8ce794b5e88491e7a0b4e8a7a3e8bdafe4bbb6efbc8ce89685e7be8ae6af9be7babfe68aa5e5b9b3e58fb0efbc8ce6898be69cbae585bce8818ce5b9b3e58fb0efbc81,0x3138333337333733333736403136332e636f6d,0x68747470733a2f2f7777772e6975637a792e636f6d,'2019-01-02 15:08:26',0x3132302e3139342e3231362e323032,'','','0','','1',0x3236323232);");
E_D("replace into `zmb_enewsfeedback` values('23','1',0xe5b08fe8b1aae99b86e59ba2e4bba3e588b7e7bd91,0xe5b08fe8b1aae99b86e59ba2e4bba3e588b7e7bd9120e7ab99e995bfe69c80e5b885,0x323337323734343235344071712e636f6d,0x687474703a2f2f6e696c697568616f2e747a6473622e636f6d2f,'2019-01-02 15:11:14',0x3131302e3234362e3232372e3931,'','','0','','1',0x3631363138);");
E_D("replace into `zmb_enewsfeedback` values('24','1',0xe5ba93e88a92e5a8b1e4b990e7bd91,0xe5b88ce69c9be694b6e5bd95efbc8ce8b0a2e8b0a2,0x323931313938393832364071712e636f6d,0x68747470733a2f2f7777772e357369692e636f6d,'2019-01-02 15:17:55',0x3131372e3133362e39382e313139,'','','0','','1',0x3136343139);");
E_D("replace into `zmb_enewsfeedback` values('25','1',0xe5bf86e7ac99e8b584e6ba90e7bd91,0xe880b6e880b6e880b6,0x3635323439303039304071712e636f6d,0x7777772e79737a796c2e636e,'2019-01-02 15:22:05',0x3130362e392e3132352e323038,'','','0','','1',0x3438303031);");
E_D("replace into `zmb_enewsfeedback` values('26','1',0xe9a286e9809fe58886e4baabe7a4be,0xe7a59de7ab99e995bfe696b0e5b9b4e5bfabe4b990efbc81,0x3438383835363338374071712e636f6d,0x7777772e3636366c732e636e,'2019-01-02 15:48:04',0x35382e3234332e3235302e313837,'','','0','','1',0x3532353538);");
E_D("replace into `zmb_enewsfeedback` values('27','1',0xe5ba93e88a92e5a8b1e4b990e7bd91,0xe7ab99e995bfe69c80e5b885efbc81,0x323931313938393832364071712e636f6d,0x68747470733a2f2f7777772e357369692e636f6d,'2019-01-02 16:19:50',0x3131372e3133362e39382e313139,'','','0','','1',0x3435353633);");
E_D("replace into `zmb_enewsfeedback` values('28','1',0xe4b994e8b68ae58d9ae5aea2,0xe58886e4baabe68a80e69caf,0x323031343434333037324071712e636f6d,0x687474703a2f2f7777772e3739626b2e636e2f,'2019-01-02 16:43:37',0x3231312e3134332e37362e313330,'','','0','','1',0x3632303734);");
E_D("replace into `zmb_enewsfeedback` values('29','1',0xe6a999e5ad9026233033393b7320426c6f67,0xe8afb7e5a49ae5a49ae694afe68c81efbc8ce8b0a2e8b0a2efbc81,0x313339303338363730334071712e636f6d,0x68747470733a2f2f626c6f672e71716363792e636e,'2019-01-02 17:06:57',0x33362e312e3230302e38,'','','0','','1',0x38393834);");
E_D("replace into `zmb_enewsfeedback` values('30','1',0xe69993e69c88e6968b,0xe4b880e69e9ae88f9ce9b89fe79a84e68a80e69cafe58d9ae5aea2efbc8ce6aca2e8bf8ee5a4a7e5aeb6e69da5e8aebfe380820d0ae383be28e29cbfefbe9fe296bdefbe9f29e3838e,0x313336363439393933394071712e636f6d,0x68747470733a2f2f7777772e6461726b6861742e78797a,'2019-01-02 17:08:45',0x3232332e3130342e3130312e313838,'','','0','','1',0x3330323432);");
E_D("replace into `zmb_enewsfeedback` values('31','1',0x353235e8b584e6ba90e7bd91,0x717131363935393630373537,0x313639353936303735374071712e636f6d,0x68747470733a2f2f7777772e3532357a79772e636f6d2f,'2019-01-02 22:00:57',0x3138302e3133392e3133312e313932,'','','0','','1',0x3535323136);");
E_D("replace into `zmb_enewsfeedback` values('32','1',0xe88b8fe6a2a6e8b584e6ba90e7bd91,0xe5b7b2e6b7bbe58aa0e8b4b5e7ab99e58f8be88194,0x31343230333838314071712e636f6d,0x687474703a2f2f73756d656e67777a2e636e2f,'2019-01-03 00:43:07',0x36302e3232322e3230342e313233,'','','0','','1',0x3234353230);");
E_D("replace into `zmb_enewsfeedback` values('33','1',0xe594afe4b880e5a8b1e4b990e7bd91,0xe6b7bbe58aa0e8b4b5e7ab99e58f8be88194e4ba86,0x313734333139323830324071712e636f6d,0x687474703a2f2f776531312e636e2f,'2019-01-03 00:45:05',0x36302e3232322e3230342e313233,'','','0','','1',0x3235353838);");
E_D("replace into `zmb_enewsfeedback` values('34','1',0xe4b880e5baa6e8b584e6ba90e7bd91,0xe4bda0e69c80e5b885,0x313936303931323436314071712e636f6d,0x7777772e316437372e636e,'2019-01-04 20:25:33',0x3131322e39372e3234342e323133,'','','0','','1',0x36383830);");
E_D("replace into `zmb_enewsfeedback` values('35','1',0xe79b9fe58594e8b584e6ba90e7bd91,0xe79b9fe58594e8b584e6ba90e7bd91,0x313539323938303736314071712e636f6d,0x687474703a2f2f7777772e6d656e67747535322e636f6d,'2019-01-06 15:08:03',0x3131372e3133362e31342e323236,'','','0','','1',0x3230373739);");
E_D("replace into `zmb_enewsfeedback` values('36','1',0xe4b89ce8be89e5bdb1e8a786,0xe4b89ce8be89e5bdb1e8a786,0x3230313434343330374071712e636f6d,0x687474703a2f2f762e303964682e636e2f,'2019-01-07 10:19:08',0x3231312e3134332e37362e313330,'','','0','','1',0x3533363838);");
E_D("replace into `zmb_enewsfeedback` values('37','1',0xe6b8b8e6888fe69599e5ada6e5aea4,0x31,0x313733303234323932394071712e636f6d,0x7777772e6c7973362e636e,'2019-01-07 13:06:49',0x3131362e3235332e34302e323130,'','','0','','1',0x35393334);");
E_D("replace into `zmb_enewsfeedback` values('38','1',0xe6b7b1e59cb353454f,0xe5a49ae8b0a2e7ab99e995bfe694afe68c81,0x313635353733303230394071712e636f6d,0x7777772e78696e78696e673332372e636f6d,'2019-01-07 13:07:32',0x3131322e31362e36392e313437,'','','0','','1',0x3236333631);");
E_D("replace into `zmb_enewsfeedback` values('39','1',0xe7bd91e7ab99e79baee5bd95,0xe6849fe8b0a2e7ab99e995bfe79a84e5a4a7e58a9be694afe68c81,0x313635353733303230394071712e636f6d,0x7777772e6774746f6c2e636f6d,'2019-01-07 13:08:11',0x3131322e31362e36392e313437,'','','0','','1',0x3236333635);");
E_D("replace into `zmb_enewsfeedback` values('40','1',0xe998b2e88590e69ca8e58789e4baad,0xe6849fe8b0a2e7ab99e995bfe79a84e5a4a7e58a9be694afe68c81,0x313635353733303230394071712e636f6d,0x7777772e6774746f6c2e636f6d,'2019-01-07 13:08:31',0x3131322e31362e36392e313437,'','','0','','1',0x3236333635);");
E_D("replace into `zmb_enewsfeedback` values('41','1',0xe9b2a8e9b1bce6898be69cbae8aebae59d9b,0xe4b88de99499e79a84e5afbce888aae7ab9920e694afe68c81e4bda0,0x38333931373134334071712e636f6d,0x7777772e31383039352e636f6d,'2019-01-07 13:08:50',0x3232322e3234352e36302e3330,'','','0','','1',0x3634333534);");
E_D("replace into `zmb_enewsfeedback` values('42','1',0xe794b5e58aa8e6bb9ae7ad92,0xe6849fe8b0a2e7ab99e995bfe79a84e5a4a7e58a9be694afe68c81,0x313635353733303230394071712e636f6d,0x7777772e78696e78696e673332372e636f6d,'2019-01-07 13:08:52',0x3131322e31362e36392e313437,'','','0','','1',0x3236333635);");
E_D("replace into `zmb_enewsfeedback` values('43','1',0xe794b5e58aa8e6bb9ae7ad92,0xe6849fe8b0a2e7ab99e995bfe79a84e5a4a7e58a9be694afe68c81,0x313635353733303230394071712e636f6d,0x7777772e77716a7863642e636f6d,'2019-01-07 13:09:11',0x3131322e31362e36392e313437,'','','0','','1',0x3236333635);");
E_D("replace into `zmb_enewsfeedback` values('44','1',0xe882a1e7a5a8e9858de8b584,0xe6849fe8b0a2e7ab99e995bfe79a84e5a4a7e58a9be694afe68c81,0x313635353733303230394071712e636f6d,0x7777772e6f6b7065612e636f6d,'2019-01-07 13:09:30',0x3131322e31362e36392e313437,'','','0','','1',0x3236333635);");
E_D("replace into `zmb_enewsfeedback` values('45','1',0xe5b7a7e79c8b564950e7bd91,0xe5b7b2e6b7bbe58aa0e8b4b5e7ab99e58f8be993bee4ba862020e9babbe783a620e8b4b5e7ab99e694b6e5bd95e4b88be79a842020e698afe590a6e69c89e694b6e5bd95e9babbe783a6e982aee4bbb6e59b9ee5a48de4b88be79a84,0x64787739343540676d61696c2e636f6d,0x687474703a2f2f7777772e7169616f616b616e2e766970,'2019-01-10 10:40:40',0x36312e3234322e34302e323238,'','','0','','1',0x3431343232);");
E_D("replace into `zmb_enewsfeedback` values('46','1',0xe5889de69dbae5bdb1e8a7862de5889de69dbae69797e4b88b,0xe68890e7ab8be4ba8e323031382d30382d3136e698afe4b880e4b8aae68f90e4be9be5858de8b4b9e9ab98e6b885e794b5e5bdb1e59ca8e7babfe8a782e79c8be79a84e7bd91e7ab99e38082e7bd91e7ab99e4b8bbe8a681e68f90e4be9be5858de8b4b9e9ab98e6b885e794b5e5bdb1e59ca8e7babfe8a782e79c8b2ce7bd91e7ab99e9a1b5e99da2e7ae80e6b481e5a4a7e696b92ce58685e5aeb9e7bbbfe889b2e581a5e5bab72ce697a0e4b88de889afe5b9bfe5918a2ce697a0e99c80e4b8bae79785e6af922ce6b3a8e5868ce7ad89e783a6e681bc2ee5889de69dbae5bdb1e8a786e698afe4b880e4b8aae79c9fe6ada3e5858de8b4b9e8a782e79c8be794b5e5bdb1e794b5e8a786e589a7e79a84e5bdb1e8a786e7bd91e7ab992ce4bba5e68f90e4be9be9ab98e6b885e5bdb1e8a786e59ca8e7babfe8a782e79c8b2ce4b88be8bdbd2ce7bd91e7bb9ce4bc91e997b2e7ad89e4b8bae69c80e7bb88e58f91e5b195e79baee6a0872ce887b4e58a9be4ba8ee7bb99e5b9bfe5a4a7e79a84e4ba92e88194e7bd91e794a8e688b7e5b8a6e69da5e69c80e4b8b0e5af8ce79a84e58685e5aeb92ee5889de69dbae5bdb1e8a786e68890e4b8bae4b880e4b8aae8aea9e5a4a7e5aeb6e5969ce6aca2e79a84e5bdb1e8a786e5a8b1e4b990e4bc91e997b2e7bd91e7ab99e38082,0x313732373639313536314071712e636f6d,0x68747470733a2f2f637864792e6378777a2e78797a,'2019-01-12 17:43:20',0x3131322e33382e3132312e313432,'','','0','','1',0x3534323233);");
E_D("replace into `zmb_enewsfeedback` values('47','1',0xe99bb6e4b880e794b5e5bdb1e7bd91,0xe689bfe8aea4e887aae5b7b1e6b2a1e69c89e7ab99e995bfe5b885,0x313639303234383338324071712e636f6d,0x7777772e303173696768742e636f6d,'2019-01-14 14:49:54',0x36302e32342e3130392e323437,'','','0','','0',0x3137373139);");
E_D("replace into `zmb_enewsfeedback` values('48','1',0xe7baa2e9be99e5a8b1e4b990e7bd91,0xe5a4a7e8a1a8e593a5e5a5bd,0x32363439323530354071712e636f6d,0x687474703a2f2f7777772e3131397a79772e636f6d2f,'2019-01-14 15:15:25',0x32372e3138382e3136322e313830,'','','0','','1',0x31313330);");
E_D("replace into `zmb_enewsfeedback` values('49','1',0xe78e96e68595e8b584e6ba90e7bd91,0xe794b3e8afb7e694b6e5bd95,0x35363235303232374071712e636f6d,0x7777772e6a6d757a792e636e,'2019-01-14 18:24:58',0x3232322e39332e382e3932,'','','0','','1',0x3236373532);");
E_D("replace into `zmb_enewsfeedback` values('50','1',0xe889bee58d93e8be85e58aa9e7bd91,0xe68891e6b2a1e7ab99e995bfe5b885,0x3431333532323436374071712e636f6d,0x687474703a2f2f7777772e69617a68756f2e636f6d2f,'2019-01-15 23:56:49',0x3131372e31302e3133382e313835,'','','0','','1',0x3232333033);");
E_D("replace into `zmb_enewsfeedback` values('51','1',0xe9be99e5bdb1e8b584e6ba90e7bd91,0xe58aa0e6b2b9e59180,0x313533373732383939344071712e636f6d,0x7777772e3962372e636e,'2019-01-17 20:06:20',0x3131322e32342e3131362e3631,'','','0','','1',0x34343533);");
E_D("replace into `zmb_enewsfeedback` values('52','1',0xe4baa6e7a78be58d9ae5aea2,0xe4baa6e7a78be58d9ae5aea2efbc8ce99d9ee79b88e588a9e8b584e6ba90e7ab99efbc8ce5819ae7bd91e7ab99e79a84e8b584e69699e6ba90e6b389efbc8c,0x333535343838353831334071712e636f6d,0x7777772e7873696f6f2e636e,'2019-01-17 20:07:07',0x3137312e3230392e38382e313839,'','','0','','1',0x3634323936);");
E_D("replace into `zmb_enewsfeedback` values('53','1',0xe5b08fe58c97e8b584e6ba90e7bd91,0xe5b88ce69c9be58fafe4bba5e694b6e5bd95,0x3138333430353030394071712e636f6d,0x687474703a2f2f746a75332e636e2f,'2019-01-19 12:46:07',0x3231382e39382e35332e3931,'','','0','','1',0x3533363939);");
E_D("replace into `zmb_enewsfeedback` values('54','1',0xe68891e788b1e58d9ae5aea2,0xe68891e788b1e58d9ae5aea22de788b1e58d9ae5aea2efbc8ce788b1e58886e4baab,0x313434383231323236324071712e636f6d,0x7777772e77616269672e636e,'2019-01-21 12:12:20',0x3131302e35332e3231332e3130,'','','0','','1',0x3232313730);");
E_D("replace into `zmb_enewsfeedback` values('55','1',0x51e590a7e68a80e69cafe7bd91,0xe5b88ce69c9be7ab99e995bfe694b6e5bd95efbc8ce7a59de682a8e8afb8e4ba8be9a1bae588a9efbc81,0x31303030373531394071712e636f6d,0x7777772e713830302e6e6574,'2019-01-21 22:03:52',0x3231392e3133332e3130302e3739,'','','0','','1',0x3535313237);");
E_D("replace into `zmb_enewsfeedback` values('56','1',0xe7ab99e995bfe5afbce888aae7bd91,0xe68891e4bc9ae794a8e5bf83e5819ae5afbce888aae7ab99efbc8ce58aaae58a9be5819ae69bb4e5a5bde38082,0x3933383737303237394071712e636f6d,0x687474703a2f2f7777772e7a7a6a697368752e636f6d,'2019-01-23 14:39:40',0x3232332e38382e33342e313335,'','','0','','1',0x32383238);");
E_D("replace into `zmb_enewsfeedback` values('57','1',0xe68891e788b1e58d9ae5aea2,0xe69c9be8b4b5e7ab99e694b6e5bd95efbc8ce8b0a2e8b0a2,0x313434383231323236324071712e636f6d,0x7777772e77616269672e636e,'2019-01-24 00:37:04',0x3131302e35332e3231332e3630,'','','0','','1',0x3334393939);");
E_D("replace into `zmb_enewsfeedback` values('58','1',0xe98090e6a2a6e8b584e6ba90e7bd91,0xe98090e6a2a6e8b584e6ba90e7bd912de585a8e99da2e79a84e8b584e6ba90e694b6e99b86e58886e4baabe5a4a7e5b9b3e58fb0,0x323235383638323839334071712e636f6d,0x687474703a2f2f7777772e7a6d7a79772e636e,'2019-01-26 10:06:13',0x36312e3135382e3233302e313132,'','','0','','1',0x3534323534);");
E_D("replace into `zmb_enewsfeedback` values('59','1',0xe9bb8ee6988ee5a8b1e4b990e7bd91,0xe4b893e4b89ae68f90e4be9b5151e6b4bbe58aa82c5151e68a80e69caf2c5151e68a80e5b7a72ce794b5e88491e68a80e5b7a7e4bba5e58f8ae585b6e4bb96e7bd91e7bb9ce68a80e69caf2ce8aea9e68891e4bbace79a84e68a80e69cafe69bb4e4b88ae4b880e5b182e6a5bc21,0x323434363638363238304071712e636f6d,0x7777772e6c696d696e67796c772e636f6d,'2019-01-26 22:50:05',0x3131332e38332e37302e313137,'','','0','','1',0x3135303334);");
E_D("replace into `zmb_enewsfeedback` values('60','1',0x353235e8b584e6ba90e7bd91,0xe4bba5e6b7bbe58aa0e8b4b5e7ab99e58f8be993beefbc8ce69c9be694b6e5bd95e38082,0x313639353936303735374071712e636f6d,0x68747470733a2f2f7777772e3532357a79772e636f6d2f,'2019-01-27 20:26:06',0x3131362e392e33372e3934,'','','0','','1',0x3134393732);");
E_D("replace into `zmb_enewsfeedback` values('61','1',0xe590bee98193e8b584e6ba90e7bd91,0xe5b8aee5bf99e694b6e5bd95efbc8ce8b0a2e8b0a2,0x6268334071712e636f6d,0x687474703a2f2f7777772e7171777564616f2e636f6d,'2019-01-29 10:19:01',0x3131322e32392e332e313335,'','','0','','1',0x3437303636);");
E_D("replace into `zmb_enewsfeedback` values('62','1',0xe6b5aee7949fe5a8b1e4b990e7bd91,0xe887aae5b7b1e6b2a1e69c89e7ab99e995bfe5b885,0x667573364071712e636f6d,0x7777772e6675732e6c61,'2019-01-29 20:16:26',0x3138332e3138342e3137312e313730,'','','0','','1',0x3236323838);");
E_D("replace into `zmb_enewsfeedback` values('63','1',0x4954e88f9ce9b89fe890a5,0xe696b0e5b9b4e5bfabe4b990efbc81e7a59de79fa5e5908de590a7e5afbce888aae8b68ae58a9ee8b68ae5a5bde38082,0x333531353433313331334071712e636f6d,0x7777772e6974636e792e636e,'2019-01-31 16:09:03',0x3130332e3235312e39392e313030,'','','0','','1',0x3339373131);");
E_D("replace into `zmb_enewsfeedback` values('64','1',0xe9809fe985b7e69e81e8b584e6ba90e7bd91,0xe9809fe985b7e69e81e8b584e6ba90e7bd91e6af8fe5a4a9e4b8bae5a4a7e5aeb6e69bb4e696b0e59084e7a78de5ae9ee794a8e68a80e69cafe69599e7a88be38081e5ae9ee794a8e8bdafe4bbb6e38081e69c80e696b0e6b4bbe58aa8e8b584e8aeafe38081e7bd91e7bb9ce8b6a3e4ba8be38081e4bba5e58f8ae59084e7a78de5a5bde78ea9e79a84e8bdafe4bbb6e5b7a5e585b7e7ad89e38081e8aeb0e5be97e6af8fe5a4a9e983bde8a681e8aebfe997aee4b880e4b88be68891e4bbace79a84e7bd91e7ab99e38081e8aea9e7949fe6b4bbe69bb4e58aa0e7b2bee5bda9,0x323032393832353838344071712e636f6d,0x687474703a2f2f7777772e736b6a3132332e636f6d2f,'2019-02-03 16:26:18',0x3232332e38382e3134342e313131,'','','0','','1',0x3432303239);");
E_D("replace into `zmb_enewsfeedback` values('65','1',0xe5a2a8e5889de8b584e6ba90e7bd91,0xe6b2a1e7ab99e995bfe5b885,0x313333323938333534364071712e636f6d,0x7777772e74796b362e636f6d,'2019-02-07 23:08:27',0x3132332e31332e37302e313337,'','','0','','1',0x3335353330);");
E_D("replace into `zmb_enewsfeedback` values('66','1',0xe59bbde5a496e5b7b4e5b7b4e7bd91e59d80e5afbce888aa,0xe59bbde5a496e7bd91e7ab99e5a4a7e585a8,0x3333303431393038314071712e636f6d,0x687474703a2f2f7777772e67756f77616938382e636f6d2f,'2019-02-08 21:06:59',0x3131352e3230332e3132382e323439,'','','0','','1',0x3634313330);");
E_D("replace into `zmb_enewsfeedback` values('67','1',0x323339e8b584e6ba90e7bd91,0xe794b3e8afb7e694b6e5bd95,0x323138313832363632364071712e636f6d,0x687474703a2f2f7777772e3233397a792e636f6d,'2019-02-16 07:44:56',0x3135332e33372e39392e313638,'','','0','','1',0x3532373838);");
E_D("replace into `zmb_enewsfeedback` values('68','1',0xe9bb91e5aea2,0xe58fafe4bba5e6b7b1e5baa6e59088e4bd9c,0x6861636b6a6965406f75746c6f6f6b2e636f6d,0x68747470733a2f2f7777772e6861636b6a69652e636f6d,'2019-02-17 11:25:09',0x3132352e34352e382e313334,'','','0','','1',0x3538303935);");
E_D("replace into `zmb_enewsfeedback` values('69','1',0x4954e88f9ce9b89fe890a5,0xe5b7b2e6b7bbe58aa0e8b4b5e7ab99e58f8be993be,0x323933373037323831354071712e636f6d,0x68747470733a2f2f7777772e6974636e792e636e,'2019-02-21 23:44:26',0x3232332e39302e3235312e3733,'','','0','','1',0x3231393934);");
E_D("replace into `zmb_enewsfeedback` values('70','1',0xe6a2a6e5b9bbe8b584e6ba90e7bd91,0xe6a2a6e5b9bbe8b584e6ba90e7bd91efbc8ce7b2bee59381e8b584e6ba90e585b1e4baabe7bd91e38082e69c9be8b4b5e7ab99e694b6e5bd95e4b880e4b88befbc8ce8b0a2e8b0a2,0x31373137333330394071712e636f6d,0x7777772e6d687a79772e6363,'2019-02-22 11:04:42',0x3131392e342e3235322e32,'','','0','','1',0x3434313537);");
E_D("replace into `zmb_enewsfeedback` values('71','1',0x3839e5bdb1e999a2,0xe5bdb1e8a786e7bd91e7ab99,0x313337323431393738304071712e636f6d,0x68747470733a2f2f66696c6d313938392e636f6d2f,'2019-02-22 18:58:13',0x3231382e39382e31352e313330,'','','0','','1',0x3130303238);");
E_D("replace into `zmb_enewsfeedback` values('72','1',0xe4b98ce5858be585b0e8af95e7aea1e5a9b4e584bf,0xe9babbe783a6e9809ae8bf87e4b88befbc8ce8b0a2e8b0a2e69c80e5b885e79a84e7ab99e995bf,0x3137383430353335334071712e636f6d,0x687474703a2f2f7777772e7175616e71697564616979756e2e636f6d,'2019-02-25 15:35:21',0x3231392e3133332e3137362e3736,'','','0','','1',0x3436313537);");
E_D("replace into `zmb_enewsfeedback` values('73','1',0xe4b990e7a792e58da1e79b9f,0xe4b990e7a792e58da1e79b9fe99ab6e5b19ee4ba8ee58da1e69893e4bfa1e7b3bbe7bb9fe69797e4b88be58da1e79b9fe5b9b3e58fb0e7b3bbe7bb9fefbc8ce58da1e69893e4bfa1e794b1e5b1b1e4b89ce6b187e683b3e7bd91e7bb9ce7a791e68a80e69c89e99990e585ace58fb8e5bc80e58f91efbc8ce4b990e7a792e58da1e79b9fe585a8e7bd91e69c80e5a4a7e79a84e695b0e5ad97e782b9e58da1e8bf90e890a5e59586efbc8ce4b990e7a792e58da1e79b9fe5ae89e585a8e7a8b3e5ae9ae8bf90e8a18c33e5b9b420e6849fe8b0a2e682a8e5afb9e4b990e7a792e58da1e79b9fe79a84e694afe68c81e58da1e79b9fe5b9b3e58fb0e4bb8be7bb8defbc9a5151e992bb312d34e68a98efbc8ce7a8b3e5ae9ae4bebfe5ae9cefbc8c3234e5b08fe697b6e6ada3e5b8b8e68ea5e58d95efbc8ce6aca2e8bf8ee4b88be58d95e38082e5aea2e69c8d5151efbc9a373538363038343839,0x3936313432373438304071712e636f6d,0x6c656d69616f2e3838386b612e636e,'2019-02-28 16:24:25',0x3131372e3133322e3139322e3839,'','','0','','1',0x3630323530);");
E_D("replace into `zmb_enewsfeedback` values('74','1',0xe5b7b4e697a6e6b581e9878fe58da1e4b893e58d96,0xe4bc9ae4b88de4bc9ae694b6e4ba86,0x3530333237373733324071712e636f6d,0x64732e78776174782e636e,'2019-02-28 16:56:36',0x3232312e3233342e392e323430,'','','0','','1',0x3533353237);");
E_D("replace into `zmb_enewsfeedback` values('75','1',0x3532e6898be8b59ae7bd91,0xe5a49ae5a49ae5b8aee5bf99,0x3632353339344071712e636f6d,0x687474703a2f2f7777772e3532737a2e7669702f,'2019-03-01 20:29:16',0x3131322e352e3234382e313530,'','','0','','1',0x3238393032);");
E_D("replace into `zmb_enewsfeedback` values('76','1',0xe889bee69fafe8b584e6ba90e7bd91,0xe889bee69fafe8b584e6ba90e7bd91e58886e4baabe7bd91e7bb9ce5a5bde8b584e6ba90,0x313332363436343533374071712e636f6d,0x7777772e61696b657a792e636e,'2019-03-02 00:37:35',0x34322e3232362e38312e313438,'','','0','','1',0x3237353131);");
E_D("replace into `zmb_enewsfeedback` values('77','1',0x51e5a082e5bdb1e999a2,0x51e5a082e5bdb1e999a22851e5a082e5bdb1e999a22d595934343130e9ab98e6b885e5bdb1e999a22d595934343830e9ab98e6b885e5bdb1e999a22de99d92e88bb9e69e9ce5bdb1e999a22de696b0e8a786e8a789e5bdb1e999a22020e5bdb1e8a786e7bd912051e5a082e5bdb1e8a78620e7acac31e5bca079732e377171742e636e29e4b8bae682a8e68f90e4be9be69c80e696b0e79a84e794b5e5bdb1e5a4a7e78987efbc8ce69c80e696b0e783ade692ade794b5e8a786e589a7efbc8ce7bb8fe585b8e58aa8e6bcabe68ea8e88d90efbc8ce7bbbce889bae5a8b1e4b990e88a82e79baeefbc8ce697a0e99c80e4b88be8bdbde4bbbbe4bd95e692ade694bee599a8e58db3e58fafe59ca8e7babfe5858de8b4b9e8a782e79c8befbc8ce794b5e5bdb1e59ca8e7babfe5858de8b4b9e8a782e79c8befbc8ce6af8fe5a4a9e7acace4b880e697b6e997b4e69bb4e696b0efbc8ce68f90e4be9be69c80e696b0e69c80e5bfabe79a84e5bdb1e8a786e8b584e8aeafe5928ce59ca8e7babfe692ade694beefbc81,0x3735353536323935314071712e636f6d,0x79732e377171742e636e,'2019-03-02 00:39:34',0x34322e3232362e38312e313438,'','','0','','1',0x3237353030);");
E_D("replace into `zmb_enewsfeedback` values('78','1',0xe89891e88f87e5a4a9e59cb0e8b584e6ba90e7bd91,0xe89891e88f87e5a4a9e59cb0e8b584e6ba90e7bd91687474703a2f2f6d6774643636362e636f6d2f,0x313237353533393534344071712e636f6d,0x687474703a2f2f6d6774643636362e636f6d2f,'2019-03-02 16:50:02',0x3232332e3135322e3132382e313831,'','','0','','1',0x3134333030);");
E_D("replace into `zmb_enewsfeedback` values('79','1',0x3839e4ba91e4b8bbe69cba,0x696b38392e636e,0x33353637313038314071712e636f6d,0x7777772e696b38392e636e,'2019-03-09 03:39:29',0x3231382e37362e372e323334,'','','0','','1',0x31363230);");
E_D("replace into `zmb_enewsfeedback` values('80','1',0x31e6b1a1e69f93,0xe58f91e98081,0x32e59bb4e7bb95e593872020,0x30e5919ce5919ce5919c,'2019-03-09 03:47:06',0x3231382e37362e372e323334,'','','0','','0',0x34363737);");
E_D("replace into `zmb_enewsfeedback` values('81','1',0xe5bdb1e8a786464249,0xe4bda0e683b3e79c8be79a84e8bf99e9878ce983bde69c89,0x7a6f7573686979756e404f75746c6f6f6b2e636f6d,0x79736662692e636e,'2019-03-09 16:12:53',0x3137312e38322e3134332e323430,'','','0','','1',0x3533373331);");
E_D("replace into `zmb_enewsfeedback` values('82','1',0xe696b0e6a2a6e683b3e7a792e8b59ee590a7,0xe697a0,0x34313530303637374071712e636f6d,0x7777772e687362332e636e,'2019-03-09 16:19:29',0x3232332e3130342e3231352e313236,'','','0','','1',0x3433363036);");
E_D("replace into `zmb_enewsfeedback` values('83','1',0xe696b0e6a2a6e683b3e4b8bbe69cbae7bd91,0xe697a0,0x34313530303637374071712e636f6d,0x7777772e363133792e636e,'2019-03-09 16:20:48',0x3232332e3130342e3231352e313236,'','','0','','1',0x3439373939);");
E_D("replace into `zmb_enewsfeedback` values('84','1',0xe6ae8be69c88e8b584e6ba90e7bd91,0xe68891e4bbace4bc9ae6af8fe5a4a9e794a8e5bf83e4b8bae5a4a7e5aeb6e58886e4baabe59084e7a78de8b584e6ba90e79a84efbc8ce4b88de5bf98e5889de5bf83e696b9e5be97e5a78be7bb88e38082,0x323639373733383434374071712e636f6d,0x7777772e7a697975616e36362e636e,'2019-03-09 17:28:06',0x3138302e39352e3133322e313638,'','','0','','1',0x3531343738);");
E_D("replace into `zmb_enewsfeedback` values('85','1',0xe794b7e7a59ee4bba3e588b7e7bd91,0xe6aca2e8bf8ee69da5e588b0e794b7e7a59ee4bba3e588b7e7bd91,0x323337383730373633364071712e636f6d,0x687474703a2f2f38353064732e636e,'2019-03-09 17:47:24',0x3138332e3231392e3132312e323531,'','','0','','1',0x3634333936);");
E_D("replace into `zmb_enewsfeedback` values('86','1',0xe5b08fe5b885e8b584e6ba90e7bd91,0xe4b880e4b8aae5858de8b4b9e8b584e6ba90e58886e4baabe5b9b3e58fb0efbc8ce6aca2e8bf8ee8aebfe997aee694b6e8978fefbc81,0x313937353137323433334071712e636f6d,0x68747470733a2f2f7777772e78733335372e636f6d,'2019-03-09 20:22:46',0x35382e32302e3132362e313334,'','','0','','1',0x3532353139);");
E_D("replace into `zmb_enewsfeedback` values('87','1',0xe68891e788b1e59c9fe591b3e7bd91,0xe794b3e8afb7e694b6e5bd9520e58e9fe5889be7ab99,0x3934313536383730384071712e636f6d,0x7777772e353274757765692e636f6d,'2019-03-10 12:55:09',0x3232332e3130342e39362e35,'','','0','','1',0x3334333833);");
E_D("replace into `zmb_enewsfeedback` values('88','1',0xe68891e788b1e7949fe6b4bbe7bd91,0xe5b0bde5bfabe694b6e5bd95,0x333135353239383530344071712e636f6d,0x687474703a2f2f7777772e35697368772e636e,'2019-03-15 19:57:11',0x3131322e34372e33342e3132,'','','0','','1',0x3433383036);");
E_D("replace into `zmb_enewsfeedback` values('89','1',0x323339e8b584e6ba90e7bd91,0xe887aae5b7b1e6b2a1e69c89e7ab99e995bfe5b885,0x323138313832363632364071712e636f6d,0x7777772e3233397a792e636f6d,'2019-03-17 06:53:23',0x3232312e3233352e3138302e3531,'','','0','','1',0x3533373930);");
E_D("replace into `zmb_enewsfeedback` values('90','1',0xe99d92e69eabe99881e8b584e5aa92e7bd91,0xe99d92e69eabe99881e8b584e5aa92e7bd91e58886e4baabe4bc98e8b4a8e8b584e6ba90efbc8ce585b1e4baabe7b2bee5bda9e8b584e8aeafe38082e7ab99e995bf515131323137353231393732,0x313231373532313937324071712e636f6d,0x7777772e77683132332e78797a,'2019-03-17 07:44:44',0x3131312e31392e35362e313139,'','','0','','1',0x32373031);");
E_D("replace into `zmb_enewsfeedback` values('91','1',0xe5a4a7e9b1bce788b1e8b584e6ba90e7bd91,0xe794b3e8afb7e694b6e5bd95,0x34303530393735334071712e636f6d,0x687474703a2f2f7777772e3133313464792e636e,'2019-03-17 11:22:55',0x3231392e3132392e3231332e34,'','','0','','1',0x3132303839);");
E_D("replace into `zmb_enewsfeedback` values('92','1',0xe6ba90e7a081e5bfabe98092,0xe6ba90e7a081e5bfabe98092,0x3431343737383833334071712e636f6d,0x68747470733a2f2f7777772e79656d732e6e65742f,'2019-03-17 17:14:43',0x3132352e37362e35352e323036,'','','0','','1',0x3331333031);");
E_D("replace into `zmb_enewsfeedback` values('93','1',0xe9be99e885bee7bd91,0xe799bee5baa6e69d83e9878de69a82e697a0efbc8ce697a5e6b581e9878f313030304950e4bba5e4b88ae4b88de689bfe8aea4e887aae5b7b1e6b2a1e69c89e7ab99e995bfe5b885e79a84,0x313036373734343235314071712e636f6d,0x7777772e3636366c742e636e,'2019-03-19 14:55:25',0x3232312e3230352e35332e313639,'','','0','','1',0x3236393432);");

@include("../../inc/footer.php");
?>