<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><table width='100%' align=center cellpadding=3 cellspacing=1 bgcolor='#DBEAF5'><tr><td width='16%' height=25 bgcolor='ffffff'>站点名称</td><td bgcolor='ffffff'><table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#DBEAF5">
<tr> 
  <td height="25" bgcolor="#FFFFFF">
	<?=$tts?"<select name='ttid'><option value='0'>标题分类</option>$tts</select>":""?>
	<input type=text name=title value="<?=ehtmlspecialchars(stripSlashes($r[title]))?>" size="60"> 
	<input type="button" name="button" value="图文" onclick="document.add.title.value=document.add.title.value+'(图文)';"> 
  </td>
</tr>
<tr> 
  <td height="25" bgcolor="#FFFFFF">属性: 
	<input name="titlefont[b]" type="checkbox" value="b"<?=$titlefontb?>>粗体
	<input name="titlefont[i]" type="checkbox" value="i"<?=$titlefonti?>>斜体
	<input name="titlefont[s]" type="checkbox" value="s"<?=$titlefonts?>>删除线
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;颜色: <input name="titlecolor" type="text" value="<?=stripSlashes($r[titlecolor])?>" size="10" class="color">
  </td>
</tr>
</table>
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>网站地址</td><td bgcolor='ffffff'>
<input name="url" type="text" id="url" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[url]))?>" size="60">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>网站ICO</td><td bgcolor='ffffff'>
<input name="ico" type="text" id="ico" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[ico]))?>" size="60">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>副标题</td><td bgcolor='ffffff'>
<input name="namefu" type="text" id="namefu" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[namefu]))?>" size="60">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>特殊属性</td><td bgcolor='ffffff'>
<table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#DBEAF5">
  <tr>
    <td height="25" bgcolor="#FFFFFF">信息属性: 
      <input name="checked" type="checkbox" value="1"<?=$r[checked]?' checked':''?>>
      审核 &nbsp;&nbsp; 推荐 
      <select name="isgood" id="isgood">
        <option value="0">不推荐</option>
	<?=$ftnr['igname']?>
      </select>
      &nbsp;&nbsp; 头条 
      <select name="firsttitle" id="firsttitle">
        <option value="0">非头条</option>
	<?=$ftnr['ftname']?>
      </select></td>
  </tr>
  <tr> 
    <td height="25" bgcolor="#FFFFFF">关键字&nbsp;&nbsp;&nbsp;: 
      <input name="keyboard" type="text" size="52" value="<?=stripSlashes($r[keyboard])?>">
      <font color="#666666">(多个请用&quot;,&quot;隔开)</font></td>
  </tr>
  <tr> 
    <td height="25" bgcolor="#FFFFFF">外部链接: 
      <input name="titleurl" type="text" value="<?=stripSlashes($r[titleurl])?>" size="52">
      <font color="#666666">(填写后信息连接地址将为此链接)</font></td>
  </tr>
</table>
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>网站LOGO</td><td bgcolor='ffffff'><input name="titlepic" type="text" id="titlepic" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[titlepic]))?>" size="45">
<a onclick="window.open('ecmseditor/FileMain.php?type=1&classid=<?=$classid?>&infoid=<?=$id?>&filepass=<?=$filepass?>&sinfo=1&doing=1&field=titlepic<?=$ecms_hashur[ehref]?>','','width=700,height=550,scrollbars=yes');" title="选择已上传的图片"><img src="../data/images/changeimg.gif" border="0" align="absbottom"></a> 
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>发布时间</td><td bgcolor='ffffff'><input name="newstime" type="text" value="<?=$r[newstime]?>" size="28" class="Wdate" onClick="WdatePicker({skin:'default',dateFmt:'yyyy-MM-dd HH:mm:ss'})"><input type=button name=button value="设为当前时间" onclick="document.add.newstime.value='<?=$todaytime?>'">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>信息内容</td><td bgcolor='ffffff'><textarea name="smalltext" cols="80" rows="10" id="smalltext"><?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[smalltext]))?></textarea>
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>网站权重 </td><td bgcolor='ffffff'><select name="zhong" id="zhong"><option value="1"<?=$r[zhong]=="1"||$ecmsfirstpost==1?' selected':''?>>1</option><option value="2"<?=$r[zhong]=="2"?' selected':''?>>2</option><option value="3"<?=$r[zhong]=="3"?' selected':''?>>3</option><option value="4"<?=$r[zhong]=="4"?' selected':''?>>4</option><option value="5"<?=$r[zhong]=="5"?' selected':''?>>5</option><option value="6"<?=$r[zhong]=="6"?' selected':''?>>6</option><option value="7"<?=$r[zhong]=="7"?' selected':''?>>7</option><option value="8"<?=$r[zhong]=="8"?' selected':''?>>8</option><option value="9"<?=$r[zhong]=="9"?' selected':''?>>9</option><option value="10"<?=$r[zhong]=="10"?' selected':''?>>10</option></select></td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>特别推荐</td><td bgcolor='ffffff'><select name="tebie" id="tebie"><option value="未推荐"<?=$r[tebie]=="未推荐"||$ecmsfirstpost==1?' selected':''?>>未推荐</option><option value="已推荐"<?=$r[tebie]=="已推荐"?' selected':''?>>已推荐</option></select></td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>所在地</td><td bgcolor='ffffff'><select name="myarea" id="myarea"><option value="其它"<?=$r[myarea]=="其它"||$ecmsfirstpost==1?' selected':''?>>其它</option><option value="东城区"<?=$r[myarea]=="东城区"?' selected':''?>>东城区</option><option value="西城区"<?=$r[myarea]=="西城区"?' selected':''?>>西城区</option><option value="崇文区"<?=$r[myarea]=="崇文区"?' selected':''?>>崇文区</option><option value="宣武区"<?=$r[myarea]=="宣武区"?' selected':''?>>宣武区</option><option value="朝阳区"<?=$r[myarea]=="朝阳区"?' selected':''?>>朝阳区</option><option value="海淀区"<?=$r[myarea]=="海淀区"?' selected':''?>>海淀区</option><option value="丰台区"<?=$r[myarea]=="丰台区"?' selected':''?>>丰台区</option><option value="石景山区"<?=$r[myarea]=="石景山区"?' selected':''?>>石景山区</option><option value="通州区"<?=$r[myarea]=="通州区"?' selected':''?>>通州区</option><option value="昌平区"<?=$r[myarea]=="昌平区"?' selected':''?>>昌平区</option><option value="大兴区"<?=$r[myarea]=="大兴区"?' selected':''?>>大兴区</option></select></td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>联系方式</td><td bgcolor='ffffff'>
<input name="QQ" type="text" id="QQ" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[QQ]))?>" size="46">
</td></tr></table>