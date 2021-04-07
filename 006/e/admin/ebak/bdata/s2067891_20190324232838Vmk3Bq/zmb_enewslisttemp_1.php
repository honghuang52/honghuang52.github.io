<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `zmb_enewslisttemp`;");
E_C("CREATE TABLE `zmb_enewslisttemp` (
  `tempid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `tempname` varchar(60) NOT NULL DEFAULT '',
  `temptext` mediumtext NOT NULL,
  `subnews` smallint(6) NOT NULL DEFAULT '0',
  `isdefault` tinyint(1) NOT NULL DEFAULT '0',
  `listvar` text NOT NULL,
  `rownum` smallint(6) NOT NULL DEFAULT '0',
  `modid` smallint(6) NOT NULL DEFAULT '0',
  `showdate` varchar(50) NOT NULL DEFAULT '',
  `subtitle` smallint(6) NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `docode` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`tempid`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8");
E_D("replace into `zmb_enewslisttemp` values('1',0xe9bb98e8aea4e696b0e997bbe58897e8a1a8e6a8a1e69dbf,0x3c21444f43545950452068746d6c205055424c4943205c222d2f2f5733432f2f445444205848544d4c20312e30205472616e736974696f6e616c2f2f454e5c22205c22687474703a2f2f7777772e77332e6f72672f54522f7868746d6c312f4454442f7868746d6c312d7472616e736974696f6e616c2e6474645c223e0d0a3c68746d6c20786d6c6e733d5c22687474703a2f2f7777772e77332e6f72672f313939392f7868746d6c5c223e0d0a3c686561643e0d0a3c6d65746120687474702d65717569763d5c22436f6e74656e742d547970655c2220636f6e74656e743d5c22746578742f68746d6c3b20636861727365743d7574662d385c22202f3e0d0a3c7469746c653e5b212d2d706167657469746c652d2d5d202d20506f776572656420627920456d70697265434d533c2f7469746c653e0d0a3c6d657461206e616d653d5c226b6579776f7264735c2220636f6e74656e743d5c225b212d2d706167656b65792d2d5d5c22202f3e0d0a3c6d657461206e616d653d5c226465736372697074696f6e5c2220636f6e74656e743d5c225b212d2d706167656465732d2d5d5c22202f3e0d0a3c6c696e6b20687265663d5c225b212d2d6e6577732e75726c2d2d5d736b696e2f64656661756c742f6373732f7374796c652e6373735c222072656c3d5c227374796c6573686565745c2220747970653d5c22746578742f6373735c22202f3e0d0a3c73637269707420747970653d5c22746578742f6a6176617363726970745c22207372633d5c225b212d2d6e6577732e75726c2d2d5d736b696e2f64656661756c742f6a732f746162732e6a735c223e3c2f7363726970743e0d0a3c2f686561643e0d0a3c626f647920636c6173733d5c226c697374706167655c223e0d0a5b212d2d74656d702e6865616465722d2d5d0d0a3c7461626c652077696474683d5c22313030255c2220626f726465723d5c22305c222063656c6c73706163696e673d5c2231305c222063656c6c70616464696e673d5c22305c223e0d0a3c74722076616c69676e3d5c22746f705c223e0d0a3c746420636c6173733d5c226e6577735f6c6973745c223e3c7461626c652077696474683d5c22313030255c2220626f726465723d5c22305c222063656c6c73706163696e673d5c22305c222063656c6c70616464696e673d5c22305c2220636c6173733d5c22706f736974696f6e5c223e0d0a3c74723e0d0a3c74643ee682a8e5bd93e5898de79a84e4bd8de7bdaeefbc9a5b212d2d6e6577736e61762d2d5d3c2f74643e0d0a3c2f74723e0d0a3c2f7461626c653e0d0a3c7461626c652077696474683d5c22313030255c2220626f726465723d5c22305c222063656c6c73706163696e673d5c22305c222063656c6c70616464696e673d5c22305c2220636c6173733d5c22626f785c223e0d0a3c74723e0d0a3c74643e5b212d2d656d706972656e6577732e6c69737474656d702d2d5d3c756c3e0d0a3c212d2d6c6973742e766172312d2d3e0d0a3c212d2d6c6973742e766172322d2d3e0d0a3c212d2d6c6973742e766172332d2d3e0d0a3c212d2d6c6973742e766172342d2d3e0d0a3c212d2d6c6973742e766172352d2d3e3c2f756c3e0d0a5b212d2d656d706972656e6577732e6c69737474656d702d2d5d0d0a3c7461626c652077696474683d5c22313030255c2220626f726465723d5c22305c222063656c6c73706163696e673d5c22305c222063656c6c70616464696e673d5c22305c223e0d0a3c74723e0d0a202020202020202020202020202020203c7464206865696768743d5c2233385c223e3c64697620636c6173733d5c226570616765735c223e5b212d2d73686f772e6c697374706167652d2d5d3c2f6469763e3c2f74643e0d0a3c2f74723e0d0a3c2f7461626c653e0d0a3c2f74643e0d0a3c2f74723e0d0a3c2f7461626c653e3c2f74643e0d0a3c746420636c6173733d5c2273696465725c223e3c7461626c652077696474683d5c22313030255c2220626f726465723d5c22305c222063656c6c73706163696e673d5c22305c222063656c6c70616464696e673d5c22305c2220636c6173733d5c227469746c655c223e0d0a3c74723e0d0a3c74643e3c7374726f6e673ee68ea8e88d90e8b584e8aeaf3c2f7374726f6e673e3c2f74643e0d0a3c2f74723e0d0a3c2f7461626c653e0d0a3c7461626c652077696474683d5c22313030255c2220626f726465723d5c22305c222063656c6c73706163696e673d5c22385c222063656c6c70616464696e673d5c22305c2220636c6173733d5c22626f785c223e0d0a3c74723e0d0a3c74643e5b70686f6d656e6577737069635d5c2773656c66696e666f5c272c322c342c3132382c39302c312c32302c325b2f70686f6d656e6577737069635d0d0a3c2f74643e0d0a3c2f74723e0d0a3c2f7461626c653e0d0a3c7461626c652077696474683d5c22313030255c2220626f726465723d5c22305c222063656c6c73706163696e673d5c22305c222063656c6c70616464696e673d5c22305c2220636c6173733d5c227469746c65206d617267696e5f746f705c223e0d0a3c74723e0d0a3c74643e3c7374726f6e673ee69c80e5908ee69bb4e696b03c2f7374726f6e673e3c2f74643e0d0a3c2f74723e0d0a3c2f7461626c653e0d0a3c7461626c652077696474683d5c22313030255c2220626f726465723d5c22305c222063656c6c73706163696e673d5c22305c222063656c6c70616464696e673d5c22305c2220636c6173733d5c22626f785c223e0d0a3c74723e0d0a3c74643e3c756c3e0d0a5b65636d73696e666f5d5c2773656c66696e666f5c272c31302c34342c302c302c322c305b2f65636d73696e666f5d200d0a3c2f756c3e3c2f74643e0d0a3c2f74723e0d0a3c2f7461626c653e0d0a3c7461626c652077696474683d5c22313030255c2220626f726465723d5c22305c222063656c6c73706163696e673d5c22305c222063656c6c70616464696e673d5c22305c2220636c6173733d5c227469746c65206d617267696e5f746f705c223e0d0a3c74723e0d0a3c74643e3c7374726f6e673ee783ade997a8e782b9e587bb3c2f7374726f6e673e3c2f74643e0d0a3c2f74723e0d0a3c2f7461626c653e0d0a3c7461626c652077696474683d5c22313030255c2220626f726465723d5c22305c222063656c6c73706163696e673d5c22305c222063656c6c70616464696e673d5c22305c2220636c6173733d5c22626f785c223e0d0a3c74723e0d0a3c74643e3c6f6c20636c6173733d5c2272616e6b5c223e0d0a5b65636d73696e666f5d5c2773656c66696e666f5c272c31302c34302c302c312c31302c305b2f65636d73696e666f5d200d0a3c2f6f6c3e3c2f74643e0d0a3c2f74723e0d0a3c2f7461626c653e3c2f74643e0d0a3c2f74723e0d0a3c2f7461626c653e0d0a5b212d2d74656d702e666f6f7465722d2d5d0d0a3c2f626f64793e0d0a3c2f68746d6c3e,'0','0',0x3c6c693e3c6120687265663d5c225b212d2d7469746c6575726c2d2d5d5c22207469746c653d5c225b212d2d6f6c647469746c652d2d5d5c223e5b212d2d7469746c652d2d5d3c2f613e203c7370616e3e5b212d2d6e65777374696d652d2d5d3c2f7370616e3e3c2f6c693e,'5','1',0x592d6d2d64,'0','0','0');");
E_D("replace into `zmb_enewslisttemp` values('7',0xe9bb98e8aea4e69687e7aba0e58897e8a1a8e6a8a1e69dbf,0x3c21444f43545950452068746d6c205055424c4943205c222d2f2f5733432f2f445444205848544d4c20312e30205472616e736974696f6e616c2f2f454e5c22205c22687474703a2f2f7777772e77332e6f72672f54522f7868746d6c312f4454442f7868746d6c312d7472616e736974696f6e616c2e6474645c223e0d0a3c68746d6c20786d6c6e733d5c22687474703a2f2f7777772e77332e6f72672f313939392f7868746d6c5c223e0d0a3c686561643e0d0a3c6d65746120687474702d65717569763d5c22436f6e74656e742d547970655c2220636f6e74656e743d5c22746578742f68746d6c3b20636861727365743d7574662d385c22202f3e0d0a3c7469746c653e5b212d2d706167657469746c652d2d5d202d20506f776572656420627920456d70697265434d533c2f7469746c653e0d0a3c6d657461206e616d653d5c226b6579776f7264735c2220636f6e74656e743d5c225b212d2d706167656b65792d2d5d5c22202f3e0d0a3c6d657461206e616d653d5c226465736372697074696f6e5c2220636f6e74656e743d5c225b212d2d706167656465732d2d5d5c22202f3e0d0a3c6c696e6b20687265663d5c225b212d2d6e6577732e75726c2d2d5d736b696e2f64656661756c742f6373732f7374796c652e6373735c222072656c3d5c227374796c6573686565745c2220747970653d5c22746578742f6373735c22202f3e0d0a3c73637269707420747970653d5c22746578742f6a6176617363726970745c22207372633d5c225b212d2d6e6577732e75726c2d2d5d736b696e2f64656661756c742f6a732f746162732e6a735c223e3c2f7363726970743e0d0a3c2f686561643e0d0a3c626f647920636c6173733d5c226c697374706167655c223e0d0a5b212d2d74656d702e6865616465722d2d5d0d0a3c7461626c652077696474683d5c22313030255c2220626f726465723d5c22305c222063656c6c73706163696e673d5c2231305c222063656c6c70616464696e673d5c22305c223e0d0a3c74722076616c69676e3d5c22746f705c223e0d0a3c746420636c6173733d5c226e6577735f6c6973745c223e3c7461626c652077696474683d5c22313030255c2220626f726465723d5c22305c222063656c6c73706163696e673d5c22305c222063656c6c70616464696e673d5c22305c2220636c6173733d5c22706f736974696f6e5c223e0d0a3c74723e0d0a3c74643ee682a8e5bd93e5898de79a84e4bd8de7bdaeefbc9a5b212d2d6e6577736e61762d2d5d3c2f74643e0d0a3c2f74723e0d0a3c2f7461626c653e0d0a3c7461626c652077696474683d5c22313030255c2220626f726465723d5c22305c222063656c6c73706163696e673d5c22305c222063656c6c70616464696e673d5c22305c2220636c6173733d5c22626f785c223e0d0a3c74723e0d0a3c74643e5b212d2d656d706972656e6577732e6c69737474656d702d2d5d3c756c3e0d0a3c212d2d6c6973742e766172312d2d3e0d0a3c212d2d6c6973742e766172322d2d3e0d0a3c212d2d6c6973742e766172332d2d3e0d0a3c212d2d6c6973742e766172342d2d3e0d0a3c212d2d6c6973742e766172352d2d3e3c2f756c3e0d0a5b212d2d656d706972656e6577732e6c69737474656d702d2d5d0d0a3c7461626c652077696474683d5c22313030255c2220626f726465723d5c22305c222063656c6c73706163696e673d5c22305c222063656c6c70616464696e673d5c22305c2220636c6173733d5c226c6973745f706167655c223e0d0a3c74723e0d0a3c74643e5b212d2d73686f772e706167652d2d5d3c2f74643e0d0a3c2f74723e0d0a3c2f7461626c653e0d0a3c2f74643e0d0a3c2f74723e0d0a3c2f7461626c653e3c2f74643e0d0a3c746420636c6173733d5c2273696465725c223e3c7461626c652077696474683d5c22313030255c2220626f726465723d5c22305c222063656c6c73706163696e673d5c22305c222063656c6c70616464696e673d5c22305c2220636c6173733d5c227469746c655c223e0d0a3c74723e0d0a3c74643e3c7374726f6e673ee68ea8e88d90e8b584e8aeaf3c2f7374726f6e673e3c2f74643e0d0a3c2f74723e0d0a3c2f7461626c653e0d0a3c7461626c652077696474683d5c22313030255c2220626f726465723d5c22305c222063656c6c73706163696e673d5c22385c222063656c6c70616464696e673d5c22305c2220636c6173733d5c22626f785c223e0d0a3c74723e0d0a3c74643e5b70686f6d656e6577737069635d5c2773656c66696e666f5c272c322c342c3132382c39302c312c32302c325b2f70686f6d656e6577737069635d0d0a3c2f74643e0d0a3c2f74723e0d0a3c2f7461626c653e0d0a3c7461626c652077696474683d5c22313030255c2220626f726465723d5c22305c222063656c6c73706163696e673d5c22305c222063656c6c70616464696e673d5c22305c2220636c6173733d5c227469746c65206d617267696e5f746f705c223e0d0a3c74723e0d0a3c74643e3c7374726f6e673ee69c80e5908ee69bb4e696b03c2f7374726f6e673e3c2f74643e0d0a3c2f74723e0d0a3c2f7461626c653e0d0a3c7461626c652077696474683d5c22313030255c2220626f726465723d5c22305c222063656c6c73706163696e673d5c22305c222063656c6c70616464696e673d5c22305c2220636c6173733d5c22626f785c223e0d0a3c74723e0d0a3c74643e3c756c3e0d0a5b65636d73696e666f5d5c2773656c66696e666f5c272c31302c34342c302c302c322c305b2f65636d73696e666f5d200d0a3c2f756c3e3c2f74643e0d0a3c2f74723e0d0a3c2f7461626c653e0d0a3c7461626c652077696474683d5c22313030255c2220626f726465723d5c22305c222063656c6c73706163696e673d5c22305c222063656c6c70616464696e673d5c22305c2220636c6173733d5c227469746c65206d617267696e5f746f705c223e0d0a3c74723e0d0a3c74643e3c7374726f6e673ee783ade997a8e782b9e587bb3c2f7374726f6e673e3c2f74643e0d0a3c2f74723e0d0a3c2f7461626c653e0d0a3c7461626c652077696474683d5c22313030255c2220626f726465723d5c22305c222063656c6c73706163696e673d5c22305c222063656c6c70616464696e673d5c22305c2220636c6173733d5c22626f785c223e0d0a3c74723e0d0a3c74643e3c6f6c20636c6173733d5c2272616e6b5c223e0d0a5b65636d73696e666f5d5c2773656c66696e666f5c272c31302c34302c302c312c31302c305b2f65636d73696e666f5d200d0a3c2f6f6c3e3c2f74643e0d0a3c2f74723e0d0a3c2f7461626c653e3c2f74643e0d0a3c2f74723e0d0a3c2f7461626c653e0d0a5b212d2d74656d702e666f6f7465722d2d5d0d0a3c2f626f64793e0d0a3c2f68746d6c3e,'0','0',0x3c6c693e3c6120687265663d5c225b212d2d7469746c6575726c2d2d5d5c22207469746c653d5c225b212d2d6f6c647469746c652d2d5d5c223e5b212d2d7469746c652d2d5d3c2f613e203c7370616e3e5b212d2d6e65777374696d652d2d5d3c2f7370616e3e3c2f6c693e,'5','7',0x592d6d2d64,'0','0','0');");
E_D("replace into `zmb_enewslisttemp` values('8',0xe58886e7b1bbe4bfa1e681afe9bb98e8aea4e58897e8a1a8e6a8a1e69dbf,0x3c21444f43545950452068746d6c3e0d0a3c68746d6c3e0d0a3c686561643e0d0a3c6d65746120636861727365743d5c227574662d385c22202f3e0d0a3c7469746c653e5b212d2d706167657469746c652d2d5d202d20e788b1e7ab99e5afbce888aae7bd913c2f7469746c653e0d0a3c6d657461206e616d653d5c226b6579776f7264735c2220636f6e74656e743d5c22e788b1e7ab99e5afbce888aa2ce79fa5e5908de590a7e5afbce888aa2c5151e68a80e69cafe5afbce888aa2ce5afbce888aae5a4a9e4b88b2ce68a80e69cafe5afbce888aa2ce5a8b1e4b990e7bd912ce5b08fe58880e5a8b1e4b990e7bd912ce788b1512c5151e68a80e69caf2c5151e5afbce888aa2ce5b08fe9bb91e5b18be5afbce888aae7bd915c222f3e0d0a3c6d657461206e616d653d5c226465736372697074696f6e5c2220636f6e74656e743d5c22e788b1e7ab99e5afbce888aae694b6e5bd95e59bbde58685e9a696e5b188e4b880e68c87e79a84e79fa5e5908de7bd91e7ab99e5b9b3e58fb0efbc8ce7ab99e782b9e5b7b2e7b4afe8aea1e694b6e5bd95e695b0e58d83e7bd91e7ab99efbc8ce7b4afe8aea1e4b8bae4b8ade59bbde7bd91e6b091e68f90e4be9be5a49ae8bebee695b0e4babfe79a84e8aebfe997aee782b9e587bbefbc8ce6bba1e8b6b3e794a8e688b7e99a8fe697b6e69fa5e99885e69c80e585a8e99da2e69c80e69d83e5a881e79a84e69687e7aba0e8b584e8aeafe69599e7a88b5c222f3e0d0a202020203c6d657461206e616d653d5c2272656e64657265725c2220636f6e74656e743d5c227765626b69745c22202f3e0d0a202020203c6d65746120687474702d65717569763d5c22582d55412d436f6d70617469626c655c2220636f6e74656e743d5c2249453d656467655c223e0d0a202020203c6c696e6b2072656c3d5c2269636f6e5c2220687265663d5c222f66617669636f6e2e69636f5c2220747970653d5c22696d6167652f782d69636f6e5c222f3e0d0a202020203c6c696e6b2072656c3d5c227374796c6573686565745c2220687265663d5c222f736b696e732f6c616e2f4373732f7868776468776c617975692e6373735c2220747970653d5c22746578742f6373735c22202f3e0d0a202020203c6c696e6b2072656c3d5c227374796c6573686565745c2220687265663d5c222f736b696e732f6c616e2f4373732f7868776468777075626c69632e6373735c2220747970653d5c22746578742f6373735c22202f3e0d0a202020200d0a3c6c696e6b2072656c3d5c227374796c6573686565745c2220687265663d5c222f736b696e732f6c616e2f4373732f7868776468776c6973742e6373735c2220747970653d5c22746578742f6373735c222f3e0d0a0d0a202020203c212d2d5b6966206c746520494520385d3e0d0a202020203c7363726970743e206c6f636174696f6e203d205c222f69652e68746d6c3f75726c3d5c22202b20656e636f6465555249436f6d706f6e656e74286c6f636174696f6e2e68726566293b203c2f7363726970743e0d0a202020203c215b656e6469665d2d2d3e0d0a3c2f686561643e0d0a3c626f64793e0d0a5b212d2d74656d702e6865616465722d2d5d0d0a3c61727469636c653e0d0a202020203c6469763e0d0a20202020202020203c64697620636c6173733d5c2266656e6c65695c223e0d0a2020202020202020202020203c64697620636c6173733d5c227469746c65207365617263687765625c223e0d0a202020202020202020202020202020203c68333ee7bd91e7ab99e58886e7b1bb3c2f68333e0d0a090909093c212d2de6909ce7b4a2e5bc80e5a78b2d2d3e0d0a20203c666f726d20636c6173733d5c22666f726d2d7365617263685c22206d6574686f643d5c22706f73745c2220616374696f6e3d5c222f652f7365617263682f696e6465782e7068705c223e0d0a3c696e70757420747970653d5c2268696464656e5c22206e616d653d5c2273686f775c222076616c75653d5c227469746c652c75726c5c223e0d0a202020202020202020202020202020202020202020202020202020203c696e70757420747970653d5c2268696464656e5c222076616c75653d5c22315c22206e616d653d5c2274656d7069645c223e3c2f696e7075743e0d0a202020202020202020202020202020202020202020202020202020203c696e70757420747970653d5c2268696464656e5c222076616c75653d5c22696e666f5c22206e616d653d5c2274626e616d655c223e3c2f696e7075743e0d0a202020202020202020202020202020202020202020202020202020203c696e707574206e616d653d5c226d69645c222076616c75653d5c22315c2220747970653d5c2268696464656e5c223e0d0a202020202020202020202020202020202020202020202020202020203c696e707574206e616d653d5c22646f706f73745c222076616c75653d5c227365617263685c2220747970653d5c2268696464656e5c223e0d0a2020202020203c696e70757420636c6173733d5c227365617263682d696e7075745c22206e616d653d5c226b6579626f6172645c2220747970653d5c22746578745c2220706c616365686f6c6465723d5c22e8be93e585a5e59f9fe5908de68896e585b3e994aee8af8d5c223e0d0a2020202020203c627574746f6e20636c6173733d5c2269636f6e666f6e745c22206e616d653d5c227375626d69745c2220747970653d5c227375626d69745c223e3c2f627574746f6e3e0d0a3c2f666f726d3e0d0a3c212d2de6909ce7b4a2e7bb93e69d9f2d2d3e0d0a2020202020202020202020203c2f6469763e0d0a2020202020202020202020203c756c20636c6173733d5c226c617975692d636c6561725c222069643d5c22747970655f6c6973745c223e0d0a3c6c693e3c6120687265663d5c222f75726c2f6a697368755c22207469746c653d5c22e68a80e69caf5c2220636c6173733d5c227074797065436f64655c223ee68a80e69caf3c2f613e3c2f6c693e0d0a3c6c693e3c6120687265663d5c222f75726c2f6a69616f6368656e672f5c22207469746c653d5c22e69599e7a88b5c2220636c6173733d5c227074797065436f64655c223ee69599e7a88b3c2f613e3c2f6c693e0d0a3c6c693e3c6120687265663d5c222f75726c2f6d6f62616e5c22207469746c653d5c22e6a8a1e69dbf5c2220636c6173733d5c227074797065436f64655c223ee6a8a1e69dbf3c2f613e3c2f6c693e0d0a3c6c693e3c6120687265663d5c222f75726c2f73686f75796f755c22207469746c653d5c22e6898be6b8b85c2220636c6173733d5c227074797065436f64655c223ee6898be6b8b83c2f613e3c2f6c693e0d0a3c6c693e3c6120687265663d5c222f75726c2f77616e67796f755c22207469746c653d5c22e7bd91e6b8b85c2220636c6173733d5c227074797065436f64655c223ee7bd91e6b8b83c2f613e3c2f6c693e0d0a3c6c693e3c6120687265663d5c222f75726c2f676578696e675c22207469746c653d5c22e4b8aae680a75c2220636c6173733d5c227074797065436f64655c223ee4b8aae680a73c2f613e3c2f6c693e0d0a3c6c693e3c6120687265663d5c222f75726c2f79696e677368695c22207469746c653d5c22e5bdb1e8a7865c2220636c6173733d5c227074797065436f64655c223ee5bdb1e8a7863c2f613e3c2f6c693e0d0a3c6c693e3c6120687265663d5c222f75726c2f626f6b655c22207469746c653d5c22e58d9ae5aea25c2220636c6173733d5c227074797065436f64655c223ee58d9ae5aea23c2f613e3c2f6c693e0d0a0d0a3c6c693e3c6120687265663d5c222f75726c2f7a697875655c22207469746c653d5c22e887aae5ada65c2220636c6173733d5c227074797065436f64655c223ee887aae5ada63c2f613e3c2f6c693e0d0a3c6c693e3c6120687265663d5c222f75726c2f7765622f5c22207469746c653d5c227765625c2220636c6173733d5c227074797065436f64655c223e7765623c2f613e3c2f6c693e0d0a3c6c693e3c6120687265663d5c222f75726c2f6d6f62616e5c22207469746c653d5c22e5aea1e7be8e5c2220636c6173733d5c227074797065436f64655c223ee5aea1e7be8e3c2f613e3c2f6c693e0d0a3c6c693e3c6120687265663d5c222f75726c2f70656973655c22207469746c653d5c22e9858de889b25c2220636c6173733d5c227074797065436f64655c223ee9858de889b23c2f613e3c2f6c693e0d0a3c6c693e3c6120687265663d5c222f75726c2f6964635c22207469746c653d5c224944435c2220636c6173733d5c227074797065436f64655c223e4944433c2f613e3c2f6c693e0d0a3c6c693e3c6120687265663d5c222f75726c2f6b656a695c22207469746c653d5c22e7a791e68a805c2220636c6173733d5c227074797065436f64655c223ee7a791e68a803c2f613e3c2f6c693e0d0a3c6c693e3c6120687265663d5c222f75726c2f79696e677368695c22207469746c653d5c22e5bdb1e8a7865c2220636c6173733d5c227074797065436f64655c223ee5bdb1e8a7863c2f613e3c2f6c693e0d0a3c6c693e3c6120687265663d5c222f75726c2f676f7577755c22207469746c653d5c22e8b4ade789a95c2220636c6173733d5c227074797065436f64655c223ee8b4ade789a93c2f613e3c2f6c693e0d0a3c6c693e3c6120687265663d5c222f75726c2f6e6577735c22207469746c653d5c22e696b0e997bb5c2220636c6173733d5c227074797065436f64655c223ee696b0e997bb3c2f613e3c2f6c693e0d0a3c6c693e3c6120687265663d5c222f75726c2f64616f68616e675c22207469746c653d5c22e5afbce888aa5c2220636c6173733d5c227074797065436f64655c223ee5afbce888aa3c2f613e3c2f6c693e0d0a3c6c693e3c6120687265663d5c222f75726c2f6c756e74616e5c22207469746c653d5c22e8aebae59d9b5c2220636c6173733d5c227074797065436f64655c223ee8aebae59d9b3c2f613e3c2f6c693e0d0a3c6c693e3c6120687265663d5c222f75726c2f716974615c22207469746c653d5c22e585b6e4bb965c2220636c6173733d5c227074797065436f64655c223ee585b6e4bb963c2f613e3c2f6c693e0d0a202020202020202020202020202020202020202020202020202020203c2f756c3e0d0a20202020202020203c2f6469763e0d0a20202020202020203c64697620636c6173733d5c226c697374735c223e0d0a2020202020202020202020203c756c20636c6173733d5c226c617975692d636c6561725c222069643d5c226c6973746c695c223e0d0a5b212d2d656d706972656e6577732e6c69737474656d702d2d5d0d0a3c212d2d6c6973742e766172312d2d3e0d0a5b212d2d656d706972656e6577732e6c69737474656d702d2d5d20202020202020202020202020202020202020202020202020202020200d0a202020202020202020202020202020202020202020202020202020203c2f756c3e0d0a3c64697620636c6173733d5c227868776468776c697374706167655c22207374796c653d5c22626f726465722d746f703a2031707820736f6c696420236363633b6261636b67726f756e643a236666663b5c223e0d0a3c64697620636c6173733d5c227868776468776c697374706167655c22207374796c653d5c226d617267696e2d6c6566743a2033353070783b5c223e5b212d2d73686f772e6c697374706167652d2d5d3c2f6469763e0d0a3c2f6469763e0d0a20202020202020203c2f6469763e0d0a202020203c2f6469763e0d0a3c2f61727469636c653e0d0a0d0a5b212d2d74656d702e666f6f7465722d2d5d0d0a3c212d2de799bee5baa6e887aae58aa8e68f90e4baa42d2d3e0d0a3c7363726970743e0d0a2866756e6374696f6e28297b0d0a20202020766172206270203d20646f63756d656e742e637265617465456c656d656e74285c277363726970745c27293b0d0a202020207661722063757250726f746f636f6c203d2077696e646f772e6c6f636174696f6e2e70726f746f636f6c2e73706c6974285c273a5c27295b305d3b0d0a202020206966202863757250726f746f636f6c203d3d3d205c2768747470735c2729207b0d0a202020202020202062702e737263203d205c2768747470733a2f2f7a7a2e62647374617469632e636f6d2f6c696e6b7375626d69742f707573682e6a735c273b0d0a202020207d0d0a20202020656c7365207b0d0a202020202020202062702e737263203d205c27687474703a2f2f707573682e7a68616e7a68616e672e62616964752e636f6d2f707573682e6a735c273b0d0a202020207d0d0a202020207661722073203d20646f63756d656e742e676574456c656d656e747342795461674e616d65285c227363726970745c22295b305d3b0d0a20202020732e706172656e744e6f64652e696e736572744265666f72652862702c2073293b0d0a7d2928293b0d0a3c2f7363726970743e0d0a0d0a3c212d2de7bb9fe8aea12d2d3e0d0a3c7363726970743e0d0a766172205f686d74203d205f686d74207c7c205b5d3b0d0a2866756e6374696f6e2829207b0d0a202076617220686d203d20646f63756d656e742e637265617465456c656d656e74285c227363726970745c22293b0d0a2020686d2e737263203d205c2268747470733a2f2f686d2e62616964752e636f6d2f686d2e6a733f61346236336466343933643863326230333634666630623833376430393666625c223b0d0a20207661722073203d20646f63756d656e742e676574456c656d656e747342795461674e616d65285c227363726970745c22295b305d3b200d0a2020732e706172656e744e6f64652e696e736572744265666f726528686d2c2073293b0d0a7d2928293b0d0a3c2f7363726970743e0d0a0d0a3c212d2de6a8a1e69dbfe58cbae59f9fe7bb93e69d9f2d2d3e0d0a3c2f626f64793e0d0a3c2f68746d6c3e,'120','0',0x3c6c693e0d0a20202020202020202020202020202020202020203c6120687265663d5c225b212d2d7469746c6575726c2d2d5d5c223e0d0a2020202020202020202020202020202020202020202020203c64697620636c6173733d5c22696d675c223e0d0a202020202020202020202020202020202020202020202020202020203c696d67207372633d5c225b212d2d7469746c657069632d2d5d5c222f3e0d0a2020202020202020202020202020202020202020202020203c2f6469763e0d0a2020202020202020202020202020202020202020202020203c7020636c6173733d5c22696e74726f647563655c223e5b212d2d7469746c652d2d5d3c2f703e0d0a20202020202020202020202020202020202020203c2f613e0d0a202020202020202020202020202020203c2f6c693e,'1','8',0x592d6d2d64,'0','0','0');");

@include("../../inc/footer.php");
?>