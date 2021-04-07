<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `zmb_enewsfeedbackclass`;");
E_C("CREATE TABLE `zmb_enewsfeedbackclass` (
  `bid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `bname` varchar(60) NOT NULL DEFAULT '',
  `btemp` mediumtext NOT NULL,
  `bzs` varchar(255) NOT NULL DEFAULT '',
  `enter` text NOT NULL,
  `mustenter` text NOT NULL,
  `filef` varchar(255) NOT NULL DEFAULT '',
  `groupid` smallint(6) NOT NULL DEFAULT '0',
  `checkboxf` text NOT NULL,
  `usernames` text NOT NULL,
  PRIMARY KEY (`bid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `zmb_enewsfeedbackclass` values('1',0xe9bb98e8aea4e58f8de9a688e58886e7b1bb,0x3c68746d6c3e0d0a3c686561643e0d0a3c6d65746120636861727365743d5c227574662d385c22202f3e0d0a3c7469746c653ee7bd91e7ab99e68f90e4baa4202d20e788b1e7ab99e5afbce888aae7bd913c2f7469746c653e0d0a3c6d657461206e616d653d5c226b6579776f7264735c2220636f6e74656e743d5c22e788b1e7ab99e5afbce888aae7bd912ce79fa5e5908de590a7e5afbce888aa2c5151e68a80e69cafe5afbce888aa2ce5afbce888aae5a4a9e4b88b2ce68a80e69cafe5afbce888aa2ce5a8b1e4b990e7bd912ce5b08fe58880e5a8b1e4b990e7bd912ce788b1512c5151e68a80e69caf2c5151e5afbce888aa2ce5b08fe9bb91e5b18be5afbce888aae7bd915c222f3e0d0a3c6d657461206e616d653d5c226465736372697074696f6e5c2220636f6e74656e743d5c22e788b1e7ab99e5afbce888aae7bd91e694b6e5bd95e59bbde58685e9a696e5b188e4b880e68c87e79a84e79fa5e5908de7bd91e7ab99e5b9b3e58fb0efbc8ce7ab99e782b9e5b7b2e7b4afe8aea1e694b6e5bd95e695b0e58d83e7bd91e7ab99efbc8ce7b4afe8aea1e4b8bae4b8ade59bbde7bd91e6b091e68f90e4be9be5a49ae8bebee695b0e4babfe79a84e8aebfe997aee782b9e587bbefbc8ce6bba1e8b6b3e794a8e688b7e99a8fe697b6e69fa5e99885e69c80e585a8e99da2e69c80e69d83e5a881e79a84e69687e7aba0e8b584e8aeafe69599e7a88b5c222f3e0d0a202020203c6d657461206e616d653d5c2272656e64657265725c2220636f6e74656e743d5c227765626b69745c22202f3e0d0a202020203c6d65746120687474702d65717569763d5c22582d55412d436f6d70617469626c655c2220636f6e74656e743d5c2249453d656467655c223e0d0a202020203c6c696e6b2072656c3d5c2269636f6e5c2220687265663d5c222f66617669636f6e2e69636f5c2220747970653d5c22696d6167652f782d69636f6e5c222f3e0d0a202020203c6c696e6b2072656c3d5c227374796c6573686565745c2220687265663d5c222f736b696e732f6c616e2f4373732f7868776468776c617975692e6373735c2220747970653d5c22746578742f6373735c22202f3e0d0a202020203c6c696e6b2072656c3d5c227374796c6573686565745c2220687265663d5c222f736b696e732f6c616e2f4373732f7868776468777075626c69632e6373735c2220747970653d5c22746578742f6373735c22202f3e0d0a202020203c6c696e6b2072656c3d5c227374796c6573686565745c2220687265663d5c222f736b696e732f6c616e2f4373732f7868776468776c6973742e6373735c2220747970653d5c22746578742f6373735c222f3e0d0a202020203c212d2d5b6966206c746520494520385d3e0d0a202020203c7363726970743e206c6f636174696f6e203d205c222f69652e68746d6c3f75726c3d5c22202b20656e636f6465555249436f6d706f6e656e74286c6f636174696f6e2e68726566293b203c2f7363726970743e0d0a202020203c215b656e6469665d2d2d3e0d0a3c2f686561643e0d0a3c626f6479207374796c653d5c226261636b67726f756e643a236666665c223e0d0a5b212d2d74656d702e6865616465722d2d5d0d0a3c2f6469763e0d0a3c6c696e6b2072656c3d5c227374796c6573686565745c2220687265663d5c222f736b696e732f4373732f777a746a2e6373735c22202f3e0d0a3c64697620636c6173733d5c2262675c223e0d0a3c64697620636c6173733d5c2262675f6c6f676f5c223e3c2f6469763e0d0a3c2f6469763e0d0a3c64697620636c6173733d5c2274696a69616f5c223e0d0a20203c666f726d206e616d653d5c27666565646261636b5c27206d6574686f643d5c27706f73745c2720656e63747970653d5c276d756c7469706172742f666f726d2d646174615c2720616374696f6e3d5c272e2e2f2e2e2f656e6577732f696e6465782e7068705c273e0d0a202020203c696e707574206e616d653d5c27656e6577735c2720747970653d5c2768696464656e5c272076616c75653d5c27416464466565646261636b5c273e0d0a3c703ee7bd91e7ab99e5908de7a7b0efbc9a3c696e707574206e616d653d5c277469746c655c2720747970653d5c27746578745c272073697a653d5c2734325c2720636c6173733d5c2262645c223e3c2f703e0d0a3c703ee7bd91e7ab99e59cb0e59d80efbc9a3c696e707574206e616d653d5c27686f6d65706167655c2720747970653d5c27746578745c272073697a653d5c2734325c2720636c6173733d5c2262645c223e3c2f703e0d0a3c703ee682a8e79a84e982aee7aeb1efbc9a3c696e707574206e616d653d5c27656d61696c5c2720747970653d5c27746578745c272073697a653d5c2734325c2720636c6173733d5c2262645c223e3c2f703e0d0a3c703ee5ae89e585a8e8aea4e8af81efbc9a3c696e70757420747970653d74657874206e616d653d6b65792073697a653d3620636c6173733d5c2262645c22207374796c653d5c2277696474683a2032393670783b5c223e3c696d67207374796c653d5c226865696768743a20343070783b5c227372633d5c225b212d2d6e6577732e75726c2d2d5d652f53686f774b65792f3f763d666565646261636b5c2220616c69676e3d5c226162736d6964646c655c222069643d5c2266624b6579496d675c22206f6e636c69636b3d5c2266624b6579496d672e7372633d5c275b212d2d6e6577732e75726c2d2d5d652f53686f774b65792f3f763d666565646261636b26743d5c272b4d6174682e72616e646f6d28295c22207469746c653d5c22e79c8be4b88de6b885e6a59a2ce782b9e587bbe588b7e696b05c22202f3e3c2f703e0d0a3c703e3c7370616e20636c6173733d5c2277625c223ee7ab99e995bfe79599e8a880efbc9a3c2f7370616e3e3c7465787461726561206e616d653d5c27736179746578745c2720636f6c733d5c2736305c2720726f77733d5c2731325c2720636c6173733d5c2262645c22207374796c653d5c22706f736974696f6e3a72656c61746976653b6c6566743a383570783b6865696768743a31303070783b5c223e3c2f74657874617265613e203c2f703e0d0a3c64697620636c6173733d5c22616e5c223e3c696e70757420747970653d5c277375626d69745c27206e616d653d5c277375626d69745c272076616c75653d5c27e68f90e4baa4e694b6e5bd955c2720636c6173733d5c22616e315c223e3c2f6469763e0d0a20203c2f666f726d3e0d0a3c64697620636c6173733d5c22746a5c223e0d0a0909090909090931e38081e799bee5baa6e69d83e9878d31e4bba5e4b88aefbc8ce697a5e6b581e9878f313030304950e4bba5e4b88a3c6272202f3e0d0a0909090909090932e38081e6ada3e8a784e7bd91e7ab99efbc8ce4b88de8bf9de58f8de6b395e5be8be79a843c6272202f3e0d0a0909090909090933e38081e5b7b2e5b086e788b1e7ab99e5afbce888aae7bd91287777772e697a6468772e636f6d29e6b7bbe58aa0e58f8be993bee79a843c6272202f3e0d0a0909090909090934e38081e4b88de883bde698afe696b0e7bd91e7ab99efbc8ce7bd91e7ab99e58685e5aeb9e4b99fe4b88de883bde4b88de5ae8ce596843c6272202f3e0d0a0909090909090935e38081e689bfe8aea4e887aae5b7b1e6b2a1e69c89e7ab99e995bfe5b885e79a843c6272202f3e0d0a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202036e38081e79e8ee5a1abe880852ce79bb4e68ea5e5b0814950e6aeb52ce8afb7e8aea4e79c9fe5a1abe58699e58685e5aeb93c6272202f3e0d0a3c6120687265663d5c222f61645c22207469746c653d5c22e5b9bfe5918ae68a95e694be5c223e3c696d67207374796c653d5c2277696474683a313030253b5c22207372633d5c2268747470733a2f2f7777312e73696e61696d672e636e2f6c617267652f3030354259717067677931667964676470746230666a333038633032696d77792e6a70675c223e3c2f613e0d0a0d0a3c2f6469763e0d0a3c2f6469763e0d0a5b212d2d74656d702e666f6f7465722d2d5d0d0a3c212d2de799bee5baa6e887aae58aa8e68f90e4baa42d2d3e0d0a3c7363726970743e0d0a2866756e6374696f6e28297b0d0a20202020766172206270203d20646f63756d656e742e637265617465456c656d656e74285c277363726970745c27293b0d0a202020207661722063757250726f746f636f6c203d2077696e646f772e6c6f636174696f6e2e70726f746f636f6c2e73706c6974285c273a5c27295b305d3b0d0a202020206966202863757250726f746f636f6c203d3d3d205c2768747470735c2729207b0d0a202020202020202062702e737263203d205c2768747470733a2f2f7a7a2e62647374617469632e636f6d2f6c696e6b7375626d69742f707573682e6a735c273b0d0a202020207d0d0a20202020656c7365207b0d0a202020202020202062702e737263203d205c27687474703a2f2f707573682e7a68616e7a68616e672e62616964752e636f6d2f707573682e6a735c273b0d0a202020207d0d0a202020207661722073203d20646f63756d656e742e676574456c656d656e747342795461674e616d65285c227363726970745c22295b305d3b0d0a20202020732e706172656e744e6f64652e696e736572744265666f72652862702c2073293b0d0a7d2928293b0d0a3c2f7363726970743e0d0a0d0a3c212d2de7bb9fe8aea12d2d3e0d0a3c7363726970743e0d0a766172205f686d74203d205f686d74207c7c205b5d3b0d0a2866756e6374696f6e2829207b0d0a202076617220686d203d20646f63756d656e742e637265617465456c656d656e74285c227363726970745c22293b0d0a2020686d2e737263203d205c2268747470733a2f2f686d2e62616964752e636f6d2f686d2e6a733f61346236336466343933643863326230333634666630623833376430393666625c223b0d0a20207661722073203d20646f63756d656e742e676574456c656d656e747342795461674e616d65285c227363726970745c22295b305d3b200d0a2020732e706172656e744e6f64652e696e736572744265666f726528686d2c2073293b0d0a7d2928293b0d0a3c2f7363726970743e0d0a0d0a3c212d2de6a8a1e69dbfe58cbae59f9fe7bb93e69d9f2d2d3e0d0a3c2f626f64793e0d0a3c2f68746d6c3e,'',0xe682a8e79a84e982aee7aeb13c212d2d6669656c642d2d2d3e656d61696c3c212d2d7265636f72642d2d3ee7bd91e7ab99e59cb0e59d803c212d2d6669656c642d2d2d3e686f6d65706167653c212d2d7265636f72642d2d3ee7bd91e7ab99e5908de7a7b03c212d2d6669656c642d2d2d3e7469746c653c212d2d7265636f72642d2d3ee7ab99e995bfe79599e8a8803c212d2d6669656c642d2d2d3e736179746578743c212d2d7265636f72642d2d3e,0x2c686f6d65706167652c7469746c652c736179746578742c,0x2c,'0',0x2c,'');");

@include("../../inc/footer.php");
?>