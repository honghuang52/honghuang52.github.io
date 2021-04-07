<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>标题正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--title--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_title]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_title]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_title]" type="text" id="add[z_title]" value="<?=stripSlashes($r[z_title])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>发布时间正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--newstime--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_newstime]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_newstime]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_newstime]" type="text" id="add[z_newstime]" value="<?=stripSlashes($r[z_newstime])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>信息内容正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--smalltext--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_smalltext]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_smalltext]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_smalltext]" type="text" id="add[z_smalltext]" value="<?=stripSlashes($r[z_smalltext])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>特别推荐正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--tebie--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_tebie]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_tebie]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_tebie]" type="text" id="add[z_tebie]" value="<?=stripSlashes($r[z_tebie])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>网站权重 正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--zhong--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_zhong]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_zhong]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_zhong]" type="text" id="add[z_zhong]" value="<?=stripSlashes($r[z_zhong])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>网站地址正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--url--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_url]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_url]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_url]" type="text" id="add[z_url]" value="<?=stripSlashes($r[z_url])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>副标题正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--namefu--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_namefu]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_namefu]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_namefu]" type="text" id="add[z_namefu]" value="<?=stripSlashes($r[z_namefu])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>网站ICO正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--ico--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_ico]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_ico]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_ico]" type="text" id="add[z_ico]" value="<?=stripSlashes($r[z_ico])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>图片正则：</strong><br>
      ( 
      <input name="textfield" type="text" id="textfield" value="[!--titlepic--]" size="20">
      )</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
    <tr>
      <td>附件前缀 
        <input name="add[qz_titlepic]" type="text" id="add[qz_titlepic]" value="<?=stripSlashes($r[qz_titlepic])?>"> 
        <input name="add[save_titlepic]" type="checkbox" id="add[save_titlepic]" value=" checked"<?=$r[save_titlepic]?>>
        远程保存 </td>
    </tr>
    <tr> 
      <td><textarea name="add[zz_titlepic]" cols="60" rows="10" id="add[zz_titlepic]"><?=ehtmlspecialchars(stripSlashes($r[zz_titlepic]))?></textarea></td>
    </tr>
    <tr> 
      <td><input name="add[z_titlepic]" type="text" id="titlepic5" value="<?=stripSlashes($r[z_titlepic])?>">
        (如填写这里，这就是字段的值)</td>
    </tr>
  </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>所在地正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--myarea--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_myarea]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_myarea]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_myarea]" type="text" id="add[z_myarea]" value="<?=stripSlashes($r[z_myarea])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>联系方式正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--QQ--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_QQ]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_QQ]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_QQ]" type="text" id="add[z_QQ]" value="<?=stripSlashes($r[z_QQ])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>
