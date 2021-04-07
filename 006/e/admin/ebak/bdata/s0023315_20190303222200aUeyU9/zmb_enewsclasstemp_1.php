<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `zmb_enewsclasstemp`;");
E_C("CREATE TABLE `zmb_enewsclasstemp` (
  `tempid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `tempname` varchar(30) NOT NULL DEFAULT '',
  `temptext` mediumtext NOT NULL,
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`tempid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `zmb_enewsclasstemp` values('1',0xe9809ae794a8e4b880e7baa7e6a08fe79baee6a8a1e69dbf,0x3c21444f43545950452068746d6c205055424c4943205c222d2f2f5733432f2f445444205848544d4c20312e30205472616e736974696f6e616c2f2f454e5c22205c22687474703a2f2f7777772e77332e6f72672f54522f7868746d6c312f4454442f7868746d6c312d7472616e736974696f6e616c2e6474645c223e0d0a3c68746d6c20786d6c6e733d5c22687474703a2f2f7777772e77332e6f72672f313939392f7868746d6c5c223e0d0a3c686561643e0d0a3c6d65746120687474702d65717569763d5c22436f6e74656e742d547970655c2220636f6e74656e743d5c22746578742f68746d6c3b20636861727365743d7574662d385c22202f3e0d0a3c7469746c653e5b212d2d706167657469746c652d2d5d202d20506f776572656420627920456d70697265434d533c2f7469746c653e0d0a3c6d657461206e616d653d5c226b6579776f7264735c2220636f6e74656e743d5c225b212d2d706167656b65792d2d5d5c22202f3e0d0a3c6d657461206e616d653d5c226465736372697074696f6e5c2220636f6e74656e743d5c225b212d2d706167656465732d2d5d5c22202f3e0d0a3c6c696e6b20687265663d5c225b212d2d6e6577732e75726c2d2d5d736b696e2f64656661756c742f6373732f7374796c652e6373735c222072656c3d5c227374796c6573686565745c2220747970653d5c22746578742f6373735c22202f3e0d0a3c73637269707420747970653d5c22746578742f6a6176617363726970745c22207372633d5c225b212d2d6e6577732e75726c2d2d5d736b696e2f64656661756c742f6a732f746162732e6a735c223e3c2f7363726970743e0d0a3c2f686561643e0d0a3c626f647920636c6173733d5c226368616e6e6c655c223e0d0a5b212d2d74656d702e6865616465722d2d5d0d0a3c7461626c652077696474683d5c22313030255c2220626f726465723d5c22305c222063656c6c73706163696e673d5c2231305c222063656c6c70616464696e673d5c22305c223e0d0a3c74722076616c69676e3d5c22746f705c223e0d0a3c746420636c6173733d5c226e6577735f6c6973745c223e3c7461626c652077696474683d5c22313030255c2220626f726465723d5c22305c222063656c6c73706163696e673d5c22305c222063656c6c70616464696e673d5c22305c2220636c6173733d5c22706f736974696f6e5c223e0d0a3c74723e0d0a3c74643ee682a8e5bd93e5898de79a84e4bd8de7bdaeefbc9a5b212d2d6e6577736e61762d2d5d3c2f74643e0d0a3c2f74723e0d0a3c2f7461626c653e0d0a5b6c697374736f6e636c6173735d5c2773656c66696e666f5c272c352c33382c302c302c372c302c305b2f6c697374736f6e636c6173735d3c2f74643e0d0a3c746420636c6173733d5c2273696465725c223e3c7461626c652077696474683d5c22313030255c2220626f726465723d5c22305c222063656c6c73706163696e673d5c22305c222063656c6c70616464696e673d5c22305c2220636c6173733d5c227469746c655c223e0d0a3c74723e0d0a3c74643e3c7374726f6e673ee68ea8e88d90e8b584e8aeaf3c2f7374726f6e673e3c2f74643e0d0a3c2f74723e0d0a3c2f7461626c653e0d0a3c7461626c652077696474683d5c22313030255c2220626f726465723d5c22305c222063656c6c73706163696e673d5c22385c222063656c6c70616464696e673d5c22305c2220636c6173733d5c22626f785c223e0d0a3c74723e0d0a3c74643e5b70686f6d656e6577737069635d5c2773656c66696e666f5c272c322c342c3132382c39302c312c32302c325b2f70686f6d656e6577737069635d0d0a3c2f74643e0d0a3c2f74723e0d0a3c2f7461626c653e0d0a3c7461626c652077696474683d5c22313030255c2220626f726465723d5c22305c222063656c6c73706163696e673d5c22305c222063656c6c70616464696e673d5c22305c2220636c6173733d5c227469746c65206d617267696e5f746f705c223e0d0a3c74723e0d0a3c74643e3c7374726f6e673ee69c80e5908ee69bb4e696b03c2f7374726f6e673e3c2f74643e0d0a3c2f74723e0d0a3c2f7461626c653e0d0a3c7461626c652077696474683d5c22313030255c2220626f726465723d5c22305c222063656c6c73706163696e673d5c22305c222063656c6c70616464696e673d5c22305c2220636c6173733d5c22626f785c223e0d0a3c74723e0d0a3c74643e3c756c3e0d0a5b65636d73696e666f5d5c2773656c66696e666f5c272c31302c34342c302c302c322c305b2f65636d73696e666f5d200d0a3c2f756c3e3c2f74643e0d0a3c2f74723e0d0a3c2f7461626c653e0d0a3c7461626c652077696474683d5c22313030255c2220626f726465723d5c22305c222063656c6c73706163696e673d5c22305c222063656c6c70616464696e673d5c22305c2220636c6173733d5c227469746c65206d617267696e5f746f705c223e0d0a3c74723e0d0a3c74643e3c7374726f6e673ee783ade997a8e782b9e587bb3c2f7374726f6e673e3c2f74643e0d0a3c2f74723e0d0a3c2f7461626c653e0d0a3c7461626c652077696474683d5c22313030255c2220626f726465723d5c22305c222063656c6c73706163696e673d5c22305c222063656c6c70616464696e673d5c22305c2220636c6173733d5c22626f785c223e0d0a3c74723e0d0a3c74643e3c6f6c20636c6173733d5c2272616e6b5c223e0d0a5b65636d73696e666f5d5c2773656c66696e666f5c272c31302c34302c302c312c31302c305b2f65636d73696e666f5d200d0a3c2f6f6c3e3c2f74643e0d0a3c2f74723e0d0a3c2f7461626c653e3c2f74643e0d0a3c2f74723e0d0a3c2f7461626c653e0d0a5b212d2d74656d702e666f6f7465722d2d5d0d0a3c2f626f64793e0d0a3c2f68746d6c3e,'0');");
E_D("replace into `zmb_enewsclasstemp` values('2',0xe58886e7b1bbe4bfa1e681afe4b880e7baa7e6a08fe79baee6a8a1e69dbf,0x3c21444f43545950452068746d6c205055424c4943205c222d2f2f5733432f2f445444205848544d4c20312e30205472616e736974696f6e616c2f2f454e5c22205c22687474703a2f2f7777772e77332e6f72672f54522f7868746d6c312f4454442f7868746d6c312d7472616e736974696f6e616c2e6474645c223e0d0a3c68746d6c20786d6c6e733d5c22687474703a2f2f7777772e77332e6f72672f313939392f7868746d6c5c223e0d0a3c686561643e0d0a3c6d65746120687474702d65717569763d5c22436f6e74656e742d547970655c2220636f6e74656e743d5c22746578742f68746d6c3b20636861727365743d7574662d385c22202f3e0d0a3c7469746c653e5b212d2d706167657469746c652d2d5d202d20506f776572656420627920456d70697265434d533c2f7469746c653e0d0a3c6d657461206e616d653d5c226b6579776f7264735c2220636f6e74656e743d5c225b212d2d706167656b65792d2d5d5c22202f3e0d0a3c6d657461206e616d653d5c226465736372697074696f6e5c2220636f6e74656e743d5c225b212d2d706167656465732d2d5d5c22202f3e0d0a3c6c696e6b20687265663d5c225b212d2d6e6577732e75726c2d2d5d736b696e2f64656661756c742f6373732f7374796c652e6373735c222072656c3d5c227374796c6573686565745c2220747970653d5c22746578742f6373735c22202f3e0d0a3c73637269707420747970653d5c22746578742f6a6176617363726970745c22207372633d5c225b212d2d6e6577732e75726c2d2d5d736b696e2f64656661756c742f6a732f746162732e6a735c223e3c2f7363726970743e0d0a3c2f686561643e0d0a3c626f647920636c6173733d5c226368616e6e6c655c223e0d0a5b212d2d74656d702e6865616465722d2d5d0d0a3c7461626c652077696474683d5c22313030255c2220626f726465723d5c22305c222063656c6c73706163696e673d5c2231305c222063656c6c70616464696e673d5c22305c223e0d0a3c74722076616c69676e3d5c22746f705c223e0d0a3c746420636c6173733d5c226e6577735f6c6973745c223e3c7461626c652077696474683d5c22313030255c2220626f726465723d5c22305c222063656c6c73706163696e673d5c22305c222063656c6c70616464696e673d5c22305c2220636c6173733d5c22706f736974696f6e5c223e0d0a3c74723e0d0a3c74643ee682a8e5bd93e5898de79a84e4bd8de7bdaeefbc9a5b212d2d6e6577736e61762d2d5d3c2f74643e0d0a3c2f74723e0d0a3c2f7461626c653e0d0a5b6c697374736f6e636c6173735d5c2773656c66696e666f5c272c352c33382c302c302c372c302c305b2f6c697374736f6e636c6173735d3c2f74643e0d0a3c746420636c6173733d5c2273696465725c223e3c7461626c652077696474683d5c22313030255c2220626f726465723d5c22305c222063656c6c73706163696e673d5c22305c222063656c6c70616464696e673d5c22305c2220636c6173733d5c227469746c655c223e0d0a3c74723e0d0a3c74643e3c7374726f6e673ee58886e7b1bbe4bfa1e681afe6909ce7b4a23c2f7374726f6e673e3c2f74643e0d0a3c2f74723e0d0a3c2f7461626c653e0d0a3c7461626c652077696474683d5c22313030255c2220626f726465723d5c22305c222063656c6c73706163696e673d5c22305c222063656c6c70616464696e673d5c22305c2220636c6173733d5c22626f785c223e0d0a3c74723e0d0a3c74643e3c666f726d20616374696f6e3d5c225b212d2d6e6577732e75726c2d2d5d652f7365617263682f696e6465782e7068705c22206d6574686f643d5c22706f73745c22206e616d653d5c22736561726368666f726d5c222069643d5c22736561726368666f726d5c223e0d0a3c7461626c652077696474683d5c223938255c2220626f726465723d5c22305c2220616c69676e3d5c2263656e7465725c222063656c6c70616464696e673d5c22305c222063656c6c73706163696e673d5c22365c223e0d0a3c696e70757420747970653d5c2268696464656e5c22206e616d653d5c2274626e616d655c222076616c75653d5c22696e666f5c223e0d0a3c696e70757420747970653d5c2268696464656e5c22206e616d653d5c2274656d7069645c222076616c75653d5c22315c223e0d0a3c74723e0d0a3c74643e3c696e707574206e616d653d5c226b6579626f6172645c2220747970653d5c22746578745c2220636c6173733d5c22696e707574546578745c222069643d5c226b6579626f6172645c222073697a653d5c2231385c22202f3e0d0a3c73656c656374206e616d653d5c2273686f775c223e0d0a3c6f7074696f6e2076616c75653d5c227469746c652c736d616c6c746578742c6d79617265615c222073656c65637465643d5c2273656c65637465645c223ee4b88de999903c2f6f7074696f6e3e0d0a3c6f7074696f6e2076616c75653d5c227469746c655c223ee4bfa1e681afe6a087e9a2983c2f6f7074696f6e3e0d0a3c6f7074696f6e2076616c75653d5c22736d616c6c746578745c223ee4bfa1e681afe58685e5aeb93c2f6f7074696f6e3e0d0a3c6f7074696f6e2076616c75653d5c226d79617265615c223ee68980e59ca8e59cb03c2f6f7074696f6e3e0d0a3c2f73656c6563743e3c2f74643e0d0a3c2f74723e0d0a3c74723e0d0a3c74643e3c73656c656374206e616d653d5c22636c61737369645c223e0d0a3c6f7074696f6e2076616c75653d5c27395c273ee68980e69c89e58886e7b1bb3c2f6f7074696f6e3e0d0a3c6f7074696f6e2076616c75653d5c2731305c273e7c2de688bfe5b18be4bfa1e681af3c2f6f7074696f6e3e0d0a3c6f7074696f6e2076616c75653d5c2731315c27203e266e6273703b266e6273703b7c2de688bfe5b18be6b182e7a79f3c2f6f7074696f6e3e0d0a3c6f7074696f6e2076616c75653d5c2731325c27203e266e6273703b266e6273703b7c2de688bfe5b18be587bae7a79f3c2f6f7074696f6e3e0d0a3c6f7074696f6e2076616c75653d5c2731335c27203e266e6273703b266e6273703b7c2de688bfe5b18be6b182e8b4ad3c2f6f7074696f6e3e0d0a3c6f7074696f6e2076616c75653d5c2731345c27203e266e6273703b266e6273703b7c2de688bfe5b18be587bae594ae3c2f6f7074696f6e3e0d0a3c6f7074696f6e2076616c75653d5c2731355c27203e266e6273703b266e6273703b7c2de58a9ee585ace794a8e688bf3c2f6f7074696f6e3e0d0a3c6f7074696f6e2076616c75653d5c2731365c27203e266e6273703b266e6273703b7c2de697bae993bae997a8e99da23c2f6f7074696f6e3e0d0a3c6f7074696f6e2076616c75653d5c2731375c273e7c2de8b7b3e89aa4e5b882e59cba3c2f6f7074696f6e3e0d0a3c6f7074696f6e2076616c75653d5c2731385c27203e266e6273703b266e6273703b7c2de794b5e88491e9858de4bbb63c2f6f7074696f6e3e0d0a3c6f7074696f6e2076616c75653d5c2731395c27203e266e6273703b266e6273703b7c2de794b5e599a8e695b0e7a0813c2f6f7074696f6e3e0d0a3c6f7074696f6e2076616c75653d5c2732305c27203e266e6273703b266e6273703b7c2de9809ae8aeafe4baa7e593813c2f6f7074696f6e3e0d0a3c6f7074696f6e2076616c75653d5c2732315c27203e266e6273703b266e6273703b7c2de5b185e5aeb6e794a8e593813c2f6f7074696f6e3e0d0a3c6f7074696f6e2076616c75653d5c2732325c273e7c2de5908ce59f8ee7949fe6b4bb3c2f6f7074696f6e3e0d0a3c6f7074696f6e2076616c75653d5c2732335c27203e266e6273703b266e6273703b7c2de69cace59cb0e696b0e997bb3c2f6f7074696f6e3e0d0a3c6f7074696f6e2076616c75653d5c2732345c27203e266e6273703b266e6273703b7c2de8b4ade789a9e68993e68a983c2f6f7074696f6e3e0d0a3c6f7074696f6e2076616c75653d5c2732355c27203e266e6273703b266e6273703b7c2de69785e6b8b8e6b4bbe58aa83c2f6f7074696f6e3e0d0a3c6f7074696f6e2076616c75653d5c2732365c27203e266e6273703b266e6273703b7c2de4bebfe6b091e5918ae7a4ba3c2f6f7074696f6e3e0d0a3c6f7074696f6e2076616c75653d5c2732375c273e7c2de6b182e8818ce68b9be881983c2f6f7074696f6e3e0d0a3c6f7074696f6e2076616c75653d5c2732385c27203e266e6273703b266e6273703b7c2de5b7a5e7a88be68a80e69caf3c2f6f7074696f6e3e0d0a3c6f7074696f6e2076616c75653d5c2732395c27203e266e6273703b266e6273703b7c2de8b4a2e58aa1e4bc9ae8aea13c2f6f7074696f6e3e0d0a3c6f7074696f6e2076616c75653d5c2733305c27203e266e6273703b266e6273703b7c2de9a490e9a5aee8a18ce4b89a3c2f6f7074696f6e3e0d0a3c6f7074696f6e2076616c75653d5c2733315c27203e266e6273703b266e6273703b7c2de7bb8fe890a5e7aea1e790863c2f6f7074696f6e3e0d0a3c2f73656c6563743e0d0a3c696e707574206e616d653d5c225375626d6974325c2220747970653d5c22696d6167655c222076616c75653d5c22e6909ce7b4a25c22207372633d5c225b212d2d6e6577732e75726c2d2d5d736b696e2f64656661756c742f696d616765732f7365617263682e6769665c22202f3ee380800d0a5b3c6120687265663d5c225b212d2d6e6577732e75726c2d2d5d652f446f496e666f2f4368616e6765436c6173732e7068703f6d69643d385c22207461726765743d5c225f626c616e6b5c223ee58f91e5b883e4bfa1e681af3c2f613e5d3c2f74643e0d0a3c2f74723e0d0a3c2f7461626c653e0d0a3c2f666f726d3e3c2f74643e0d0a3c2f74723e0d0a3c2f7461626c653e0d0a3c7461626c652077696474683d5c22313030255c2220626f726465723d5c22305c222063656c6c73706163696e673d5c22305c222063656c6c70616464696e673d5c22305c2220636c6173733d5c227469746c655c223e0d0a3c74723e0d0a3c74643e3c7374726f6e673ee59cb0e58cbae5afbce888aa3c2f7374726f6e673e3c2f74643e0d0a3c2f74723e0d0a3c2f7461626c653e0d0a3c7461626c652077696474683d5c22313030255c2220626f726465723d5c22305c222063656c6c73706163696e673d5c22305c222063656c6c70616464696e673d5c22305c2220636c6173733d5c22626f785c223e0d0a3c74723e0d0a3c74643e5b212d2d74656d702e696e666f617265612d2d5d3c2f74643e0d0a3c2f74723e0d0a3c2f7461626c653e0d0a3c7461626c652077696474683d5c22313030255c2220626f726465723d5c22305c222063656c6c73706163696e673d5c22305c222063656c6c70616464696e673d5c22305c2220636c6173733d5c227469746c65206d617267696e5f746f705c223e0d0a3c74723e0d0a3c74643e3c7374726f6e673ee58886e7b1bbe5afbce888aa3c2f7374726f6e673e3c2f74643e0d0a3c2f74723e0d0a3c2f7461626c653e0d0a3c7461626c652077696474683d5c22313030255c2220626f726465723d5c22305c222063656c6c73706163696e673d5c22305c222063656c6c70616464696e673d5c22305c2220636c6173733d5c22626f785c223e0d0a3c74723e0d0a3c74643e5b212d2d74656d702e696e666f636c6173736e61762d2d5d3c2f74643e0d0a3c2f74723e0d0a3c2f7461626c653e0d0a3c7461626c652077696474683d5c22313030255c2220626f726465723d5c22305c222063656c6c73706163696e673d5c22305c222063656c6c70616464696e673d5c22305c2220636c6173733d5c227469746c65206d617267696e5f746f705c223e0d0a3c74723e0d0a3c74643e3c7374726f6e673ee783ade997a8e782b9e587bb3c2f7374726f6e673e3c2f74643e0d0a3c2f74723e0d0a3c2f7461626c653e0d0a3c7461626c652077696474683d5c22313030255c2220626f726465723d5c22305c222063656c6c73706163696e673d5c22305c222063656c6c70616464696e673d5c22305c2220636c6173733d5c22626f785c223e0d0a3c74723e0d0a3c74643e3c6f6c20636c6173733d5c2272616e6b5c223e0d0a5b65636d73696e666f5d5c2773656c66696e666f5c272c31302c34302c302c312c31302c305b2f65636d73696e666f5d200d0a3c2f6f6c3e3c2f74643e0d0a3c2f74723e0d0a3c2f7461626c653e3c2f74643e0d0a3c2f74723e0d0a3c2f7461626c653e0d0a5b212d2d74656d702e666f6f7465722d2d5d0d0a3c2f626f64793e0d0a3c2f68746d6c3e,'0');");

@include("../../inc/footer.php");
?>