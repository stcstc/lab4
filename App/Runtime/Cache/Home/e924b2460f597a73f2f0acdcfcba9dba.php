<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>教师预约系统</title>
 
	<style type="text/css">
	*{ padding: 0; margin: 0;font-size:16px; font-family: "微软雅黑"} 
	div{ padding: 3px 20px;} 
	body{
	background: #fff;
	color: #333;
	background-color: #99CCFF;
	background-image: url();
}
	h2{font-size:36px}
	h3{font-size:36px;font-weight:normal}
	a{text-decoration:none; color:#174B73; border-bottom:1px dashed gray}
	a:hover{color:#00FF00; border-bottom:1px dashed gray}
	div.result{border:1px solid #d4d4d4; background:#FFC;color:#393939; padding:8px 20px;float:auto;margin:2px}
	body,td,th {
	color: #0000FF;
	font-weight: bold;
}
a:link {
	color: #00CCCC;
}
a:visited {
	color: #FF0000;
}
a:active {
	color: #99CC99;
}
.STYLE2 {
	font-size: xx-large;
	color: #CC0033;
}
    </style>
 </head>
  
  
 
  <body bgcolor="#d0d0d0">
 <div class="main" style="background:green;float:left;width:30%">>
 <h2>教师预约系统</h2>
 <table cellpadding=2 cellspacing=2>
  <tr>
  <td></td>
  <td></td>
  <td></td>
	<td><div id="list" ></div>
	<td></td>
	
		<H3>[ <A href="<?php echo U('Admin/Public/login');?>">后台管理</a> ]</H3> 
	</td>
  </tr>
 </table>
 
 -------------------------------------------------------------------------<br>
 
 
</head>
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


 
</div>
<div style="background:white;float:left;width:60%">
<body>
  <p><img src="__PUBLIC__/Images/1.jpg" width="434" height="300"><span class="STYLE2">出品人6051</span></p>
  <p><a href="拖动到一个文件以创建链接"><img src="__PUBLIC__/Images/2.jpg" width="259" height="333" border="0" usemap="#Map">
<map name="Map"><area shape="circle" coords="115,271,47" href="home/Index/joinin" target="_top">
</map></a></p>
  </body></div>
 </body>
</html>