<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>教师预约系统</title>
 </head>

 <div class="main" style="background:green;float:left;width:30%">
 <h2>教师预约系统</h2>
</head>

<body>

<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="521" height="294" id="FLVPlayer">
  <param name="movie" value="FLVPlayer_Progressive.swf" />
  <param name="quality" value="high" />
  <param name="wmode" value="opaque" />
  <param name="scale" value="noscale" />
  <param name="salign" value="lt" />
  <param name="FlashVars" value="&amp;MM_ComponentVersion=1&amp;skinName=Clear_Skin_1&amp;streamName=1&amp;autoPlay=true&amp;autoRewind=true" />
  <param name="swfversion" value="8,0,0,0" />
  <!-- 此 param 标签提示使用 Flash Player 6.0 r65 和更高版本的用户下载最新版本的 Flash Player。如果您不想让用户看到该提示，请将其删除。 -->
  <param name="expressinstall" value="Scripts/expressInstall.swf" />
  <!-- 下一个对象标签用于非 IE 浏览器。所以使用 IECC 将其从 IE 隐藏。 -->
  <!--[if !IE]>-->
  <object type="application/x-shockwave-flash" data="FLVPlayer_Progressive.swf" width="521" height="294">
    <!--<![endif]-->
    <param name="quality" value="high" />
    <param name="wmode" value="opaque" />
    <param name="scale" value="noscale" />
    <param name="salign" value="lt" />
    <param name="FlashVars" value="&amp;MM_ComponentVersion=1&amp;skinName=Clear_Skin_1&amp;streamName=1&amp;autoPlay=true&amp;autoRewind=true" />
    <param name="swfversion" value="8,0,0,0" />
    <param name="expressinstall" value="Scripts/expressInstall.swf" />
    <!-- 浏览器将以下替代内容显示给使用 Flash Player 6.0 和更低版本的用户。 -->
    <div>
      <h4>此页面上的内容需要较新版本的 Adobe Flash Player。</h4>
      <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="获取 Adobe Flash Player" /></a></p>
    </div>
    <!--[if !IE]>-->
  </object>
  <!--<![endif]-->
</object>

<script type="text/javascript">
swfobject.registerObject("FLVPlayer");
</script>

</body>



<body onLoad="document.login.account.focus()" >
<form method='post' name="login"  ACTION="/index.php/home/Index/joinin">
<div class="tCenter hMargin">
<table id="checkList" class="login shadow" cellpadding=0 cellspacing=0 >
<tr><td height="3" colspan="2" class="topTd" ></td></tr>
<tr class="row" ><Th colspan="2" class="tCenter space" ><img src="__PUBLIC__/Images/preview_f2.png" width="32" height="32" border="0" alt="" align="absmiddle"> 我要学习！！</th></tr>
<tr><td height="3" colspan="2" class="topTd" ></td></tr>
<tr class="row" ><td class="tRight" width="25%">帐 号：</td><td><input type="text" class="medium bLeftRequire" check="Require" warning="请输入帐号" name="student"></td></tr>
<tr class="row" ><td class="tRight">密 码：</td><td><input type="password" class="medium bLeftRequire" check="Require" warning="请输入密码" name="mima"></td></tr>
<tr class="row" ><td class="tCenter" align="justify" colspan="2">
<input type="submit" value="学 生 注 册" class="submit medium hMargin">
</td></tr>
<tr><td height="3" colspan="2" class="bottomTd" ></td></tr>
</table>
</div>
</form>
</body>


<body onLoad="document.login.account.focus()" >
<form method='post' name="login"  ACTION="/index.php/home/Index/joinintr">
<div class="tCenter hMargin">
<table id="checkList" class="login shadow" cellpadding=0 cellspacing=0 >
<tr><td height="3" colspan="2" class="topTd" ></td></tr>
<tr class="row" ><Th colspan="2" class="tCenter space" ><img src="__PUBLIC__/Images/preview_f2.png" width="32" height="32" border="0" alt="" align="absmiddle">我要加入！！</th></tr>
<tr><td height="3" colspan="2" class="topTd" ></td></tr>
<tr class="row" ><td class="tRight" width="25%">帐 号：</td><td><input type="text" class="medium bLeftRequire" check="Require" warning="请输入帐号" name="teacher"></td></tr>
<tr class="row" ><td class="tRight">密 码：</td><td><input type="password" class="medium bLeftRequire" check="Require" warning="请输入密码" name="mima"></td></tr>
<tr class="row" ><td class="tCenter" align="justify" colspan="2">
<input type="submit" value="教 师 注 册" class="submit medium hMargin">
</td></tr>
<tr><td height="3" colspan="2" class="bottomTd" ></td></tr>
</table>
</div>
</form>
</body>


<body onLoad="document.login.account.focus()" >
<form method='post' name="login"  ACTION="/index.php/home/Index/login">
<div class="tCenter hMargin">
<table id="checkList" class="login shadow" cellpadding=0 cellspacing=0 >
<tr><td height="3" colspan="2" class="topTd" ></td></tr>
<tr class="row" ><Th colspan="2" class="tCenter space" ><img src="__PUBLIC__/Images/preview_f2.png" width="32" height="32" border="0" alt="" align="absmiddle">有事找老师</th></tr>
<tr><td height="3" colspan="2" class="topTd" ></td></tr>
<tr class="row" ><td class="tRight" width="25%">帐 号：</td><td><input type="text" class="medium bLeftRequire" check="Require" warning="请输入帐号" name="student"></td></tr>
<tr class="row" ><td class="tRight">密 码：</td><td><input type="password" class="medium bLeftRequire" check="Require" warning="请输入密码" name="password"></td></tr>
<tr class="row" ><td class="tCenter" align="justify" colspan="2">
<input type="submit" value="学 生 登 录" class="submit medium hMargin">
</td></tr>
<tr><td height="3" colspan="2" class="bottomTd" ></td></tr>
</table>
</div>
</form>
</body>


<body onLoad="document.login.account.focus()" >
<form method='post' name="login"  ACTION="/index.php/home/Index/logintr">
<div class="tCenter hMargin">
<table id="checkList" class="login shadow" cellpadding=0 cellspacing=0 >
<tr><td height="3" colspan="2" class="topTd" ></td></tr>
<tr class="row" ><Th colspan="2" class="tCenter space" ><img src="__PUBLIC__/Images/preview_f2.png" width="32" height="32" border="0" alt="" align="absmiddle">没事来约我</th></tr>
<tr><td height="3" colspan="2" class="topTd" ></td></tr>
<tr class="row" ><td class="tRight" width="25%">帐 号：</td><td><input type="text" class="medium bLeftRequire" check="Require" warning="请输入帐号" name="teacher"></td></tr>
<tr class="row" ><td class="tRight">密 码：</td><td><input type="password" class="medium bLeftRequire" check="Require" warning="请输入密码" name="password"></td></tr>
<tr class="row" ><td class="tCenter" align="justify" colspan="2">
<input type="submit" value="教 师 登 录" class="submit medium hMargin">
</td></tr>
<tr><td height="3" colspan="2" class="bottomTd" ></td></tr>
</table>
</div>
</form>
</body>
</html>