<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><table width=100% align=center cellpadding=3 cellspacing=1 class="tableborder"><tr>
    <td width=16% height=25 bgcolor=ffffff>信息标题(*)</td>
    <td bgcolor=ffffff><input name="title" type="text" size="42" value="<?=$ecmsfirstpost==1?"":DoReqValue($mid,'title',stripSlashes($r[title]))?>">
</td></tr><tr>
    <td width=16% height=25 bgcolor=ffffff>信息内容(*)</td>
    <td bgcolor=ffffff><textarea name="smalltext" cols="60" rows="10" id="smalltext"><?=$ecmsfirstpost==1?"":DoReqValue($mid,'smalltext',stripSlashes($r[smalltext]))?></textarea>
</td></tr><tr><td width=16% height=25 bgcolor=ffffff>图片</td><td bgcolor=ffffff><input type="file" name="titlepicfile" size="45">
</td></tr><tr>
    <td width=16% height=25 bgcolor=ffffff>所在地(*)</td>
    <td bgcolor=ffffff><select name="myarea" id="myarea"><option value="其它"<?=$r[myarea]=="其它"||$ecmsfirstpost==1?' selected':''?>>其它</option><option value="东城区"<?=$r[myarea]=="东城区"?' selected':''?>>东城区</option><option value="西城区"<?=$r[myarea]=="西城区"?' selected':''?>>西城区</option><option value="崇文区"<?=$r[myarea]=="崇文区"?' selected':''?>>崇文区</option><option value="宣武区"<?=$r[myarea]=="宣武区"?' selected':''?>>宣武区</option><option value="朝阳区"<?=$r[myarea]=="朝阳区"?' selected':''?>>朝阳区</option><option value="海淀区"<?=$r[myarea]=="海淀区"?' selected':''?>>海淀区</option><option value="丰台区"<?=$r[myarea]=="丰台区"?' selected':''?>>丰台区</option><option value="石景山区"<?=$r[myarea]=="石景山区"?' selected':''?>>石景山区</option><option value="通州区"<?=$r[myarea]=="通州区"?' selected':''?>>通州区</option><option value="昌平区"<?=$r[myarea]=="昌平区"?' selected':''?>>昌平区</option><option value="大兴区"<?=$r[myarea]=="大兴区"?' selected':''?>>大兴区</option></select></td></tr><tr>
    <td width=16% height=25 bgcolor=ffffff>联系邮箱(*)</td>
    <td bgcolor=ffffff>[!--email--]</td></tr><tr><td width=16% height=25 bgcolor=ffffff>站长QQ</td><td bgcolor=ffffff>
<input name="QQ" type="text" id="QQ" value="<?=$ecmsfirstpost==1?"":DoReqValue($mid,'QQ',stripSlashes($r[QQ]))?>" size="46">
</td></tr><tr><td width=16% height=25 bgcolor=ffffff>联系地址</td><td bgcolor=ffffff>[!--address--]</td></tr></table>